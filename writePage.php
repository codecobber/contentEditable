<?php
	$txt = strip_tags($_POST['content']);
	$id = $_POST['id'];
	$id = str_replace('#', '', $id);

    $txt1 = str_replace("<div>", "<br>", $txt);
    $txt2 = str_replace("</div>", "", $txt1);

	file_put_contents('data_'.$id.'.html', $txt2);
	echo($txt2);
?>