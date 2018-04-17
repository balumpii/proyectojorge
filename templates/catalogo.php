<div class="container-fluid row">
    <div id="categorias" style="float: left; display:inline-block;width:25%;margin-top: 50px;">
       <ul class="test">
           <?php    

           while($categoria = mysqli_fetch_assoc($resultado_categorias)) {                    
               echo "<li class='lista'><a  href='$root" . "catalogo/?id=" . $categoria["id"] . "'>{$categoria["nombre"]}</a></li>";                    
            } ?>
       </ul>
    </div>

    <div id="productos" style="float: right; display:inline-block; width:75%">
       <?php
           while($producto = mysqli_fetch_assoc($resultado_productos)) {
       ?>

       <div class="ficha-producto" style="float:left;width: 33%;min-height: 238px;text-align: center">
           <h3><?php echo $producto["nombre"]?></h3>
           <img src="<?php echo $carpeta_fotos . $producto["fotografia"]?>" alt="" width="100px">
           <p>Descripcion</p>
           <a href="<?php echo $root?>producto/?id=<?php echo $producto ["id"]?>"> Más detalles</a>
       </div>
       <?php } ?>
    </div>
</div>