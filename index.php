<?php
    //Require the autoload file
    error_reporting('E_ALL');
    require_once('vendor/autoload.php');
    session_start();
    
    //Create an instance of the Base class
    $f3 = Base::instance();
    
    //Default route
    $f3->route('GET /', function($f3) {
        
        $f3->set('username', 'jshmo');
        $f3->set('password', sha1('Password01'));
        $f3->set('title', 'Working with templates');
        $f3->set('temp', 68);
        $f3->set('color', 'purple');
        $f3->set('radius', 10);
        
        $f3->set('bookmarks', array('http://msn.com', 'http://reddit.com', 'http://cnn.com'));
        $f3->set('addresses', array('primary' => '1000 Apple Ln. Seattle, Wa 98999', 'secondary' => '2510 100th Court Tac, Wa 90000'));
        
        $f3->set('desserts', array('chocolate' => 'Chocolate Mousse', 'vanilla'=>'Vanilla Custard', 'strawberry' => 'Strawberry Shortcake'));
        
        echo Template::instance()->render('pages/info.html');
        
    });

    //Run fat free
    $f3->run();
    