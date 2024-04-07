# Ads Management Tool NetRom Summercamp 2018

Ads management web application created using PHP 7.2 and Symphony 4.1 during the 1 month NetRom Summercamp, back in 2018.  

Kept only the source code files and the static resources like images.   
Did not store here any configuration files like the symfony.lock, composer.json, composer.lock etc.  

Discalimer: This is a simple project created for learning purposes. Any images or other visual resources used have been downloaded from [Pexels ](https://www.pexels.com/) which offers free stock photos.  

If there is any image that contains a copyright, please notify me and I will delete it.   
Please keep in mind that this is a non-commercial, educational purpose project.    

Environment
------
- Composer (https://getcomposer.org/doc/00-intro.md#installation-windows)
- Git (https://git-scm.com/download/win)
- XAMPP (https://www.apachefriends.org/ro/download.html): must be installed in D:, the one with PHP 7.2.6
- PhpStorm (https://www.jetbrains.com/phpstorm)

Project
-------
 - Create new directory in D:\xampp\htdocs
 - Execute ```git clone https://gitlab.com/summer_camp/ads-management.git```
 - Checkout own branch ```git checkout <branch>```
 - Execute ```composer install```
 - Configure Git user: ```git config user.name "Name"```, ```git config user.email "email"```

Git commands
------
- ```git checkout <branchName>```: switch to another branch
- ```git checkout <FileName>```: revert the changes to the committed state
- ```git pull```: fetch the changes from the remote repository
- ```git add <file|path>```: adds files to the next commit
- ```git commit -m "Commit message"```: perform a new commit to the local repository
- ```git push origin <branchName>```: upload the changes to the remote repository, on the specified branch
