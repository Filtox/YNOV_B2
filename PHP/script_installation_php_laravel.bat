@echo off
:accueil
echo A qu'elle ‚tape voulez vous rendre ?
echo.
echo 1 : Depuis le d‚but : rien n'a ete effectu‚ pour le moment
echo 2 : Clone du d‚pot deja effectu‚
echo 3 : Migation de la base de donn‚es
echo.
set /p reponse=">"
if "%reponse%"=="1" goto cds
if "%reponse%"=="2" goto cloned
if "%reponse%"=="3" goto migrated
if "%reponse%"=="" (
echo Champs vides non autoris‚s
echo.
goto accueil
)
if not "%reponse%"=="1" (
echo Demande non existente
echo.
goto accueil
)
if not "%reponse%"=="2" (
echo Demande non existente
echo.
goto accueil
)
if not "%reponse%"=="3" (
echo Demande non existente
echo.
goto accueil
)
echo.

:cds
echo Ou voulez vous cloner le d‚pot (rentrer le chemin) ?
echo Exemple : C:\Users\Documents
echo.
set /p ch=">"
echo.
if "%ch%"=="" (
echo Champs vides non autoris‚s
echo.
goto cds
)
if not exist %ch%\nul (
echo Dossier non existant
echo.
goto cds
)
echo.
:valid2
echo.
echo Etes vous sur que c'est le bon dossier ?
echo.
echo %ch%
echo.
echo 1 pour Oui / 2 pour Non
echo.
set /p rep3=">"
if "%rep3%"=="1" goto git
if "%rep3%"=="2" goto cds
if "%rep3%"=="" (
echo Champs vides non autoris‚s
echo.
goto valid2
)
if not "%rep3%"=="1" (
echo.
echo Demande non existente
echo.
goto valid2
)
if not "%rep3%"=="2" (
echo.
echo Demande non existente
echo.
goto valid2
)
cd %ch%
echo.

:git
cd %ch%
echo.
echo Indiquez le d‚pot que vous voulez cloner :
echo Exemple : https://github.com/User/nomDuDepot.git)
echo.
set /p git=">"
echo.
if "%git%"=="" (
echo Champs vides non autoris‚s
echo.
goto git
)
for %%a in (%git%) do set $Fichier=%%~xa
if not "%$Fichier%"==".git" (
echo D‚pot non existant ou mauvaise synthaxe
echo.
goto git
)
git clone %git%

:rep
echo.
echo Ou se situe le sous-repertoire du projet (a partir de l'emplacement ou vous avez clon‚) ?
echo Exemple : php/monSite
echo.
set /p dos=">"
echo.
if "%dos%"=="" (
echo Champs vides non autoris‚s
echo.
goto rep
)
if not exist %dos%\nul (
echo Dossier non existant
echo.
goto rep
)
echo.
:valid3
echo.
echo Etes vous sur que c'est le bon dossier ?
echo.
echo %dos%
echo.
echo 1 pour Oui / 2 pour Non
echo.
set /p rep3=">"
if "%rep3%"=="1" goto composRep
if "%rep3%"=="2" goto rep
if "%rep3%"=="" (
echo Champs vides non autoris‚s
echo.
goto valid3
)
if not "%rep3%"=="1" (
echo.
echo Demande non existente
echo.
goto valid3
)
if not "%rep3%"=="2" (
echo.
echo Demande non existente
echo.
goto valid3
)
:composRep
cd %dos%
echo.
goto compos

:cloned
echo.
echo Quel est le chemin d'acc‚s de votre projet ?
echo Exemple : C:\Users\Documents\php\monsite
echo.
set /p doss=">"
echo.
if "%doss%"=="" (
echo Champs vides non autoris‚s
echo.
goto cloned
)
if not exist %doss%\nul (
echo Dossier non existant
echo.
goto cloned
)
:valid1
echo.
echo Etes vous sur que c'est le bon dossier ?
echo.
echo %doss%
echo.
echo 1 pour Oui / 2 pour Non
echo.
set /p rep2=">"
if "%rep2%"=="1" goto composCloned
if "%rep2%"=="2" goto cloned
if "%rep2%"=="" (
echo Champs vides non autoris‚s
echo.
goto valid
)
if not "%rep2%"=="1" (
echo.
echo Demande non existente
echo.
goto valid1
)
if not "%rep2%"=="2" (
echo.
echo Demande non existente
echo.
goto valid1
)
:composCloned
cd %doss%
goto compos

:compos
echo.
echo Ex‚cution de composer install
call composer install
echo.
echo.
echo.
echo Ex‚cution de npm install
echo.
call npm install
echo.
echo.
echo Copie du fichier .env.example en .env
copy .env.example .env
echo.
echo.
echo G‚n‚ration d'une nouvelle cl‚ dans le fichier .env
call php artisan key:generate
echo.
echo.

:migration
echo.
echo Voulez vous effectuer la migration de la base de donn‚es ?
echo 1 pour Oui / 2 pour Non
echo.
set /p rep=">"
if "%rep%"=="1" goto base
if "%rep%"=="2" goto fin
if "%rep%"=="" (
echo Champs vides non autoris‚s
echo.
goto migration
)
if not "%rep%"=="1" (
echo Demande non existente
echo.
goto migration
)
if not "%rep%"=="2" (
echo Demande non existente
echo.
goto migration
)

:migrated
echo.
echo Quel est le chemin d'acc‚s de votre projet ?
echo Exemple : C:\Users\Documents\php\monsite
echo.
set /p dossier=">"
if "%dossier%"=="" (
echo Champs vides non autoris‚s
echo.
goto migrated
)
if not exist %dossier%\nul (
echo Dossier non existant
echo.
goto migrated
)
:valid
echo.
echo Etes vous sur que c'est le bon dossier ?
echo.
echo %dossier%
echo.
echo 1 pour Oui / 2 pour Non
echo.
set /p rep1=">"
if "%rep1%"=="1" goto base
if "%rep1%"=="2" goto migrated
if "%rep1%"=="" (
echo Champs vides non autoris‚s
echo.
goto valid
)
if not "%rep1%"=="1" (
echo.
echo Demande non existente
echo.
goto valid
)
if not "%rep1%"=="2" (
echo.
echo Demande non existente
echo.
goto valid
)
echo.

:base
cd %dossier%
echo.
echo Assurez-vous que votre base de donn‚es soit bien d‚marr‚e avant de faire la migration
pause
echo.
echo Migration de la base de donn‚es
call php artisan migrate
echo.
echo.
echo.
echo Amorce de la base de donn‚es
call php artisan db:seed
echo.
:fin
echo.
echo Configuraion termin‚e
pause