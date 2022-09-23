<?php
    $name = $_GET['name'];
    $array = array('name' => $name);
    echo json_encode($array);