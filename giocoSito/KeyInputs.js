class KeyInputs {

    wPressed = false;
    aPressed = false;
    sPressed = false;
    dPressed = false;

    constructor(){
    }

    getKeyPressed(e) {

        if (e.key === 'w') {
            this.wPressed = true;
        }
        if (e.key === 'a') {
            this.aPressed = true;
        }
        if (e.key === 's') {
            this.sPressed = true;
        }
        if (e.key === 'd') {
            this.dPressed = true;
        }
    }

    /*getKeyReleased(e) {

        if (e.key !== 'w') {
            this.wPressed = false;
        }
        if (e.key !== 'a') {
            this.aPressed = false;
        }
        if (e.key !== 's') {
            this.sPressed = false;
        }
        if (e.key !== 'd') {
            this.dPressed = false;
        }
    }*/
}