<?php
/**
 * Created by PhpStorm.
 * User: wiliam
 * Date: 07/09/16
 * Time: 20:28
 */

namespace CodeDelivery\Services;


use CodeDelivery\Repositories\ClientRepository;
use CodeDelivery\Repositories\UserRepository;

class ClientService
{

    public function __construct(ClientRepository $clientRepository, UserRepository $userRepository)
    {
        $this->clientRepository = $clientRepository;
        $this->userRepository = $userRepository;
    }

    public function update(array $data, $id)
    {
        $this->clientRepository->update($data, $id);

        $userId = $this->clientRepository->find($id, ['user_id'])->user_id;

        $this->userRepository->update($data['user'], $userId);
    }

    public function create(array $data)
    {
        $date['user']['password'] = bcrypt(123456);

        $user = $this->userRepository->create($data['user']);

        $data['user_id'] = $user->id;

        $this->clientRepository->create($data);

    }

}