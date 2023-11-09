// Burger menus
document.addEventListener('DOMContentLoaded', function() {
    // open
    const burger = document.querySelectorAll('.navbar-burger');
    const menu = document.querySelectorAll('.navbar-menu');

    if (burger.length && menu.length) {
        for (var i = 0; i < burger.length; i++) {
            burger[i].addEventListener('click', function() {
                for (var j = 0; j < menu.length; j++) {
                    menu[j].classList.toggle('hidden');
                }
            });
        }
    }

    // close
    const close = document.querySelectorAll('.navbar-close');
    const backdrop = document.querySelectorAll('.navbar-backdrop');

    if (close.length) {
        for (var i = 0; i < close.length; i++) {
            close[i].addEventListener('click', function() {
                for (var j = 0; j < menu.length; j++) {
                    menu[j].classList.toggle('hidden');
                }
            });
        }
    }

    if (backdrop.length) {
        for (var i = 0; i < backdrop.length; i++) {
            backdrop[i].addEventListener('click', function() {
                for (var j = 0; j < menu.length; j++) {
                    menu[j].classList.toggle('hidden');
                }
            });
        }
    }
});

var searchInput = document.getElementById('search-input');
var searchButton = document.getElementById('search-button');

searchButton.addEventListener('click', function() {
    var searchQuery = searchInput.value;
});

  // JavaScript to show/hide the "Kembali ke Atas" button
  const backButton = document.getElementById("back-to-top");

  window.addEventListener("scroll", () => {
      if (window.scrollY > 300) {
          backButton.classList.add("show");
      } else {
          backButton.classList.remove("show");
      }
  });

  function scrollToTop() {
      window.scrollTo({ top: 0, behavior: "smooth" });
  }


