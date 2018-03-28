<?php
namespace App\Http\Controllers;
use App\Hikoya;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
class HikoyaController extends Controller{
    
    // public function __construct()
    // {
    //     //
    // }

    public function index(){
        $Hikoya = Hikoya::all();
        return response()->json($Hikoya);
    }
    public function getHikoya($id){
        $Hikoya = Hikoya::find($id);
        return response()->json($Hikoya);
    }
    public function createHikoya(Request $request){
        $Hikoya = Hikoya::create($request->all());
        return response()->json($Hikoya);
    }
    public function deleteHikoya($id){
        $Hikoya = Hikoya::find($id);
        $Hikoya->delete();
        return response()->json('deleted');
    }
    public function updateHikoya(Request $request,$id){
        $Hikoya = Hikoya::find($id);
        $Hikoya->title= $request->input('title');
        $Hikoya->text= $request->input('text');
        $Hikoya->author= $request->input('author');
        $Hikoya->status= $request->input('status');
        return response()->json($Hikoya);
    }
}