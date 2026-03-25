<div class="caixa-modulo">
    <h2>🚚 Cálculo de Frete</h2>

    <form method="POST" action="">
        <label>Digite seu Estado (SC, PR, SP):</label>
        <input type="text" name="estado" required>
        <button type="submit">Calcular Total</button>
    </form>

    <?php
    // --- SUA MISSÃO COMEÇA AQUI --- //

    // O Gatilho: Só executa se o botão for clicado
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        // 1. Capture o estado digitado usando $_POST['estado']

        // 2. Crie uma variável $valorFrete = 0;

        // 3. Faça a lógica do SE (if) e SENÃO SE (elseif):
        //    - Se for 'SC', frete é 20.
        //    - Se for 'PR', frete é 30.
        //    - Senão, frete é 50.

        // 4. Crie a variável $totalFinal somando o $subtotal (que vem do arquivo carrinho.php) com o $valorFrete.

        // 5. Imprima na tela: "Frete: R$ X | TOTAL A PAGAR: R$ Y"

    }
    ?>
</div>