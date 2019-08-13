const Flickity = require('flickity');
const CONFIG = {
    TRIGGER: 'dot',
    ELEM: 'hero__cell',
    CLASS:'-is-selected',
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
            autoPlay: true,
          });
    },
};


export default flickity;

