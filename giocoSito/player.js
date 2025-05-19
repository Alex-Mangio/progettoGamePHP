export default class Player {
    width = 70;
    height = 70;
    imageLoad = false;

    constructor({ position, velocity }) {
        this.position = position;
        this.velocity = velocity;  
        this.image = new Image();
        this.image.src = "./gameImages/hooded_skeletal_character_final_32x32.png";

        this.image.onload = () => {
            this.imageLoad = true;
            console.log("Immagine caricata!");
        };
    }

    drawPlayer(ctx) {
        if (!this.imageLoad) return;
        
        ctx.drawImage(this.image, this.position.x, this.position.y, this.width, this.height);
    }
}