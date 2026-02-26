<?php
if (!isset($_GET['status'])) {
    return;
}

$status = $_GET['status'];
$message = '';
$class = '';

switch ($status) {
    case 'sucesso':
        $message = 'Mensagem enviada com sucesso!';
        $class = 'success';
        break;

    case 'erro':
        $message = 'Erro ao enviar a mensagem. Tente novamente.';
        $class = 'error';
        break;
}
?>

<?php if ($message): ?>
    <div class="status-message <?= $class; ?>">
        <?= $message; ?>
    </div>
<?php endif; ?>
