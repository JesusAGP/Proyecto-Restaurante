<?php include('partials/menu.php'); ?>
        <!---Main content section starts-->
        <div class="main-content">
            <h3 class="text-center">Ordenes por mesa</h3>
            <!---Aquí se imprime la lista de mesas con relación al mesero-->
            <ul>
                <li>
                    <div class="envoltura">
                        <div class="empleado-data">
                            <h4>Mesa A2</h4><br/>
                            Estado: Orden en proceso.<br/>
                            <a href="detalles.php"><button class="boton_navegar">Detalles</button></a>
                            <a href="entregada.php"><button class="boton_navegar">Marcar como entregada</button></a>
                        </div>
                    </div> 
                </li>
                <li> 
                    <div class="envoltura">
                        <div class="empleado-data">
                            <h4>Mesa A3</h4><br/>
                            Estado: Orden en proceso.<br/>
                            <a href="detalles.php"><button class="boton_navegar">Detalles</button></a>
                            <a href="entregada.php"><button class="boton_navegar">Marcar como entregada</button></a>
                        </div>
                    </div>        
                </li>
            </ul>
        </div>
        <!---Main content section ends-->
<?php include('partials/footer.php'); ?>