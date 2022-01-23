<?php
    $mystring='BZAROORAZB';
    $tracker = 0;
    $s = strlen ($mystring);
    echo "$mystring has $s characters <br><br> ";
    $halfs= (int) ($s/2);
    echo "Verifications needed is $halfs <br><br>";
    for ($i=0;$i<$halfs;$i++)
    {        
            $ver=$i+1;
            echo "Verification #$ver <br>";
            echo "position $i ";
            echo $mystring[$i];
            echo "<br>";
            $mirror=$s-$i-1;
            echo "mirror pos $mirror ";
            echo $mystring[$mirror];
            echo "<br>";
            if ($mystring[$i]!=$mystring[$mirror]) $tracker++;
            echo "Mismatch count = $tracker<br><br>";
    }
    if ($tracker == 0) 
    { 
       echo "Palindrome = Yes" ;
    }
    else 
    {
        echo "Palindrome = No";
    }
?>
