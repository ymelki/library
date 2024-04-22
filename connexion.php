<?php

// 1.recuperation des données en POST 

// 2. on verifie que c'est bien en existant dans la B.D.
// 2.1 connexion en PDO
// 2.2 requete prepare avec un filtre sur le login
// 3.3 comparaison
// 3.4 Si c'est ok la comparaison => on est connecté en SESSION
//              KO                => redirection vers la page de connexion avec message d'erreur
// 3.5 La gestion des mots de passe crypté en B.D.               