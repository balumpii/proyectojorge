<?php 

include("startApp.php"); 
$titulo = "Proyecto tienda";




?>
<!DOCTYPE html>
<html>
    
    <?php include("templates/head.php");
    ?>
    <body>      
        <?php include("templates/header.php");?>
        <main>
            
            <section id="quienes">
                <i><h2>SEGURYCAL S.L. 1980</h2><i/>
                <p><strong>Segurycal</strong> es una empresa dedicada a la fabricación, venta e instalación de puertas de alta seguridad, 
                    tipo acorazadas para entrada a viviendas. 
                    Segurycal es una marca española, registrada en el Registro de Patentes y Marcas de España desde junio del año 2000, 
                    pero sus comienzos datan desde <strong>el año 1980</strong>, fecha en que su fundador Manuel Ruiz Jiménez comenzó esta actividad, 
                    en principio comercializada con su propio nombre y a partir de dicha fecha, con la marca patentada Segurycal.
                    En la actualidad Segurycal es una empresa que se siente orgullosa de ser pionera en la actividad de <strong>puertas de seguridad en Málaga</strong>, 
                    que desarrolla a nivel de toda la región de Andalucía, comercializando sus productos a través de distintos distribuidores en toda la comunidad andaluza, 
                    al igual que a nivel de todo el país, incluso fuera de nuestras fronteras, en países como Reino Unido, Francia, Alemania, Norte América, Marruecos, etc.</p>
            </section>
            
            <section id="catalogo">
                <article class="contenedor-producto">
                    <a href="">
                        <img src="<?php echo $root?>images/pomos.jpg" alt="Puerta 1">
                        <div class="filtro-producto"></div>
                        <span>HERRAJES</span>
                    </a>
                </article>
                
                <article class="contenedor-producto">
                     <a href="">
                        <img src="<?php echo $root?>images/retenedor.jpg" alt="Puerta 2">
                         <div class="filtro-producto"></div>
                        <span>COMPLEMENTOS</span>
                    </a>
                    
                </article>
                
                 <article class="contenedor-producto">
                     
                      <a href="">
                    <img src="<?php echo $root?>images/herraje.jpg" alt="Puerta 3">
                          <div class="filtro-producto"></div>
                          <span>CERRADURAS</span>
                     </a>
                    
                </article>
                
                <a href="<?php echo $root?>catalogo/" class="todos">VER TODOS LOS PRODUCTOS</a>
            </section>
    
        </main>
        
        <?php include("templates/footer.php");?>
    </body>
</html>
