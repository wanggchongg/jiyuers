<?php
/**
 * Created by PhpStorm.
 * User: summerctang
 * Date: 2017/10/29
 * Time: 0:20
 */

namespace App\Models\Common;


class Judgement
{
    public $code;
    public $message;
    public $data;

    public function __construct($code, $message, $data)
    {
        $this->code = $code;
        $this->message = $message;
        $this->data = $data;
    }
}