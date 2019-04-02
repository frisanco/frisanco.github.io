// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("myBtn").style.display = "block";
    } else {
        document.getElementById("myBtn").style.display = "none";
    }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
    document.body.scrollTop = 0; // For Safari
    document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}

// When user clicks button, scroll to About Me section
function clickFunction(id) {
    console.log(id);
    var elmnt = document.getElementById(id);
    console.log(elmnt);
    elmnt.scrollIntoView();
}

function goToMaps() {
    window.open("https://goo.gl/maps/fejXGTJzti52");
}
/*
// When user clicks button, scroll to About Me section
function aboutFunction(event) {
    event.preventDefault();
    var elmnt = document.getElementById("about me");
    elmnt.scrollIntoView();
}

// When user clicks button, scroll to Education section
function educationFunction() {
  var elmnt = document.getElementById("edu");
  elmnt.scrollIntoView();
}

// When user clicks button, scroll to Work section
function workFunction() {
  var elmnt = document.getElementById("work");
  elmnt.scrollIntoView();
}

// When user clicks button, scroll to Certifications section
function certFunction() {
  var elmnt = document.getElementById("certs");
  elmnt.scrollIntoView();
}

// When user clicks button, scroll to Projects section
function projectsFunction() {
  var elmnt = document.getElementById("proj");
  elmnt.scrollIntoView();
}*/
