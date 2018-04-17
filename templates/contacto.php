<style>
    * {
        box-sizing: border-box;
    }
    form[name="contacto"] [type="text"], form[name="contacto"] textArea {
        width: 100%;
        display: block;
        padding:10px;
        border: 1px solid #ccc;
      
    }
    
   
    form[name="contacto"] > div {
        margin-top:10px;
   
    }
    
    .contacto-mapa {
        clear: both;
        padding: 20px;
    }
    
     #mapa {
        width: 100%;
        height: 350px;
    }
    
</style><section class="contacto">
    
    <i><b>Rellena el siguiente formulario si deseas contactar con nosotros :</b></i></span>
   
    <form method="post" action="<?php echo $root?>contacto/mas-info.php" name="contacto">
        <div> 
            <input type="text" name="nombre" id="nombre" placeholder="Nombre">
        </div>
        
        <div> 
            <input type="text" name="telefono" id="telefono" placeholder="Teléfono">
        </div>
        
        <div> 
            <input type="text" name="email" id="email" placeholder="Email">
        </div>
        
        <div>
            <input type="text" name="asunto" id="asunto" placeholder="Asunto">
        </div>
        
        <div>
            <textarea name="observaciones" id="observaciones" cols="10" rows="8" placeholder="Observaciones"></textarea>
        </div>

        <div>
            <input type="submit" value="Enviar">
        </div>


    </form>
</section>


<section class="contacto-mapa">
    <div id="mapa"></div>
</section>


