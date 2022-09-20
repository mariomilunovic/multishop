<?php

namespace App\Traits;

trait HttpResponse {

    function success($data, $message=null, $code = 200)
    {
        return response()->json([
            'status' => 'Request was successful.',
            'message' => $message,
            'data' => $data
        ],
        $code);
    }

    function error($data, $message=null, $code)
    {
        return response()->json([
            'status' => 'Error has occurred.',
            'message' => $message,
            'data' => $data
        ],
        $code);
    }

}


?>
