import $ from "jquery";

class Triangles {
  constructor() {
    this.stripeContainer = $("[class^='stripeContainer']");
    this.events();
  }

  events() {
    this.stripeContainer.on($(document).ready(this.addStripes.bind(this)));
    // this.stripeContainer.on($(document).ready(this.addWidths.bind(this)));
  }

  addStripes() {
    //Creates 20 stripes.
    var container = $("<div />");
    for (var i = 0; i < 20; i++) {
      $("<div class=" + "stripeContainer--stripe" + " />").appendTo(container);
    }
    $(this.stripeContainer).html(container);

    //The next set of code changes the width of each line.
    var allWidths = [];
    //animation Duration array
    var allTimes = [];

    var longestTime = 2.5;
    var h = 0;
    for (h; h < longestTime; h += 0.12) {
      allTimes.push(h);
    }

    var highestWidth = 100;
    var i = 0;
    for (i; i < highestWidth; i += 5) {
      allWidths.push(i);
    }
    //Now we have the array of all the widths that will be
    //distributed to all the stripes.

    var stripes = document.querySelectorAll(".stripeContainer--stripe");
    //Make into array
    var stripesArray = Array.prototype.slice.call(stripes);
    //Loop over the array. Every 20 batches means there is a new triangle,
    //so the loop will start again every 20th set...
    stripesArray.forEach(function(div, i) {
      if (i % 20 == 0 && i !== 0) {
        var longestTime = 2.5;
        var highestWidth = 100;
        var j = 0;
        var n = 0;
        for (j; j < highestWidth; j += 5, n += 0.12) {
          allWidths.push(j);
          allTimes.push(n);
        }
        div.style.width = allWidths[i] + "%";
        div.style.animationDelay = allTimes[n] + "s";
      }
      div.style.width = allWidths[i] + "%";
      div.style.animationDelay = allTimes[i] + "s";
    });
  }
}

export default Triangles;
