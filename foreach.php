<div class="caixa-modulo">
    <h2>📦 Seus Produtos</h2>

    <ul>
        <?php

        $subtotal = 0;
        // Array (lista) contendo os produtos do carrinho 
        $p_carrinho = [
            "Geladeira" => 800 ,
            "Xbox One" => 5000,
            "1kg de Feijão" => 10
        ];
        // FOREACH para percorrer o array de $p_carrinho
        foreach ($p_carrinho as $ferramentas => $preco) {
          // O 'LI' Cria uma lista para puxar informações de maneira agrupada
            echo "<li>" . $ferramentas ." R$: " . $preco. "</li>";

          // $subtotal dentro do foreach, adicionando o preço de cada produto que passar por ele ao próprio $subtotal
            $subtotal = $subtotal + $preco;
        }
        ?>
    </ul>

    <hr>
    <h3>Subtotal: R$ <?php echo $subtotal; ?></h3>
</div>
