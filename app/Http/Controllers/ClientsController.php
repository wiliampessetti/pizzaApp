<?php

namespace CodeDelivery\Http\Controllers;

use CodeDelivery\Http\Requests;
use CodeDelivery\Http\Requests\AdminClientRequest;
use CodeDelivery\Repositories\ClientRepository;
use CodeDelivery\Services\ClientService;
use Illuminate\Http\Request;

class ClientsController extends Controller
{
    private $repository;
    /**
     * @var ClientService
     */
    private $clientService;

    public function __construct(ClientRepository $repository, ClientService $clientService)
    {
        $this->repository = $repository;
        $this->clientService = $clientService;
    }

    public function index(){
    	$clients = $this->repository->paginate(10);

    	return view('admin.clients.index', compact('clients'));
    }

    public function create(){
    	return view('admin.clients.create');
    }

    public function store(AdminClientRequest $requests){
        $data = $requests->all();
        $data['user']['password'] = bcrypt($data['user']['password']);
        $this->clientService->create($data);
        return redirect()->route('admin.clients.index');
    }

    public function edit($id)
    {

        $client = $this->repository->find($id);

        return view('admin.clients.edit', compact('client'));
    }

    public function update(AdminClientRequest $requests, $id)
    {
        $data = $requests->all();
        $this->clientService->update($data, $id);
        return redirect()->route('admin.clients.index');
    }
}
