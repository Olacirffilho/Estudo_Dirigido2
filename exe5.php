<?php



    print "Qual foi sua nota? \n";
    $n1 = (int)fgets(STDIN);

    print "Qual foi sua nota?\n";
    $n2 = (int)fgets(STDIN);

    $media= ($n1+$n2)/2;

    print "A média  é: $media.\n\n";
    
        if ($media>7){
            print "Parabéns meu consagrado, Aprovado\n";
    
        }
        
        else
    
        if ($media<7){
            print "Parabéns você é um Merda, Reprovado.\n";
        }
    
        else
    
        if ($media=10){
            print "CARA TU É UM DEUSSSSS, APROVADO COM DISTNÇÃO\n";
    }