<?php
/**
 * Created by PhpStorm.
 * User: summerctang
 * Date: 2017/10/29
 * Time: 1:45
 */

namespace App\Services\User;


use App\Services\BaseClass\AliYunSmsService;
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
        if (!$vCode) {
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

    /**
     * 发送随机验证码
     * @param $phoneNumber
     * @return \App\Services\BaseClass\stdClass
     */
    public function sendVerificationCode($phoneNumber)
    {
        $signName     = '数域';
        $templateCode = 'SMS_106965097';
        $params       = ['code' => $this->makeRandCode()];
        $data = AliYunSmsService::sendSms($signName, $templateCode, $phoneNumber, $params);
        return $data;
    }

    /**
     * 随机数生成器
     * @param int $length
     * @return string
     */
    private function makeRandCode($length = 6)
    {
        $randCode = '';
        $length = intval($length);
        while ($length--) {
            $randCode .= rand(0, 9);
        }
        return $randCode;
    }

}