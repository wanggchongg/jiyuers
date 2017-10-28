<?php

if (!function_exists('auth_user')) {

    /**
     * @return \App\Model\Foundation\User|\App\Models\Foundation\User
     */
    function auth_user()
    {
        return current_auth_user();
    }

}

if (!function_exists('smart_mix')) {

    function smart_mix($path, $manifestDirectory = '', $supportHot = true)
    {
        $path = mix($path, $manifestDirectory);
        if (!$supportHot) {
            $hotUrl = 'http://localhost:8080';
            if (starts_with($path, $hotUrl)) {
                $path = str_replace($hotUrl, '', $path);
            }
        }
        return $path;
    }

}

if (!function_exists('rest_client')) {

    /**
     * @param null $service_name
     * @param null $debug_mode
     * @return \App\Rest\RestClient
     */
    function rest_client($service_name = null, $debug_mode = null)
    {
        return new \App\Rest\RestClient($service_name, $debug_mode);
    }

}

if (!function_exists('array_strval')) {
    /**
     * 将数组的val统一转化成string型
     * @param array $params
     * @return array
     * @throws Exception
     */
    function array_strval(array $params)
    {
        foreach ($params as &$param) {
            if (is_array($param)) {
                $param = array_strval($param);
            } else {
                $param = strval($param);
            }
        }
        unset($param);
        return $params;
    }
}

if (!function_exists('array_intval')) {
    /**
     * 将数组的val统一转化成int型
     * @param array $params
     * @return array
     * @throws Exception
     */
    function array_intval($params)
    {
        foreach ($params as &$param) {
            if (is_array($param)) {
                $param = array_intval($param);
            } else {
                $param = intval($param);
            }
        }
        unset($param);
        return $params;
    }
}

if (!function_exists('empty_ex0')) {
    /**
     * 排除0、"0"的empty函数
     * @param $param
     * @return bool
     */
    function empty_ex0($param)
    {
        return (0 !== $param && '0' !== $param && empty($param));
    }
}

if (!function_exists('listToMap')) {
    /**
     * 将list型数组转化成以字段值为key的map(key为空或空串，过滤)
     * @param $field
     * @param array $params
     * @return array
     */
    function listToMap($field, array $params)
    {
        $hashMap = [];
        foreach ($params as $param) {
            if (empty_ex0($param[$field]) || !is_scalar($param[$field])) {
                continue;
            }
            $hashMap[$param[$field]] = $param;
        }

        return $hashMap;
    }
}

if (!function_exists('filterInvalidField')) {
    /**
     * 数据库写操作前过滤非法字段
     * @param array $fields
     * @return array
     */
    function filterInvalidField(array $fields)
    {
        $validFields = [];
        foreach ($fields as $key => $val) {
            if (is_null($val)) {
                continue;
            }
            $validFields[$key] = $val;
        }

        return $validFields;
    }
}

if (!function_exists('ug')) {
    /**
     * utf-8转gbk
     * @param $content
     * @return string
     */
    function ug($content)
    {
        return iconv('utf-8', 'gbk//translit//ignore', $content);
    }
}

if (!function_exists('gu')) {
    /**
     * gbk转utf-8
     * @param $content
     * @return string
     */
    function gu($content)
    {
        return iconv('gbk', "utf-8//translit//ignore", $content);
    }
}

if (!function_exists('array_gu')) {
    /**
     * gbk转utf-8
     * @param $params
     * @return array
     */
    function array_gu(array $params)
    {
        foreach ($params as &$param) {
            if (is_array($param)) {
                $param = array_gu($param);
            } else {
                $param = gu($param);
            }
        }
        unset($param);
        return $params;
    }
}

if (!function_exists('renderData')) {
    /**
     * 接口返回格式（兼容jsonp）
     * @param array $data
     * @param array $meta
     * @return \Illuminate\Http\JsonResponse
     */
    function renderData($data = null, $meta = null)
    {
        return renderJson(0, 'success', $data, $meta);
    }
}

if (!function_exists('renderError')) {
    /**
     * 接口返回格式（兼容jsonp）
     * @param int $code
     * @param string $message
     * @return \Illuminate\Http\JsonResponse
     */
    function renderError($code = -1, $message = 'error')
    {
        return renderJson(intval($code), $message, null);
    }
}

if (!function_exists('renderJson')) {
    /**
     * 接口返回格式（兼容jsonp）
     * @param int $code
     * @param string $message
     * @param array $data
     * @param null $meta
     * @return \Illuminate\Http\JsonResponse
     */
    function renderJson($code = 0, $message = 'success', $data = null, $meta = null)
    {
        $code = intval($code);
        $result = [
            'code'    => $code,
            'message' => empty($message) ? config('errors.'.$code) : $message,
        ];

        if ($data !== null) {
            $result['data'] = $data;
        }
        if ($meta !== null) {
            $result['meta'] = $meta;
        }
        if (isset($_REQUEST['callback']) && preg_match('/^[\w.]+$/', $_REQUEST['callback'])) {
            return response()->jsonp($_REQUEST['callback'], $result);
        }

        return response()->json($result);
    }
}

if (!function_exists('generateJudgment')) {
    /**
     * 构造含code判断的函数返回结果
     * @param int $code
     * @param string $message
     * @param null $data
     * @return array
     */
    function generateJudgment($code = 0, $message = 'success', $data = null)
    {
        $code = intval($code);
        $result = [
            'code'    => $code,
            'message' => $message,
        ];
        if ($data !== null) {
            $result['data'] = $data;
        }
        return $result;
    }
}
