import $ from "jquery";

class Cube {
  constructor() {
    this.clickable = $("clickable");
    this.container = $(".buttonContainer");
    this.cubeLogic();
  }

  cubeLogic() {
    for (var i = 0; i < 11; i++) {
      this.container.append('<div class="buttonLine" id=' + i + '" />');
    }

    var allLines = document.querySelectorAll(".buttonLine");
    console.log(allLines);

    var buttonLines = Array.prototype.slice.call(allLines);

    var counter = 0;

    for (var u = 0; u < buttonLines.length; u++) {
      counter++;

      if (counter == 6) {
        buttonLines[u].style.opacity = "0";
      }

      buttonLines[u].style.width = counter * 1.84 + "rem";
      buttonLines[u].style.height = counter * 1.84 + "rem";
      buttonLines[u].style.zIndex = buttonLines.length - u;

      if (u % 10 == 0) {
        counter = 0;
      }
    }
  }
}

export default Cube;
