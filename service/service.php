<?php
    function genererReference( array $products):string{
        $taille=count($products)+1;
        if($taille<=9){
            $ref="REF00";
        }elseif ($taille<=99){
            $ref="REF0";
        }else{
            $ref="REF";
        }
        return $ref.$taille;
    }