<?php

namespace CodeDelivery\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use CodeDelivery\Repositories\BlackListRepository;
use CodeDelivery\Models\BlackList;
use CodeDelivery\Validators\BlackListValidator;

/**
 * Class BlackListRepositoryEloquent
 * @package namespace CodeDelivery\Repositories;
 */
class BlackListRepositoryEloquent extends BaseRepository implements BlackListRepository
{
    public function pluck()
    {
        return $this->model->get(['id', 'client_id', 'reason']);
    }
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return BlackList::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
