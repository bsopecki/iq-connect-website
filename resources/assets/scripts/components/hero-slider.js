const Flickity = require('flickity');
const CONFIG = {
    WRAPPER: '.hero',
};

const flickity = {
    init() {
        const {WRAPPER} = CONFIG;
        this.flkty = new Flickity( WRAPPER, {
            draggable: true,
            cellAlign: 'left',
            contain: true,
            prevNextButtons: false,
            pageDots: true,
            autoPlay: false,
          });
    },
};


export default flickity;

