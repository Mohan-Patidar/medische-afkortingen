<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Affinos">
        <meta name="keywords" content="Affinos">
        <meta name="author" content="stacks">
        <link rel="shortcut icon" href="{{url('/')}}/assets/images/fevicon.png">
        <!-- The above 6 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        
        <!-- Title -->
        <title>Medische Afkortingen</title>


        <!-- Styles -->
        
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
    <link href="{{url('/')}}/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{url('/')}}/assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="{{url('/')}}/assets/plugins/icomoon/style.css" rel="stylesheet">
    
    <!-- Theme Styles -->
    <link href="{{url('/')}}/assets/css/space.css" rel="stylesheet">
    <link href="{{url('/')}}/assets/css/custom.css" rel="stylesheet">
    <link href="{{url('/')}}/assets/css/frontend-view.css" rel="stylesheet">
     <link href="{{url('/')}}/assets/css/select2.min.css" rel="stylesheet" />

        
    </head>
    <body>
<!-- /Page Header -->
<header class="site-header">
    <div class="container">
        <div class="row">
            <div class="header-inr">
                <img class="site-logo" style="width:100%" src="{{url('/')}}/assets/images/minebytes-logo.png" alt="">
            </div>
        </div>
    </div>
</header>
              <main class="main">
                  <div class="main-content">
                      
                    @yield('content')
                      
                  </div>
                   <footer>
                   <div class="container">
                       <div class="row">
                           <div class="footer-inr">
                               <div class="">
                                   <h6>Beschikbaar gesteld door</h6>
                                   	<a href="https://www.minebytes.com/nl/medical/" target="_blank">
                                   <img src="{{url('/')}}/assets/images/minebytes-2.png" alt="">
                                   </a>
                               </div>
                               <div class="">
                                   <h6>Bekijk ook de</h6>
                                   	<a href="https://fml.minebytes.nl/site/" target="_blank" class="website-link">
                                   <img src="{{url('/')}}/assets/images/online-fml.png" alt="">
                                   </a>
                               </div>
                           </div>
                       </div>
                   </div>
               </footer> 
              </main>
                
               
               
              
    <script src="{{url('/')}}/assets/js/jquery-3.5.1.min.js"></script>
    <script src="{{url('/')}}/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="{{url('/')}}/assets/js/space.min.js"></script>
    <script src="{{url('/')}}/assets/js/select2.min.js"></script>
<script>
    $('.select2').select2();
    
</script>
<script>
    function copyCode(element) {
        var copyText = document.getElementById(element);
        copyText.select();
        document.execCommand("copy");
    }

    $(document).ready(function () {     
    $('.changedata').change(function(){
        var code = $(this).val();
        $('#diagnose').val('');
        $('#code').val('');
        $('#codeAndDiagnose').val('');
        $('#description').val('');
        $('#expertname').text('');  
        $("#short_d").val('');
        // $('.sdata li').removeClass('active');
        
        var eid = $('.changedata option:selected').attr("ex_id");
      
        var id = $('.changedata option:selected').attr("short_id");
        var shortd = $('.changedata option:selected').attr("short_d");

         
         
   
        $("#short_d").text(shortd);
        
    $.ajax({
            url: 'getdata', 
            method: "get",  
            data:{id:id,
            eid:eid},  
            success:function(data){
                $('#diagnose').val(data[1].value);
                $('#code').val(data[1].short_code);
                $('#codeAndDiagnose').val((data[1].short_code)+' '+(data[1].value));
                $('#short_d').val(data[1].description);  
                $('#expertname').text(data[0].name);
                $('#description').html(data[0].description);
                 $(".expertup li").siblings().removeClass('active');
                $("li[data_id="+data[0].id+"]").addClass('active');
         
           }  

       });  

})
});



</script>  
<script>
function myFunction(value,d,name,v){
      	 
    $(".loader").fadeIn();
     $('#diagnose').val('');
    $('#code').val('');
    $('#codeAndDiagnose').val('');
    $('#description').html();
    $('#expertname').text();  
    $('#short_d').html('');
     $('.select2-selection.select2-selection--single').html('<span class="select2-selection__rendered" id="select2-expertise-ba-container">'+$(v).text()+'</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span>');
     

    $(v).addClass('active');
    $(v).siblings().removeClass('active');
   
    
    $.ajax({
            url: 'getshort', 
            method: "get",  
            data:{id:value},  
            success:function(data){
                $('.changedata').html(data);
             
              $(".loader").fadeOut();
           
              
           }  

     
       }); 
       
      
   	 
 


 
  
  	
     
}


 // loader

        

     
$('.select2').click(function(){
   $('.select2-results__options--nested li:first-child').attr('aria-selected',false);
})


</script> 


    </body>
    </html>