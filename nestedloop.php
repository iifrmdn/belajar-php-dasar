<!-- Nested Loop (Perulangan Bersarang) -->
<?php
    for($i = 0; $i < 10; $i++){
        for($j = 0; $j < 10; $j++){
            echo $i;
        }
        echo "\n";
    }

    // Output :
    // 0000000000
    // 1111111111
    // 2222222222
    // 3333333333
    // 4444444444
    // 5555555555
    // 6666666666
    // 7777777777
    // 8888888888
    // 9999999999