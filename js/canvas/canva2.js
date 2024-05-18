var id_canvas = document.getElementById("canva2");
var ctx = id_canvas.getContext("2d");

var canvasWidth = 100;
var canvasHeight = 100;

var centerX = canvasWidth / 2;
var centerY = canvasHeight / 2;

var sideLength = canvasWidth / 2;

ctx.fillStyle = "red";
ctx.fillRect(centerX - sideLength / 2, centerY - sideLength / 2, sideLength, sideLength);

ctx.fillStyle = "white";
ctx.fillRect(centerX - sideLength / 4, centerY - sideLength / 4, sideLength / 2, sideLength / 2);
