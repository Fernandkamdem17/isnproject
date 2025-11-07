
@extends('master')
@section('title')
    Training-Details
@endsection

@section('content')
    <style>    
        .training-detail .title {
            background: linear-gradient(135deg, #04021e 0%, #1e272e 100%); /* Dégradé stylé */
            color: #f8f9fa;
            padding: 2.5rem 1.5rem; 
            margin-bottom: 2rem;
            border-radius: 1rem;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
        }

        .training-detail .title .icon {
            font-size: 2rem;
            color: #ff8c00;
            margin-bottom: 0.5rem; 
        }
        
        /* Titre principal de la formation */
        .training-detail .title h1 {
            font-size: 2.5rem; 
            font-weight: 700;
            line-height: 1.2;
            color: #f8f9fa;
            margin-top: 1rem;
            margin-bottom: 2rem;
        }

        .training-detail .title .info-block {
            padding: 1rem 0;
            border-right: 1px solid rgba(255, 255, 255, 0.1); /* Séparateur vertical léger */
        }
        .training-detail .title .info-block:last-child {
            border-right: none;
        }

        .training-detail .title .info-block p {
            margin: 0;
            font-size: 1.1rem;
        }

        .training-detail .title .info-block .small {
            color: rgba(255, 255, 255, 0.7);
            font-size: 0.85rem;
            display: block;
        }
        
        /* Bloc de durée/niveau/étudiants */
        .training-detail .title .icon-details i {
            color: #ff8c00;
            margin-right: 0.5rem;
            font-size: 1.1rem;
        }
        .training-detail .title .icon-details p {
            margin: 0;
            padding: 0.5rem 0;
        }
        .training-detail .title .border-secondary {
            border-color: rgba(255, 255, 255, 0.2) !important;
        }


        /* ========================================
        2. Styles de la Carte d'Action (Sidebar)
        ========================================
        */
        .training-detail .demo .card {
            border: 1px solid #e9ecef;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            transition: box-shadow 0.3s ease;
        }
        .training-detail .demo .card:hover {
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
        }
        .training-detail .demo .card-img-top {
            object-fit: cover;
        }
        .training-detail .demo .card-body {
            padding: 1.5rem;
        }
        .training-detail .demo .card-body .star-rating {
            font-size: 1.2rem;
            color: #ffc107; 
            display: flex;
            justify-content: center;
            margin-bottom: 0.5rem;
        }
        /* Mettre en évidence la phrase 90% Pratique */
        .training-detail .demo .card-body .practical-highlight {
            font-size: 1.1rem;
            line-height: 1.2;
            color: #343a40;
            margin-top: 1rem;
            margin-bottom: 1.5rem;
            font-weight: normal;
        }
        .training-detail .demo .card-body .practical-highlight strong {
            display: block;
            font-size: 2.5rem;
            color: #ff8c00;
            font-weight: 900;
        }
        .training-detail .demo .card-body .btn-primary {
            background-color: #04021e;
            border-color: #04021e;
            transition: background-color 0.3s ease, transform 0.2s ease;
            font-weight: bold;
        }
        .training-detail .demo .card-body .btn-primary:hover {
            background-color: #ff8c00;
            border-color: #ff8c00;
            transform: translateY(-2px);
        }
        .training-detail .demo .card-body .btn-primary i {
            font-size: 1rem;
        }

        /* ========================================
        3. Styles des Accordéons
        ========================================
        */
        .accordion-item {
            border: none;
            margin-bottom: 1rem;
            border-radius: 0.5rem;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.05);
            overflow: hidden;
        }
        .accordion-button {
            font-weight: bold;
            color: #04021e;
            background-color: #f1f3f5;
            padding: 1rem 1.25rem;
        }
        .accordion-button:not(.collapsed) {
            color: #f8f9fa;
            background-color: #ff8c00; 
        }
        .accordion-body ul, .accordion-body ol {
            padding-left: 1.5rem;
            margin-bottom: 0;
            list-style: none; 
        }
        .accordion-body ul li {
            position: relative;
            padding-left: 1.5rem;
            margin-bottom: 0.5rem;
        }
        .accordion-body ul li.star::before {
            content: "🎯";
            color: #ff8c00;
            font-weight: normal;
            position: absolute;
            left: 0;
        }
        .accordion-body ul li.check::before {
            content: "✅";
            color: green;
            font-weight: normal;
            position: absolute;
            left: 0;
        }

        /* ========================================
        4. Styles des Onglets (Tabs)
        ========================================
        */
        .nav-tabs {
            border-bottom: none; 
            background-color: #f1f3f5;
            border-radius: 0.5rem 0.5rem 0 0;
        }
        .nav-tabs .nav-link {
            border: none;
            border-radius: 0;
            color: #04021e;
            font-weight: 600;
            margin: 0;
            padding: 0.75rem 1rem;
            transition: all 0.3s ease;
        }
        .nav-tabs .nav-link.active {
            color: #f8f9fa;
            background-color: #04021e;
            border-color: #04021e;
            border-radius: 0.5rem 0.5rem 0 0;
        }
        .nav-tabs .nav-link:hover:not(.active) {
            background-color: #e9ecef;
            border-color: #e9ecef;
        }
        .tab-content {
            border: 1px solid #e9ecef;
            border-top: none;
            padding: 2rem;
            border-radius: 0 0 0.5rem 0.5rem;
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.05);
        }

        /* ========================================
        5. Styles de la Section Aperçu (Section1)
        ========================================
        */
        #Section1 h3 {
            color: #04021e;
            border-left: 4px solid #ff8c00;
            padding-left: 1rem;
            padding-bottom: 0;
            margin-top: 2rem;
            margin-bottom: 1.5rem;
            font-size: 1.6rem;
        }
        #Section1 h4 {
            color: #04021e;
            font-weight: 600;
            margin-top: 1.5rem;
            margin-bottom: 0.75rem;
        }
        #Section1 p.lead {
            font-size: 1.1rem;
            color: #343a40;
            border-left: 3px solid #dee2e6;
            padding-left: 1rem;
        }

        /* Liste des objectifs (numérotée) */
        #Section1 ol {
            background-color: #f8f9fa;
            padding: 1.5rem 1.5rem 1.5rem 3rem;
            border-radius: 0.5rem;
            list-style: decimal;
            box-shadow: inset 0 0 5px rgba(0, 0, 0, 0.05);
        }
        #Section1 ol li {
            margin-bottom: 1rem;
        }
        #Section1 ol li strong {
            color: #ff8c00;
        }

        /* Liste Méthode Pédagogique (custom icon) */
        .Methodeul {
            list-style-type: none !important;
            padding-left: 0 !important;
        }
        .Methodeli {
            margin-bottom: 0.75rem;
            padding-left: 2rem;
            position: relative;
        }
        .Methodeli::before {
            content: "💡";
            margin-left: 1rem;
            font-size: 1.2rem;
            position: absolute;
            left: 0;
        }
        .Methodeli strong {
            color: #04021e;
            margin-left: 0.5rem;
        }
        
        /* Liste Matériel Requis/Fourni/Dossier (Check/Arrow icons) */
        #Section1 ul {
            padding: 1rem;
            border-left: 3px solid #ff8c00;
            list-style: none;
        }
        #Section1 ul li {
            margin-bottom: 0.75rem;
            padding-left: 2rem;
            position: relative;
        }
        #Section1 ul li.check::before {
            content: "✔️"; 
            color: green;
            font-family: inherit;
            font-weight: normal;
            position: absolute;
            left: 0;
        }
        #Section1 ul li.arrow::before {
            content: "➡️"; 
            color: #04021e;
            font-family: inherit;
            font-weight: normal;
            position: absolute;
            left: 0;
        }

        /* ========================================
        6. Media Queries pour la Responsivité Mobile
        ========================================
        */
        @media (max-width: 991.98px) { /* Tablette et Mobile */
            .training-detail .title {
                padding: 1.5rem;
                margin: 0.3rem;
                border-radius: 0.75rem;

            }
            .training-detail .title h1 {
                font-size: 1.8rem;
                margin-top: 0.5rem;
                margin-bottom: 1.5rem;
            }

            /* Réarrangement des blocs d'information de l'en-tête sur mobile */
            .training-detail .title .info-block {
                border-right: none;
                border-bottom: 1px dashed rgba(255, 255, 255, 0.2);
                margin-bottom: 1rem !important;
                padding-bottom: 1rem !important;
                text-align: center;
                display: block !important;
            }
            .training-detail .title .info-block:last-child {
                border-bottom: none;
                margin-bottom: 0 !important;
                padding-bottom: 0 !important;
            }
            .training-detail .title .info-block .icon {
                font-size: 1.5rem;
                margin-right: 0 !important;
            }
            .training-detail .title .info-block .small {
                display: inline;
            }
            .training-detail .title .info-block p {
                display: flex;
                flex-direction: column;
                align-items: center;
            }
            .training-detail .title .info-block p b {
                margin-top: 0.25rem;
            }

            /* Responsive Tabs */
            .nav-tabs {
                border-radius: 0.5rem;
            }
            .nav-tabs .nav-item {
                flex-grow: 1; 
                margin-bottom: 0.25rem;
            }
            .nav-tabs .nav-link {
                padding: 0.75rem 0.5rem;
                font-size: 0.9rem;
                text-align: center;
            }
            .nav-tabs .nav-link.active {
                border-radius: 0.5rem;
            }
            .tab-content {
                padding: 1.25rem;
                border-radius: 0.5rem;
                margin-top: 1rem;
            }

            /* Responsive Card */
            .training-detail .col-lg-4 .sticky-top {
                position: static !important;
                top: auto !important;
            }
        }
    </style>

    <div class="container training-detail my-5">
        
        <div class="row title shadow-lg">
            
            <div class="row d-flex align-items-stretch justify-content-between text-center py-2">
                
                <div class="col-6 col-md-3 info-block">
                    <p class="icon"><i class="far fa-bookmark"></i></p>
                    <p>
                        <span class="small">Catégorie</span>
                        <b>{{ $training1->category->title }}</b>
                    </p>
                </div>

                <div class="col-6 col-md-3 info-block">
                    <p class="icon"><i class="fas fa-certificate"></i></p>
                    <p>
                        <span class="small">Type de formation</span> 
                        <b>Certifiante</b>
                    </p>
                </div>

                <div class="col-6 col-md-3 info-block mt-3 mt-md-0">
                    <p class="icon"><i class="fas fa-user-circle"></i></p>
                    <p>
                        <span class="small">Formateur</span> 
                        <b>ISN</b>
                    </p>
                </div>
                
                <div class="col-6 col-md-3 info-block mt-3 mt-md-0 border-right-0">
                    <p class="icon"><i class="fas fa-signal"></i></p>
                    <p>
                        <span class="small">Niveau</span> 
                        <b>Tous niveaux</b>
                    </p>
                </div>
            </div>

            <div class="col-12 text-center">
                <h1>
                    <span><b>Formation en {{ $training1->title }}</b></span>
                </h1>
            </div>

            <div class="row text-center pt-3 pb-3 border-top border-secondary icon-details">
                <div class="col-xs-12 col-md-4 gy-2">
                    @if ($training1->title="Anglais" || $training1->title="Français" || $training1->title="Allemand" || $training1->title="Italien")
                        <p>
                            <i class="fas fa-clock"></i> Variable
                        </p>
                    @else
                        <p>
                            <i class="fas fa-clock"></i> 3 mois / 6 mois / 1 an
                        </p>
                    @endif
                </div>
                <div class="col-xs-12 col-md-4 gy-2">
                    <p>
                        <i class="fas fa-user-graduate"></i> + de 369 étudiants formés
                    </p>
                </div>
                <div class="col-xs-12 col-md-4 gy-2">
                    @if ($training1->title="Anglais" || $training1->title="Français" || $training1->title="Allemand" || $training1->title="Italien")
                        <p>
                            <i class="fas fa-flask"></i> Suivi personnalisé
                        </p>
                    @else
                        <p>
                            <i class="fas fa-flask"></i> 90% Pratique
                        </p>
                    @endif
                </div>
            </div>
        </div>
        
        <div class="row demo my-4">
            
            <div class="col-lg-8 mb-4 mb-lg-0">
                
                <div class="accordion mb-4" id="trainingDetailsAccordion">
                    
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                                <strong>Public Ciblé</strong>
                            </button>
                        </h2>
                        <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show">
                            <div class="accordion-body">
                                <ul>
                                    <li class="star">Professionnels souhaitant évoluer.</li>
                                    <hr>
                                    <li class="star">Étudiants et jeunes diplômés.</li>
                                    <hr>
                                    <li class="star">Chercheurs d'emploi en quête de compétences techniques.</li>
                                    <hr>
                                    <li class="star">Entrepreneurs désirant maîtriser la gestion financière de leur activité.</li>
                                    <hr>
                                    <li class="star">Toute personne voulant acquérir des compétences en comptabilité informatisée et gestion d'entreprise.</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                                <strong>Prérequis</strong>
                            </button>
                        </h2>
                        <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse">
                            @if ($training1->title=="Developpement Web et Mobile")
                                    <div class="accordion-body">
                                        <ul>
                                            <li class="check">Avoir un niveau scolaire minimum de <b>Terminale</b> ou équivalent.</li>
                                            <li class="check">Avoir une bonne maîtrise des <b>outils informatiques de base</b> (Windows/Mac, navigation web).</li>
                                            <li class="check">Démontrer un <b>intérêt marqué</b> pour la logique, les mathématiques ou la résolution de problèmes.</li>
                                            <li class="check">Être capable de faire preuve d'une grande <b>autonomie</b> et de curiosité technique.</li>
                                            <li class="check"><b>Optionnel :</b> Connaissances de base en HTML/CSS appréciées.</li>
                                            <li class="check">Etre ouvert à l'apprentissage.</li>
                                        </ul>
                                    </div>
                                @elseif ($training1->title=="Sécrétariat Bureautique")
                                    <div class="accordion-body">
                                        <ul>
                                            <li class="check">Avoir un niveau scolaire minimum de <b>BEPC</b> ou équivalent.</li>
                                            <li class="check">Avoir une bonne <b>maîtrise du français</b> (écrit et oral).</li>
                                            <li class="check">Être à l'aise avec la manipulation d'un <b>ordinateur</b> et d'une souris.</li>
                                            <li class="check">Faire preuve d'<b>organisation</b>, de rigueur et d'un bon sens du contact.</li>
                                            <li class="check"><b>Optionnel :</b> Posséder des notions de base en dactylographie.</li>
                                            <li class="check">Etre ouvert à l'apprentissage.</li>
                                        </ul>
                                    </div>
                                @elseif ($training1->title=="Sécrétariat Comptable")
                                    <div class="accordion-body">
                                        <ul>
                                            <li class="check">Avoir un niveau scolaire minimum de <b>Terminale</b> ou équivalent.</li>
                                            <li class="check">Posséder des <b>notions de base en mathématiques</b> et en gestion.</li>
                                            <li class="check">Avoir une bonne <b>maîtrise du français</b> (orthographe et grammaire).</li>
                                            <li class="check">Faire preuve de <b>rigueur</b>, de discrétion et d'un esprit d'analyse.</li>
                                            <li class="check"><b>Optionnel :</b> Avoir déjà utilisé un tableur (Excel).</li>
                                        </ul>
                                    </div>
                                @elseif ($training1->title=="Sécrétariat de Direction")
                                    <div class="accordion-body">
                                        <ul>
                                            <li class="check">Avoir un niveau scolaire minimum de <b>Baccalauréat</b> ou équivalent.</li>
                                            <li class="check">Posséder une <b>excellente expression</b> écrite et orale en français.</li>
                                            <li class="check">Avoir une bonne maîtrise des <b>outils bureautiques courants</b>.</li>
                                            <li class="check">Faire preuve de <b>maturité</b>, de proactivité et de sens des responsabilités.</li>
                                            <li class="check"><b>Optionnel :</b> Notions de base en <b>anglais professionnel</b>.</li>
                                            <li class="check">Etre ouvert à l'apprentissage.</li>
                                        </ul>
                                    </div>
                                @elseif ($training1->title=="Maintenance informatiquue")
                                    <div class="accordion-body">
                                        <ul>
                                            <li class="check">Avoir un niveau scolaire minimum de <b>BEPC</b> ou équivalent.</li>
                                            <li class="check">Avoir une bonne connaissance de l'environnement <b>Windows</b> ou <b>Linux</b>.</li>
                                            <li class="check">Démontrer un <b>intérêt</b> pour les composants électroniques et le démontage/remontage.</li>
                                            <li class="check">Être <b>minutieux</b>, patient et avoir un bon esprit logique pour le diagnostic.</li>
                                            <li class="check"><b>Optionnel :</b> Avoir déjà effectué des opérations simples sur un PC (formatage, installation).</li>
                                            <li class="check">Etre ouvert à l'apprentissage.</li>
                                        </ul>
                                    </div>
                                @elseif ($training1->title=="Maintenance des réseaux informatiques")
                                    <div class="accordion-body">
                                        <ul>
                                            <li class="check">Avoir un niveau scolaire minimum de <b>Terminale</b> scientifique ou équivalent.</li>
                                            <li class="check">Avoir de solides bases en <b>logique</b> et en <b>informatique générale</b>.</li>
                                            <li class="check">Démontrer une forte capacité à travailler en <b>équipe</b> et à résoudre des problèmes complexes.</li>
                                            <li class="check">Faire preuve de <b>rigueur</b> dans l'application des procédures de sécurité.</li>
                                            <li class="check"><b>Optionnel :</b> Compréhension des concepts de base des réseaux (IP, routeur).</li>
                                            <li class="check">Etre ouvert à l'apprentissage.</li>
                                        </ul>
                                    </div>
                                @elseif ($training1->title=="Marketing Digital")
                                    <div class="accordion-body">
                                        <ul>
                                            <li class="check">Avoir un niveau scolaire minimum de <b>Baccalauréat</b> ou équivalent.</li>
                                            <li class="check">Avoir une <b>excellente maîtrise des réseaux sociaux</b> et de l'environnement web.</li>
                                            <li class="check">Être capable d'avoir une <b>réflexion stratégique</b> et créative.</li>
                                            <li class="check">Avoir de bonnes aptitudes en <b>communication écrite</b> et en expression.</li>
                                            <li class="check"><b>Optionnel :</b> Notions de base en création de contenu graphique ou vidéo.</li>
                                            <li class="check">Etre ouvert à l'apprentissage.</li>
                                        </ul>
                                    </div>
                                @elseif ($training1->title=="Graphisme de Production")
                                    <div class="accordion-body">
                                        <ul>
                                            <li class="check">Avoir un niveau scolaire minimum de <b>BEPC</b> ou équivalent.</li>
                                            <li class="check">Démontrer un <b>sens artistique</b> et une grande créativité visuelle.</li>
                                            <li class="check">Être à l'aise avec l'utilisation d'un ordinateur pour des tâches de <b>création</b>.</li>
                                            <li class="check">Être <b>minutieux</b> et capable de suivre des instructions de production précises.</li>
                                            <li class="check"><b>Optionnel :</b> Avoir déjà dessiné ou manipulé un logiciel de retouche d'image (même simple).</li>
                                            <li class="check">Etre ouvert à l'apprentissage.</li>
                                        </ul>
                                    </div>
                                @elseif ($training1->title=="Web master")
                                    <div class="accordion-body">
                                        <ul>
                                            <li class="check">Avoir un niveau scolaire minimum de <b>Terminale</b> ou équivalent.</li>
                                            <li class="check">Avoir une bonne maîtrise des <b>outils informatiques et d'Internet</b>.</li>
                                            <li class="check">Faire preuve d'une grande <b>polyvalence</b> et de la capacité à apprendre vite.</li>
                                            <li class="check">Être <b>rigoureux</b> dans la gestion et la mise à jour des plateformes en ligne.</li>
                                            <li class="check"><b>Optionnel :</b> Notions de base en HTML, CSS ou en CMS (WordPress, Joomla).</li>
                                            <li class="check">Etre ouvert à l'apprentissage.</li>
                                        </ul>
                                    </div>
                                @elseif ($training1->title=="Comptablilité Informatisée et de Gestion")
                                    <div class="accordion-body">
                                        <ul>
                                            <li class="check">Avoir un niveau scolaire minimum de <b>Terminale</b> ou équivalent.</li>
                                            <li class="check">Avoir de <b>solides bases en mathématiques</b> (arithmétique de base) et en gestion.</li>
                                            <li class="check">Avoir une bonne maîtrise du clavier et de l'environnement <b>Windows/PC</b>.</li>
                                            <li class="check">Faire preuve de <b>rigueur</b>, de concentration et de respect de la confidentialité.</li>
                                            <li class="check"><b>Optionnel :</b> Expérience avec les calculatrices de bureau ou tableurs (Excel).</li>
                                            <li class="check">Etre ouvert à l'apprentissage.</li>
                                        </ul>
                                    </div>
                                @elseif ($training1->title=="Montage Audiovisuel")
                                    <div class="accordion-body">
                                        <ul>
                                            <li class="check">Avoir un niveau scolaire minimum de <b>BEPC</b> ou équivalent.</li>
                                            <li class="check">Avoir un **sens du rythme** et du <b>cadrage visuel</b> (œil cinématographique).</li>
                                            <li class="check">Être à l'aise avec l'utilisation d'un ordinateur et la gestion de <b>fichiers volumineux</b>.</li>
                                            <li class="check">Faire preuve de <b>créativité</b>, de patience et d'une bonne écoute des consignes.</li>
                                            <li class="check"><b>Optionnel :</b> Posséder des notions de base en **tournage vidéo**.</li>
                                            <li class="check">Etre ouvert à l'apprentissage.</li>
                                        </ul>
                                    </div>
                                @endif
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                                <strong>Avantages Offerts</strong>
                            </button>
                        </h2>
                        <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse">
                            <div class="accordion-body">
                                <ul>
                                    <li class="check">Stage garanti à la fin du programme.</li>
                                    <li class="check">Accompagnement continu à l’insertion professionnelle.</li>
                                    <li class="check">Connexion Internet illimitée par Fibre Optique.</li>
                                    <li class="check">Salle de cours climatisée et équipée de vidéo projecteur.</li>
                                    <li class="check">Fourniture d'un <b>Certificat de Compétence</b> reconnu.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="tab" role="tabpanel">
                    <ul class="nav nav-tabs row g-0" role="tablist">
                        <li class="nav-item col-6 col-sm-3 text-center" role="presentation">
                            <a href="#Section1" class="nav-link active" id="section1-tab" data-bs-toggle="tab" role="tab" aria-controls="Section1" aria-selected="true">Aperçu</a>
                        </li>
                        <li class="nav-item col-6 col-sm-3 text-center" role="presentation">
                            <a href="#Section2" class="nav-link" id="section2-tab" data-bs-toggle="tab" role="tab" aria-controls="Section2" aria-selected="false">Programme</a>
                        </li>
                        <li class="nav-item col-6 col-sm-3 text-center" role="presentation">
                            <a href="#Section3" class="nav-link" id="section3-tab" data-bs-toggle="tab" role="tab" aria-controls="Section3" aria-selected="false">Débouchés</a>
                        </li>
                        <li class="nav-item col-6 col-sm-3 text-center" role="presentation">
                            <a href="#Section4" class="nav-link" id="section4-tab" data-bs-toggle="tab" role="tab" aria-controls="Section4" aria-selected="false">Formateur</a>
                        </li>
                    </ul>

                    <div class="tab-content">
                        
                        <div class="tab-pane fade show active" id="Section1" role="tabpanel" aria-labelledby="Section1-tab">          
                            <div>
                                @if ($training1->title=="Développement Web et Mobile")
                                    <div id="developpement_web_mobile">
                                        <h3>Description de la Formation</h3>
                                        <p class="lead">
                                            Cette formation complète prépare les participants à concevoir, développer et déployer des applications pour le web et les plateformes mobiles. Elle couvre les langages front-end (<b>HTML, CSS, JavaScript, React/Vue</b>) et back-end (<b>PHP, Python, Node.js</b>), ainsi que les bases de données et les principes de l'expérience utilisateur (UX/UI).
                                        </p>

                                        <h3>Objectifs Clés (90 % Pratique)</h3>
                                        <ol>
                                            <li><strong>Maîtriser les Langages de Programmation :</strong> Développer des applications web et mobiles dynamiques.</li>
                                            <li><strong>Concevoir des Interfaces Utilisateur :</strong> Créer des designs responsifs et intuitifs (<b>UX/UI</b>).</li>
                                            <li><strong>Gérer des Bases de Données :</strong> Savoir stocker et manipuler des informations de manière sécurisée.</li>
                                            <li><strong>Travailler avec les Frameworks :</strong> Utiliser des cadres de travail modernes pour accélérer le développement.</li>
                                            <li><strong>Déployer des Projets :</strong> Publier et maintenir des applications sur des serveurs et stores.</li>
                                        </ol>
                                    </div>
                                @endif

                                @if ($training1->title=="Sécrétariat Bureautique")
                                    <div id="secretariat_bureautique">
                                        <h3>Description de la Formation</h3>
                                        <p class="lead">
                                            La formation en secrétariat bureautique vise à former des assistants polyvalents, capables de gérer l'organisation administrative et la communication au sein d'une entreprise. Elle se concentre sur la maîtrise des outils bureautiques (<b>Pack Office : Word, Excel, PowerPoint</b>), la gestion des documents, l'organisation d'événements et la communication professionnelle.
                                        </p>

                                        <h3>Objectifs Clés (90 % Pratique)</h3>
                                        <ol>
                                            <li><strong>Maîtriser les Logiciels Bureautiques :</strong> Utiliser Word, Excel et PowerPoint pour les tâches administratives.</li>
                                            <li><strong>Assurer l'Organisation Administrative :</strong> Gérer les courriers, les dossiers et le classement efficacement.</li>
                                            <li><strong>Optimiser la Communication :</strong> Rédiger des documents professionnels clairs et soignés.</li>
                                            <li><strong>Gérer l'Agenda et les Déplacements :</strong> Planifier et organiser les réunions et voyages professionnels.</li>
                                            <li><strong>Adopter l'Efficacité Professionnelle :</strong> Développer des méthodes de travail rigoureuses et autonomes.</li>
                                        </ol>
                                    </div>
                                @endif

                                @if ($training1->title=="Sécrétariat Comptable")
                                    <div id="secretariat_comptable">
                                        <h3>Description de la Formation</h3>
                                        <p class="lead">
                                            Cette formation hybride prépare les participants aux fonctions de secrétariat en y ajoutant les compétences de base en comptabilité. Elle permet de gérer à la fois les tâches administratives classiques (bureautique, classement) et les opérations comptables initiales (saisie, facturation, suivi des comptes), souvent avec l'aide de logiciels comme <b>Sage ou Ciel</b>.
                                        </p>

                                        <h3>Objectifs Clés (90 % Pratique)</h3>
                                        <ol>
                                            <li><strong>Effectuer la Saisie Comptable :</strong> Enregistrer les opérations courantes (achats, ventes, banque).</li>
                                            <li><strong>Maîtriser la Facturation et le Suivi :</strong> Établir les factures et assurer le suivi des règlements clients/fournisseurs.</li>
                                            <li><strong>Utiliser un Logiciel Comptable :</strong> Appliquer les notions comptables sur des outils informatisés.</li>
                                            <li><strong>Organiser les Documents :</strong> Classer et archiver les pièces comptables et administratives.</li>
                                            <li><strong>Aider à l'Établissement des Déclarations :</strong> Préparer les éléments nécessaires aux déclarations fiscales et sociales.</li>
                                        </ol>
                                    </div>
                                @endif

                                @if ($training1->title=="Sécrétariat de Direction")
                                    <div id="secretariat_direction">
                                        <h3>Description de la Formation</h3>
                                        <p class="lead">
                                            La formation en secrétariat de direction forme des collaborateurs directs et stratégiques de la haute direction. Elle met l'accent sur la gestion de projet, la communication institutionnelle, la discrétion, l'organisation complexe et la prise de notes lors de réunions stratégiques. Une excellente maîtrise des outils bureautiques et de la gestion du temps est essentielle.
                                        </p>

                                        <h3>Objectifs Clés (90 % Pratique)</h3>
                                        <ol>
                                            <li><strong>Assister la Direction :</strong> Gérer l'agenda complexe, les communications et le filtrage d'informations.</li>
                                            <li><strong>Organiser des Événements :</strong> Planifier et coordonner des réunions, séminaires ou voyages d'affaires.</li>
                                            <li><strong>Maîtriser la Communication :</strong> Rédiger des rapports, synthèses et procès-verbaux de haut niveau.</li>
                                            <li><strong>Gérer les Projets :</strong> Suivre et coordonner des dossiers et initiatives pour la direction.</li>
                                            <li><strong>Développer le Sens des Responsabilités :</strong> Agir avec autonomie, initiative et professionnalisme.</li>
                                        </ol>
                                    </div>
                                @endif

                                @if ($training1->title=="Maintenance informatiquue")
                                    <div id="maintenance_informatique">
                                        <h3>Description de la Formation</h3>
                                        <p class="lead">
                                            Cette formation pratique prépare à l'installation, à la configuration et à la réparation du matériel et des logiciels informatiques. Elle couvre le diagnostic des pannes (hardware et software), l'assemblage de PC, la gestion des systèmes d'exploitation (<b>Windows, Linux</b>) et les mesures de sécurité essentielles pour garantir la performance des équipements.
                                        </p>

                                        <h3>Objectifs Clés (90 % Pratique)</h3>
                                        <ol>
                                            <li><strong>Diagnostiquer et Réparer les Pannes :</strong> Identifier et résoudre les problèmes matériels et logiciels.</li>
                                            <li><strong>Assembler et Configurer les PC :</strong> Savoir monter, installer et configurer des ordinateurs.</li>
                                            <li><strong>Gérer les Systèmes d'Exploitation :</strong> Installer, maintenir et optimiser les OS (<b>Windows/Linux</b>).</li>
                                            <li><strong>Assurer la Sécurité :</strong> Mettre en place des protections contre les virus et les failles.</li>
                                            <li><strong>Effectuer la Maintenance Préventive :</strong> Optimiser la performance et prolonger la durée de vie du matériel.</li>
                                        </ol>
                                    </div>
                                @endif

                                @if ($training1->title=="Maintenance des réseaux informatiques")
                                    <div id="maintenance_reseaux_informatiques">
                                        <h3>Description de la Formation</h3>
                                        <p class="lead">
                                            Axée sur l'infrastructure, cette formation forme les techniciens à l'installation, à la configuration et à la sécurisation des réseaux d'entreprise (<b>LAN/WAN</b>). Elle couvre les protocoles de réseau (<b>TCP/IP</b>), le câblage, la configuration des routeurs et switchs (ex: <b>Cisco</b>), et les techniques de dépannage pour assurer la continuité des services.
                                        </p>

                                        <h3>Objectifs Clés (90 % Pratique)</h3>
                                        <ol>
                                            <li><strong>Concevoir et Installer un Réseau :</strong> Planifier le câblage et l'architecture (<b>LAN/WAN</b>).</li>
                                            <li><strong>Configurer les Équipements :</strong> Paramétrer les routeurs, switchs et points d'accès.</li>
                                            <li><strong>Maîtriser les Protocoles :</strong> Comprendre le fonctionnement de <b>TCP/IP</b> et des services réseau (DHCP, DNS).</li>
                                            <li><strong>Sécuriser l'Infrastructure :</strong> Mettre en place des pare-feu et des politiques de sécurité.</li>
                                            <li><strong>Dépanner les Problèmes Réseau :</strong> Identifier et résoudre les incidents pour minimiser les interruptions.</li>
                                        </ol>
                                    </div>
                                @endif

                                @if ($training1->title=="Marketing Digital")
                                    <div id="marketing_digital">
                                        <h3>Description de la Formation</h3>
                                        <p class="lead">
                                            Cette formation prépare à l'élaboration et à l'exécution de stratégies marketing sur les canaux numériques. Elle intègre les fondamentaux du <b>SEO/SEA</b> (référencement), le marketing des réseaux sociaux (<b>Community Management</b>), l'emailing, la création de contenu percutant et l'analyse de performance (<b>Google Analytics</b>) pour maximiser la visibilité et les conversions.
                                        </p>

                                        <h3>Objectifs Clés (90 % Pratique)</h3>
                                        <ol>
                                            <li><strong>Élaborer une Stratégie Digitale :</strong> Définir les objectifs et le plan d'action sur le web.</li>
                                            <li><strong>Optimiser le Référencement (SEO/SEA) :</strong> Améliorer le classement sur les moteurs de recherche.</li>
                                            <li><strong>Gérer les Réseaux Sociaux :</strong> Créer du contenu engageant et interagir avec la communauté.</li>
                                            <li><strong>Mettre en Place des Campagnes Publicitaires :</strong> Lancer et optimiser des annonces payantes (ex: <b>Facebook Ads, Google Ads</b>).</li>
                                            <li><strong>Analyser les Performances :</strong> Utiliser des outils d'analyse (<b>Google Analytics</b>) pour mesurer le retour sur investissement.</li>
                                        </ol>
                                    </div>
                                @endif

                                @if ($training1->title=="Graphisme de Production")
                                    <div id="graphisme_production">
                                        <h3>Description de la Formation</h3>
                                        <p class="lead">
                                            La formation en graphisme de production forme les professionnels de la création visuelle pour le print et le digital. Elle couvre la maîtrise des logiciels de la suite <b>Adobe (Photoshop, Illustrator, InDesign)</b>, les principes du design (typographie, couleur, mise en page), et la création de supports variés (logos, affiches, brochures, éléments web).
                                        </p>

                                        <h3>Objectifs Clés (90 % Pratique)</h3>
                                        <ol>
                                            <li><strong>Maîtriser la Suite Adobe :</strong> Utiliser <b>Photoshop</b> (retouche), <b>Illustrator</b> (vectoriel) et <b>InDesign</b> (mise en page).</li>
                                            <li><strong>Concevoir une Identité Visuelle :</strong> Créer des logos et chartes graphiques cohérentes.</li>
                                            <li><strong>Préparer les Fichiers pour l'Impression :</strong> Gérer les modes colorimétriques (CMJN) et les résolutions.</li>
                                            <li><strong>Créer des Supports Marketing :</strong> Réaliser des affiches, flyers, et visuels pour les réseaux sociaux.</li>
                                            <li><strong>Comprendre les Principes du Design :</strong> Appliquer la théorie des couleurs et de la composition.</li>
                                        </ol>
                                    </div>
                                @endif

                                @if ($training1->title=="Web master")
                                    <div id="web_master">
                                        <h3>Description de la Formation</h3>
                                        <p class="lead">
                                            Le Webmaster est le garant technique et éditorial d'un site web. Cette formation enseigne à la fois les bases du développement web (<b>HTML/CSS/JS</b>), l'utilisation des systèmes de gestion de contenu (<b>CMS comme WordPress, Joomla</b>), la maintenance technique, la sécurité et l'optimisation du contenu (SEO) pour assurer le bon fonctionnement du site.
                                        </p>

                                        <h3>Objectifs Clés (90 % Pratique)</h3>
                                        <ol>
                                            <li><strong>Administrer un CMS :</strong> Installer, configurer et personnaliser un site <b>WordPress ou Joomla</b>.</li>
                                            <li><strong>Assurer la Maintenance Technique :</strong> Gérer les mises à jour, les sauvegardes et la performance du site.</li>
                                            <li><strong>Optimiser le Contenu :</strong> Améliorer le référencement (SEO) et la structure des pages.</li>
                                            <li><strong>Gérer l'Hébergement et les Domaines :</strong> Mettre en ligne un site et gérer les serveurs.</li>
                                            <li><strong>Intégrer les Fonctionnalités :</strong> Ajouter des formulaires, galeries, ou fonctionnalités via des extensions.</li>
                                        </ol>
                                    </div>
                                @endif

                                @if ($training1->title=="Comptabilité informatisée et de Gestion")
                                    <div id="comptabilite_gestion">
                                        <h3>Description de la Formation</h3>
                                        <p class="lead">
                                            La formation en comptabilité informatisée et gestion prépare les participants à maîtriser les outils et techniques essentiels pour la gestion financière d'une entreprise. Elle couvre les principes fondamentaux de la comptabilité, l'utilisation de logiciels spécialisés comme <b>Sage</b> et <b>QuickBooks</b>, ainsi que l'analyse des données financières.
                                        </p>

                                        <h3>Objectifs Clés (90 % Pratique)</h3>
                                        <ol>
                                            <li><strong>Acquérir les Fondamentaux Comptables :</strong> Maîtriser les principes de la tenue de livres et des états financiers.</li>
                                            <li><strong>Maîtriser les Logiciels de Comptabilité :</strong> Utiliser des outils informatiques (<b>Sage, QuickBooks</b>) pour optimiser les processus.</li>
                                            <li><strong>Développer l'Analyse Financière :</strong> Interpréter les données pour une prise de décision éclairée.</li>
                                            <li><strong>Élaborer des Rapports :</strong> Savoir préparer des bilans et comptes de résultat précis.</li>
                                            <li><strong>Comprendre les Normes :</strong> Se familiariser avec les réglementations en vigueur pour garantir la conformité.</li>
                                        </ol>
                                    </div>
                                @endif

                                @if ($training1->title=="Montage Audiovisuel")
                                    <div id="montage_audiovisuel">
                                        <h3>Description de la Formation</h3>
                                        <p class="lead">
                                            Cette formation permet de maîtriser l'art du montage vidéo et de la post-production pour divers formats (films, publicités, web, réseaux sociaux). Elle couvre l'utilisation de logiciels professionnels (<b>Adobe Premiere Pro, DaVinci Resolve</b>), l'étalonnage, le mixage audio, les effets spéciaux de base et les techniques de narration visuelle.
                                        </p>

                                        <h3>Objectifs Clés (90 % Pratique)</h3>
                                        <ol>
                                            <li><strong>Maîtriser les Logiciels de Montage :</strong> Utiliser <b>Adobe Premiere Pro</b> ou <b>DaVinci Resolve</b> de manière professionnelle.</li>
                                            <li><strong>Structurer la Narration :</strong> Organiser les séquences pour raconter une histoire efficace.</li>
                                            <li><strong>Améliorer la Qualité Visuelle :</strong> Effectuer l'étalonnage des couleurs et la correction vidéo.</li>
                                            <li><strong>Gérer le Son :</strong> Réaliser le mixage audio et l'intégration de la musique et des effets.</li>
                                            <li><strong>Exporter pour Diverses Plateformes :</strong> Adapter les formats et résolutions pour le web, la télévision et les réseaux sociaux.</li>
                                        </ol>
                                    </div>
                                @endif
                                <h3>Méthode Pédagogique Active</h3>
                                <ul class="Methodeul">
                                    <li class="Methodeli"><strong>Pédagogie par Projet :</strong> Application des concepts à des projets réels ou simulés.</li>
                                    <li class="Methodeli"><strong>Apprentissage Actif :</strong> Exercices pratiques et interactifs intégrés.</li>
                                    <li class="Methodeli"><strong>Utilisation d'Outils Pro :</strong> Formation directe sur les logiciels du marché.</li>
                                    <li class="Methodeli"><strong>Études de Cas :</strong> Analyse de situations réelles pour comprendre les défis du secteur.</li>
                                    <li class="Methodeli"><strong>Suivi Personnalisé :</strong> Coaching individuel et ateliers collaboratifs.</li>
                                </ul>

                                <h3>Matériel de Formation</h3>
                                <ul>
                                    <li class='check'>Salle de Cours spacieuses</li>
                                    <li class='check'>Des Formats pour la prise des notes</li>
                                    <li class='check'>Des Laptops pour les Apprenants qui n’en ont pas (à réserver)</li>
                                    <li class='check'>White Board avec Marqueurs</li>
                                    <li class='check'>Salle de Travail en dehors des Cours</li>
                                    <li class='check'>Espace de détente et de relaxation</li>
                                    <li class='check'>Vidéoprojecteur</li>
                                    <li class='check'>Connexion Internet Illimitée de Très Haut Débit par Fibre Optique</li>
                                    <li class='check'>Campus sécurisé 24h/24</li>
                                </ul>

                                <h3>Dossier d’Admission</h3>
                                <ul>
                                    <li class="arrow">Photocopie du Dernier diplôme</li>
                                    <li class="arrow">Photocopie de la CNI ou de l’Acte de Naissance</li>
                                    <li class="arrow">01 Photo 4*4 en Couleur sur fond blanc</li>
                                    <li class="arrow">Frais d'inscription 15 000Fcfa </li>
                                    <li class="arrow"> Formulaire d’inscription dûment rempli (à rétirer au centre)</li>
                                </ul>

                                <h3>PROCÉDURE D’INSCRIPTION</h3>
                                <ul>
									<li>1- Vous rendre au Centre cette semaine muni des Éléments du Dossier d’Admission.
									</li>
									<li>2- Procéder à votre inscription au Secrétariat du Centre.</li>
									<li>3 – Retirer votre reçu d’inscription.</li>
								</ul>

                                <h3>INSCRIPTION À DISTANCE POSSIBLE</h3>
                                <p>
                                    Vous pouvez également vous inscrire à distance. Pour garantir votre place, c’est très simple:
                                </p>
                                <ul>
                                    <li style=" background: #e9ecef;margin: 5px 0; padding: 10px;border-radius: 5px;">1- Vous
                                        faites le paiement de vos frais d’inscription sur les contacts du Centre [(+237)
                                        659717141 / 682628659]</li>
                                    <li style=" background: #e9ecef;margin: 5px 0; padding: 10px;border-radius: 5px;">2- Vous
                                        laissez un message sur WhatsApp (+237 659717141) avec votre nom complet et la(les)
                                        formation(s) choisie(s). </li>
                                    <li style=" background: #e9ecef;margin: 5px 0; padding: 10px;border-radius: 5px;">3- Vous
                                        recevrez une photo de votre reçu et pourrez le retirer quand vous serez au centre.</li>
                                </ul>


                                <h3>RENSEIGNEMENTS ET INSCRIPTIONS</h3>
                                <ul>
                                    <li>🎯 Place des fêtes de Bafoussam, en face de la CAPLAMI</li>
                                    <li>🎯 Bandjoun, Immeuble PMUC</li>
                                    <li>📲 Contacts: (+237) 659717141 / 682628659</li>
                                </ul>
                                
                            </div>
                        </div>

                        <div class="tab-pane fade" id="Section2" role="tabpanel" aria-labelledby="Section2-tab">
                            @if ($training1->modules!=null && count($training1->modules)>0)
                                @foreach ($training1->modules as $module)
                                    <p>Module {{$loop->iteration}}: {{ $module->title }}</p>

                                    <ul>
                                        @foreach ($module->lessons as $lesson)
                                            <li>UE {{$loop->iteration}}: {{ $lesson->title }}</li>
                                        @endforeach
                                    </ul>
                                    <hr>
                                @endforeach
                            @endif
                        </div>
                        <div class="tab-pane fade" id="Section3" role="tabpanel" aria-labelledby="Section3-tab">
                            @if ($training1->title=="Developpement Web et Mobile")
                                <ul>
                                    <li><b>Développeur Web</b> (Front-end, Back-end, Full-Stack).</li>
                                    <li>Développeur d'applications <b>mobiles</b> (Android / iOS).</li>
                                    <li>Intégrateur web et <b>Administrateur de CMS</b>.</li>
                                    <li>Consultant technique en <b>solutions digitales</b>.</li>
                                    <li>Freelance en <b>création et maintenance de sites</b>.</li>
                                </ul>
                        @elseif ($training1->title=="Sécrétariat Bureautique")
                                <ul>
                                    <li><b>Secrétaire</b> ou Assistant(e) administratif(ve).</li>
                                    <li>Agent d'accueil et d'<b>orientation</b>.</li>
                                    <li>Assistant(e) de <b>gestion polyvalent(e)</b>.</li>
                                    <li>Opérateur de saisie et de <b>traitement de données</b>.</li>
                                    <li>Employé(e) de bureau dans des <b>organisations publiques ou privées</b>.</li>
                                </ul>
                        @elseif ($training1->title=="Sécrétariat Comptable")
                                <ul>
                                    <li><b>Secrétaire comptable</b> ou Assistant(e) comptable.</li>
                                    <li>Aide-comptable en <b>cabinet d'expertise</b>.</li>
                                    <li>Technicien(ne) de <b>gestion de la paie</b>.</li>
                                    <li>Assistant(e) en <b>gestion administrative et financière</b>.</li>
                                    <li>Commis de bureau spécialisé en <b>facturation et recouvrement</b>.</li>
                                </ul>
                        @elseif ($training1->title=="Sécrétariat de Direction")
                                <ul>
                                    <li><b>Assistant(e) de direction</b> ou de manager.</li>
                                    <li>Secrétaire général(e) ou <b>coordonnateur(trice) de bureau</b>.</li>
                                    <li>Responsable de l'accueil et des <b>relations publiques</b>.</li>
                                    <li>Collaborateur(trice) dans les <b>hautes administrations</b> ou ministères.</li>
                                    <li>Assistant(e) personnel(le) de <b>Cadre Supérieur</b>.</li>
                                </ul>
                        @elseif ($training1->title=="Maintenance informatiquue")
                                <ul>
                                    <li>Technicien de <b>maintenance informatique</b> (hardware et software).</li>
                                    <li>Technicien support utilisateur ou <b>Helpdesk</b>.</li>
                                    <li>Monteur et réparateur <b>d'équipements électroniques</b>.</li>
                                    <li>Vendeur-conseil en <b>matériel et logiciels informatiques</b>.</li>
                                    <li>Intervenant à domicile ou en atelier pour le <b>dépannage PC/Mac</b>.</li>
                                </ul>
                        @elseif ($training1->title=="Maintenance des réseaux informatiques")
                                <ul>
                                    <li>Technicien de <b>réseaux et télécoms</b>.</li>
                                    <li>Administrateur de <b>réseaux locaux (LAN)</b>.</li>
                                    <li>Technicien de <b>support et d'exploitation</b>.</li>
                                    <li>Installateur et mainteneur de <b>systèmes de câblage et de fibre optique</b>.</li>
                                    <li>Opérateur de <b>sécurité informatique</b> (surveillance des systèmes).</li>
                                </ul>
                        @elseif ($training1->title=="Marketing Digital")
                                <ul>
                                    <li>Chargé de <b>communication digitale</b> ou Community Manager.</li>
                                    <li>Spécialiste en <b>référencement naturel (SEO)</b> et payant (SEA).</li>
                                    <li>Chef de projet ou Assistant <b>Marketing Digital</b>.</li>
                                    <li>Gestionnaire de <b>campagnes publicitaires en ligne</b> (Google Ads, Meta Ads).</li>
                                    <li>Consultant en <b>stratégie web et e-commerce</b>.</li>
                                </ul>
                        @elseif ($training1->title=="Graphisme de Production")
                                <ul>
                                    <li><b>Infographiste</b> ou Designer graphique.</li>
                                    <li>Opérateur <b>PAO</b> (Publication Assistée par Ordinateur).</li>
                                    <li>Maquettiste ou <b>Metteur en page</b> (édition, presse).</li>
                                    <li>Créateur de **supports de communication** (affiches, logos, flyers).</li>
                                    <li>Freelance en <b>identité visuelle et branding</b>.</li>
                                </ul>
                        @elseif ($training1->title=="Web master")
                                <ul>
                                    <li><b>Webmaster</b> ou Administrateur de site web.</li>
                                    <li>Gestionnaire de <b>contenu (Content Manager)</b>.</li>
                                    <li>Assistant en <b>gestion de projet web</b>.</li>
                                    <li>Responsable de la <b>maintenance et de l'optimisation</b> des CMS.</li>
                                    <li>Technicien support pour les <b>plateformes e-commerce</b>.</li>
                                </ul>
                        @elseif ($training1->title=="Comptablilité Informatisée et de Gestion")
                                <ul>
                                    <li><b>Comptable</b> ou Aide-comptable.</li>
                                    <li>Gestionnaire de <b>paie et déclarations sociales</b>.</li>
                                    <li>Responsable de la <b>trésorerie et de la facturation</b>.</li>
                                    <li>Assistant(e) de <b>Contrôle de Gestion</b> (suivi budgétaire).</li>
                                    <li>Collaborateur(trice) dans un <b>Cabinet d'Expertise Comptable</b>.</li>
                                </ul>
                        @elseif ($training1->title=="Montage Audiovisuel")
                                <ul>
                                    <li><b>Monteur Vidéo</b> (films, documentaires, clips).</li>
                                    <li>Assistant de <b>post-production</b>.</li>
                                    <li>Monteur dans les <b>chaînes de télévision</b> ou studios.</li>
                                    <li>Créateur de **contenus vidéo** pour le web et les réseaux sociaux.</li>
                                    <li>Technicien en <b>effets visuels simples (VFX)</b>.</li>
                                </ul>
                        @endif
                        </div>
                        <div class="tab-pane fade" id="Section4" role="tabpanel" aria-labelledby="Section4-tab">
                            <p class="text-center"><i class="fas fa-user-circle" style=" font-size:100px;"></i></p>
                            <p class="text-center">
                                <span class="" style="font-size:30px;">INSTITUT <span
                                        style="text-transform:uppercase;">supérieur</span> DU <span
                                        style="text-transform:uppercase;">numérique</span></span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="card sticky-top" style="top: 1rem;">
                    <img src="{{ asset('storage/' . $training1->img) }}" class="card-img-top" alt="Image de la formation {{ $training1->title }}">
                    <div class="card-body">
                        
                        <div class="star-rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star fa-2x mx-1"></i> 
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>

                        @if ($training1->title="Anglais" || $training1->title="Français" || $training1->title="Allemand" || $training1->title="Italien")
                            <p class="text-center practical-highlight">
                               Test de Niveau
                                <strong class="text-center">GRATUIT</strong>
                            </p>
                        @else
                            <p class="text-center practical-highlight">
                                Une formation axée sur la pratique :
                                <strong class="text-center">90% Pratique</strong>
                            </p>
                        @endif
                        
                        <a href="{{route('web.contact')}}" class="btn btn-primary w-100 mt-3 py-3">
                            S'inscrire Maintenant <i class="fa fa-arrow-right ms-2"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


