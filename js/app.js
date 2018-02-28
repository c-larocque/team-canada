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


//Survey Popup

//Variables
var surveyPop = document.querySelector("#surveyPopUp");
var closeSurvBut = document.querySelector("#closeSurvey");
var ifOpen = true;
var randomBool = Math.random() >= 0.5;

var toTop = document.querySelector("#toTop");

//50% Chance user will get the survey (randomBool)
function userScroll() {

  if(randomBool) {
  if(ifOpen) {
  var fromTop = window.pageYOffset;
  if (fromTop > 500){
    openSurvey();
  }
} else {
  return;
}
}
}

function openSurvey() {
  surveyPop.style.opacity = ".98";
  surveyPop.style.visibility = "visible";
  //console.log("run");
}

function closeSurvey() {
  surveyPop.style.visibility = "hidden";
  surveyPop.style.opacity = "0";
  ifOpen = false;
}

function backToTop() {
  var fromTop = window.pageYOffset;
    if (fromTop > 800){
  toTop.style.opacity = "1";
  toTop.style.visibility = "visible";
} else {
  toTop.style.opacity = "0";
  toTop.style.visibility = "hidden";
}
}


//Listener
closeSurvBut.addEventListener("click", closeSurvey, false);
document.addEventListener("scroll", userScroll, false);
document.addEventListener("scroll", backToTop, false);
