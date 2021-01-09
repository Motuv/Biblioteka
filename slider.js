class Slider {
  constructor(imageArr) {
    this.images = imageArr;
    this.slide = null;
    this.prevBtn = null;
    this.nextBtn = null;
    this.image = null;
    this.slideCaption = null;
    this.currentSlide = 0;

    this.UiSelectors = {
      slide: "[data-slide]",
      buttonPrev: "[data-button-prev]",
      buttonNext: "[data-button-next]",
    };
  }

  initializeSlider() {
    this.slide = document.querySelector(this.UiSelectors.slide);
    this.prevBtn = document.querySelector(this.UiSelectors.buttonPrev);
    this.nextBtn = document.querySelector(this.UiSelectors.buttonNext);

    this.image = document.createElement("img");
    this.image.classList.add("slide__image");
    this.setSlideAttributes();
    this.slide.appendChild(this.image);

    this.addListeners();
    this.addSlideCaption();
    this.disabledBtn();
    this.changeSlideCaption();
  }

  addListeners() {
    this.prevBtn.addEventListener("click", () =>
      this.changeSlide(this.currentSlide - 1)
    );
    this.nextBtn.addEventListener("click", () =>
      this.changeSlide(this.currentSlide + 1)
    );
  }

  addSlideCaption() {
    this.slideCaption = document.createElement("figcaption");
    this.slideCaption.classList.add("slide__caption");
    const caption = document.createElement("input");
    let string = "";

    for (let i = 0; i < this.images.length; i++) {
      string += `<input type="radio" id=${i + 1} disabled>
      <label for=${i + 1}></label>`;
    }
    this.slideCaption.innerHTML = string;
    this.slide.appendChild(this.slideCaption);
  }

  changeSlideCaption() {
    const tmp = document.querySelectorAll(`.slide__caption [id]`);
    tmp.forEach((item) => item.removeAttribute("checked"));

    document
      .querySelector(`.slide__caption [id="${this.currentSlide + 1}"]`)
      .setAttribute("checked", true);
  }

  disabledBtn() {
    if (this.currentSlide === 0) this.prevBtn.setAttribute("disabled", true);
    else this.prevBtn.removeAttribute("disabled");

    if (this.currentSlide === this.images.length - 1)
      this.nextBtn.setAttribute("disabled", true);
    else this.nextBtn.removeAttribute("disabled");
  }

  changeSlide(index) {
    this.currentSlide = index;
    this.changeSlideCaption();
    this.setSlideAttributes();
  }

  setSlideAttributes() {
    this.image.setAttribute("src", this.images[this.currentSlide]);
    this.image.setAttribute("alt", `Slide ${this.currentSlide + 1}`);
    this.disabledBtn();
  }
}
