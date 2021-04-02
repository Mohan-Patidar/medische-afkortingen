$options = Optgroup::get();
      


      $c=array();
      $d=array();
    foreach($options as $opt){
        foreach (range('A', 'Z') as $char) {
            array_push($c,$char);
            if($opt->name[0]==$char){
                array_push($d,$opt->name);
            }
            
        }
    }
    
    
      $f =array_unique($d);
    return view('frontend.home',compact('f'));