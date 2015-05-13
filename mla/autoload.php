<?php

function autoloader($classe){

	$path = str_replace('\\', DIRECTORY_SEPARATOR, $classe);
	require $path.'.php';
}
spl_autoload_register('autoloader');