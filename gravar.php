<?php

$cep = $_GET['cep'];
$logradouro = $_GET['logradouro'];
$bairro = $_GET['bairro'];
$uf = $_GET['uf'];


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sistemacep";

 
$conn = new mysqli($servername, $username, $password, $dbname);

 
if ($conn->connect_error) {
    die("Falha: " . $conn->connect_error);
}

$inserir = "INSERT INTO CONSULTACEP (cep,logradouro,bairro,uf)VALUES('$cep','$logradouro','$bairro','$uf')";

if (mysqli_query($conn, $inserir)) {
    echo "INSERIDO COM SUCESSO ";
} else {
    echo "Error: " . $inserir . "<br>" . mysqli_error($conn);
}
?>


<html>
    <head>
     <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
     </head>   
<body>
            <form> 
<input type="button" value="Voltar Para a Tela Inicial" onClick="history.go(-1)"> 

</form>

    
    </body>

</html>