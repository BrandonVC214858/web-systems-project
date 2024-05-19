var canvas = document.getElementById("canva2");
var ctx = canvas.getContext("2d");

var x = 50;
var y = 50;

var velocidadX = 3;
var velocidadY = 2;

function dibujar() {
    ctx.clearRect(0, 0, canvas.width, canvas.height);
    
    ctx.beginPath();
    ctx.arc(x, y, 20, 0, Math.PI * 2);
    ctx.fillStyle = "#10E0BD";
    ctx.fill();
    ctx.closePath();
    
    x += velocidadX;
    y += velocidadY;

    if (x + velocidadX > canvas.width - 20 || x + velocidadX < 20) {
        velocidadX = -velocidadX;
    }
    if (y + velocidadY > canvas.height - 20 || y + velocidadY < 20) {
        velocidadY = -velocidadY;
    }
}
setInterval(dibujar, 10);
