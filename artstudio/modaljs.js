
// Get the modal
var modal = document.getElementById("myModal");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close_modal")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}

  /* ////////////////////////// login form popup /////////////////////////////// */
  function openForm() {
    // document.getElementsByClassName("main_container").style.display = "block";
    document.getElementById("myForm").style.display = "block";
  }

  function closeForm() {
    // document.getElementsByClassName("main_container").style.display = "block";
    document.getElementById("myForm").style.display = "none";
  }

// When the user clicks on <span> (x), close the modal
// var div = document.getElementsByClassName("close_form")[0];
// div.onclick = function() {
//   document.getElementById("myForm").style.display = "none";
// }
  