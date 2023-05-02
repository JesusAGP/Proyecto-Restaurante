<?php include('partials/menu.php'); ?>
    <!---Main content section starts-->
    <div class="main-content">
        <div class="envoltura">
            <h3>Añadir mesa</h3>
            <div class="empleado-data text-center">
                <label>ID de la mesa</label><br><br>
                    <input type="text" name="IDMesa"><br><br>
                <label>Zona</label><br><br>
                    <input type="text" name="Zona"><br><br>
                <label>Num. Administrador</label><br><br>
                    <input type="text" name="Num. Admin"><br><br>
                <label>Num. Empleado</label><br><br>
                    <input type="text" name="Num. Empleado"><br><br>
                <label>Num. Mesero a cargo</label><br><br>
                    <input type="text" name="Num. Mesero"><br><br>
                <input type="submit" value="Agregar">
            </div>
        </div>
    </div>
<?php include('partials/footer.php'); ?>