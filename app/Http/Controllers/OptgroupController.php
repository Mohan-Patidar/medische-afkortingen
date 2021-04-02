<?php

namespace App\Http\Controllers;
use App\Models\Expertise;
use App\Models\Optgroup;
use Illuminate\Http\Request;
use Session;
use Validator;
use Symfony\Component\VarDumper\VarDumper;

class OptgroupController extends Controller
{
    public function index()
    {
        $experts = Expertise::get();
        $options = Optgroup::get();
        
        return view('admin.optgroup.index',compact(['experts','options']));
    }
    public function create()
    {
        $experts = Expertise::all();
        
        return view('admin.optgroup.create',compact("experts"));
    }
    public function show($id)
    {
        //
    }


    public function store(Request $request)
    {
    
        $request->validate([
            'name' => 'required',
           
          ]);
     
          $check = Optgroup::Create(
        ['ex_id' => $request->ex_id,'name' => $request->name]);        
        
      
        $arr = array('msg' => 'Something goes to wrong. Please try again later', 'status' =>false);
        if($check){ 
           $arr = array('msg' => 'Successfully Form Submit', 'status' => true);
        }
       return response()->json($arr);
        // return response()->json();
    }
    public function edit($option)
    { 
        $experts = Expertise::get();
        $options = Optgroup::where("id", "=", $option)->first();
      
    
        return view('admin.optgroup.edit',compact('options','experts'));   
    }

    public function update(Request $request, $id)
    {     
        
    
        $option =Optgroup::where("id", "=", $id)->first();
        $option->ex_id = $request->ex_id;
        $option->name=$request->name;
       
        $option->update(); 
        Session::flash('message', ' data updated successfuly!');
       return redirect('options');
    }
    public function destroy(request $request)
    {
        $id = $request->all();
        Optgroup::destroy($id);
    }

}
