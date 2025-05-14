let ctx;
let canvas;

let canvasH = 800;
let canvasW = 900;

let gameOver = false;

let player = {
    x: 0,
    y: 0,
    width: 20,
    height: 20
}


window.onload = () => {
    
    canvas = document.getElementById("canvas");
    canvas.height = canvasH;
    canvas.width = canvasW;

    ctx = canvas.getContext('2d');
    
    requestAnimationFrame(update);
    
    document.addEventListener("keydown",movePlayer);
}

function update(){

    requestAnimationFrame(update);

    if(gameOver){
        return;
    }

    ctx.clearRect(0,0,canvas.width,canvas.height);
    ctx.fillStyle = 'purple';
    ctx.fillRect(player.x,player.y,player.width,player.height);

}

function movePlayer(e){
    
    if(gameOver){
        return;
    }
    
    const speed = 2;
    
    if(e.code == "KeyW" && player.y > 0){
        player.y -= speed;
    }
    
    if(e.code == "KeyS" && player.y + player.height < canvas.height){
        player.y += speed;
    }
    
    if(e.code == "KeyD" && player.x + player.width < canvas.width){
        player.x += speed;
    }
    
    if(e.code == "KeyA" && player.x > 0){
        player.x -= speed;
    }
}