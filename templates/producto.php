<style>
    form[name="mas-info"] [type="text"], form[name="mas-info"] textArea {
        width: 60%;
        display: inline-block;
    }
    
    form[name="mas-info"] label {
        display: inline-block;
        width: 12%;
        text-align: right;
        vertical-align: top;
    }
    form[name="mas-info"] > div {
        margin-top:10px;
    }
    
</style>
<section style="margin:0 auto;" >
    
    <div style="margin:0 auto;text-align: center">
        <img src="<?php echo $carpeta_fotos . $producto["fotografia"]?>" style="width: 30%"  alt="<?php echo $producto["nombre"]?>">
        <h1 ><?php echo $producto["nombre"]?></h1>
        <p style="font-size: 1.4rem"><?php echo $producto["precio"]?> €</p>
        <p style="width: 80%;margin:20px auto"><?php echo $producto["descripcion"]?></p>
    </div>
    <hr>
    <div style="margin:50px;text-align: center;">
        <h3>Más información y disponibilidad de <?php echo $producto["nombre"]?>?</h3>
        <p>Rellena el siguiente formulario y recibe toda la información a cerca de <strong><?php echo $producto["nombre"]?></strong></p>
        <br><br>
        <form method="post" action="<?php echo $root?>producto/mas-info.php" name="mas-info">
            <input name="latitud" id="latitud" type="hidden" value="">
            <input name="longitud" id="longitud" type="hidden" value="">
            <input type="hidden" name="id_producto" value="<?php echo $id_producto?>" >
            <div> 
                <label for="nombre">Nombre:</label>
                <input type="text" name="nombre" id="nombre">
            </div>
            <div> 
                <label for="telefono">Teléfono:</label>
                <input type="text" name="telefono" id="telefono">
            </div>
            <div> 
                <label for="email">Email:</label>
                <input type="text" name="email" id="email">
            </div>
            <div>
                <label for="asunto">Asunto:</label>
                <input type="text" name="asunto" id="asunto">
            </div>
            <div>
                <label for="observaciones">Observaciones:</label>
                <textarea name="observaciones" id="observaciones" cols="10" rows="8"></textarea>
            </div>
            
            <div>
                <input type="submit" value="Enviar">
            </div>
           
            
        </form>
    </div>

    
    
</section>


    
    
   
</section>

<script>
    
    navigator
function mostrarPosicion () {
                if(navigator.geolocation){
                    navigator.geolocation.getCurrentPosition(okPosicion,errorPosicion);
                } else{
                    alert("Lo sentimos, tu navegador no soporta la geolocalización");
                }
            }
            
            function okPosicion(position) {
                 var latitud = position.coords.latitude;
                 var longitud = position.coords.longitude;
                 
                 var elementoLatitud = document.getElementById("latitud");
                 var elementoLongitud = document.getElementById("longitud");
                 
                 elementoLatitud.value = latitud;
                 elementoLongitud.value = longitud;
                 
                
                }
            
            function errorPosicion(error) {
                resultado = document.getElementById("resultado")
                if(error.code == 1){
                    resultado.innerHTML = "Has decidido no compartir tu posición";
                } else if(error.code == 2){
                    resultado.innerHTML = "La red no responde i tu posición no está disponible";
                } else if(error.code == 3){
                    resultado.innerHTML = "Se agotó el tiempo de espera antes de obtener tu ubicación";
                } else{
                    resultado.innerHTML = "Se produjo un error al obtener tu posición";
                }
            }
            mostrarPosicion();
</script>