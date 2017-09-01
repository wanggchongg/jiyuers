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