<?php
function URLFileDownload($url, $file){
	#$url = 'http://drive.co/demo.txt';
	#$file = basename($url);
	if(file_put_contents($file, file_get_contents($url))){
		return true;
	}
	return false;
}

?>