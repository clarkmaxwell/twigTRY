<?php
	$start = microtime();
	require_once 'Twig/Autoloader.php';
	
	Twig_Autoloader::register();
	$loader = new Twig_Loader_Filesystem('view');
	$twig = new Twig_Environment($loader, array(
	    'cache' => 'cache',
	    'auto_reload' => TRUE
	));

	$boxes = array('turker','senturk','ideasoft');
	$template = $twig->loadTemplate('index.html');
	$i = 0;
	while($i < 3000)
	{
			$template->display(array(
							'veri'=>'son test',
							'boxes'=>$boxes
					  ));
			$i++;
	}
	$end = microtime();
	echo $end-$start;
	//@example Type 2 
	//echo $twig->render('index.html');
	//echo $twig->render('index.html',array('veri'=>'test'));