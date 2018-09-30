# PottyTimeTrends
Web Application for tracking and analysis of potty training for toddlers

# Checking out locally
```
git clone git@github.com:officialdarksheao/PottyTimeTrends.git
```
My Local Alias to keep keys separate by project:
```
git clone git@officialdarksheao_github:officialdarksheao/PottyTimeTrends.git
```

# Prerequisites
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

> **Disclaimer:** My host machine is windows. I know, I know. So the commands I am posting are tailored to windows users for the most part.


# Setting up for local development
1. Clone the repository to a local directory. I recommend always doing git operations via ssh. 
    * `git clone git@github.com:officialdarksheao/PottyTimeTrends.git`
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
        * `Add-Content C:\Windows\System32\drivers\etc\hosts "``n192.168.10.10 trends.test``n"`
    3. Verify your IP to url is on its own line by checking the content of the hosts file.
        * `Get-Content C:\Windows\System32\drivers\etc\hosts`
8. If you had any browsers open, it would now be a good time to close and reopen them.