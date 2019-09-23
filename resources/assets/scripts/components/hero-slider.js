const Flickity = require('flickity');
const CONFIG = {
    WRAPPER: '.hero',
};

const flickity = {
    init() {
        const {WRAPPER} = CONFIG;
        this.elem = document.querySelector(WRAPPER);
        if(this.elem) {
            this.flkty = new Flickity( WRAPPER, {
                draggable: true,
                cellAlign: 'left',
                contain: true,
                prevNextButtons: false,
                pageDots: true,
                autoPlay: false,
              });
        }
    },
};


export default flickity;

