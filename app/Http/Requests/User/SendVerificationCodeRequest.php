<?php
/**
 * Created by PhpStorm.
 * User: summerctang
 * Date: 2017/10/28
 * Time: 23:51
 */

namespace App\Http\Requests\User;

use App\Http\Requests\BaseRequest;

class SendVerificationCodeRequest extends BaseRequest
{
    public function getPhoneNumber()
    {
        return $this->get('phoneNumber');
    }

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'phoneNumber' => 'require|string',
        ];
    }
}