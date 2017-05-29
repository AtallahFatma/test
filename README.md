Symphony CRUD
========================
Descriptif
-----
L'objectif du projet c'est de créer un generateur CRUD ...

Setup
-----

	 instruction install

Git
---
 
Utilisation d'une branche `develop` pour centraliser tous les développements.

Lors du développement d'une feature : 

1. git checkout `develop`
2. git pull --rebase
3. git checkout -b `feature`
4. git push -u origin `feature`
  
Lorsque la feature est terminée : 

1. git checkout `develop`
2. git pull --rebase
3. git checkout `feature`
4. git rebase -i `develop`
5. git checkout `develop`
6. git merge `feature`
7. git branch -d `feature`
8. git push origin :`feature`

Lorsque la branche develop est stable, la merger sur master.