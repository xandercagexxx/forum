# forum
Forum d'

Etapes à respecter:

Objectif : création d'un forum en php

 * Besoins :
 ===========

Description des pages :
barre de menu
 + Page d'acceuil

     + Page de connexion

 + Page de sujet
 + Page administrative (ex: log serveur)


Important: avoir un site web dynamique.


V1.0 :
======

    Entêtes et pieds de page fixes                                                        (philippe)

    Menus                                                                                 (philippe)

    Sujets de discussion (hierarchisés)                                                   (sylvain)

    Création de sujets                                                                    (philippe)


V1.5 :
======

    Editeur pour l'entrée de texte avec gras et italique                                  (philippe )


V2.0 :                                                                                    (philippe & sylvain)
======

    Login                                                                                 

    Listing des utilisateurs connectés (comptage)

    Gestion de compte personnalisée, score (points)/status

    Possibilité de Lock / Delock un topic

    ban / Mode découragé (comme nous)


V3.0 :
======

    un système de report === Réaction positive/négative aux posts <- score ?

    Chat live                                                                            (sylvain)

    Connexion via API google



    check box gestion rgpd pour les email de connexion



    Idées en vrac :

    import d'image

    gestion du responsive

    connexion en double authentification 





==================================================================================

Connexion via API google
Possibilité de Lock / Delock un topic
check box gestion rgpd pour les email de connexion
graphe météorologique et géologique
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'http://api.openweathermap.org/data/2.5/weather?q=Grenoble,fr);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$data = curl_exec($ch);

gestion des emoji
envoi de wizz
l'ajout de  stickers troll
2FA
