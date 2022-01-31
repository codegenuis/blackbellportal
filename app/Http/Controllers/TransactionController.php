<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller; 
use App\Transaction;
use Validator;

class TransactionController extends Controller {
    public $successStatus = 200;

    public function create(Request $request) {
        $validator = Validator::make($request->all(), [ 
            'fld_transRef' => 'required', 
            'fld_username' => 'required', 
            'fld_order_no' => 'required', 
            'fld_order' => 'required', 
            'fld_time' => 'required',
            'fld_amount' => 'required',
            'fld_type' => 'required',
            ]);
            if ($validator->fails()) { 
                return response()->json(['error'=>$validator->errors()], 401);            
            }
            $input = $request->all();  
            // return $input;
            $user = Transaction::create($input); 
            $success['message'] =  'New record created';
            return response()->json(['success'=>$success], $this-> successStatus); 
        }
}

?>