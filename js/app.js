$(document).foundation() 

var divs = ["Div1", "Div2", "Div3"];
    var visibleDivId = null;
    function divVisibility(divId) {
      if(visibleDivId === divId) {
        visibleDivId = null;
      } else {
        visibleDivId = divId;
      }
      hideNonVisibleDivs();
    }
    function hideNonVisibleDivs() {
      var i, divId, div;
      for(i = 0; i < divs.length; i++) {
        divId = divs[i];
        div = document.getElementById(divId);
        if(visibleDivId === divId) {
          div.style.display = "block";
        } else {
          div.style.display = "none";
        }
      }
    }


var backButton = document.querySelector("#backTop");

//Back to Top
/*function backToTopFunc() {

  if (document.body.scrollTop >= 500) {
    backButton.style.display = "block";
  }
  else {
    backButton.style.display= "none";
  }

}*/

function scrollToTop() {
  document.body.scrollTop = "0";
  console.log("worked");
}

document.body.addEventListener("scroll", backToTopFunc, false);
backButton.addEventListener("click", scrollToTop, false);
backToTopFunc.call();
