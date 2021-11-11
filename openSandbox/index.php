<?php

  if($_SERVER['REQUEST_METHOD'] == 'GET'){


    if(isset($_GET['my_Caption'])){
      $newCaption = $_GET['my_Caption'];

      $captionsFile = fopen("txts/captions.txt","a") or die("Unable to open file!");
      fwrite($captionsFile, "".$newCaption."\n");

      fclose($captionsFile);
      echo $_POST['myCaption'];
      exit;
    }
  }
   //$captionsFile = fopen("txts/captions.txt","r") or die("text file missing");
?>


<!doctype HTML>
<html>

  <head>
    <link rel = "stylesheet" href = "smsstyle.css">
    <script src="code.js"></script>
    <script src="resources.js"></script><!--images and text library-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <title> Surreal Meme Sandbox </title>
  </head>

  <body onload="onload()">
    <h4>****Simple Open Source Edition**** nov 2021</h4>
    <img src = "images/logo.gif">

    <br><br>

    <!--User Selection-->
    <h3>Choose the image of your MEME</h3 >
    <p>(it'll be a random picture)</p>

    <br>

    <form>
      <input type="radio" id = "any" name = "Image"> any
      <input type="radio" id = "atmo" name = "Image"> atmospheric
      <input type="radio" id = "anime" name = "Image"> anime
      <input type="radio" id = "stock" name = "Image"> shutterstock
      <input type="radio" id = "thing" name = "Image"> things in unusual places
    </form>

    <br>
    <p> Or Upload an Image:</p>
    <input type ="file" accept="image/*" onchange="loadCustomImage(event)" name = 'image' size="10" required/>

    <br><br>

    <h3>Enter caption for your MEME: </h3>

    <form id= 'insertCaption' action="" method="GET">
      <p><input type="text" size="24" maxlength = "50" id="customCaption" name="my_Caption" required></p>
      <input type = "submit" name = "submit" value = "ENTER" id =buttonS />
    </form>
    <p>(Everything you enter will be added to the Captions library!)</p>

    <br><br>
    <button class = "btn">Generate!</button>
    <br><br><br>

    <div id="canvasWrapper" class="outer">
      <a id="downloadLink" download="meme.png">Download png</a>
    </div>

    <div class="container" id = "imagewrap">

      <div class = "memeimage"><img id = "myMeme" src="images/0placeholder.png" style="width:400px;width:400px;object-fit: fill"></div>
      <div class="caption1"><h2 id = "myText1">placeholder text</h2></div>
      <div class="caption"><h2 id = "myText">placeholder text</h2></div>
    </div>

      <br><br><br>
      <input type = "submit" class="button" name="readCaptions" value="check captions library on console "/>

  </body>


</html>
