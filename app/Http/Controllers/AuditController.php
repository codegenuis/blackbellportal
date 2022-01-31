<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller; 
use App\Audit;

class AuditController extends Controller {
    public $successStatus = 200;

    public function fetch(Request $request){
       $record = Audit::latest()->first();
        return response()->json(['data'=>$record], $this-> successStatus);
    }

}

?>