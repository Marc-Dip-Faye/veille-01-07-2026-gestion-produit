<?php


function saveClient(){
    global $clients;
    do{
        $errors = [];
        $nom = saisie("Entrer votre nom:");
        required($nom,$errors,"Le nom est obligatoire","nom");
        
    }while(count($errors)!=0);
    do{
        $errors = [];
        $telephone = saisie("Entrer le telephone: ");
        required($telephone,$errors,"Le telephone est obligatoire","tel");
        unique($clients,$telephone,$errors,"Le telephone exist deja","tel");
        showError($errors);
    }while(count($errors)!= 0);
        $adress = saisie("Entrer votre address");

    $newClient =[
        'nomPrenom'=>$nom,'tel'=>$telephone,'address'=>$adress
    ];

    $clients []=$newClient;

}