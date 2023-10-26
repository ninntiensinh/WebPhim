function Slider(sliderElement) {
    this.slider = sliderElement.querySelector('.list');
    this.items = this.slider.querySelectorAll('.item');
    this.prev = sliderElement.querySelector('.prev');
    this.next = sliderElement.querySelector('.next');
    this.dots = sliderElement.parentElement.querySelectorAll('.dots li');
    this.lengthItems = Math.ceil(this.items.length / 6);
    this.active = 0;

    let self = this;
    let itemWidth = this.items[0].offsetWidth;
    this.dots.forEach((dot, index) => {
        dot.addEventListener('click', function () {
            self.active = index;
            self.reloadSlider();
        });
    });

    this.next.onclick = function () {
        if (self.active < self.lengthItems - 1) {
            self.active++;
            self.reloadSlider();
        }
    }
    this.prev.onclick = function () {
        if (self.active > 0) {
            self.active--;
            self.reloadSlider();
        }
    }

    this.reloadSlider = function () {
        // Calculate new position based on the width of the slider
        self.slider.style.left = -(self.active * itemWidth*6) + 'px';
console.log(self.active);
        let last_active_dot = sliderElement.parentElement.querySelector('.dots li.active');
        if (last_active_dot) {
            last_active_dot.classList.remove('active');
        }
        self.dots[self.active].classList.add('active');

        // Update visibility of navigation buttons
        self.prev.style.visibility = (self.active === 0) ? 'hidden' : 'visible';
        self.next.style.visibility = (self.active === self.lengthItems - 1 || self.items.length < 6) ? 'hidden' : 'visible';
    }

    window.onresize = function (event) {
        itemWidth = document.querySelector('.item').offsetWidth;
        self.reloadSlider();
    };

    // Initialize slider
    self.reloadSlider();
}

// Initialize sliders
let sliders = document.querySelectorAll('.slider');
sliders.forEach(function (sliderElement) {
    new Slider(sliderElement);
});
