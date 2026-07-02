<?php

function afficherClients(array $clients): void {
    if (empty($clients)) {
        echo "Aucun client à afficher.\n";
        return;
    }
    foreach ($clients as $client) {
        echo "Nom: {$client['nomPrenom']} - Tel: {$client['tel']} - Address: {$client['address']}\n";
    }
}