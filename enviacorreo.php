<?php
   //Reseteamos variables a 0.
   $tipo = $denuncia = NULL;

   if (isset($_GET['enviar'])) {
      //Obtenemos valores input formulario
      $tipo = $GET['seleccion'];      
      $subject = 'Denuncia';   
      $denuncia = $_GET['denuncia'];	  
      $para = 'cesarplur56@gmail.com';
	  $email = 'cesarplur56@gmail.com';

      //Creamos cabecera.
	  $headers =  'MIME-Version: 1.0' . "\r\n"; 
	  $headers .= 'From: Cesar <cesarplur@hotmail.com>' . "\r\n";
      //$headers = 'From' . " " . $email . "\r\n";
      $headers .= "Content-type: text/html; charset=utf-8";

      //Componemos cuerpo correo. 
      $msjCorreo = "Nombre: " . 'Cesar';
      $msjCorreo .= "\r\n";  
      $msjCorreo .= "Asunto: " . $subject;
      $msjCorreo .= "\r\n";
	  $msjCorreo = "Tipo: " . $tipo;
      $msjCorreo .= "\r\n"; 
      $msjCorreo .= "Denuncia: " . $denuncia;
      $msjCorreo .= "\r\n";

    if (mail($para, $subject, $msjCorreo, $headers)) {
         echo "<script language='javascript'>
            alert('Mensaje enviado, muchas gracias.');
         </script>";
    } else {
         echo "<script language='javascript'>
            alert('fallado');
         </script>";
    }
  }
?>