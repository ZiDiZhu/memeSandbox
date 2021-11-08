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
  <script>
  $(document).ready(function(){
      $('.button').click(function(){
        $.ajax({
             type: "GET",
              url: "txts/captions.txt",
              data: "data",
              dataType: "text", /*response will be text */
              cache: false,
              timeout: 600000,
              success: function (response) {
                //reponse is a STRING (not a JavaScript object -> so we need to convert)
                   console.log("we had success!");
                   console.log(response);
             },
             error:function(){
            console.log("error occurred");
          }
        });
      });
  });

  </script>

  <body>

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

    <h3>Choose the Top Text of your MEME</h3>
    <form>
      <input type="radio" id = "question" name = "Text"> Contemplative
      <input type="radio" id = "exclamation" name = "Text"> Exclamation
      <input type="radio" id = "greeting" name = "Text"> Greeting
      <br><br><input type="radio" id = "custom" name = "Text">Custom: <input type="text" id="customtoptext" name="input">
    </form>
      <button onclick="generate()">Add to Top Text Library</button>

    <h3>Choose the Bottom Text of your MEME</h3>
    <form>
      <input type="radio" id = "bquestion" name = "Text"> Contemplative
      <input type="radio" id = "bexclamation" name = "Text"> Exclamation
      <input type="radio" id = "bgreeting" name = "Text"> Greeting
      <br><br><input type="radio" id = "bcustom" name = "Text">Custom: <input type="text" id="custombuttomtext" name="input">
    </form>
      <button onclick="generate()">Add to Bottom Text Library</button>

    <br><br><br>
    <button class = "btn" onclick="generate()">Randomize</button>
    <br><br><br>

    <div id="canvasWrapper" class="outer">
      <a id="downloadLink" download="meme.png">Download </a>
    </div>

    <div class="container" id = "imagewrap">

      <div class = "memeimage"><img id = "myMeme" src="images/0placeholder.png"></div>
      <div class="top1"><h2 id = "myText1">placeholder text</h2></div>
      <div class="top"><h2 id = "myText">placeholder text</h2></div>
      <div class="bottom"><h2 id = "mybText">placeholder text</h2></div>
      <div class="bottom1"><h2 id = "mybText1">placeholder text</h2></div>
    </div>

  </body>


</html>
