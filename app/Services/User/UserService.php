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
        
        return true;
    }

    public function sendVerificationCode($phoneNumber)
    {




        return true;
    }

}