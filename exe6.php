<?php



    print "Digite um número:\n";
    $n1 = fgets(STDIN);

    print "Digite outro número:\n";
    $n2 = fgets(STDIN);

    print "Digite outro número:\n";
    $n3 = fgets(STDIN);

        if($n1>$n2 and $n1>$n3 ){
            print "O 1° É O MAIORAL.";       
        }
    
        if($n2>$n1 and $n2>$n3) { 
            print "O 2° É O MAIORAL.";    
    
        }
    
        if($n3>$n2 and $n3>$n1) { 
            print "O 3° É O MAIORAL.";    
        }