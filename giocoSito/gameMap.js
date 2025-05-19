export default class Tile{
    
    static width;
    static height;

    constructor({position}){
        this.position = position;
        this.width = 70;
        this.height = 70;
    }

    draw(ctx){
        ctx.fillStyle = "gray";
        ctx.fillRect(this.position.x,this.position.y,this.width,this.height);
    }

    static getWidth() {
        return 35;
    }

    static getHeight() {
        return 35;
    }
}