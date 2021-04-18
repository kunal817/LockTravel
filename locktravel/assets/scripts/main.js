window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
    document.getElementById("nav").style.padding = "12px 0px";
    document.getElementsByClassName("logo").style.fontSize = "25px";
  } else {
    document.getElementById("nav").style.padding = "20px 0px";
    document.getElementsByClassName("logo").style.fontSize = "35px";
  }
}

function packageFun(){
  alert("To book this package, you need to Login First");
}

function ContactFun(){
  alert("Thank you for contacting us. We will reach to you as soon as possible.");
}