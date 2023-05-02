<?php include('partials/menu.php'); ?>
        <div class="main-content">
            <h3 class="text-center">¡La orden se ha marcado como entregada!</h3>
            <div class="envoltura text-center">
                <div class="empleado-data">
                    <h2>Tick-Restaurant</h2>
                    <h5>Av. Vallarta #123 Zapopan, Jalisco. C.P. 12365</h5>
                    <h5>Atendido por: Hero</h5>
                    <h5>Expedido en la fecha: 04/06/2021</h5><br>
                    <div>
                        <h4>Nombre del platillo:</h4>
                        Tacos de Pastor
                        <h4>Cantidad:</h4>
                        5
                        <h4>Precio:</h4>
                        $15 x unidad
                        <h4>Subtotal:</h4>
                        $15 x 5 = 75
                        <h4>IVA:</h4>
                        %16
                        <h4>Total:</h4>
                        $87      
                    </div><br><br>
                    <h4>Puede imprimir el ticket presionando el siguiente botón:</h4>
                    <a titlt="print screen" alt="print-screen" onclick="window.print();"target="_blank">
                    <button class="boton_navegar">Imprimir</button>
            </a>
                </div>
            </div>
        </div>
<?php include('partials/footer.php'); ?>