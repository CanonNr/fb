<?php

namespace App\Http\Controllers\Base;

class ReturnTemplate
{
    public static $code;

    public static $status;

    public static $message;

    public static $data;

    public function __construct($code = 200,$data = [],$message = "操作成功")
    {
        self::$code = $code;
        self::$message = $message;
        self::$data = $data;
        return $this;
    }

    public function __toString()
    {
        return json_encode([
            'code' => self::$code,
            'message' => self::$message,
            'data' => self::$data,
        ]);
    }
}
