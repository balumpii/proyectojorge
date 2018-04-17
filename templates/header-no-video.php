    
<header class="second">            

    <div id="brand">
        <img src="<?php echo $root?>images/logo.png">
    </div>

    <div id="menu">
        <ul>
            <li><a href="<?php echo $root?>">Inicio</a>
            </li>
            <li><a href="<?php echo $root?>novedades/">Novedades</a>
            </li>
            <li><a href="<?php echo $root?>catalogo/">Catálogo</a>
            </li>
            <li><a href="<?php echo $root?>contacto/">Contacto</a>
            </li>
        </ul>
    </div>
    
    <div id="contenedor-imagen">
        <div class="capa-filtro"></div>
        <h1><?php echo (isset($titulo_seccion) && $titulo_seccion!='') ? $titulo_seccion : ''?></h1>
    </div>

</header>