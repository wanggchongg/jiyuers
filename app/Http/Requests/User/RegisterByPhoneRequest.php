<?php
/**
 * Created by PhpStorm.
 * User: summerctang
 * Date: 2017/10/28
 * Time: 23:51
 */

namespace App\Http\Requests\User;

use App\Http\Requests\BaseRequest;

class RegisterByPhoneRequest extends BaseRequest
{
    public function getPhoneNumber()
    {
        return $this->get('phoneNumber');
    }

    public function getVCode()
    {
        return $this->get('vCode');
    }

    public function getPassword()
    {
        return $this->get('password');
    }

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'phoneNumber' => 'require|string',
            'vCode' => 'require|string',
            'password' => 'require|string',
        ];
    }
}