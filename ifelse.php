<div class="caixa-modulo">
    <h2>🚚 Cálculo de Frete</h2>

    <form method="POST" action="">
        <label>Digite seu Estado (SC, PR, SP):</label>
        <input type="text" name="estado" required>
        <button type="submit">Calcular Total</button>
    </form>
       
    <?php
    // --- SUA MISSÃO COMEÇA AQUI --- //
    require_once 'carrinho.php'; // Importa o subtotal do carrinho

    // O Gatilho: Só executa se o botão for clicado
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        // 1. Capture o estado digitado usando $_POST['estado']
        $estado = $_POST['estado'];
        // 2. Crie uma variável $valorFrete = 0;
        $valorFrete = 0;
        // 3. Faça a lógica do SE (if) e SENÃO SE (elseif):
            if ($estado == 'SC') {              //    - Se for 'SC', frete é 20.
                $valorFrete = 20;
            } elseif ($estado == 'PR') {        //    - Se for 'PR', frete é 30.
                $valorFrete = 30;
            } else {
                $valorFrete = 50;               //    - Senão, frete é 50.
            }
        // 4. Crie a variável $totalFinal somando o $subtotal (que vem do arquivo carrinho.php) com o $valorFrete.
        $totalFinal = $subtotal + $valorFrete;

        // 5. Imprima na tela: "Frete: R$ X | TOTAL A PAGAR: R$ Y"
        echo "<p>Frete: R$ $valorFrete | TOTAL A PAGAR: R$ $totalFinal</p>";
    }
    ?>
</div>
