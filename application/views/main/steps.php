<?php

$steps = array(	1 =>'create_session.php',
	       	2 => 'QandATable.php',
		3 => 'individualmarks.php',
		4 => 'penalty.php',
		5 => 'penaltymarks',
		6 => 'complete.php');

function allowed_in($steps = array()){
// Track $latestStep in either a session variable
// $currentStep will be dependent upon the page you're on

if(isset($_SESSION['latestStep'])){
   $latestStep = $_SESSION['latestStep'];
}
else{
   $latestStep = 0;
}
$currentStep = basename(__FILE__); 

$currentIdx = array_search($currentStep, $steps);
$latestIdx = array_search($latestStep, $steps);

if ($currentIdx - $latestIdx == 1 )
    {
       $currentIdx = $_SESSION['latestStep'];
       return 'Allowed';
    }
    return $latestIdx;
}

?>