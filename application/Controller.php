<?php
//wubuze
namespace app;

use think\Controller as BaseController;

class Controller extends BaseController
{

    protected function statusResponse($status, $message = null, $data = [])
    {
        return json_encode([
            'status' => $status,
            'message' => $message,
            'data' => $data
        ]);
    }
}
