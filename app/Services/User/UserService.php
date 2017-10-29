<?php
/**
 * Created by PhpStorm.
 * User: summerctang
 * Date: 2017/10/29
 * Time: 1:45
 */

namespace App\Services\User;


use App\Services\BaseService;
use App\Repositories\Interfaces\UserRepository;

class UserService extends BaseService
{
    private $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function registerByPhone($phoneNumber, $vCode, $password)
    {
        if () {
            throw new \Exception("", 40002);
        }
        if ($this->userRepository->isExistWithPhone($phoneNumber)) {
            throw new \Exception("", 40001);
        }
        $data = $this->userRepository->create([
            'phone' => $phoneNumber,
            'password' => password_hash($password, PASSWORD_DEFAULT),
        ]);
        return $data;
    }

    public function sendVerificationCode($phoneNumber)
    {
        return true;
    }

}