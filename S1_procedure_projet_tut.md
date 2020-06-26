
# Organisation du code dans le projet tuteuré de S1

## Noms des fichiers (css, html, php)
Eviter les majuscules/minuscules, eviter caractères espace, "_" , accents. Suivre les conseils de cette [Documentation](https://developer.mozilla.org/fr/docs/Apprendre/Commencer_avec_le_web/G%C3%A9rer_les_fichiers).

## structure du code Html
[structure d'un document](https://developer.mozilla.org/fr/docs/Apprendre/HTML/Introduction_%C3%A0_HTML/Document_and_website_structure)

## organistation des fichiers

Boilerplate, Initializr, HTML KickStart…       ?
Les bonnes pratiques pour organiser ses fichiers html, css, images .... de son projet.
L'organistation la plus populaire (à ma connaissance) est "Boilerplate". Il existe des sur-couche à cette organisation de fichier : Initializr, HTML KickStart…
<br>
Mais une simple organisation comme dans cet [article](https://www.apprendre-html-et-css.com/comment_organiser_ses_fichiers.html) suffit





# découverte "Découvrez l’intégration continue, le déploiement et la livraison"

<https://trailhead.salesforce.com/fr/content/learn/modules/heroku-flow/learn-about-continuous-integration-deployment-and-delivery>

<https://medium.com/@JohanPujol/int%C3%A9gration-continue-d%C3%A9ploiement-continue-ci-cd-avec-gitlab-et-heroku-b809801a1524>

# Utilisation de github/gitlab comme dépot

## installer git (sur votre machine)

## créer un compte github

[lien sur github](https://github.com/join)

## créer un dépot pour votre projet

Ne pas le mettre en public


~~~
git remote add s1_projet https://github.com/amillet90/Projet_tut_S1.git
~~~


~~~
git init
~~~

# créer un client heroku pour votre projet tuteuré de S1

## Héroku c'est quoi ?

Heroku est une plateforme d’hébergement qui vous permet de déployer tout un tas d’applications dynamiques en Rails, PHP, Node.js ou encore des applications web en Python par exemple.Elle sert uniquement pour les tests.
Dans votre cas, elle ne va servir que pour héberger les pages Web de votre projet tuteuré.

## créer [un compte heroku](https://signup.heroku.com/)
Aller sur le lien [heroku](https://signup.heroku.com/)


## Installer le client Heroku
Suivre [la documentation](https://devcenter.heroku.com/articles/heroku-cli) 

* sur linux

~~~
sudo snap install --classic heroku
~~~

* sur windows

~~~
choco install heroku-cli
~~~


## utiliser le client heroku

Dans le dossier de votre Projet

~~~
# se placer dans le bon répertoire
# se connecter à la plateforme heroku
heroku login -i
# création du projet
heroku apps:create s1-projet

# ouvre le navigateur
heroku open
~~~

* à chaque modification

~~~
# on pousse les modifications
git add -A
git commit -am "make it better"
git push heroku

#https://dashboard.heroku.com/apps/s1-projet/deploy/github
#connecter à github
~~~


# Annexe

heroku run  : permet de lancer un service (serveur mysql)

<https://medium.com/@girardmaxime33/comment-h%C3%A9berger-votre-site-gratuitement-1accf477a37>

<https://www.youtube.com/watch?v=Uj8-m35Uzm0>