<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $array = array(
        'name' => $name,
        'email' => $email);

        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            http_response_code(200);
            echo json_encode($array);
        } else {
            http_response_code(400);
        }