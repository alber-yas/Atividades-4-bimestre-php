<?php
    
    $min = (int) readline("Informe um valor minimo do intervalo: \n");
    $max = (int) readline("Informe um valor maximo do intervalo: \n");

    $numAleatorio = mt_rand($min, $max);
    $numTentativas = 0;


 do{

    $chute = (int) readline("Digite um número: ");
        $numTentativas++;


        if($chute == $numAleatorio) {

                print("Você venceu! \n");
                print("A quantidade de tentativas utilizadas foi: $numTentativas \n");


            } else {

                print("Vocẽ perdeu! \n");

        if ($chute > $numAleatorio){
                print("O valor do chute é muito alto. \n");

            } else {

                print("O valor do chute foi muito baixo. \n");
        }

    }
 } while ($chute != $numAleatorio);
