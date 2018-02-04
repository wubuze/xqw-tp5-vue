<?php
/**
 * Created by PhpStorm.
 * User: wubuze
 * Date: 18/2/4
 * Time: 下午2:38
 */

namespace app\index\controller;


trait ResponseGenerator
{

    protected function statusResponse($status, $message, $data = [])
    {
        return $this->jsonResponse([
            'status' => $status,
            'message' => $message,
            'data' => $data
        ]);
    }

    protected function jsonResponse($data, $code = 200)
    {
//        return ($data, $code);
        //return response()->json($data, $code)->header('Content-Type', 'application/javascript');
    }

}