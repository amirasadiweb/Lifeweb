<?php


namespace App\Http\Controllers;


use App\Http\Controllers\Controller;

class BasicController extends Controller
{

    public function sendResponse($result = [], $message = 'operation success')
    {
        $response = [
            'data' => $result,
            'message' => $message,
        ];

        return response()->json($response, 200);
    }

    public function sendError($error, $errorMessages = [], $code = 404)
    {
        $response = [
            'success' => false,
            'message' => $error,
        ];


        if (!empty($errorMessages)) {
            $response['data'] = $errorMessages;
        }


        return response()->json($response, $code);
    }
}
