<?php

$clients = [
    0=>['nomPrenom'=>'Adama Timera','tel'=>'770001233','address'=>'yeumbeul'],
    1=>['nomPrenom'=>'mami Cisse','tel'=>'771001233','address'=>'grand Dakar'],
];

function listerClientsSansCommande(): void {
    global $clients, $commandes;
    $clientsSansCommande = getClientsSansCommande($clients, $commandes);
    afficherClients($clientsSansCommande);
}