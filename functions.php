<?php
	require_once 'Twig/Autoloader.php';
	
	Twig_Autoloader::register();
	$loader = new Twig_Loader_Filesystem('view');
	$twig = new Twig_Environment($loader, array(
	    'cache' => 'cache',
	    'auto_reload' => TRUE
	));
        function helloworld()
        {
            echo "hello world";
        }
        $twig->addFunction('hello', new Twig_Function_Function('helloworld'));

	$template = $twig->loadTemplate('index.html');
	$template->display(array());
	//@example Type 2 
	//echo $twig->render('index.html');
	//echo $tw',array('veri'=>'test'));