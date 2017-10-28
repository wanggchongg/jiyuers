<?php
/**
 * Created by PhpStorm.
 * User: marlin
 * Date: 8/10/17
 * Time: 3:51 PM
 */

namespace App\Http\Requests;


use Illuminate\Foundation\Http\FormRequest;

abstract class BaseRequest extends FormRequest
{
    protected $jsonFields = [];
    /**
     * @var array $mappedFields mapped fields for transforming semantic params to CONSTANTS
     */
    protected $mappedFields = [];

    public function rules()
    {
        return [];
    }

    public function authorize()
    {
        $auth = auth()->user();
        if (!is_null($this->get('article_pool_ci', null))) {
            return true;
        }
        if (!is_null($auth->group) && !is_null($auth->username)) {
            return true;
        }

        return false;
    }

    public function get($key, $default = null)
    {
        if (in_array($key, $this->jsonFields)) {
            return @json_decode(parent::get($key, $default), true);
        }

        return parent::get($key, $default);
    }

    public function getMapped($key, $default = null)
    {
        if (isset($this->mappedFields[$key])) {
            return $this->mappedFields[$key][$this->get($key, $default)];
        }

        return parent::get($key, $default);
    }

    public function getUser()
    {
        return auth()->user();
    }

    public function getUserName()
    {
        return auth()->user()->username;
    }
}