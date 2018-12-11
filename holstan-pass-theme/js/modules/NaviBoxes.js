import $ from "jquery";

class naviBox {
  constructor() {
    this.cube = $(".cube");
    this.about = $(".naviBox--About");
    this.shop = $(".naviBox--Staff");
    this.gallery = $(".naviBox--Gallery");
    this.tours = $(".naviBox--Tours");
    this.events = $(".naviBox--Events");
    this.contacts = $(".naviBox--Contacts");
    this.hovered = false;
    this.event();
    this.cubeFloat(false);
    this.interval;

    //Texxt
  }

  event() {
    //placemat height

    //ABOUT
    this.about.on("mouseover", this.showSelected.bind(this, "about"));
    this.about.on("mouseout", this.hideAbout.bind(this));
    //SHOP
    this.shop.on("mouseover", this.showSelected.bind(this, "shop"));
    this.shop.on("mouseout", this.hideAbout.bind(this));
    //Gallery
    this.gallery.on("mouseover", this.showSelected.bind(this, "gallery"));
    this.gallery.on("mouseout", this.hideAbout.bind(this));
    //tours
    this.tours.on("mouseover", this.showSelected.bind(this, "tours"));
    this.tours.on("mouseout", this.hideAbout.bind(this));
    //events
    this.events.on("mouseover", this.showSelected.bind(this, "events"));
    this.events.on("mouseout", this.hideAbout.bind(this));
    //contacts
    this.contacts.on("mouseover", this.showSelected.bind(this, "contacts"));
    this.contacts.on("mouseout", this.hideAbout.bind(this));
  }

  showSelected(string) {
    this.hovered = true;
    this.cube.css("transform", "");

    switch (string) {
      case "about":
        this.cube.css("transform", "translateZ(-100px) rotateY(3deg)");
        console.log(this.hovered);
        this.cubeFloat(true);
        break;
      case "shop":
        this.cube.css("transform", "translateZ(-100px) rotateY(180deg)");
        this.cubeFloat(true);

        break;
      case "gallery":
        this.cube.css("transform", "translateZ(-100px) rotateY(-90deg)");
        this.cubeFloat(true);

        break;
      case "tours":
        this.cube.css("transform", "translateZ(-100px) rotateY(90deg)");
        this.cubeFloat(true);

        break;
      case "events":
        this.cube.css(
          "transform",
          "translateZ(-100px) rotateY(3deg) rotateX(-90deg)"
        );
        this.cubeFloat(true);

        break;
      case "contacts":
        this.cube.css(
          "transform",
          "translateZ(-100px) rotateY(3deg) rotateX(90deg)"
        );
        this.cubeFloat(true);

        break;
    }
  }
  hideAbout() {
    this.hovered = false;
    this.cube.css(
      "transform",
      "translateZ(-100px) rotateY(35deg) rotateX(25deg)"
    );
    this.cubeFloat(false);
  }

  cubeFloat(arg) {
    var count = 0;
    var cubo = this.cube;
    if (!arg) {
      this.interval = setInterval(function() {
        count += 2;
        cubo.css(
          "transform",
          "translateZ(-50px) rotateY(" +
            count +
            "deg) rotateX(" +
            count +
            "deg)"
        );
      }, 50);
    } else {
      clearInterval(this.interval);
    }
  }

  addHeight() {
    console.log(this.placemat);
    this.placemat.css("height", w.innerHeight + "px");
  }
}

export default naviBox;
