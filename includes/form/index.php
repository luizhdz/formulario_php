<form action="./index.php" method="POST">
    <div class="form-group">
        <label for="name">Nombre (s)</label>
        <input placeholder="Ingrese su nombre(s)" value="<?php echo isset($name) ? $name : "" ?>" name="name" type="text">
        <?php if (!empty($error_name)) {  echo "<span class='error'>$error_name</span>";  }  ?>
    </div>
    
    <div class="form-group">
        <label for="last_name">Apellidos</label>
        <input placeholder="Ingrese sus apellidos" value="<?php echo isset($last_name) ? $last_name : "" ?>" name="last_name" type="text">
        <?php if (!empty($error_last_name)) {  echo "<span class='error'>$error_last_name</span>";  }  ?>
    </div>

    <div class="form-group">
        <label for="birthday">Fecha de nacimiento</label>
        <input placeholder="Fecha de nacimiento" value="<?php echo isset($birthday) ? $birthday : "" ?>" name="birthday" type="date">
        <?php if (!empty($error_birthday)) {  echo "<span class='error'>$error_birthday</span>";  }  ?>
    </div>

    <div class="form-group">
        <label for="email">Correo electrónico</label>
        <input placeholder="Ingrese su correo electrónico" value="<?php echo isset($email) ? $email : "" ?>" name="email" type="text">
        <?php if (!empty($error_email)) {  echo "<span class='error'>$error_email</span>";  }  ?>
    </div>

    <div class="form-group">
        <label for="phone">Teléfono</label>
        <input placeholder="Ingrese su teléfono" value="<?php echo isset($phone) ? $phone : "" ?>" name="phone" type="text">
        <?php if (!empty($error_phone)) {  echo "<span class='error'>$error_phone</span>";  }  ?>
    </div>
    <div class="form-group">
        <fieldset >
            <legend>Sexo</legend>
            <label>
                <input type="radio" name="gender" <?php echo isset($gender) ? ($gender == "M" ? "checked" : "") : "" ?> value="M"> Masculino
            </label>
            <label>
                <input type="radio" name="gender"  <?php echo isset($gender) ? ($gender == "F" ? "checked" : "") : "" ?> value="F"> Femenino
            </label>
        </fieldset>
        <?php if (!empty($error_gender)) {  echo "<span class='error'>$error_gender</span>";  }  ?>
    </div>

    <button type="submit" name="submit" > Enviar </button>
</form>