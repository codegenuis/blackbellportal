<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;
use App\Food;
use App\Audit;
use Response;
use Validator;

class FoodController extends Controller
{
    public $successStatus = 200;

    public function create(Request $request) {
        $validator = Validator::make($request->all(), [ 
            'fld_order_no' => 'required', 
            'fld_order' => 'required', 
            ]);
            if ($validator->fails()) { 
                return response()->json(['error'=>$validator->errors()], 400);            
            }
            $input = $request->all();  
            // return $input;
            $user = Food::create($input); 
            $success['message'] =  'New record created';
            return response()->json(['success'=>$success], $this-> successStatus); 
        }

    public function orders (Request $request){
        $records =  \App\Food::paginate(20);
        $str = ""; 
        foreach($records as $record){
            $data =  '<tr><td>'.$record->fld_order_no.'</td>
            <td>'.str_replace(',', '<br>',$record->fld_order).'</td>
            <td>'.$record->created_at.'</td>
             <td>'.$record->status.'</td>
              <td>'.$record->updated_at.'</td>
              <td> <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#statusModal" data-id='.$record->id.'> Change Status </button></td>
            </tr>';
            $str .= $data;
        }
        $paginate = '<p>'.$records->links().'</p>';
        $str .= $paginate;
        // return Response::json($record,200);
        // return view('pages.user.orders.index')->with('record',$record);
        echo $str;
    }
    
    public function changeStatus(Request $request)
    {
        //
        $id = $request->input('id');
        $status = $request->input('status');
        $record = food::where('id',$id)->update(['status' => $status ]);
        if($record == 1){
            return Response::json('success',200);
        }
        else {
            return Response::json('error',400);
        }
    
    }
}