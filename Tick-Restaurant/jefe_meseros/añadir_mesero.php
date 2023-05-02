<?php include('partials/menu.php'); ?>
    <!---Main content section starts-->
    <div class="main-content">
        <div class="envoltura">
        <h3>Añadir mesero</h3>
        <h5>Los registros de información con un * son obligatorios</h5>
            <div class="empleado-data text-center">
                <label>* Nombre de usuario</label><br><br>
                    <input type="text" placeholder="Máximo de 30 carácteres" name="Nombre de usuario"><br><br>
                <label>* Contraseña</label><br><br>
                    <input type="text" placeholder="Máximo de 64 carácteres" name="Contraseña"><br><br>
                <label>* Primer nombre</label><br><br>
                    <input type="text" name="Primer nombre"><br><br>
                <label>Segundo nombre</label><br><br>
                    <input type="text" name="Segundo nombre"><br><br>
                <label>Apellido Paterno</label><br><br>
                    <input type="text" name="Apellido Paterno"><br><br>
                <label>* Apellido Materno</label><br><br>
                    <input type="text" name="Apellido Materno"><br><br>
                <label>* Teléfono de contacto</label><br><br>
                    <input type="text" placeholder="Teléfono de contacto" name="IDMesa"><br><br>
                <label>Teléfono de emergencia</label><br><br>
                    <input type="text" placeholder="Teléfono de emergencia" name="Zona"><br><br>
                <label>* Fecha de ingreso</label><br><br>
                    <input type="text" placeholder="DD/MM/AA" name="Fecha de ingreso"><br><br>
                <label>* Avenida o calle</label><br><br>
                    <input type="text" name="Avenida o calle"><br><br>
                <label>* Número exterior</label><br><br>
                    <input type="text" name="Número exterior"><br><br>
                <label>Número interior</label><br><br>
                    <input type="text" name="Número interior"><br><br>
                <label>* Código Postal</label><br><br>
                    <input type="text" name="Código Postal"><br><br>
                <label>* Municipio</label><br><br>
                    <input type="text" name="Municipio"><br><br>
                <label>Colonia</label><br><br>
                    <input type="text" name="Colonia"><br><br>
                <label>* País</label><br><br>
                    <input type="text" name="País"><br><br>
                <label>* Estado</label><br><br>
                    <input type="text" name="Estado"><br><br>
                <label>Número del administrador</label><br><br>
                    <input type="text" name="Número del administrador"><br>
                <input type="submit" value="Agregar" class="boton_navegar">
            </div>
        </div>
    </div>
<?php include('partials/footer.php'); ?>