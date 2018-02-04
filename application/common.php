<?php
use think\Response;

function statusResponse($status, $message = '', $data = [])
{
    return ajax_return([
        'status' => $status,
        'message' => $message,
        'data' => $data
    ]);
}


function ajax_return($ret, $extend = [])
{
    $ret = array_merge($ret, $extend);

    return Response::create($ret, 'json');
}