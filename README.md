# sandman-scouting
Team 1306's web-based scouting app.

This is currently in development and will be usable by the start of the 2018 season.

## Setup
This assumes that you already have a LAMP/WAMP server. If you don't already have this, Google "how to install Apache 2, Mysql, PHP on <YOUR_OS>" and follow the instructions. There are plenty of good guides out there.

First, navigate to your www/html folder and clone this repo. You should be able to go to <MY_SERVER_IP>/sandman-scouting-index and see the home page. If you don't see this then check your LAMP/WAMP installation and make sure that everything was installed correctly.

Next create `const.php` inside of `php/`. The path to this new php file shoult be `/php/const.php`.
In that file, paste the following (replace with your own configuration).
```php
<?php
    // App info
    $GLOBALS['APP_INFO']['TITLE']         = "2018 Scouting";
    $GLOBALS['APP_INFO']['CODENAME']      = "Slipstream";
    $GLOBALS['APP_INFO']['VERSION']       = "5.0.0";
    $GLOBALS['APP_INFO']['EXTERNAL_URL']  = MY_SERVER_IP;

    // Path from root to oauth login page.
    $GLOBALS['OAUTH']['URI']              = "/sandman-scouting/oauthAut";
    $GLOBALS['APP_INFO']['TITLE']         = "2018 Scouting";
    $GLOBALS['MODALS']['RED']             = "Red";
    $GLOBALS['MODALS']['BLUE']            = "Blue";
    $GLOBALS['MODALS']['TEAMS_PER_MATCH'] = 6;
    $GLOBALS['MODALS']['NO_LOGIN_NAME']   = "NoLogin";

    $GLOBALS['scoutingTeams'] = array(11306, MY_TEAM_HERE);

    // Paths and modals
    $GLOBALS['PATH']['INDEX']             = "index";
    $GLOBALS['PATH']['SETTINGS']          = "settings";
    $GLOBALS['PATH']['ADMIN']             = "admin";
    $GLOBALS['MODALS']['ADMIN']           = "Admin";
    $GLOBALS['PATH']['MATCH_SHEET']       = "gamesheet";
    $GLOBALS['MODALS']['MATCH_SHEET']     = "Game Scouting";
    $GLOBALS['PATH']['PIT_SHEET']         = "pitsheet";
    $GLOBALS['MODALS']['PIT_SHEET']       = "Spotlight Scouting";
    $GLOBALS['PATH']['ALLIANCE_SHEET']    = "alliancesheet";
    $GLOBALS['MODALS']['ALLIANCE_SHEET']  = "Alliance Scouting";
    $GLOBALS['PATH']['REPORT_SHEET']      = "reportsheet";
    $GLOBALS['MODALS']['REPORT_SHEET']    = "Game Report";
    $GLOBALS['PATH']['DATABASE_SHEET']    = "databasesheet";
    $GLOBALS['MODALS']['DATABASE_SHEET']  = "DB Management";

    // Database connection info
    $GLOBALS['DB']['HOST'] = DB_HOST;   // default: "localhost"
    $GLOBALS['DB']['USER'] = DB_USER;
    $GLOBALS['DB']['PW']   = DB_PASSWORD;
    $GLOBALS['DB']['DATABASE'] = "sandman";

    $GLOBALS['DB']['TABLE']['MATCH_SCOUTING'] = "`matchdata`";
    $GLOBALS['DB']['TABLE']['ACHIEVEMENT']    = "`userachievements`";
    $GLOBALS['DB']['TABLE']['USER']           = "`users`";

    //TBA CONSTANTS
    $GLOBALS['TBA']['ENABLE']                   = true;
    $GLOBALS['TBA']['HEADER']                   = 'X-TBA-App-Id: frc1306:scouting:v' . 
    $GLOBALS['APP_INFO']['VERSION'];
    $GLOBALS['TBA']['EVENT_CODE']               = 'wila';          //Wisc = wimi, LaCrosse = wila
    $GLOBALS['TBA']['YEAR']                     = 2018;
    $GLOBALS['TBA']['MATCH_TYPE']               = 'qm';        //qm        f=finals, qf=quarterfinal, qm=qual, sf=semifinal
    $GLOBALS['TBA']['PATH']['CACHE']['TEAMS']   = 'cache.json';
    $GLOBALS['TBA']['PATH']['CACHE']['MATCHES'] = 'cacheMatch.json';
    $GLOBALS['TBA']['PATH']['CACHE']['UPDATE']  = 'cacheUpdate.json';

    // Slack bot
    $GLOBALS['SLACK_BOT']['ENABLE']         = false;
    $GLOBALS['SLACK_BOT']['SLACK_HOOK']     = 'YOUR_SLACK_HOOK';
    $GLOBALS['SLACK_BOT']['NAME']           = 'Mr. Sandman';
    $GLOBALS['SLACK_BOT']['REPORT_CHANNEL'] = '#slipstream_data';
    $GLOBALS['SLACK_BOT']['NOTIFY_USERS']   = '';
?>
```

This file may be updated in future releases so please check this readme and update your `const.php` before downloading a new version of sandman scouting.
