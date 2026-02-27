<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Variáveis e coonstantes PHP</h1>
    <?php
        //variável
        /*

        */
        $a = 67; //int
        $b = 0.67; //float
        $c = "string";
        $d = 'string';
        $e = null;
        $TESTE = false;

        //Constante
        define ("MINHA_CONST", "Não é um teste, corra");
        const SUA_CONST = "É um teste, fique";    

        //Escrevendo na tela
        echo "<p>O valor de a é " . $a . "</p>\n"; //+ é apenas para somar
        echo "\t<p>O valor de b é \$b</p>\n"; // Com ' ' o texto é tratado como uma cadeia de carecteres.
        print "\t<p>O valor de a + b é " . ($a + $b) . "</p>\n";
    ?>
</body>

</html>