<?php
if (isset($_REQUEST['submit'])){
	//print_r($_REQUEST);
	if ($_REQUEST['username']==null){
		echo "invalid username";
	}
	else{ 
		echo "ok"}
	

	}