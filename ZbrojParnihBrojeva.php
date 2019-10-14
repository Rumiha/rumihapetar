<?php

    $a = 100;
    function ZbrojParnihBrojeva($a)
    {
        $zbroj = 0;
        for ($x = 0; $x < $a; $x++)
        {
            if($x % 2 == 0)
            {
                $zbroj=$zbroj + $x;
            }
        }
        return $zbroj;
    }
    $rjesenje = ZbrojParnihBrojeva($a);
    echo "Zbroj parnih brojeva do " . $a . " je " . $rjesenje . ".";

?>