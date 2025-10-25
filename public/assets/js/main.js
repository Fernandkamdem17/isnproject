(function ($) {
    "use strict";

    // Spinner
    var spinner = function () {
        setTimeout(function () {
            if ($('#spinner').length > 0) {
                $('#spinner').removeClass('show');
            }
        }, 1);
    };
    spinner();
    
    
    // Initiate the wowjs
    new WOW().init();


    // Sticky Navbar
    $(window).scroll(function () {
        if ($(this).scrollTop() > 300) {
            $('.sticky-top').css('top', '0px');
        } else {
            $('.sticky-top').css('top', '-100px');
        }
    });

    // Sticky Announcement
    $(window).scroll(function () {
        if ($(this).scrollTop() > 300) {
            $('#announcementBar').css('top', '0px');   
            $('.sticky-top').css('top', '40px');
        } else {
            $('#announcementBar').css('top', '-40px'); 
            $('.sticky-top').css('top', '-100px');
        }
    });


    
    
    // Dropdown on mouse hover
    const $dropdown = $(".dropdown");
    const $dropdownToggle = $(".dropdown-toggle");
    const $dropdownMenu = $(".dropdown-menu");
    const showClass = "show";
    
    $(window).on("load resize", function() {
        if (this.matchMedia("(min-width: 992px)").matches) {
            $dropdown.hover(
            function() {
                const $this = $(this);
                $this.addClass(showClass);
                $this.find($dropdownToggle).attr("aria-expanded", "true");
                $this.find($dropdownMenu).addClass(showClass);
            },
            function() {
                const $this = $(this);
                $this.removeClass(showClass);
                $this.find($dropdownToggle).attr("aria-expanded", "false");
                $this.find($dropdownMenu).removeClass(showClass);
            }
            );
        } else {
            $dropdown.off("mouseenter mouseleave");
        }
    });
    
    
    // Back to top button
    $(window).scroll(function () {
        if ($(this).scrollTop() > 300) {
            $('.back-to-top').fadeIn('slow');
        } else {
            $('.back-to-top').fadeOut('slow');
        }
    });
    $('.back-to-top').click(function () {
        $('html, body').animate({scrollTop: 0}, 0, 'easeInOutExpo');
        return false;
    });

    // Header carousel
    $(".header-carousel").owlCarousel({
        autoplay: true,
        smartSpeed: 1500,
        items: 1,
        dots: false,
        loop: true,
        nav : true,
        navText : [
            '<i class="bi bi-chevron-left"></i>',
            '<i class="bi bi-chevron-right"></i>'
        ]
    });


    // Testimonials carousel
    $(".testimonial-carousel").owlCarousel({
        autoplay: true,
        smartSpeed: 1000,
        center: true,
        margin: 24,
        dots: true,
        loop: true,
        nav : false,
        responsive: {
            0:{
                items:1
            },
            768:{
                items:2
            },
            992:{
                items:3
            }
        }
    });

    // Toast Bootstrap pour Assistance IA
    var toastEl = document.getElementById('liveToast');
    if (toastEl) {
        var liveToast = new bootstrap.Toast(toastEl);

        // Afficher le toast au clic
        $('#liveToastBtn').on('click', function() {
            liveToast.show();
        });
    }

    
    
})(jQuery);


function showWelcomeMessage() {
      let chatbox = document.getElementById("chatbox");

    // Vider le chat avant d’afficher le message
    chatbox.innerHTML = "";

      // Affiche d'abord les "..."
      let typingIndicator = document.createElement("div");
      typingIndicator.className = "typing";
      typingIndicator.innerHTML = '<div class="dot"></div><div class="dot"></div><div class="dot"></div>';
      chatbox.appendChild(typingIndicator);
      chatbox.scrollTop = chatbox.scrollHeight;

      // Après 2 secondes → afficher message de bienvenue
      setTimeout(() => {
        typingIndicator.remove();
        let botMsg = document.createElement("div");
        botMsg.className = "message assistant";
        botMsg.innerHTML = "Bonjour ! Je suis Brain, l'assistant virtuel de ISN.<br>Souhaitez-vous vous former dans un domaine des métiers du digital, du paramédical ou des cours de langue ?";
        chatbox.appendChild(botMsg);
        chatbox.scrollTop = chatbox.scrollHeight;
      }, 2000);
    }


    document.getElementById("chatForm").addEventListener("submit", function(e) {
    e.preventDefault(); // Empêche le rechargement de page
    sendMessage();
});

    function sendMessage() {
    let userText = document.getElementById("userInput").value;
    if (!userText) return;

    let chatbox = document.getElementById("chatbox");

    // Message utilisateur
    let userMsg = document.createElement("div");
    userMsg.className = "message user";
    userMsg.innerText = userText;
    chatbox.appendChild(userMsg);

    // Indicateur "..."
    let typingIndicator = document.createElement("div");
    typingIndicator.className = "typing";
    typingIndicator.innerHTML = '<div class="dot"></div><div class="dot"></div><div class="dot"></div>';
    chatbox.appendChild(typingIndicator);
    chatbox.scrollTop = chatbox.scrollHeight;

    const container = document.getElementById('input-area');
const route = container.dataset.route;
const token = container.dataset.token;

fetch(route, {
    method: "POST",
    headers: {
        "Content-Type": "application/json",
        "X-CSRF-TOKEN": token
    },
    body: JSON.stringify({ message: userText })
}).then(response => response.json()).then(data => {
        typingIndicator.remove();
        let botMsg = document.createElement("div");
        botMsg.className = "message assistant";
        botMsg.innerText = data.response;
        chatbox.appendChild(botMsg);
        chatbox.scrollTop = chatbox.scrollHeight;
    });

    document.getElementById("userInput").value = "";
}


    // Détection de la touche Entrée
    document.getElementById("userInput").addEventListener("keydown", function(event) {
      if (event.key === "Enter") {
        event.preventDefault();
        sendMessage();
      }
    });

    // Message de bienvenue au chargement
    liveToastBtn.addEventListener("click", function() {
    showWelcomeMessage();
});


var toastEl = document.getElementById('liveToast');
toastEl.addEventListener('hidden.bs.toast', function () {
    document.getElementById('chatbox').innerHTML = "";
});

//Initialisation Pure Counter
window.addEventListener('DOMContentLoaded', (event) => {
    if (typeof PureCounter !== "undefined") {
        new PureCounter();
    } else {
        console.error("PureCounter n’est pas chargé !");
    }
});

//Initialisation glightbox
const lightbox = GLightbox({
    selector: '.glightbox',
    loop: true,           // permet de naviguer en boucle
    autoplayVideos: false // si tu as des vidéos, sinon false
});


//Traduction
const translateBtn = document.querySelector('.btn-translate');
const dropdown = document.querySelector('.dropdown-languages');

translateBtn.addEventListener('click', (e) => {
    e.preventDefault();
    dropdown.style.display = dropdown.style.display === 'flex' ? 'none' : 'flex';
});

// Fermer si on clique à l'extérieur
document.addEventListener('click', (e) => {
    if (!translateBtn.contains(e.target)) {
        dropdown.style.display = 'none';
    }
});

