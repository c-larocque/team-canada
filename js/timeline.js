$(document).foundation()



var divs = ["Div4", "Div5"];
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

    $(function() {
      $('#slides5').slidesjs({
        width: 940,
        height: 300,
        navigation: false
      });
      $('#slides6').slidesjs({
        width: 940,
        height: 300,
        navigation: false,
      });
       document.querySelector("#Div5").style.display = "none"; 
    });


