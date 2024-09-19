
        
        <?php
        
		try{
            if(isset($_POST['contraseña']) && !empty($_POST['contraseña']))
			if(isset($_POST['correo']) && !empty($_POST['correo'])){
                $pass = substr( md5(microtime()), 1, 10);
                $mail = $_POST['correo'];
                
                //Conexion con la base
                $conn = new mysqli("127.0.0.1", "localhost", "root","" ,"basedatos");
                // Check connection
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                } 
                
                $sql = "Update tbl_mh_usuario Set password='$pass' Where correo='$mail'";

                if ($conn->query($sql) === TRUE) {
                    echo "usuario modificado correctamente ";
                } else {
                    echo "Error modificando: " . $conn->error;
                }
                
                $to = $_POST['email'];//"destinatario@email.com";
                $from = "From: " . "Masterhouse" ;
                $subject = "Recordar contraseña";
                $message = "El sistema le asigno la siguiente clave " . $pass;

                mail($to, $subject, $message, $from);
                echo 'Correo enviado satisfactoriamente a ' . $_POST['email'];
            }
            else 
                echo 'Informacion incompleta';
		}
		catch (Exception $e) {
			echo 'Excepción capturada: ',  $e->getMessage(), "\n";
		}
            
        ?>
    </body>
</html>