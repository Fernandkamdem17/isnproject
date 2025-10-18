<?php

namespace Database\Seeders;

use App\Models\Module;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ModuleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $modules = [
            //Developpement Web et Mobile
            ['training_id' => 1, 'title' => 'LES PRINCIPES DE BASE DE LA PROGRAMMATION WEB'],
            ['training_id' => 1, 'title' => 'LES FONDAMENTAUX DU CSS ET DU HTML'],
            ['training_id' => 1, 'title' => 'APPRENDRE LA PROGRAMMATION JAVASCRIPT'],
            ['training_id' => 1, 'title' => 'PROGRAMMATION PHP ET BASE DE DONNEES'],
            ['training_id' => 1, 'title' => 'DEVELOPPER PLUS RAPIDEMENT AVEC LES FRAMEWORKS ET CMS'],
            ['training_id' => 1, 'title' => 'INTRODUCTION A LA FORMATION FLUTTER ET DART'],
            ['training_id' => 1, 'title' => 'LE LANGAGE DE PROGRAMMATION DART'],
            ['training_id' => 1, 'title' => 'INTRODUCTION A FLUTTER ET WIDGETS DE BASE'],
            ['training_id' => 1, 'title' => 'CREATION DES LAYOUTS'],
            ['training_id' => 1, 'title' => 'INTERACTIVITE ET GESTION DES ETATS'],
            ['training_id' => 1, 'title' => 'NAVIGATION ET ROUTING'],
            ['training_id' => 1, 'title' => 'BIBLIOTHEQUE ET PACKAGES DART'],
            ['training_id' => 1, 'title' => 'BACK-END ET GESTION DES BASES DE DONNEES'],

            // Sécrétariat Bureautique
            ['training_id' => 2, 'title' => "INTRODUCTION A L'INFORMATIQUE"],
            ['training_id' => 2, 'title' => "INTRODUCTION A MICROSOFT OFFICE WORD"],
            ['training_id' => 2, 'title' => "MISE EN FORME AVANCEE"],
            ['training_id' => 2, 'title' => "INTRODUCTION A MICROSOFT OFFICE EXCEL"],
            ['training_id' => 2, 'title' => "FONCTIONS ET FORMULES"],
            ['training_id' => 2, 'title' => "PRESENTATION DE L'INTERFACE UTILISATEUR DE POWERPOINT"],
            ['training_id' => 2, 'title' => "ANIMATIONS ET TRANSITIONS"],
            ['training_id' => 2, 'title' => "PROJETS ET CERTIFICATION"],

            // Sécrétariat Comptable
            ['training_id' => 3, 'title' => "INTRODUCTION AU SECRETARIAT ET A LA COMPTABILITE"],
            ['training_id' => 3, 'title' => "COMPTABILITE GENERALE"],
            ['training_id' => 3, 'title' => "COMPTABILITE ANALYTIQUE"],
            ['training_id' => 3, 'title' => "GESTION ADMINISTRATIVE ET BUREAUTIQUE"],
            ['training_id' => 3, 'title' => "LOGICIELS COMPTABLES ET GESTION D'ENTREPRISE"],
            ['training_id' => 3, 'title' => "GESTION DE LA PAIE ET DROIT SOCIAL"],
            ['training_id' => 3, 'title' => "FISCALITE ET LEGISLATION"],
            ['training_id' => 3, 'title' => "GESTION ET SUIVIE DE LA TRESORERIE"],
            ['training_id' => 3, 'title' => "TECHNIQUES DE COMMUNICATION ET RELATIONS CLIENTS"],
            ['training_id' => 3, 'title' => "PROJET PROFESSIONNEL ET STAGE"],

            // Sécrétariat de Direction
            ['training_id' => 4, 'title' => "INTRODUCTION AU SECRETARIAT DE DIRECTION"],
            ['training_id' => 4, 'title' => "TECHNIQUES DE COMMUNICATION"],
            ['training_id' => 4, 'title' => "GESTION DES DE L'AGENDA ET ORGANISATION DES REUNIONSE"],
            ['training_id' => 4, 'title' => "GESTION ADMINISTRATIVE"],
            ['training_id' => 4, 'title' => "GESTION DE PROJETS"],
            ['training_id' => 4, 'title' => "COMPTABILITE ET GESTION FINANCIERE"],
            ['training_id' => 4, 'title' => "MAITRISE DES OUTILS BUREAUTIQUES"],
            ['training_id' => 4, 'title' => "GESTION DES RESSOURCES HUMAINES"],
            ['training_id' => 4, 'title' => "LANGUES ET COMMUNICATION INTERNATIONALE"],
            ['training_id' => 4, 'title' => "DEVELOPPEMENT PERSONNEL ET SOFT SKILLS"],
            ['training_id' => 4, 'title' => "PROJET PROFESSIONNEL ET STAGE"],

            // Maintenance informatiquue
            ['training_id' => 5, 'title' => "INTRODUCTION A LA MAINTENANCE INFORMATIQUE"],
            ['training_id' => 5, 'title' => "MATERIEL INFORMATIQUE(HARDWARE)"],
            ['training_id' => 5, 'title' => "LE SYSTEME D'EXPLOITATION(Operating System)"],
            ['training_id' => 5, 'title' => "LOGICIELS ET APPLICATIONS"],
            ['training_id' => 5, 'title' => "RESEAUX ET CONNECTIVITE"],
            ['training_id' => 5, 'title' => "MAINTENANCE ET SECURITE INFORMATIQUE"],
            ['training_id' => 5, 'title' => "VIRTUALISATION ET CLOUD COMPUTING"],
            ['training_id' => 5, 'title' => "COMMUNICATION ET SUPPORT CLIENT"],
            ['training_id' => 5, 'title' => "PROJET PRATIQUE ET STAGE"],

            // Maintenance des réseaux informatiques
            ['training_id' => 6, 'title' => "INTRODUCTION AUX RESEAUX INFORMATIQUEs"],
            ['training_id' => 6, 'title' => "ARCHITECTURES DES RESEAUX"],
            ['training_id' => 6, 'title' => "CONFIGURATION ET GESTION DES RESEAUX"],
            ['training_id' => 6, 'title' => "SECURITE DES RESEAUX"],
            ['training_id' => 6, 'title' => "SURVEILLANCE ET MAINTENANCE DES RESEAUX"],
            ['training_id' => 6, 'title' => "TECHNOLOGIES DE RESEAU AVANCEES"],
            ['training_id' => 6, 'title' => "CONCEPTION ET DEPLOIEMENT DES RESEAUX"],
            ['training_id' => 6, 'title' => "ADMINISTRATION DES RESEAUX"],
            ['training_id' => 6, 'title' => "VIRTUAL PRIVATE PROTOCOL (VPN) ET ACCES A DISTANCE"],
            ['training_id' => 6, 'title' => "PROJET PRATIQUE ET STAGE"],

            // Marketing Digital
            ['training_id' => 7, 'title' => "MARKETING TRADITIONNEL VS MARKETING DIGITAL"],
            ['training_id' => 7, 'title' => "CONTENT MANAGEMENT"],
            ['training_id' => 7, 'title' => "LA PUBLICITE SUR LES RESEAUX SOCIAUX"],
            ['training_id' => 7, 'title' => "PRISE EN MAIN DES OUTILS DU SOCIAL MEDIA ET DU SOCIAL MEDIA MANAGER"],
            ['training_id' => 7, 'title' => "CREER ET OPTIMISER SA CHAINE D'ACQUISITION CLIENT"],
            ['training_id' => 7, 'title' => "MAITRISER LES ELEMENTS D'UNE DEMARCHE DE MARKETING DIGITAL PROFESSIONNELLE"],
            ['training_id' => 7, 'title' => "NOTIONS DE CREATION DE SITE WEB ET REFERENCEMENT NATUREL"],
            ['training_id' => 7, 'title' => "PROJET DE FIN DE FORMATION ET ACCOMPAGNEMENT A LA CERTIFICATION"],

            // Graphisme de Production
            ['training_id' => 8, 'title' => "INTRODUCTION A ADOBE PHOTOSHOP"],
            ['training_id' => 8, 'title' => "L'ESSENTIEL DE L'INTERFACE DE PHOTOSHOP"],
            ['training_id' => 8, 'title' => "GESTION DES DOCUMENTS ET DE LA NAVIGATION"],
            ['training_id' => 8, 'title' => "LES FONDAMENTAUX DE L'IMAGE NUMERIQUE"],
            ['training_id' => 8, 'title' => "TRAVAILLER AVEC LES CALQUES"],
            ['training_id' => 8, 'title' => "LES TECHNIQUES DE TRANSFORMATION"],
            ['training_id' => 8, 'title' => "TRAVAILLER AVEC LES MASQUES DE FUSION"],
            ['training_id' => 8, 'title' => "TRAVAILLER AVEC PLUSIEURS IMAGES"],
            ['training_id' => 8, 'title' => "LA TYPOGRAPHIE"],
            ['training_id' => 8, 'title' => "INTRODUCTION A ADOBE ILLUSTRATOR"],
            ['training_id' => 8, 'title' => "LES FONDAMENTAUX"],
            ['training_id' => 8, 'title' => "EXPLORATION DE L'INTERFACE D'ADOBE ILLUSTRATOR"],
            ['training_id' => 8, 'title' => "NAVIGATION ET UTILISATION DES VUES DANS ILLUSTRATOR"],
            ['training_id' => 8, 'title' => "TRAITER LES DOCUMENTS DANS ILLUSTRATOR"],
            ['training_id' => 8, 'title' => "CREATION ET UTILISATION DES FORMES"],
            ['training_id' => 8, 'title' => "LA TRANSFORMATION DANS ILLUSTRATOR"],
            ['training_id' => 8, 'title' => "COMPRENDRE LES OBJETS ET LES CALQUES"],
            ['training_id' => 8, 'title' => "LE DESSIN"],
            ['training_id' => 8, 'title' => "LA CHARTE GRAPHIQUE"],
            ['training_id' => 8, 'title' => "LA COULEUR"],
            ['training_id' => 8, 'title' => "LES FORMES"],
            ['training_id' => 8, 'title' => "LA TYPOGRAPHIE"],
            ['training_id' => 8, 'title' => "TRAVAUX PRATIQUES:LA CONCEPTION DES FLYERS"],
            ['training_id' => 8, 'title' => "TRAVAUX PRATIQUES:LA CONCEPTION DES LOGOS & CHARTE GRAPHIQUE"],
            ['training_id' => 8, 'title' => "TRAVAUX PRATIQUES:LA CONCEPTION DES BROCHURES"],
            ['training_id' => 8, 'title' => "TRAVAUX PRATIQUES:LA CONCEPTION DES AFFICHES GRAND FORMAT"],
            ['training_id' => 8, 'title' => "TRAVAUX PRATIQUES: CONCEPTION DE PACKAGING"],
            ['training_id' => 8, 'title' => "TRAVAUX PRATIQUES: CONCEPTION D'UN PORTFOLIO"],
            ['training_id' => 8, 'title' => "PROJET DE FIN DE FORMATION"],

            // Web master
            ['training_id' => 9, 'title' => "INTRODUCTION AU DEVELOPPEMENT WEB"],
            ['training_id' => 9, 'title' => "DEVELOPPEMENT FRONT-END AVANCE"],
            ['training_id' => 9, 'title' => "DEVELOPPEMENT BACK-END"],
            ['training_id' => 9, 'title' => "SYSTEME DE GESTION DE CONTENU (CMS)"],
            ['training_id' => 9, 'title' => "OPTIMISATION ET PERFORMANCE WEB"],
            ['training_id' => 9, 'title' => "SECURITE WEB"],
            ['training_id' => 9, 'title' => "HEBERGEMENT ET GESTION DE SERVEUR"],
            ['training_id' => 9, 'title' => "DESIGN ET EXPERIENCE UTILISATEUR (UX/UI)"],
            ['training_id' => 9, 'title' => "ANALYSE ET OUTILS DE SUIVI"],
            ['training_id' => 9, 'title' => "GESTION DE PROJET ET COMMUNICATION"],
            ['training_id' => 9, 'title' => "PRATIQUE ET PROJET"],

            // Comptablilité Informatisée et de Gestion
            ['training_id' => 10, 'title' => "INTRODUCTION A LA COMPTABILITE"],
            ['training_id' => 10, 'title' => "INTRODUCTION A LA COMPTABILITE INFORMATISEE"],
            ['training_id' => 10, 'title' => "MAITRISE DES LOGICIELS COMPTABLES"],
            ['training_id' => 10, 'title' => "GESTION DES ACTIFS ET PASSIFS"],
            ['training_id' => 10, 'title' => "GESTION DE LA PAIE ET DES RESSOURCES HUMAINES"],
            ['training_id' => 10, 'title' => "ANALYSE FINANCIERE ET REPORTING"],
            ['training_id' => 10, 'title' => "GESTION BUDGETAIRE ET PREVISIONS"],
            ['training_id' => 10, 'title' => "SECURITE INFORMATIQUE ET SAUVEGARDE DES DONNEES"],
            ['training_id' => 10, 'title' => "COMPTABILITE SPECIFIQUE"],
            ['training_id' => 10, 'title' => "PRATIQUE ET PROJET REEL"],

            // Montage Audiovisuel
            ['training_id' => 11, 'title' => "LES FONDAMENTAUX D'ADOBE PREMIERE PRO"],
            ['training_id' => 11, 'title' => "LES FONDAMENTAUX D'ADOBE AFTER EFFECTS"],
            ['training_id' => 11, 'title' => "THEORIE DU MONTAGE VIDEO & TECHNIQUES DE PRISE DE VUE"],
            ['training_id' => 11, 'title' => "TRAVAUX PRATIQUES"],
        ];

        foreach ($modules as $module) {
            Module::create([
                'user_id' => 1,
                'training_id' => $module['training_id'],
                'title' => $module['title'],
            ]);
        }
    }
}
