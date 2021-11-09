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

    <h3>Choose the Caption of your MEME</h3>
    <form id="insertCaption">
      <input type="radio" id = "question" name = "Text"> Contemplative
      <input type="radio" id = "exclamation" name = "Text"> Exclamation
      <input type="radio" id = "greeting" name = "Text"> Greeting
      <br><br><input type="radio" id = "custom" name = "Text">Custom: <input type="text" id="customCaption" name="caption">
    </form>
      <input type="submit" name="addCaption" value="save caption to library"/>


    <br><br><br>
    <button class = "btn">Randomize</button>
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
