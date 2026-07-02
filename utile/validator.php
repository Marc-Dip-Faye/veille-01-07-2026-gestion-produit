<?php

    function required(string $value,array &$errors,string $errorRequired, string $fieledName="libele"):void{
        if(empty($value)){
                $errors[$fieledName]['required'] = $errorRequired;
        }
    }

    function unique(array $datas,string $value,array &$errors,string $errorUnique,string $key='libele'):void{
        foreach ($datas as $data) {
            if ($data[$key] === $value) {
                $errors[$key]['unique'] = $errorUnique;
            }
        }
    }

    function estPositif(string $value, array &$errors, string $msgErrors, string $key='libele'): void{
        if($value <= 0){
            $errors[$key] = $msgErrors;
        }
    }

    