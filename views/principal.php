<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>principal</title>
    <script
  src="https://code.jquery.com/jquery-3.5.1.js"
  integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
  crossorigin="anonymous"></script>
</head>
<body>
    <button id="boton" class="boton">click</button>

    <div class="container ">
        <h1>hola</h1>
        <div class="training-genes">

        </div>
    </div>
<script>
    $('#boton').click(function(){
        
        if($("#boton").attr("class") == "boton show-item"){
            
            $('.training-genes').empty();
            $('#boton').removeClass("show-item");
            
        }else{
            $.ajax({
            url:'contenido.php',
            success:function(data){
                $('.training-genes').html(data);
                $('#boton').addClass("show-item");
                return;
            }
            
        });
        }
            
           
        
    });

    

   


</script>

</body>
</html>