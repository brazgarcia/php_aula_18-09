<?php 

//  Com $_GET['name-do-input'] conseguimnos resgatar o que foi enviado pelo formulario.
$nome = $_GET['nome'];
$anoNascimento = $_GET['ano'];
$tipoUsuario = $_GET['tipo'];
$email = $_GET['email'];
$cidade = $_GET['cidade'];

echo "nome enviado: " . $nome . "<br>";
echo "Ano enviado: " . $anoNascimento . "<br>";
echo "Idade calculada: " . (2024 - $anoNascimento) . "<br>";
echo "tipo de Usuário enviado: " . $tipoUsuario . "<br>";

if ($tipoUsuario == 'admin') {
    echo "<p> O adminstrador pode fazer qulquer alteração!</p>";
} else if ($tipoUsuario ==  'user') {
    echo "<p>Usuario do pode visualizar dados<?p>";
} else {
    echo "Tipo de usuario invalido" ;
}

echo "email enviado: " . $email . "<br>";
echo "cidade enviada: " . $cidade . "<br>";


?>