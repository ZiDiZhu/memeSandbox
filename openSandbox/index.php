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
     //$captionsFile = fopen("txts/captions.txt","r") or die("text file missing");
  ?>

  <body onload="onload()">

    <input type = "submit" class="button" name="readCaptions" value="readCaptions"/>

    <img src = "images/logo.gif">

    <!--User Selection-->
    <h3>Choose the Subject of your MEME</h3>
    <form>
      <input type="radio" id = "atmo" name = "Image"> Atmospheric
      <input type="radio" id = "anime" name = "Image"> Anime
      <input type="radio" id = "stock" name = "Image"> Shutterstock
      <input type="radio" id = "thing" name = "Image"> Things in unusual places
    </form>

    <h3>Enter caption for your MEME: </h3>
    <input type="text" id="customCaption" name="caption">
    <input type="submit" name="addCaption" value="Confirm"/>
    <br><br>
    <input type="submit" name="addCaption" value="contribute this caption to library"/>


    <br><p>or:</p>
    <button class = "btn">Generate Random</button>
    <br><br><br>

    <div id="canvasWrapper" class="outer">
      <a id="downloadLink" download="meme.png">Download </a>
    </div>

    <div class="container" id = "imagewrap">

      <div class = "memeimage"><img id = "myMeme" src="images/0placeholder.png"></div>
      <div class="caption1"><h2 id = "myText1">placeholder text</h2></div>
      <div class="caption"><h2 id = "myText">placeholder text</h2></div>
    </div>

  </body>


</html>
