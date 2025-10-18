<!-- Buttons flottants à gauche -->
<div class="floating-buttons">
    <a href="{{route('web.actualites')}}" class="btn-floating btn-news" title="Actualités">
        <i class="fas fa-newspaper"></i>
    </a>
    <a href="#" target="_blank" class="btn-floating btn-whatsapp" title="WhatsApp">
        <i class="fab fa-whatsapp"></i>
    </a>
    {{-- <a href="#" class="btn-floating btn-translate" title="Traduction">
        <i class="fas fa-language"></i>
    </a> --}}
    <div class="btn-group dropup floating-translate">
    <button type="button" class="btn btn-secondary dropdown-toggle btn-floating" data-bs-toggle="dropdown" aria-expanded="false">
        <i class="fas fa-language"></i>
    </button>
    <ul class="dropdown-menu">
        <li class="dropdown-header d-flex justify-content-between align-items-center">
            <span>Choisir la langue</span>
            <button class="btn btn-sm btn-light" onclick="this.closest('.dropdown-menu').classList.remove('show')">X</button>
        </li>
        <li><a class="dropdown-item" href="?lang=fr"><img src="{{asset('assets/img/fr.png')}}" alt="French Flag"> Français</a></li>
        <li><a class="dropdown-item" href="?lang=en"><img src="{{asset('assets/img/en.png')}}" alt="English Flag">English</a></li>
    </ul>
</div>

</div>
<!-- Bouton flottant à droite -->
<div class="floating-assist">
    <button class="btn btn-primary btn-floating" id="liveToastBtn" title="Assistance IA">
        <i class="fas fa-robot"></i>
    </button>
</div>

<!-- Toast Bootstrap -->
<div class="position-fixed bottom-0 end-0 p-3" style="z-index: 1060;">
  <div id="liveToast" class="toast hide" role="alert" aria-live="assertive" aria-atomic="true" data-bs-autohide="false">
    <div class="toast-header">
      <strong class="me-auto">Moi c'est brain assistant virtuel de ISN </strong>
      <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
    </div>
    <div class="toast-body">
      <div id="chat-container" class="border">
    <!-- En-tête -->
    <div id="chat-header" class="d-flex align-items-center p-2 bg-primary text-white">
      <img src="{{asset('assets/img/logo.jpg')}}" alt="Logo" class="rounded-circle border border-light" width="40" height="40">
      <div class="ms-2">
        <div class="fw-bold small">Brain - ISN Assistant</div>
        <div class="small text-light">🟢 En ligne</div>
      </div>
    </div>

    <!-- Zone de chat -->
    <div id="chatbox"></div>

    <!-- Zone d'entrée -->
    <div id="input-area" class="d-flex p-2 bg-primary"
        data-route="{{ route('chatbot') }}" 
        data-token="{{ csrf_token() }}">
      <form id="chatForm" class="d-flex p-2 bg-primary">
            <input id="userInput" type="text" class="form-control rounded-pill" placeholder="Écrivez un message..." required>
            <button type="submit" class="btn btn-primary ms-2 rounded-pill">Envoyer</button>
      </form>
    </div>
  </div>
    </div>
  </div>
</div>


<div class="container-fluid bg-dark text-light footer pt-3 mt-3 wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="row g-5">
            
            <!-- Présentation -->

            <div class="col-lg-3 col-md-6 d-flex flex-column align-items-center justify-content-center text-center">
                <img src="{{asset('assets/img/logo.jpg')}}" alt="ISNP Logo" 
                    class="img-fluid mb-3" 
                    style="max-height: 120px;">
            </div>

            <!-- Liens rapides -->
            <div class="col-lg-3 col-md-6">
                <h4 class="text-white mb-3">Liens rapides</h4>
                <a class="btn btn-link" href="#">Accueil</a>
                <a class="btn btn-link" href="#">À propos de nous</a>
                <a class="btn btn-link" href="#">Actualités</a>
                <a class="btn btn-link" href="#">Contact</a>
                <a class="btn btn-link" href="#">FAQs</a>
            </div>

            <!-- Nos Campus -->
            <div class="col-lg-3 col-md-6">
                <h4 class="text-white mb-3">Nos Campus</h4>
                <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i><strong>Bafoussam :</strong> Place des fêtes, en face de la CAPLAMI</p>
                <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i><strong>Bandjoun :</strong> Entrée principale du marché central</p>
            </div>

            <!-- Contact -->
            <div class="col-lg-3 col-md-6">
                <h4 class="text-white mb-3">Contact</h4>
                <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>(+237) 659 717 141</p>
                <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>(+237) 682 628 659</p>
                <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>(+237) 697 128 923</p>
                <p class="mb-2"><i class="fa fa-envelope me-3"></i>isnbafoussam@gmail.com</p>
                <div class="d-flex pt-2">
                    <a class="btn btn-outline-light btn-social" href="#"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-outline-light btn-social" href="#"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-outline-light btn-social" href="#"><i class="fab fa-tiktok"></i></a>
                    <a class="btn btn-outline-light btn-social" href="#"><i class="fab fa-instagram"></i></a>
                    <a class="btn btn-outline-light btn-social" href="#"><i class="fab fa-whatsapp"></i></a>
                </div>
            </div>

        </div>
    </div>

    <!-- Bas de page -->
    <div class="container">
        <div class="copyright">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    &copy; ISNP-Bafoussam, Tous droits réservés.
                    Développé par <a class="border-bottom" href="#">FK & Houchi Startup</a>
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <div class="footer-menu">
                        <a href="#">Inscription</a>
                        <a href="#">Contact</a>
                        <a href="#">FAQs</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
