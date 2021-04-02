<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Expertise;
use App\Models\Optgroup;
use App\Models\Short;
use App\Models\Title;

class FrontendController extends Controller
{
    public function index() {

        $names = Title::where('id', 1)->value('title');
        $experts = Expertise::get();
        $options = Optgroup::get();
        $shorts = Short::get();
      
     
        $a=array();
        $b=array();
        $c=array();
        foreach($experts as $expert){
            foreach($options as $option){
                foreach($shorts as $short){
                    if($expert->id == $option->ex_id && $option->id == $short->opt_id){
                        array_push($c,$short);
                        array_push($a,$expert);
                        array_push($b,$option);
                    }
                }
              
            }
        }
         
       
    $exp= array_unique($a);  
    $opt= array_unique($b);
    
    $shot=array_unique($c);
   
    
    usort($shot, function($d, $e) {
        return strcmp($d->short_code, $e->short_code);
    });
    


        return view('frontend.home',compact(['shorts','experts','exp','names','options','opt','shot']));
    }



}
