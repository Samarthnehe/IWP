<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>VIT Canteen</title>
    <link
      href="https://fonts.googleapis.com/css?family=Poppins:400,600,700"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    

    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <link rel="stylesheet" href="css/index.css" />
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    

</head>

  <body style="background-color:black">
              

  <div class="preloader-wrapper big active">
      <div class="spinner-layer spinner-blue-only">
        <div class="circle-clipper left">
          <div class="circle"></div>
        </div><div class="gap-patch">
          <div class="circle"></div>
        </div><div class="circle-clipper right">
          <div class="circle"></div>
        </div>
      </div>
    </div>

    <div class="mycontainer">
    <section id="mysection">
        
      <section id="section1">
      <div class="myrow">
        
        <div class="column1">
         
                <div class="content1">
                    <img id="logo" src="images/vit_logo.png" >
                        <h1 class="heading"><span style="color: rgb(91, 47, 161);">Hungry?</span> Not willing to stand in long queue? </h1>
                        <p>
                          Try VITBites! -your personal ordering assistant. 
                          <br>
                          
                          <ul style="list-style:none">
                              <li><a href="employee.php" class=" btn btn-dark btncolor mycenter ">  Employee </a></li>
                            </ul>
                          <ul style="list-style:none">
                              <li><a href="customer.php" class=" btn btn-dark btncolor mycenter ">  Customer </a></li>
                            </ul>
                </div>
              
        </div>
      
        <div class="column2">
                  <img id="one" src="images/undraw.png" /> 
        </div>

       


      </div>
      

    </section>
    </section>

    <div>&nbsp;</div>

  

    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    
    
    <script>

$('.mycontainer').hide(); // this or use css to hide the div
$('.big').delay(1000).fadeOut('slow');
$('.mycontainer').delay(2000).fadeIn('slow');

var sect1= document.querySelector('#section1'); 
$(document).ready(function(){
  $('.studentlogin').click(function(){
    // $('#section1').css("transform","translate(-1600px,0)");
    $('#mysection').css("transform","translate(0,-675px)");
  });
});



$(document).ready(function () {
            $('.tabs').tabs();
});
     



    </script>

</body>
</html>
<!--  YELLOW #FAA41A  GREY #262626-->
