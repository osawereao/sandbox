<?php
$data = ['other', 'pentecostal', 'CATH_RELI', 'CATH_PRIEST'];
if(in_array('other', $data)){echo 'YEAH';}
$string = http_build_query($_REQUEST,'',', ');