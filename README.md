# ToddlerTimeTrends
Web Application for tracking and analysis of scheduling, meals, medicine, and potty training for toddlers

## Checking out locally
```
git clone git@github.com:officialdarksheao/ToddlerTimeTrends.git
```
My Local Alias to keep keys separate by project:
```
git clone git@officialdarksheao_github:officialdarksheao/ToddlerTimeTrends.git
```

## Prerequisites
This project makes use of the following tools:
* PHP 7.1.2
    * http://php.net/downloads.php#v7.1.22
    * Language of primary code
* Composer
    * https://getcomposer.org
    * PHP project and dependency manager
* Oracle VM VirtualBox
    * https://www.virtualbox.org/wiki/Downloads
    * Required VM host for vagrant to use
    * Vagrant requires extension pack to be installed, found on the same download page.
    * If running on windows, you must disable HyperVisor.
* Vagrant by HashiCorp
    * https://www.vagrantup.com
    * Provider of easy and fast virtual machines for local development
* Homestead
    * https://laravel.com/docs/5.7/homestead
    * Virtual box tailored specifically for working with laravel
* Visual Studio Code
    * https://code.visualstudio.com
    * My Preferred Code Editor
    * Recommended plugins:
        * Code Spell Checker
        * Laravel 5 Snippets
        * Markdown All in One
        * PHP IntelliSense
        * DotENV

> **Disclaimer:** My host machine is windows. I know, I know. So the commands I am posting are tailored to windows users for the most part.


## Setting up for local development
1. Clone the repository to a local directory. I recommend always doing git operations via ssh. 
    * `git clone git@github.com:officialdarksheao/ToddlerTimeTrends.git`
2. In your shell of choice (Powershell or Bash) navigate to that folder and then to the folder of the project you want to work on. For work on the Web Application, that folder would be PottyTimeTrendsWeb.
3. Download any required dependencies using composer. 
    * `composer install`
4. Wait for it to finish... The initial install may take a while.
5. Make the homestead configuration. 
    * `.\vendor\bin\homestead make` if you are using Powershell.
6. Open the Homestead.yaml file that has been created. You may now tailor the configurations if you wish.
    * I would recommend that you at least check the IP address that the Homestead file is going to use, verify that it is not already being used by something else.
7. Knowing that IP address, we need to add it to our computers host file so our browser can see it. In my example I am leaving the default IP of 192.168.10.10.
    1. Open an administrator PowerShell (or `sudo bash` if you are using bash)
    2. Append your Homestead IP and the url trends.test to the hosts file.
        * ``Add-Content C:\Windows\System32\drivers\etc\hosts "`n192.168.10.10 trends.test`n"``
    3. Verify your IP to url is on its own line by checking the content of the hosts file.
        * `Get-Content C:\Windows\System32\drivers\etc\hosts`
8. If you had any browsers open, it would now be a good time to close and reopen them.
9. Turn your vagrant box on
   * `vagrant up`
10. Wait for it to finish... The initial vagrant up is usually the longest step in this whole setup.
    * Note that you may have UAC popups when vagrant is binding to ports. This is normal.
        * If you see that vagrant up is hanging up on and then timing out on the "Waiting for machine to boot" step, likely your local firewall is blocking it. You can allow it access but that is beyond the current scope of this readme. *Google it*
11. Connect to your shiny new vagrant virtual server
   * `vagrant ssh`
12. **This will happen automatically now but you can follow this to force it reset** Run your migrations to build and populate the database.
   * If you want a clean database with no testing data, or if you just want to reset your database to a clean state:
      * `php artisan migrate:fresh`
   * If you would like testing data to be prepopulated into your database, add on the seed command:
      * `php artisan migrate:fresh --seed`
   * If the project has anything that changes a part of the database schema, run the migrations to update it.
      * `php artisan migrate`
      * This will only run updates that your local database does not already have, so make a habit of doing this often. **Running it when there are no updates needed will not hurt anything!**
   * If you have a clean database and want to pupulate it with testing data, you can run the seeding by itself.
      * `php artisan db:seed`
13. Verify that your server is accessabile by your browser
   * Try navagating to http://trends.test
   

### Clean Shutdown Procedure
When you are finished with development or are ready to restart your computer, first turn off your vagrant box.
From your Powershell (not in the vagrant ssh) 
```vagrant halt```
The next time you do a vagrant up to turn the server on, it will be *Significantly* faster.

### foobar help
You should always be experimenting and breaking things in your local server, that's what it is there for.
If you manage to get things into a state where you can't get anything working again, that's ok. Just destroy and follow the setup steps 9 through 13!
```vagrant destroy```

> Think of vagrant servers as safe places you can expiriment and not worry about messing things up, that is what they are there for. Make mistakes! Learn! Blow things up! (digitally)

## Helpful Commands
I'll leave helpfull snippets and commands here for easy referance for anyone still learning their way around Laravel.
### Working with Models
Create a new Model with a migration file to match: `php artisan make:model ModelNameInCamelCase --migration`
### Working with Controllers
Create a new Controller: `php artisan make:controller ControllerNameInCamelCase`
### Last Resorts (Not)
Check the Docs: https://laravel.com/docs/5.7/
