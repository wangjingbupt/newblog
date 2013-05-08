<?php
function aboutDispatch()
{
	$className = 'AboutPage';
	include(CONTROLLER_ABOUT."/page.php");
	new $className();
}

aboutDispatch();

?>
