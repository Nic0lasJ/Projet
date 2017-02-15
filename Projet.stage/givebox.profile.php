<!DOCTYPE html>
<html>
  <head>
      <link rel="stylesheet" href="givebox.profile.css"/>
    <meta charset="utf-8">
    <title></title>

  </head>
<?php include("nav.givebox.php"); ?>

  <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.1.0/css/font-awesome.min.css"/>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script>
  $(document).ready(function(){
      $('img,Papy.jpg').click(function()
      {
          alert("Je suis un Papy au volant, mais tu arrive vivant !");
      });
  });
  </script>

  <div class="container">
    <div class="jumbotron">
  <!--Wanna Call Someone :P -->
  <div class="media block-update-card">
  <a class="pull-left" href="#">
    <img class="media-object update-card-MDimentions" src="http://3.bp.blogspot.com/-IbEOTNtCMyU/TfCAdHaAxEI/AAAAAAAAA8U/EATib38SSAM/s320/joe-mcelderry.jpg" alt="...">
  </a>
  <div class="media-body update-card-body">
    <h4 class="media-heading">John Wick</h4>
    <div class="btn-toolbar card-body-social" role="toolbar">
      <div class="btn-group fa fa-github-alt git"></div>
      <div class="btn-group linkedin fa fa-linkedin-square"></div>
      <div class="btn-group twitter fa fa-twitter"></div>
      <div class="btn-group facebook fa fa-facebook"></div>
      <div class="btn-group google-plus fa fa-google-plus"></div>
    </div>
  </div>
  </div>

  <!--Simple Card with Status Highlight-->

  <div class="block-update-card status">
    <div class="h-status">
     </div>
      <div class="update-card-body">
      <h4>Infomation à mon sujet.</h4>
      <p>This is me. I am a Good Boy.This is the body content of this media.This can be
      used as an update panel.</p>
      <h2>Mes badges acquis: </h2>
      <img src="Papy.jpg"  alt="" />




    </div>
  </div>
      </div>
</div>






  </body>
</html>
