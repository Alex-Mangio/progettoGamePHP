import keyInputs from "./KeyInputs.js";
import Tile from "./gameMap.js";

let ctx;
let canvas;

let canvasH = window.innerHeight;
let canvasW = window.innerWidth;

let gameOver = false;

const playerImg = new Image();
playerImg.src = "./gameImages/hooded_skeletal_character_final_32x32.png";

let player = {
    x: 0,
    y: 0,
    width: 70,
    height: 70,
    image: playerImg
}

let map = [];

let inputs = new keyInputs();

window.onload = () => {
    
    canvas = document.getElementById("canvas"); 
    canvas.height = canvasH;
    canvas.width = canvasW;

    ctx = canvas.getContext('2d');
    ctx.imageSmoothingEnabled = false;

    drawMap();
    
    requestAnimationFrame(update);
}

function update(){

    requestAnimationFrame(update);

    if(gameOver) return;
    
    movePlayer();

    ctx.clearRect(0,0,canvas.width,canvas.height);

    map.forEach((square) => square.draw(ctx));

    ctx.drawImage(player.image,player.x,player.y,player.width,player.height);


}

function drawMap(){

    const mapMatrix = [ 
    ["-","-","-","-","-","-","-","-","-","-","-","-","-","-","-","-","-","-","-","-","-","-","-","-"],
    ["-","-","-","-","-","-","-","-","-","-","-","-","-","-","-","-","-","-","-","-","-","-","-","-"],
    ["-","-","-","-","-","-","-","-","-","-","-","-","-","-","-","-","-","-","-","-","-","-","-","-"],
    ];

    mapMatrix.forEach((row, i) => {
        row.forEach((symbol, j) => {
            switch(symbol){
                case "-":
                    map.push(
                        new Tile({
                            position: {
                                x:Tile.getWidth() * j,
                                y:Tile.getHeight() * i
                            }
                        })
                        
                    );
                break;
            }
        })
    });

}

function movePlayer(){

    if(gameOver) return;
    
    const speed = 2;
    
    if(inputs.wPressed && player.y > 0){
        player.y -= speed;
    }
    
    if(inputs.sPressed && player.y + player.height < canvas.height){
        player.y += speed;
    }
    
    if(inputs.dPressed && player.x + player.width < canvas.width){
        player.x += speed;
    }
    
    if(inputs.aPressed && player.x > 0){
        player.x -= speed;
    }
}