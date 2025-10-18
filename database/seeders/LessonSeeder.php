<?php

namespace Database\Seeders;

use App\Models\Lesson;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LessonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $lessons = [
            // Module 1
            ['module_id' => 1, 'title' => 'Notions de bases'],
            ['module_id' => 1, 'title' => 'Qu\'est ce la programmation'],
            ['module_id' => 1, 'title' => 'Comment fonctionne un site internet?'],
            ['module_id' => 1, 'title' => 'L\'hebergement Web'],
            ['module_id' => 1, 'title' => 'Les bases de données(SQL vs NoSQL)'],
            ['module_id' => 1, 'title' => 'Les API'],
            ['module_id' => 1, 'title' => 'La Responsivité'],
            ['module_id' => 1, 'title' => 'Les Langages Web'],
            ['module_id' => 1, 'title' => 'Les frameworks'],
            ['module_id' => 1, 'title' => 'Gestion de projet'],
            ['module_id' => 1, 'title' => 'Le visionning (GIT)'],
            ['module_id' => 1, 'title' => 'Les outils'],

            // Module 2
            ['module_id' => 2, 'title' => 'Les notions de bases en HTML'],
            ['module_id' => 2, 'title' => 'Les notions de bases du CSS'],
            ['module_id' => 2, 'title' => 'Les notions avancées'],
            ['module_id' => 2, 'title' => 'Decouverte de Bootsrap'],
            ['module_id' => 2, 'title' => 'Atelier Pratique 1: Réalisation d\'un portfolio en utilisant Bootsrap'],
            ['module_id' => 2, 'title' => 'Atélier pratique 2 : Réalisation complète d\'un blog responsif'],

            // Module 3
            ['module_id' => 3, 'title' => 'Introduction au Javascript'],
            ['module_id' => 3, 'title' => 'Manipulation des nombres et chaines de caractères'],
            ['module_id' => 3, 'title' => 'Les conditions et les boucles'],
            ['module_id' => 3, 'title' => 'Les fonctions'],
            ['module_id' => 3, 'title' => 'Manipuler les éléments HTML avec le DOM'],
            ['module_id' => 3, 'title' => 'Introduction à l\'AJAX'],
            ['module_id' => 3, 'title' => 'Les frameworks Javascript'],
            ['module_id' => 3, 'title' => 'Atelier pratique 1: Moteur de recherche avec auto-complétion'],
            ['module_id' => 3, 'title' => 'Projet personnel'],

            // Module 4
            ['module_id' => 4, 'title' => 'Structure de base, variables et constantes'],
            ['module_id' => 4, 'title' => 'Les opérateurs'],
            ['module_id' => 4, 'title' => 'Les structures de contrôle'],
            ['module_id' => 4, 'title' => 'Les fonctions'],
            ['module_id' => 4, 'title' => 'Les super Globales'],
            ['module_id' => 4, 'title' => 'L\'interaction avec la base de donnée'],
            ['module_id' => 4, 'title' => 'L\'architecture MVC'],
            ['module_id' => 4, 'title' => 'La programmation orientée Objet'],
            ['module_id' => 4, 'title' => 'Atelier pratique'],

            // Module 5
            ['module_id' => 5, 'title' => 'Utilisation du framework php LARAVEL'],
            ['module_id' => 5, 'title' => 'Notions avancées sur Laravel'],
            ['module_id' => 5, 'title' => 'Travail sur Git et Gitub'],
            ['module_id' => 5, 'title' => 'Atelier pratique'],

            // Module 6
            ['module_id' => 6, 'title' => 'Historique sur le developpement mobile et ses evolutions'],
            ['module_id' => 6, 'title' => 'Panorama des outils disponibles pour le cross-platform'],
            ['module_id' => 6, 'title' => 'Présentation générale de flutter'],
            ['module_id' => 6, 'title' => 'Positionnement sur le marché (Comparaison avec React Native), interet et stratégie de Google'],
            ['module_id' => 6, 'title' => 'Particularités de Flutter : vues dynamiques,Widgets,hotreload'],
            ['module_id' => 6, 'title' => 'Comprendre l\'architecture de flutter'],
            ['module_id' => 6, 'title' => 'Outils de développement'],
            ['module_id' => 6, 'title' => 'Atelier: Installation de flutter et configuration de l\'environnement de développement.'],

            // Module 7
            ['module_id' => 7, 'title' => 'Introduction à Dart et interet d\'utiliser le langage compilé'],
            ['module_id' => 7, 'title' => 'Principes et concept fondamentaux'],
            ['module_id' => 7, 'title' => 'Compilations JIT(Just In Time) et AOT(Ahead of time)'],
            ['module_id' => 7, 'title' => 'Conventions de codage,noms et ordonnancement'],
            ['module_id' => 7, 'title' => 'Variables, types et opérateurs'],
            ['module_id' => 7, 'title' => 'Structures de controle:if,while...'],
            ['module_id' => 7, 'title' => 'Programmation orientée objet avec DART'],
            ['module_id' => 7, 'title' => 'La gestion des erreurs'],
            ['module_id' => 7, 'title' => 'Atelier pratique'],

            // Module 8
            ['module_id' => 8, 'title' => 'Structure et composants d\'une application flutter'],
            ['module_id' => 8, 'title' => 'Le code dans main.dart'],
            ['module_id' => 8, 'title' => 'Hello World: exécuter une première application flutter'],
            ['module_id' => 8, 'title' => 'Utiliser un package externe'],
            ['module_id' => 8, 'title' => 'Cycle de vie d\'un widget'],
            ['module_id' => 8, 'title' => 'Widgets de base: Text,Row,column,stack et container'],
            ['module_id' => 8, 'title' => 'Les Widgets Material Design'],
            ['module_id' => 8, 'title' => 'Travaillez avec des images,styles ou polices'],
            ['module_id' => 8, 'title' => 'Avantages du Hot Reload'],
            ['module_id' => 8, 'title' => 'Example de cas pratique: Création d\'un première application Flutter , ajout et manipulation des widgets les plus utilisés'],

            // Module 9
            ['module_id' => 9, 'title' => 'Vue d\'ensemble de la disposition des des éléments dans une application Flutter'],
            ['module_id' => 9, 'title' => 'Introduction aux animations'],
            ['module_id' => 9, 'title' => 'Widgets parents et widgets enfants'],
            ['module_id' => 9, 'title' => 'Utiliser les thèmes'],
            ['module_id' => 9, 'title' => 'Aligner et changer la taille des widgets'],
            ['module_id' => 9, 'title' => 'GridView,ListView,Stack'],
            ['module_id' => 9, 'title' => 'Le catalogue de widgets Flutter'],
            ['module_id' => 9, 'title' => 'Example de cas pratiques: Mise en œuvre des bonnes pratiques pour construire une UI attractive et intuitive, travail sur la disposition des éléments d\'une application à l\'écran'],

            // Module 10
            ['module_id' => 10, 'title' => 'Etat des widgets:stateful et stateless widgets'],
            ['module_id' => 10, 'title' => 'Penser déclaratif'],
            ['module_id' => 10, 'title' => 'Les différentes approches de la gestion des états'],
            ['module_id' => 10, 'title' => 'La méthode setState'],
            ['module_id' => 10, 'title' => 'Creer des widgets interactif'],
            ['module_id' => 10, 'title' => 'Exemples de cas pratique: création de widgets stateful pour réagir aux actions de l\'utilisateur'],

            // Module 11
            ['module_id' => 11, 'title' => 'Le Navigator et les routes dans Flutter, principes de fonctionnement'],
            ['module_id' => 11, 'title' => 'Créer une nouvelle route'],
            ['module_id' => 11, 'title' => 'Naviguer entre deux écrans: MaterialPageRoute, méthodes push() et pop()'],
            ['module_id' => 11, 'title' => 'Nommer une route'],
            ['module_id' => 11, 'title' => 'Passez les données d\'un ecran à un autre'],
            ['module_id' => 11, 'title' => 'Examples de cas pratique: Ajout routes (pages) et implémentation d\'une navigation entre celles-ci'],

            // Module 12
            ['module_id' => 12, 'title' => 'Description des bibliothèques principales de Dart'],
            ['module_id' => 12, 'title' => 'Importer une bibliothèque'],
            ['module_id' => 12, 'title' => 'Collections: Listes,ensembles,maps'],
            ['module_id' => 12, 'title' => 'Dart: async et les classes future et Stream'],
            ['module_id' => 12, 'title' => 'Fonctions basiques et paramètres de fonctions'],

            // Module 13
            ['module_id' => 13, 'title' => 'Le package http et connexion à un serveur externe'],
            ['module_id' => 13, 'title' => 'Obtenir des données de localisation pour Android et IOS'],
            ['module_id' => 13, 'title' => 'Utiliser la bibliothèque dart:convert et parser du JSON'],
            ['module_id' => 13, 'title' => 'Présentation générale de SQLite et le Plugin sqflite'],
            ['module_id' => 13, 'title' => 'Créer la base de données et implémenter un modèle'],
            ['module_id' => 13, 'title' => 'Opérations CRUD et interactions avec la base'],

            // Module 14
            ['module_id' => 14, 'title' => 'Les composants matériels et logiciel d\'un ordinateur'],
            ['module_id' => 14, 'title' => 'Sytèmes d\'exploitation et navigation de base'],

            // Module 15
            ['module_id' => 15, 'title' => 'Présentation de l\'interface de Word'],
            ['module_id' => 15, 'title' => 'Création et enregistrement de documents'],
            ['module_id' => 15, 'title' => 'Saisie,mise en forme et édition de texte'],

            // Module 16
            ['module_id' => 16, 'title' => 'Utilisation de styles et de thèmes'],
            ['module_id' => 16, 'title' => 'insertion de tableaux et d\'images'],
            ['module_id' => 16, 'title' => 'Gestion des en-tetes et pied de page'],

            // Module 17
            ['module_id' => 17, 'title' => 'Présentation de l\'interface utilisateur d\'EXCEL'],
            ['module_id' => 17, 'title' => 'Création et enregistrement de feuilles de calcul'],
            ['module_id' => 17, 'title' => 'Saisie et mise en forme des données'],

            // Module 18
            ['module_id' => 18, 'title' => 'Utilisation de formules de base(SUM,AVERAGE,etc.)'],
            ['module_id' => 18, 'title' => 'Création de graphiques simples'],
            ['module_id' => 18, 'title' => 'Gestion des données avec les filtres et les tris'],
            ['module_id' => 18, 'title' => 'Utilisation de fonctions logiques (IF,AND,OR,etc)'],
            ['module_id' => 18, 'title' => 'Création de tableaux croisés dynamyques'],
            ['module_id' => 18, 'title' => 'Automatisation des taches avec les macros'],

            // Module 19
            ['module_id' => 19, 'title' => 'Création de diapositives et de présentations'],
            ['module_id' => 19, 'title' => 'Ajout de texte , d\'images et d\'animations'],

            // Module 20
            ['module_id' => 20, 'title' => 'Utilisation des transitions entre les diapositives'],
            ['module_id' => 20, 'title' => 'Ajout d\'animations aux objets'],
            ['module_id' => 20, 'title' => 'Création d\'une présentation multimédia'],

            // Module 21
            ['module_id' => 21, 'title' => 'Révision des compétences acquises'],
            ['module_id' => 21, 'title' => 'Création de projets individuels(Rapport, présentation,feuille de calcul)'],

            // Module 22
            ['module_id' => 22, 'title' => 'Roles et mission d\'un(e) sécrétaire comptable'],
            ['module_id' => 22, 'title' => 'Notion de base en comptabilité'],

            // Module 23
            ['module_id' => 23, 'title' => 'Enregistrement des opérations comptables'],
            ['module_id' => 23, 'title' => 'Elaborations des états financiers'],
            ['module_id' => 23, 'title' => 'Gestion de la TVA'],
            ['module_id' => 23, 'title' => 'Suivi des comptes clients et fournisseurs'],

            // Module 24
            ['module_id' => 24, 'title' => 'Notions de base de la comptabilité analytique'],
            ['module_id' => 24, 'title' => 'Calcul des couts et des marges'],

            // Module 25
            ['module_id' => 25, 'title' => 'Organisation administrative'],
            ['module_id' => 25, 'title' => 'Techniques de classement et d\'archivages'],
            ['module_id' => 25, 'title' => 'Redaction de documents professionnels'],
            ['module_id' => 25, 'title' => 'Utilisation des outils burautiques'],

            // Module 26
            ['module_id' => 26, 'title' => 'Maitrise des logiciels de comptabilité'],
            ['module_id' => 26, 'title' => 'Gestion des ressources humaines'],
            ['module_id' => 26, 'title' => 'Initiation à la gestion commerciale'],

            // Module 27
            ['module_id' => 27, 'title' => 'Principes de la gestion de la paie'],
            ['module_id' => 27, 'title' => 'Droit du travail et droit social'],

            // Module 28
            ['module_id' => 28, 'title' => 'Bases de la fiscalité des entreprises'],
            ['module_id' => 28, 'title' => 'Conformité légale et régulations'],

            // Module 29
            ['module_id' => 29, 'title' => 'Gestion de la trésorerie'],
            ['module_id' => 29, 'title' => 'Rapprochement Bancaire'],

            // Module 30
            ['module_id' => 30, 'title' => 'Techniques de communication professionnelle'],
            ['module_id' => 30, 'title' => 'Gestion des conflits et négociation'],

            // Module 31
            ['module_id' => 31, 'title' => 'Projet professionnel'],
            ['module_id' => 31, 'title' => 'Stage Professionnel'],

            // Module 32
            ['module_id' => 32, 'title' => 'Role et responsabilité d\'un ou d\'une sécretaire de direction'],
            ['module_id' => 32, 'title' => 'Organisation du travail et gestion des priorités'],

            // Module 33
            ['module_id' => 33, 'title' => 'Communication professionnelle'],
            ['module_id' => 33, 'title' => 'Rédaction des documents profesionnels'],
            ['module_id' => 33, 'title' => 'Maitrise des outils de communication'],

            // Module 34
            ['module_id' => 34, 'title' => 'Gestion de l\'agenda du directeur'],
            ['module_id' => 34, 'title' => 'Oranisation des réunions'],
            ['module_id' => 34, 'title' => 'Voyages d\'affaires'],

            // Module 35
            ['module_id' => 35, 'title' => 'Traitement du courrier'],
            ['module_id' => 35, 'title' => 'Archivage et gestion documentaire'],
            ['module_id' => 35, 'title' => 'Gestion des fournitures et des équipements'],

            // Module 36
            ['module_id' => 36, 'title' => 'Soutien à la gestion de projets'],
            ['module_id' => 36, 'title' => 'Outils de gestion des projets'],
            ['module_id' => 36, 'title' => 'Gestion budgétaire de projet'],

            // Module 37
            ['module_id' => 37, 'title' => 'Gestion des budgets'],
            ['module_id' => 37, 'title' => 'Facturation et suivi des paiements'],
            ['module_id' => 37, 'title' => 'Initiation à la comptabilité'],

            // Module 38
            ['module_id' => 38, 'title' => 'Les logiciels de bureautiques avancés'],
            ['module_id' => 38, 'title' => 'Tableaux et graphiques'],
            ['module_id' => 38, 'title' => 'Utilisation des logiciels de gestion'],

            // Module 39
            ['module_id' => 39, 'title' => 'Suivi administratif du personnel'],
            ['module_id' => 39, 'title' => 'Recrutement et intégration'],
            ['module_id' => 39, 'title' => 'Organisation des évènements d\'entreprise'],

            // Module 40
            ['module_id' => 40, 'title' => 'Anglais professionnel'],
            ['module_id' => 40, 'title' => 'Multilinguisme (Allemand,espagnol,etc)'],

            // Module 41
            ['module_id' => 41, 'title' => 'Gestion du stress et des conflits'],
            ['module_id' => 41, 'title' => 'Développement de la confiance en soi et de l\'asservité'],
            ['module_id' => 41, 'title' => 'Ethique professionnelle et confidentialité'],

            // Module 42
            ['module_id' => 42, 'title' => 'Projet professionnel et stage'],

            // Module 43
            ['module_id' => 43, 'title' => 'Roles et mission du technicien en maintenance informatique'],
            ['module_id' => 43, 'title' => 'Principes de base de l\'informatique'],

            // Module 44
            ['module_id' => 44, 'title' => 'Composants des ordinateurs'],
            ['module_id' => 44, 'title' => 'Assemblage et désassemblage d\'un pc'],
            ['module_id' => 44, 'title' => 'Dépannage matériel'],

            // Module 45
            ['module_id' => 45, 'title' => 'Installation et configuration des systèmes d\'exploitation'],
            ['module_id' => 45, 'title' => 'Gestion des comptes utilisateurs et de la sécurité'],
            ['module_id' => 45, 'title' => 'Dépannage des systèmes d\'exploitation'],

            // Module 46
            ['module_id' => 46, 'title' => 'Installation et configuration des logiciels'],
            ['module_id' => 46, 'title' => 'Gestion des licences et mise à jour'],
            ['module_id' => 46, 'title' => 'Support logiciel'],

            // Module 47
            ['module_id' => 47, 'title' => 'Principes de base des réseaux informatiques'],
            ['module_id' => 47, 'title' => 'Configuration des équipements réseau'],
            ['module_id' => 47, 'title' => 'Sécurite réseau'],

            // Module 48
            ['module_id' => 48, 'title' => 'Maintenance préventive et corrective'],
            ['module_id' => 48, 'title' => 'Sécurité informatique'],
            ['module_id' => 48, 'title' => 'Gestion des incidents et support technique'],

            // Module 49
            ['module_id' => 49, 'title' => 'Introduction à la virtualisation'],
            ['module_id' => 49, 'title' => 'Service cloud'],

            // Module 50
            ['module_id' => 50, 'title' => 'Technique de communication'],
            ['module_id' => 50, 'title' => 'Gestion des relations clients'],

            // Module 51
            ['module_id' => 51, 'title' => 'Projet de fin de formation'],
            ['module_id' => 51, 'title' => 'Stage en entreprise'],
        ];

        foreach ($lessons as $lesson) {
            Lesson::create([
                'user_id' => 1,
                'module_id' => $lesson['module_id'],
                'title' => $lesson['title'],
            ]);
        }
    }
}
