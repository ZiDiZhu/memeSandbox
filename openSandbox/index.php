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

  <?php

    if($_SERVER['REQUEST_METHOD'] == 'GET'){

      if(isset($_GET['myCaption'])){
        echo("GETGETGETGETGOTGOTGOTGOT");

        $newCaption = $_Get['myCaption'];

        $captionsFile = fopen("txts/captions.txt","a") or die("text file missing");
        fwrite($captionsFile, "".$newCaption."\n");
        fclose($captionsFile);
        echo("thank you");
        exit;
      }
    }
     //$captionsFile = fopen("txts/captions.txt","r") or die("text file missing");
  ?>

  <body onload="onload()">
    <h4>****Simple Open Source Edition**** nov 2021</h4>
    <img src = "images/logo.gif">

    <!--User Selection-->
    <h3>Choose the image of your MEME</h3>
    <form>
      <input type="radio" id = "any" name = "Image"> any
      <input type="radio" id = "atmo" name = "Image"> atmospheric
      <input type="radio" id = "anime" name = "Image"> anime
      <input type="radio" id = "stock" name = "Image"> shutterstock
      <input type="radio" id = "thing" name = "Image"> things in unusual places
    </form>

    <h3>Enter caption for your MEME: </h3>

    <input type="text" id="customCaption" name="myCaption" required>

    <button class = "confirmCaption">Confirm</button>
    <br><br>
    <button class = "contributeCaption">contribute this caption to the library</button>

    <input class="contributeCaption" type = "submit" name = "submit" value = "contribute" id =buttonS />


    <br><p>or:</p>
    <button class = "btn">Generate Random</button>
    <br><br><br>

    <div id="canvasWrapper" class="outer">
      <a id="downloadLink" download="meme.png">Download png</a>
    </div>

    <div class="container" id = "imagewrap">

      <div class = "memeimage"><img id = "myMeme" src="images/0placeholder.png"></div>
      <div class="caption1"><h2 id = "myText1">placeholder text</h2></div>
      <div class="caption"><h2 id = "myText">placeholder text</h2></div>
    </div>

      <br><br><br>
      <input type = "submit" class="button" name="readCaptions" value="check captions library on console "/>

  </body>


</html>
