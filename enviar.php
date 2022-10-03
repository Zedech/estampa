

<?php 
if ( isset ( $_POST[ 'correo' ] ) ) {
    if ( !empty($_POST['nombre']) && !empty( $_POST['apellido'])&& !empty($_POST['rut'] ) && !empty($_POST['email']) && !empty($_POST['mensaje'])) 
    {   $name= $_POST['nombre'];
        $apellido= $_POST['apellido'];
        $rut= $_POST['rut'];
        $email= $_POST['email'];
        $mensaje= $_POST['mensaje'];
        $header = "From: dennis.ulloa.armijo@gmail.com" . "\r\n";
        $header .= "Reply-To: dennis.ulloa.armijo@gmail.com" . " \r\n";
        $header .= "X-Mailer: PHP/". phpversion(); 
        $mail = mail( $email ,$name , $apellido,$rut, $mensaje ,$header); 
        if ( $mail ) { echo " < h4 > ¡ Mail enviado exitosamente ! < / h4 > " ; } } }
        header("Location:contacto.php")
        ?>