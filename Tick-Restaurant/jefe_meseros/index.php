<?php include('partials/menu.php'); ?>
        <!---Main content section starts-->
        <div class="main-content">
            <h3 class="text-center">Lista de meseros</h3>
            <!---Aquí se imprime la lista de meseros capturada en la base de datos-->
            <div class = "content_pedidos">
            <ul>
                <li>
                    <div class="envoltura">
                        <div class="empleado-data">
                            <h4>Nombre</h4><br/>
                            Estado: Activo. Mesas: A2, B6, A9.<br/>
                            <a href="ordenes_activas.php"><button class="boton_navegar">Ordenes activas</button></a>
                            <br><label>Asignar mesa al mesero:</label>
                            <input type="text" name="mesa">
                            <input type="submit" value="Aceptar">
                        </div>
                    </div> 
                </li>
                <li> 
                    <div class="envoltura">
                        <div class="empleado-data">
                            <h4>Nombre</h4><br/>
                            Estado: Activo. Mesas: B2, A6, B9.<br/>
                            <a href="ordenes_activas.php"><button class="boton_navegar">Ordenes activas</button></a>
                            <br><label>Asignar mesa al mesero:</label>
                            <input type="text" name="mesa">
                            <input type="submit" value="Aceptar">
                        </div>
                    </div>        
                </li>
            </ul>
            </div>
        </div>
        <!---Main content section ends-->
<?php include('partials/footer.php'); ?>