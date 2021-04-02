<?php

namespace App\Http\Controllers;
use App\Models\Optgroup;
use App\Models\Short;
use Illuminate\Http\Request;
use Session;
use DB;
use Redirect;

class ShortController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $options = Optgroup::get();
        $shorts = Short::get();
        
        return view('admin.short.index',compact(['shorts','options']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $options = Optgroup::all();
        
        return view('admin.short.create',compact("options"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
  
    public function store(Request $request)
    {
        $d=$request->all();
   
        Short::Create(
        ['opt_id' => $request->opt_id,'short_code' => $request->short_code, 'value' => $request->value,'description' => $request->description]);        
        
      
        // return response()->json(["short_code"=>$a,"value"=>$b]);
        return response()->json($d);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($short)
    { 
        $options = Optgroup::get();
        $short = Short::where("id", "=", $short)->first();
        return view('admin.short.edit',compact('short','options'));   
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {     
        
        $request->validate([
            'short_code' => 'required',
            
          
            
        ]);
        $short =Short::where("id", "=", $id)->first();
        $short->opt_id = $request->opt_id;
        $short->short_code = $request->short_code;
        $short->value = $request->value;    
        $short->description = $request->description;  
        $short->update(); 
        Session::flash('message', ' data updated successfuly!');
       return redirect('shorts');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(request $request)
    {
        $id = $request->all();
        Short::destroy($id);
    }
}
