export const bushImage = new Image();

export default class Tile {
    static width;
    static height;

    constructor({ position }) {
        this.position = position;
        this.width = 64;
        this.height = 64;
    }

    draw(ctx) {
        ctx.drawImage(bushImage, this.position.x, this.position.y, this.width, this.height);
    }

    static getWidth() {
        return this.width;
    }

    static getHeight() {
        return this.height;
    }
}