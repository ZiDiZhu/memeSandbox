
function onload(){
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

  //"randomize" button
  $('.btn').click(function(){
      randomize();
  });
}

function randomize(){
  $.get("txts/captions.txt",generateRandom);

  //image
  checkImageType();
  generatePic();
}

function generateRandom(data){
  console.log(data);
  let splitArray = data.split('\n');
  console.log(splitArray);

  randomNumTxt = Math.floor(Math.random()* (splitArray.length-1));
  document.getElementById("myText").innerHTML = splitArray[randomNumTxt];
  //text overlay effect for aesthetic
  document.getElementById("myText1").innerHTML = document.getElementById("myText").innerHTML;
}

function generate(){

  checkImageType();
  checkCaption();

  document.getElementById("myText1").innerHTML = document.getElementById("myText").innerHTML;

  generatePic();
}

function checkImageType(){
  var atmo = document.getElementById("atmo");
  var anime = document.getElementById("anime");
  var thing = document.getElementById("thing");
  var stock = document.getElementById("stock");
  if(atmo.checked ===true){
    randomAtmoImage();
  }else if(anime.checked === true){
    randomAnimeImage();
  }else if(stock.checked === true){
    randomStockImage();
  }else if(thing.checked === true){
    randomThingImage();
  }else{
    randomAllImage();
  }
}

function randomAtmoImage(){
  var randomNumImg = Math.floor(Math.random()* atmoImg.length);
  document.getElementById("myMeme").src = atmoImg[randomNumImg];
}

function randomAnimeImage(){
  var randomNumImg = Math.floor(Math.random()* animeImg.length);
  document.getElementById("myMeme").src = animeImg[randomNumImg];
}

function randomStockImage(){
  var randomNumImg = Math.floor(Math.random()* stockImg.length);
  document.getElementById("myMeme").src = stockImg[randomNumImg];
}

function randomThingImage(){
  var randomNumImg = Math.floor(Math.random()* thingImg.length);
  document.getElementById("myMeme").src = thingImg[randomNumImg];
}

function randomAllImage(){
  var randomNumImg = Math.floor(Math.random()* allImg.length);
  document.getElementById("myMeme").src = allImg[randomNumImg];
}


function checkCaption(){
  var question = document.getElementById("question");
  var exclamation = document.getElementById("exclamation");
  var greeting = document.getElementById("greeting");
  var custom = document.getElementById("custom");
  if(question.checked ===true){
    randomQuestionTopText();
  }else if(exclamation.checked === true){
    randomExclamationTopText();
  }else if(greeting.checked === true){
    randomGreetingTopText();
  }else if(custom.checked === true){
    customCaption();
  }else{
    randomAllTopText();
  }
}

function customCaption(){
  document.getElementById("myText").innerHTML = document.getElementById("customCaption").value;
}

function randomQuestionBText(){
  randomNumTxt2 = Math.floor(Math.random()* questionTxt.length);
  document.getElementById("mybText").innerHTML = questionTxt[randomNumTxt2];
}

function randomGreetingBText(){
  randomNumTxt2 = Math.floor(Math.random()* greetingTxt.length);
  document.getElementById("mybText").innerHTML = greetingTxt[randomNumTxt2];
}

function randomExclamationBText(){
  randomNumTxt2 = Math.floor(Math.random()* exclamationTxt.length);
  document.getElementById("mybText").innerHTML = exclamationTxt[randomNumTxt2];
}

function randomAllBText(){
  randomNumTxt2 = Math.floor(Math.random()* allTxt.length);
  document.getElementById("mybText").innerHTML = allTxt[randomNumTxt2];
}

function customBText(){
  document.getElementById("mybText").innerHTML = document.getElementById("custombuttomtext").value;
}


function generatePic() {
  html2canvas(document.getElementById("imagewrap"), {
    onrendered: function(canvas) {
      canvas.className = "html2canvas";
      var image = canvas.toDataURL("image/png");
      document.getElementById("downloadLink").href = image;
    },
    useCORS: true
  });
}
