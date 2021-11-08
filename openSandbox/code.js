function generate(){

  checkImageType();
  checkCaption();

  document.getElementById("myText1").innerHTML = document.getElementById("myText").innerHTML;
  document.getElementById("mybText1").innerHTML = document.getElementById("mybText").innerHTML;

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

function randomQuestionTopText(){
  randomNumTxt = Math.floor(Math.random()* questionTxt.length);
  document.getElementById("myText").innerHTML = questionTxt[randomNumTxt];
}

function randomGreetingTopText(){
  randomNumTxt = Math.floor(Math.random()* greetingTxt.length);
  document.getElementById("myText").innerHTML = greetingTxt[randomNumTxt];
}

function randomExclamationTopText(){
  randomNumTxt = Math.floor(Math.random()* exclamationTxt.length);
  document.getElementById("myText").innerHTML = exclamationTxt[randomNumTxt];
}

function randomAllTopText(){
  randomNumTxt = Math.floor(Math.random()* allTxt.length);
  document.getElementById("myText").innerHTML = allTxt[randomNumTxt];
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
