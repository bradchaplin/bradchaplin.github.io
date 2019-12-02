// When the user scrolls the page, execute myFunction
window.onscroll = function() {myFunction()};

// Get the header //
var header = document.getElementById("myHeader");
var content = document.getElementById("myContent");

// Get the offset position of the navbar
var sticky = header.offsetTop;
var stickyPadding = content.offsetTop;
//Add the sticky class to the header when you reach its scroll position.
//Remove "sticky" when you leave the scroll position.
//Add stickyPadding class to content class so that the padding under the header does not get affected.
//Remove stickyPadding when not sticky and add content class back.
function myFunction() {
  if (window.pageYOffset > sticky) {
  	header.classList.add("sticky");
    content.classList.add("stickyPadding");
 } else {
   	header.classList.remove("sticky");
   	content.classList.remove("stickyPadding");
   	content.classList.add("content");
  }
} 


//<script>
//window.onscroll = function() {myFunction()};

//var navbar = document.getElementById("myHeader");
//var sticky = myHeader.offsetTop;

//function myFunction() {
 // if (window.pageYOffset >= sticky) {
   // myHeader.classList.add("sticky")
  //} else {
    //myHeader.classList.remove("sticky");
  //}
//}
//</script>
