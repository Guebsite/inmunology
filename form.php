<div id="contacto">
        
        <form action="enviar.php" method="post">
             <h2 class="sidebar">── Contáctanos ── </h2>
             <input type="text" name="nombre" placeholder="Nombre*" required>
             <input type="email" name="email"  value="" placeholder="Email*" required> 
             <input type="tel" name="Tel" placeholder="Teléfono (Opcional) 10 dígitos" pattern="[0-9]{10}"> 
             <textarea name="mensaje" placeholder="Escriba su consulta en este campo, con gusto atenderemos sus solicitudes." required></textarea> 
             <input type="submit" value="Enviar" id="boton"> 
        </form>
</div>