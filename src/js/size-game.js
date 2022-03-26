resize();
window.addEventListener('resize', resize);

function resize(){
  let width = document.documentElement.clientWidth;
  let height = document.documentElement.clientHeight;

  if((width / height) > 1.8){
    height = document.documentElement.clientHeight-50;
    width = height * 1.7777; 
  } else {
    width = document.documentElement.clientWidth*0.98;
    height = width / 1.7777;
  }

  document.getElementById('game').style.width = width;  
  document.getElementById('game').style.height = height;
  document.getElementById('game-nav').style.width = width;  
}

function fullscreen() {
  let element = document.getElementById("game");
  if (element.requestFullscreen) {
    element.requestFullscreen();
  } else if (element.mozRequestFullScreen) {
    element.mozRequestFullScreen();
  } else if (element.webkitRequestFullscreen) {
    element.webkitRequestFullscreen(Element.ALLOW_KEYBOARD_INPUT);
  } else if (element.msRequestFullscreen) {
    element.msRequestFullscreen();
  }
}
