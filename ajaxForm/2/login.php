<?php
// if (isset($_POST['username']) && $_POST['username'] && isset($_POST['password']) && $_POST['password']) {
//     // do user authentication as per your requirements
//     // ...
//     // ...
//     // based on successful authentication
// 	echo json_encode(array('success' => 1, 'username' => $_POST['username']));
// } else {
// 	echo json_encode(array('success' => 0));
// }




function isRequestAJAX($referrer=''){
	if(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && $_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest'){return true;}
	return false;
}



if(isRequestAJAX()){
	echo json_encode(array('success' => 1, 'username' => $_POST['username']));
}
else {
	echo json_encode(array('success' => 1, 'request' => 'NOT AJAX'));
}
?>