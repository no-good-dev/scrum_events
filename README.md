#Scrum Events

Web application that shows configurable text, images and a timer to assist you during online Scrum Events.

##Install
1. You need to install php >5.6. Please find the instructions for your system here: https://www.php.net/manual/en/install.php.
2. Clone this repository

##Execute

Inside your project root, run from the command line 
>php -S 0.0.0.0:88

Open your browser and enter http://0.0.0.0:88/


Of course you can adapt the address and port to whatever suits you better.
The application could also run under any other web server like Apache.
Sudo access might be necessary to run the command.

##Personalization

###Add teams

The folder data/ contains one subfolder per each Team. Inside, you will find the information particular to that team:
DoD
DoR
Working agreements

###Images, text and timer

For each team, you need to have a config/config.TEAM_NAME.php file. To add a new team, just copy/paste one of the demo files provided and modify it.
The configuration file contains a php array in which you will find all the parameters that can be changed:

Location
Schedule
Duration (in minutes)
Time-boxed (when true, the timer will show)
Background image

You should avoid changing any other parameters unless you know exactly what you are doing (only necessary when developing the application.)
