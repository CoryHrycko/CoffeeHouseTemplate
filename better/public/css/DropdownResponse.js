function openNav() {
    document.getElementById("myNav").style.width = "100%";
  }
  
  function closeNav() {
    document.getElementById("myNav").style.width = "0%";
  }

window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
    document.getElementById("navbar").style.padding = ".25vw 1vw";
  } else {
    document.getElementById("navbar").style.padding = "3vw 1vw";
    // document.getElementById("navbar").style.transform= "scale(1.1)";
  }
}