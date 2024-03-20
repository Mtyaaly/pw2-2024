<?php

    require_once 'class_kendaraam.php';

    //object
    $motor = new motor('Motor','Bensin',2);
    $submarine = new submarine('submarine','solar',1000);

    //echo Motor
    echo 'info Motor:<br>';
    $motor->getInfoMotor();
    echo '<br>';

    //echo Motor
    echo 'info kapal selam:<br>';
    $submarine->getInfoSubmarine();
    echo '<br>';
?>