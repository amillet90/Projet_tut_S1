# note sur github/gitlab

* documentation
<https://developer.mozilla.org/fr/docs/Apprendre/Utiliser_les_pages_GitHub>

… ou importer du code d'un autre dépot (**repository**)

~~~
git clone https://github.com/amillet90/Projet_tut.git
~~~

… ou créer un nouveau dépot avec une ligne de commande

~~~
echo "# Projet_tut" >> README2.md
git init
git add README2.md
git commit -m "first commit"
git remote add origin https://github.com/amillet90/Projet_tut.git
git push -u origin master

git add -A .     # ajoute tout
~~~

…  récupérer de github/gitlab

~~~
git pull origin master #
~~~



…  ou pousser (**push**) dans un dépot existant avec une ligne de commande

~~~
git remote add origin https://github.com/amillet90/Projet_tut.git
git push -u origin master
~~~


# documentation gitlab


# gitlab
 Command line instructions

## Git global setup

~~~
git config --global user.name "iut belfort projet tut"
git config --global user.email "votreLogin.iut90@gmail.com"
~~~

## Existing folder (travailler dans le projet)

~~~
cd existing_folder
git init
git remote add origin https://gitlab.com/votreloginiut90/projetinfo.git
~~~

## Create a new repository (pour vous : récupérer(création) du projet sur votre machine)


~~~
git clone https://gitlab.com/votreloginiut90/projetinfo.git
~~~

## Existing Git repository (pour utiliser un deuxième dépot)

~~~
cd existing_repo
git remote rename origin old-origin    # pour renommer un dépot 
git remote add origin https://gitlab.com/votreloginiut90/projetinfo2.git
git push -u origin --all
git push -u origin --tags
~~~

<https://git-scm.com/docs/git-credential>

~~~
git config --global credential.helper 'store --file ~/.my-credentials'
~~~

# conflit 

gestion

~~~
---  git add -A . 
---  git commit -m "test2"
---  git pull origin master
---  git status

---  git add a_documentation_fichier_test_etudiants/essai.txt 
---  git status
---  git commit
---  git status
---  git push
~~~