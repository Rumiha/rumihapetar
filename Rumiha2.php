<?php

    $m = 53;
    $v = 4;
    include("Rumiha1.php");
    $Ek = EnergijaKineticka($m, $v);
    echo "Kineticka energija osobe: " . $Ek . ".";

    $a = 3;
    $b = 4;
    $c = PitagoraHipotenuza($a, $b);
    echo "<br><br>" . "a = 2" . "<br>" . "b = 3" . "<br>" . "c = " . $c;

    Monika($a);

?>