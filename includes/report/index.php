<?php
if (isset($_POST["submit"]) && empty($error_name) && empty($error_last_name) && empty($error_birthday) && empty($error_email) && empty($error_phone) && empty($error_gender)) {
?>
    <aside>
        <h1>Registro exitoso !</h1>
        <ul>
            <li title="Minimo 4 caracteres">
                <span>Nombre: </span> <?php echo $name; ?> 
            </li>
            <li title="Minimo 4 caracteres">
                <span>Apellidos: </span> <?php echo $last_name; ?> 
            </li>
            <li title="Fecha válida">
                <span>Fecha: </span> <?php echo $birthday; ?> 
            </li>
            <li title="Correo válido">
                <span>Correo: </span> <?php echo $email; ?> 
            </li>
            <li title="Número telefónico válido">
                <span>Teléfono: </span> <?php echo $phone; ?> 
            </li>
            <li title="Sexo ingresado">
                <span>Sexo: </span> <?php echo $gender == "F" ? "Femenino" : "Masculino"; ?> 
            </li>
        </ul>
        <br>
        <form action="index.php">
            <button type="submit" >Reiniciar formulario</button>
        </form>
    </aside>
<?php
}
?>