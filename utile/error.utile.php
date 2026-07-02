<?php

function showError(array $errors){
    foreach($errors as $errorField){
        foreach($errorField as $error)
            echo "$error \n";
        }
}