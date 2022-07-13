# Projet_php (Test)

    #les outils utilisé pour création  le projet

    1. IDE:visual studio code 
    2. Serveur:Xamapp apache
    3.database: mysql (phpmyadmin)

    #  architecture logicielle (mvc)

           1. Expliqaction mon modèle de MVC que j'ai utilisé 
     
                1.j'ai devisé le projet en deux parties 
       
                 1.1. dossier public: qui contient tous les fichiers css et js  et index page (il sera affichié   par défaut quand accéde le serveur)
       
                 1.2. dossier App: 
                 
                   1.2.1.dossier config:  contient les constants seront utilise
                   1.2.2.dossier Controllers: il recevra les requêtes de mon serveur ,puis il  les traites
                   1.2.3.dossier Libraries: contient trois file :
                          1.2.3.1 file Core.class.php:il est le responsable de routage la requête 
                          1.2.3.1 file Controllerur.class.php:contient deux fonction 
                                      la premiere fonction :il permis la creation d'une instance de classe modéle qui j'ai choisis
                                      La deuxième  fonction :il La deuxième fonction : il a appelé la file view qui j'ai choisis.

                          1.2.3.1 file database.class.php:Contient toutes les configurations à connecter à la base de donnee et les opérations  Pdo.
                   1.2.4 dossier Model :contient toutes les classes qui s'intégraient avec la base de données.
                   1.2.5 dossier View : contient les pages de mon serveur.
                   1.2.6 fichier loader.php:pour aplleé toutes les  classes sont utliseés  dans une fichie.
                   1.2.7 .htacess: pour configurer le serveur par rejet accède le dossier de mon serveur  par les clients.
              
#schema de la base de donne

CREATE TABLE `users` (
  `id` int(11) NOT NULL   AUTO_INCREMENT,
  `nom` varchar(80) NOT NULL,
  `prenom` varchar(80) NOT NULL,
  `contact` varchar(80) NOT NULL,
  `password` varchar(80) NOT NULL,
  `date` varchar(80) NOT NULL,
  `gener` varchar(80) NOT NULL,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

       
       
       















