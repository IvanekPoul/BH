if (document.images) {
  image1Ton = new Image();
  image1Ton.src = "./images/postproduction/1.jpg";

  image1Toff = new Image();
  image1Toff.src = "./images/postproduction/2.jpg";

  image2Ton = new Image();
  image2Ton.src = "./images/postproduction/1.jpg";

  image2Toff = new Image();
  image2Toff.src = "./images/postproduction/3.jpg";
}

function turnOn(image2T) {
  if (document.images) {
    document[image2T].src = eval(image2T + "on.src");
  }
}

function turnOff(image2T) {
  if (document.images) {
    document[image2T].src = eval(image2T + "off.src");
  }
}