new Glide('.glide', {
    type: 'carousel',
    // startAt: ,
    perView: 5,
    focusAt: 2,
    gap: 40,
    swipeThreshold:80,
    // animationDuration:0,
    breakpoints: {
        800: {
            perView: 1
        },
        992: {
            perView: 3,
            focusAt: 1,
        }
    }
}).mount()
new Glide('.glide-2', {
    type: 'carousel',
    // startAt: ,
    perView: 3,
    focusAt: 1,
    gap: 100,
    // animationDuration:0,
    breakpoints: {
        800: {
            perView: 1,
        },
        992: {
            perView: 3,
            focusAt: 1,
        }
    }
}).mount()

new Glide('.glide-slide-mobile', {
    type: 'carousel',
    // startAt: ,
    perView: 3,
    focusAt: 1,
    gap: 20,
    swipeThreshold:80,
    // animationDuration:0,
    breakpoints: {
        800: {
            perView: 1,
        },
        992: {
            perView: 3,
            focusAt: 1,
        }
    }
}).mount()
