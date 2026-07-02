<?php

function saveProduct(){
    global $products;
    do {
        $errors = [];
        $libelle = saisie("Entrez le libellé: ");
        required($libelle,$errors,"Le libellé est obligatoire");
        unique($products,$libelle,$errors,"Ce libellé existe déjà");
        showError($errors);
     
    } while (count($errors)!= 0);
    do{
        $errors = [];
        $prix = saisie("Entrez le prix : ");
        estPositif($prix, $errors, "Le prix doit etre positif", "prix");
        showError($errors);
    } while (count($errors)!= 0);
    do{
        $errors = [];
        $quantite = saisie("Entrer la quantité : ");
        estPositif($quantite, $errors, "La quantité doit être positif", "quantite");
        showError($errors);
    } while (count($errors)!= 0);

    $newProduct = [
        "ref" => genererReference($products),
        "libele" => $libelle,
        "prix" => $prix,
        "quantite" => $quantite
    ];
    $products[] = $newProduct;
    var_dump($products);
}

 function listerProduits(array $products) : void {
        foreach ($products as $product){
            echo "Libellé: {$product["libele"]}\n";
        }
    }

function archiverProduit (): void {
    global $productsArchived , $products;
    
    $value = saisie ("Veuillez renseigner le libellé \n");
    $indexArchived = getProductByLibele($products, $value);
        if ($indexArchived !== -1){
            $productArchived = supprimerProduit($indexArchived, $products);
            $productsArchived[] = $productArchived;
            
        } else {
            echo "Produit non trouvé";
        }
}
