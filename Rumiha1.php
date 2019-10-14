<?php

    function EnergijaKineticka($m, $v)
    {
        return $m * $v * $v/2;
    }

    function PitagoraHipotenuza($a, $b)
    {
        return sqrt ($a * $a + $b * $b);
    }

    function Monika($a)
    {
        $brojilo = 0;
        for ($x = 1; $x <  $a; $x++)
        {
            if($a % $x == 0)
            {
                $brojilo=$brojilo + 1;
            }
        }
        if ($brojilo == 1)
        {
            echo "<br><br>" . "Broj " . $a . " je prost.";
        }
        if ($brojilo > 1)
        {
            echo "<br><br>" . "Broj " . $a . " nije prost.";
        }

    }
?>