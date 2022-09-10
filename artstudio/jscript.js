function myFunction() {
    var x = document.getElementById("myDIV");
    if (x.style.width === "300px") {
      x.style.width = "0";
    } 
    else {
      x.style.width = "300px";
    }
  }

function func() {
    var x = document.getElementById("myDIV");
    x.style.width = "0";
}

/*////////////////////////////////////clock/////////////////////////////////////////////////////*/

setInterval(myTimer ,1000);
function myTimer() {
  const d = new Date();
  document.getElementById("clock").innerHTML = d.toLocaleTimeString();
}
///////////////////////////////////////slideshow/////////////////////////////////////////////
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  var nextSlide = document.getElementsByClassName("slide_next");
  var prevSlide = document.getElementsByClassName("slide_prev");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
      nextSlide[i].style.display = "none";  
      prevSlide[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  

  var indi_next;
  var indi_prev;
  if (slideIndex===1) {indi_prev= slides.length; indi_next=0;}
  else if (slideIndex===slides.length) {indi_next= slides.length; indi_prev=0;}
  else {indi_next=0; indi_prev=0}

  nextSlide[slideIndex - indi_next].style.display = "block";  
  prevSlide[slideIndex-2 + indi_prev].style.display = "block";  
  dots[slideIndex-1].className += " active";
}


////////////////////////////////////////////////////////////////////////////////
// When the user scrolls down 80px from the top of the document, resize the navbar's padding and the logo's font size
// window.onscroll = function() {scrollFunction()};

// function scrollFunction() {
//   if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
//     document.getElementsByClassName("iam").style.padding = "10px 0";
//     // document.getElementById("logo").style.fontSize = "25px";
//   } else {
//     document.getElementsByClassName("iam").style.padding = "2px 0";
//     // document.getElementById("logo").style.fontSize = "35px";
//   }
// }
//////////////////////////////////////////////////////////////////////////////////
// function show_next_page(){
//   document.getElementById("second_page_buy").style.display = "block";
//   document.getElementById("first_page_buy").style.display = "none";
// }
//////////////////////////////////////////////////////////
// function setCookie(cname,cvalue,exdays) {
//     const d = new Date();
//     d.setTime(d.getTime() + (exdays*24*60*60*1000));
//     let expires = "expires=" + d.toGMTString();
//     document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
//   }
  
//   function getCookie(cname) {
//     let name = cname + "=";
//     let decodedCookie = decodeURIComponent(document.cookie);
//     let ca = decodedCookie.split(';');
//     for(let i = 0; i < ca.length; i++) {
//       let c = ca[i];
//       while (c.charAt(0) == ' ') {
//         c = c.substring(1);
//       }
//       if (c.indexOf(name) == 0) {
//         return c.substring(name.length, c.length);
//       }
//     }
//     return "";
//   }
  
//   function checkCookie() {
//     let user = getCookie("username");
//     if (user != "") {
//       alert("Welcome again " + user);
//     } else {
//        user = prompt("Please enter your name:","");
//        if (user != "" && user != null) {
//          setCookie("username", user, 30);
//        }
//     }
//   }
