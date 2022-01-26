<?php
$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$endereco = $_POST['endereco'];
$cep = $_POST['cep'];
$tipo_servico = $_POST['servico'];
$horario_dia = $_POST['horario'];
$descricao = $_POST['descricao'];

$email_de = 'mastercollect7@gmail.com';

$email_pessoa = 'Envio de novo formulário de agendamento';

$corpo_email = "Usuario: $nome.\n".
                "Usuario do Email: $email.\n".
                "Telefone: $telefone.\n".
                "Endereco: $endereco.\n".
                "Cep: $cep.\n".
                "Tipo do servico: $tipo_servico.\n".
                "Horário e dia: $horario_dia.\n".
                "Descrição do produto: $descricao.\n";

$para = 'vitorvilacasilva@gmail.com';

$headers = "De: $email_de \r\n";

$headers .= "Responder a: $email \r\n";

mail($para,$email_pessoa,$corpo_email,$headers);

header("Location: agendamentos.html.html");

?>