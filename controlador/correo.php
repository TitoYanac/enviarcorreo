<?php
        //En el destino colocar el correo alque quieres que lleguen los datos del contacto de tu formulario
 	$destino	=	"titoyanac@gmail.com";
    $nombre		=	$_POST["nombre"];
    $correo 	=	$_POST["correo"];
    $direccion	=	$_POST["direccion"];
    $pais		=	$_POST["pais"];
    $ciudad		=	$_POST["ciudad"];
    $zip		=	$_POST["zip"];

    $contenido  ="Nombre: "		.$nombre;;
    $contenido .="\nCorreo: "	.$correo;
    $contenido .="\ndireccion: ".$direccion;
    $contenido .="\npais: "		.$pais;
    $contenido .="\nciudad: "	.$ciudad;

    mail($destino, "Contacto", $contenido);

?>