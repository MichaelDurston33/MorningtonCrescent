import $ from "jquery";

class ShowMenu {
  constructor() {
    this.menu = $("#links");
    this.openButton = $("#openButton");
    this.events();
  }

  events() {
    this.openButton.on("click", this.openMenu.bind(this));
  }

  openMenu() {
    this.menu.toggleClass("shown");
  }
}

export default ShowMenu;
