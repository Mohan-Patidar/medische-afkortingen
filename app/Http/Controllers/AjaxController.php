<?php

namespace App\Http\Controllers;

use App\Models\Short;
use App\Models\Expertise;
use App\Models\Optgroup;
use App\Models\Title;

use Illuminate\Http\Request;

class AjaxController extends Controller
{


    public function getshort(request $request)
    {

        $id = $_GET['id'];

        $experts = Expertise::find($id);

        $a = $experts->id;
        $options = Optgroup::where('ex_id', '=', $a)->get();


        $shorts = Short::get();


        $b=array();
        $c=array();
       
            foreach($options as $option){
                foreach($shorts as $short){
                    if($option->id == $short->opt_id){
                        
                        array_push($c,$short); 
                       
                        array_push($b,$option);
                        
                    }
                }
              
            }
        
      
   
    $option= array_unique($b);
    $shot=array_unique($c);
   
    
    usort($shot, function($d, $e) {
        return strcmp($d->short_code, $e->short_code);
    });
    
     



                
    foreach(range('A', 'Z') as $char){
            foreach ($option as $opt) {

                if(strtolower($opt->name[0])==strtolower($char)){
                ?>
                <optgroup label="<?php echo $opt->name; ?>">
                    <?php
                    foreach ($shot as $short) {

                        if ($opt->id == $short->opt_id) { ?>
                            <option ex_id="<?php echo $short->opt_id; ?>" short_id="<?php echo $short->id; ?>" short_d="<?php echo $short->description; ?>" value="<?php echo $short->short_code; ?>"><?php echo $short->short_code . ' ' . $short->value; ?></option>
                    <?php

                        }
                    }
                    ?>
                </optgroup>

<?php
}
            }
        }
    }
    
    public function title(request $request)
    {
        $id = $request->id;
        $closer = Title::find($id);
        $closer->title = $request->title;
        $closer->update();
        return response()->json($id);
    }
    public function gettitle(request $request)
    {
        $id = $request->id;
        $closer = Title::find($id);
        $get = $closer->title;

        return response()->json($get);
    }
}
