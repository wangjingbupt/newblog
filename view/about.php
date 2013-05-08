<?php
class ViewAbout {

	public function render($datas)
	{
		$data = $GLOBALS['DATA'];

		include(VIEW.'/header.php');
		include(VIEW.'/banner.php');

			
		include(VIEW.'/footer.php');
	}


}
?>
