<div class="caixa-modulo">
    <h2>📦 Seus Produtos</h2>

    <ul>
        <?php
        // --- SUA MISSÃO COMEÇA AQUI --- //

        $subtotal = 0;
        // Array (lista) chamado $produtos no carrinho. 
        $p_carrinho = [
            "Geladeira" => 800 ,
            "Xbox One" => 5000,
            "1kg de Feijão" => 10
        ];
        // 3. Faça um PARA CADA (foreach) para percorrer o array de $produtos.

        foreach ($p_carrinho as $ferramentas => $preco) {
            echo "<li>" . $ferramentas ." R$: " . $preco. "</li>";
  
            $subtotal = $subtotal + $preco;
        }

        ?>
    </ul>

    <hr>
    <h3>Subtotal: R$ <?php echo $subtotal; ?></h3>
</div>