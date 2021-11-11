/*************
an open-source readaptation of my cart211 final project, meme generator
*************/
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
    generatePic();
  });

  $('.btnImage').click(function(){
    checkImageType();
    generatePic();
  });

  $('#insertCaption').submit(function(event){
    event.preventDefault();
    generatePic();
    customCaption(); //display on canvas
    console.log('submitted');
    var newCap = $('#insertCaption').serialize();
    $.ajax({
         type: 'GET',
          url: "index.php",
          data: newCap,
          dataType: "text", /*response will be text */
          cache: false,
          timeout: 600000,
          success: function (response) {
               console.log(newCap);
         },
         error:function(){
           console.log("error occurred");
         }
    });


  });

}

function randomize(){
  $.get("txts/captions.txt",generateRandom);
  //image
}

function generateRandom(data){
  var splitArray = data.split('\n');
  randomNumTxt = Math.floor(Math.random()* (splitArray.length-1));
  document.getElementById("myText").innerHTML = splitArray[randomNumTxt];
  //text overlay effect for aesthetic
  document.getElementById("myText1").innerHTML = document.getElementById("myText").innerHTML;
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
    any.checked=true;
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

function randomUploadedImage(){
  var randomNumImg = Math.floor(Math.random()* uploadedImg.length);
  document.getElementById("myMeme").src = uploadedImg[randomNumImg];
}

function loadCustomImage(event) {
  document.getElementById("myMeme").src = URL.createObjectURL(event.target.files[0]);
  generatePic();
}

function customCaption(){
  document.getElementById("myText").innerHTML = document.getElementById("customCaption").value;
  document.getElementById("myText1").innerHTML = document.getElementById("myText").innerHTML;
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
