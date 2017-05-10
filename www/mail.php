<?php
    $destinatario= $_GET['correo'];
    $asunto= $_GET['asunto'];
    $mensaje= $_GET['mensaje'];
    $edad= $_GET['edad'];

    $html="";
    $html.="<body>";
    $html.="$mensaje";
    $html.="<img src='https://meliza-katerine.000webhostapp.com/enviar/img/imagen.jpg'>";

    $html.="</body>";
    $html.="<a href= 'https://meliza-katerine.000webhostapp.com/enviar/recep.php?correo=$destinatario&edad=$edad'> Click </a>";




    $headers= "MIME-Version: 1.0\r\n";
    $headers.= "content-type: text/html; charset=iso-8859-1\r\n";
    $headers.= "from: ADSI <katemondragon13@gmail.com>  " . "\r\n";

     echo 'Enviando correo a '.$destinatario;
     echo $html;
     mail($destinatario, $asunto , $html , $headers);

?>
