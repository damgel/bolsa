


<?php  

if (isset($_POST['email'])) {


                if (!isset($_POST['nombre']) ||
                        !isset($_POST['telefono']) ||
                        !isset($_POST['email']) ||
						!isset ($_POST["motivo"])  ||
						!isset ($_POST["fecha"])  ||
                        !isset($_POST['mensaje'])) {

                    echo "<b>Ocurrió un error y el formulario no ha sido enviado. </b><br />";
                    echo "Por favor, vuelva atrás y verifique la información ingresada<br />";
                    die();
                }

// Recibiendo los datos pasados por la pagina "contactenos.php" 


$recibenombre =$_POST["nombre"]; 

$tel = $_POST['telefono'];
 
$recibemail = $_POST["email"]; 

$motivo = $_POST["motivo"]; 

$fecha = $_POST['fecha'];

$recibemsg  = $_POST["mensaje"]; 

$email_from = $_POST['email'];

// Definiendo las cabeceras del e-mail 

$headers = "Content-type:text/html; charset=iso-8859-1"; 

// Vamos a definir ahora el destinatario de e-mail, ya sea el de usted o el de su cliente. 


$para = "monteshernandez6@hotmail.com"; 

$email_subject = "Contacto desde la Bolsa de Trabajo";

// Definiendo el aspecto del mensaje 




$mensaje   = "<h3>Mensaje de la Bolsa de Trabajo</h3> "; 


$mensaje  .= "Nombre: ". $recibenombre;

$mensaje  .= "<br>"; 

$mensaje  .="Telefono: " .$tel;

$mensaje  .= "<br>"; 

$mensaje  .="Fecha: " . $fecha;

$mensaje  .= "<br>"; 

$mensaje  .="E-mail: " .$recibemail ;

$mensaje  .= "<br>"; 

$mensaje  .= "<br>";

$mensaje  .= "<h3>Motivo</h3>";

$mensaje  .= "<p>"; 

$mensaje  .= $motivo ;

$mensaje  .= "</p>"; 

$mensaje  .= "<h3>Mensaje</h3>"; 

$mensaje  .= "<p>"; 

$mensaje  .= $recibemsg; 

$mensaje  .= "</p>"; 


// Enviando el mensaje para el destinatario 

$envia =  mail($para,$email_subject,$mensaje,$headers); 

// Envia un e-mail para el remitente, agradeciendo la visita en el sitio, y diciendo que en breve el e-mail sera respondido. 

$mensaje2  = "<p >Hola <strong>" . $recibenombre . "</strong>. Agradecemos su visita y la oportunidad de recibir su contacto. Antes de 48 horas usted recibira un e-mail con la respuesta a su duda o pedido..</p>"; 

$mensaje2 .= "<p  >Observacion - No es necesario responder este mensaje.</p>"; 

$envia =  mail($recibemail,"Su mensaje fué recibido!",$mensaje2,$headers); 

// Muestra en la pantalla el mensaje de éxito, y después redirecciona de vuelta para la pagina del contacto. 

echo "Mensaje recibido con exito!"; 

echo "<meta http-equiv='refresh' content='2;URL=Contactenos.php'>"; 
}
?> 
