<?php

namespace CodeDelivery\Http\Middleware;

use Closure;
use CodeDelivery\Repositories\BlackListRepository;
use Illuminate\Support\Facades\Auth;

class CheckBlacklist
{
    /**
     * @var BlackListRepository
     */
    private $repository;

    public function __construct(BlackListRepository $repository)
    {

        $this->repository = $repository;
    }

    public function handle($request, Closure $next)
    {
        $blackLists = $this->repository->pluck();
        $userId = Auth::user()->id;
        $exist = 'false';
        foreach ($blackLists as $blacklist){
            if($userId == $blacklist->client_id){
                $exist = 'true';
            }
        }
        if($exist == 'false') {
            return $next($request);
        }else{
            return redirect()->route('customer.order.erro');
        }

    }
}
