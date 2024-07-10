<?php
// Verifica se há dados enviados pelo formulário
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recupera os dados do produto e preço enviados pelo formulário
    $produto = $_POST['produto'];
    $preco = $_POST['preco'];

    // Aqui você pode processar a lógica de pagamento com o PagSeguro
    // Substitua este exemplo com a lógica de integração com o PagSeguro
    // Exemplo básico de resposta para o usuário após a compra
    echo "<h2>Compra Realizada com Sucesso!</h2>";
    echo "<p>Você comprou: $produto</p>";
    echo "<p>Valor pago: R$ $preco</p>";
    echo "<p>Obrigado por comprar na Loja de Roupas do Cadu!</p>";
}
?>
