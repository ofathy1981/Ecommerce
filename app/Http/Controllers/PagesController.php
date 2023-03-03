<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        return 'index page';
    }
    //
    public function withparm($id){

      #   $id= [1,2,3,4];
        return 'index page'.$id;
    }
    function v_w_p($arr){
       $arr=[1,2,3,4,5,6,7];
        return view('pages.view_with_par')->with('ident',$arr);
    }
}
