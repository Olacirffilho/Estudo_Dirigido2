<?php


print "Me diga  um número meu consagrado: \n";
$n1 = (int) fgets (STDIN);

print "\n\n";

print "O número digitado foi: ";

if ($n1>=0)

    print "$n1 (e ele é positivo). \n\n";

else

    print "$n1 (e ele é negativo). \n\n";