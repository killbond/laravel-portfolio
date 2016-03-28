<?php

namespace App\Models;

class Request extends \Illuminate\Support\Facades\Request
{
    public static function matchIp()
    {
        $ips = [
            '192.168.*.*',
        ];

        if (empty($ips)) {
            return true;
        }

        $ip = parent::ip();
        foreach ($ips as $rule) {
            if ($rule === '*' || $rule === $ip || (($pos = strpos($rule, '*')) !== false && !strncmp($ip, $rule, $pos))) {
                return true;
            }
        }

        return false;
    }
}