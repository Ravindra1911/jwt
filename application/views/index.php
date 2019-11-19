<!doctype html>
<html lang="en">
     <head>
     <meta charset="utf-8">
     <title>Smart City</title>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
         
    </head>
     <body>
        <div class="container">
            <div class="123">
                <input type="text" name="txtname" id="txtname"/>
                <button id="getJson">Get JSON</button>
            </div>
             <div class="container1" id="container">          
              <!-- <img src="" class="img-rounded" id="imageid" alt="Cinque Terre" width="304" height="236"> -->
            </div>
            </div>
             <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
             <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
             <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
             <script>
             $(document).ready(function(){
                 $(".img-rounded").hide();
             })
             $("#getJson").on("click",function(){
                 var txtname=$("#txtname").val();
                 $.ajax({ 
                         url: 'home/getJsonCode',
                         type: 'post',
                         dataType:"json",
                         data:{"txtname":txtname},
                         success: function(data) {
                                        $(".img-rounded").show();
                                        var obj= JSON.parse(data);
                                        var i=0;
                                       //obj.hits[i].largeImageURL;
                                        $(".container1").empty();
                                        $.each(obj,function(index,value){
                                                //console.log(obj.hits[0].videos.small.url);
                                                html='<video width="320" height="240" controls><source src="'+obj.hits[i].videos.small.url+'" type="video/mp4"></video>';
                                            //html= "<div>"+obj.hits[0].videos.small.url+"</div>";
                                            $(".container1").append(html) ;
                                         i++;
                                     })
                                } 
                            });
                    });
         </script>
     </body>
</html>
