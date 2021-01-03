<?php
    $error_name = $error_last_name = $error_birthday = $error_email = $error_phone = $error_gender = NULL;

    if(isset($_POST["submit"])){
        $name = $_POST["name"];
        $last_name = $_POST["last_name"];
        $birthday = $_POST["birthday"];
        $email = $_POST["email"];
        $phone = $_POST["phone"];
        $gender = isset($_POST["gender"]) ? $_POST["gender"] : "";

        if(empty($name)){
            $error_name = "Campo de nombre vacío";
        }else{
            if(strlen($name) < 4){
                $error_name = "Ingresa al menos 4 caracteres";
            }
        }

        if(empty($last_name)){
            $error_last_name = "Campo de apellidos vacío";
        }else{
            if(strlen($last_name) < 4){
                $error_last_name = "Ingresa al menos 4 caracteres";
            }
        }
        
        if(empty($birthday)){
            $error_birthday = "Campo fecha de nacimiento vacío";
        }else{
            $date = explode("-", $birthday);
            // date = [año, mes, dia]
            // [9999, 12, 30]            
            if (!checkdate($date[1], $date[2], $date[0])) {
                $error_birthday = "Fecha de cumpleaños inválida";
            }
        }

        if(empty($email)){
            $error_email = "Campo de correo electrónico vacío";
        }else{
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                $error_email = "Correo electrónico inválido";
            }
        }

        if(empty($phone)){
            $error_phone = "Campo de telefono vacío";
        }else{
            if(!preg_match('/^[0-9]{10}+$/', $phone)) {
                $error_phone = "Número incorrecto ( Deben ser 10 dígitos )";
            }            
        }

        if(empty($gender)){
            $error_gender = "Campo de sexo vacío";
        }
    }
?>