<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Captura e limpa os dados
    $nome = strip_tags(trim($_POST['nome']));
    $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
    $mensagem = trim($_POST['mensagem']);

    // Valida os campos
    if (empty($nome) || empty($mensagem) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("Location: index.html?status=erro");
        exit;
    }

    // Configurações do e-mail
    $para = "seuemail@mail.com"; // Coloque seu e-mail para recebimento aqui
    $assunto = "Contato do site";
    $corpo = "Nome: $nome\nEmail: $email\nMensagem:\n$mensagem";
    $cabecalho = "From: $email\r\nReply-To: $email";

    // Envia o e-mail
    if(mail($para, $assunto, $corpo, $cabecalho)){
        header("Location: index.html?status=sucesso");
    } else {
        header("Location: index.html?status=erro");
    }

} else {
    // Se acessado diretamente
    header("Location: index.html");
}
?>