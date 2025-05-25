export default class Enemy {
    width = 64;
    height = 64;
    hitboxWidth = 32;
    hitboxHeight = 32;

    constructor({ position, speed }) {
        this.position = position;
        this.speed = speed; 
        this.image = new Image(); 
        this.image.src = "./gameImages/witchEnemy.png";
        this.velocity = { x: speed, y: 0 };
        this.direction = "right"; // direzione iniziale
    }

    getHitbox() {
        const hitboxWidth = this.width * 0.6;
        const hitboxHeight = this.height * 0.6;
        return {
            x: this.position.x + (this.width - hitboxWidth) / 2,
            y: this.position.y + (this.height - hitboxHeight) / 2,
            width: hitboxWidth,
            height: hitboxHeight
        };
    }

    update(map) {
        if (this.velocity.x === 0 && this.velocity.y === 0) {
            // Decide una nuova direzione quando bloccato
            const directions = [
                { x: this.speed, y: 0 },
                { x: -this.speed, y: 0 },
                { x: 0, y: this.speed },
                { x: 0, y: -this.speed }
            ];
            const random = Math.floor(Math.random() * directions.length);
            this.velocity = directions[random];
        }

        this.position.x += this.velocity.x;
        this.position.y += this.velocity.y;
    }

    draw(ctx) {
        ctx.drawImage(this.image, this.position.x, this.position.y, this.width, this.height);

        const hitbox = this.getHitbox();
        ctx.strokeStyle = "blue";
        ctx.strokeRect(hitbox.x, hitbox.y, hitbox.width, hitbox.height);
    }
}