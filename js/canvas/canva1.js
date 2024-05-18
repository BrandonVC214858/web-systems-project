var id_canvas = document.getElementById("canva1");
var ctx = id_canvas.getContext("2d");

var canvasWidth = 100;
var canvasHeight = 100;

var centerX = canvasWidth / 2;
var centerY = canvasHeight / 2;

var outerRadius = canvasWidth / 2;
var innerRadius = outerRadius / 1.5;

ctx.beginPath();
ctx.arc(centerX, centerY, outerRadius, 0, 2 * Math.PI);
ctx.fillStyle = "red";
ctx.fill();

ctx.beginPath();
ctx.arc(centerX, centerY, innerRadius, 0, 2 * Math.PI);
ctx.fillStyle = "white";
ctx.fill();