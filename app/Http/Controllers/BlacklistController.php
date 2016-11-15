<?php

namespace CodeDelivery\Http\Controllers;

use CodeDelivery\Http\Requests;
use CodeDelivery\Http\Requests\AdminBlacklistRequest;
use CodeDelivery\Repositories\BlackListRepository;
use CodeDelivery\Repositories\UserRepository;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class BlacklistController extends Controller
{
    private $repository;
    /**
     * @var UserRepository
     */
    private $userRepository;


    public function __construct(BlackListRepository $repository, UserRepository $userRepository)
    {
        $this->repository = $repository;
        $this->userRepository = $userRepository;
    }

    public function index()
    {
        $blackLists = $this->repository->paginate(10);

        return view('admin.blacklists.index', compact('blackLists'));
    }

    public function create($id)
    {
        $clients = $this->userRepository->scopeQuery(function ($query) use($id){
            return $query->where('id', '=', $id);
        })->paginate()->toArray();
        return view('admin.blacklists.create', compact('clients'));
    }

    public function store(AdminBlacklistRequest $requests)
    {
        $data = $requests->all();
        $this->repository->create($data);
        return redirect()->route('admin.blacklists.index');


    }

    public function edit($id)
    {

        $blackList = $this->repository->find($id);
        $client_id = $blackList['client_id'];
        $clients = $this->userRepository->scopeQuery(function ($query) use($client_id){
            return $query->where('id', '=', $client_id);
        })->paginate()->toArray();
        return view('admin.blacklists.edit', compact('blackList', 'clients'));
    }

    public function update(AdminBlacklistRequest $requests, $id)
    {
        $data = $requests->all();
        $this->repository->update($data, $id);
        return redirect()->route('admin.blacklists.index');

    }

    public function destroy($id)
    {
        try {
            $this->repository->delete($id);

            return redirect()->route('admin.blacklists.index');
        } catch (Exception $e) {
            return back()->with('erro', 'Erro: Impossível excluir da lista negra!');
        }
    }

    public function reportBlacklist()
    {
        $blackLists = $this->repository->paginate();

        $pdf = app('dompdf.wrapper');
        $pdf->loadView('admin.blacklists.reports.blacklists', compact('blackLists'));
        return $pdf->stream();

    }
}
