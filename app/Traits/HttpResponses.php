<?php 

namespace App\Traits;

trait HttpResponses{

    /** 
    *@param mixed $data the data
    *@param mixed $message the message 
    *@param mixed $code the request code
    */ 
    protected function success($data , $message = null , $code = 200){
        return response()->json([
            'status' => 'Request was successful',
            'message' => $message,
            'data' => $data ,

        ],$code);
    }
    
    
    protected function error($data , $message = null , $code){
        return response()->json([
            'status' => 'Error',
            'message' => $message,
            'data' => $data ,

        ],$code);
    }
}

