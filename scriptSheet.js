function initMap() {
    var bakeryLocation = {
        lat: 22.307678177636372,
        lng: 114.18271179021303
    };
    var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 19,
        center: bakeryLocation
    });
    var marker = new google.maps.Marker({
        position: bakeryLocation,
        map: map
    });
}

function validateForm() {
    var name = document.forms["contactForm"]["name"].value;
    if (name === "") {
        alert("Name must be filled out");
        return false;
    }

    var email = document.forms["contactForm"]["email"].value;
    var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    if (!re.test(email)){
        alert("Invaldid email");
        return false;
    }

    var message = document.forms["contactForm"]["message"].value;
     if (message === "") {
        alert("The message box must be filled out");
        return false;
    }
}

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
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}


