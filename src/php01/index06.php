<?php
    // for ($i = 1; $i <= 5; $i++) {
    //     echo $i * 2;
    //     echo '<br />';
    // }

    // $i = 0;

    // while ($i < 3) {
    // echo 'i = ' . $i . '<br />';
    // $i += 1;
    // }

    // $count = 1;

    // while ($count <= 20) {
    // echo $count . '<br />';
    // $count += 1;
    // }


    // $i = 0;
    // while ($i < 10) {
    //     if ($i == 5) {
    //         break;
    //         // $iが5の時、ループから抜ける。
    //     }
    // echo $i;
    // $i++;
    // }

    // $i = 0;
    // while ($i < 10) {
    //     if ($i == 5) {
    //         $i++;
    //         continue;
    //         // $iが5の時、$iに1を足す処理をし、スキップをする。
    //     }
    // echo $i;
    // $i++;
    // }

    // $count = 0;
    // while ($count <= 100) {
    //     if ($count === 20) {
    //         break;
    //     }
    //     if ($count % 3 == 0) {
    //         $count++;
    //         continue;
    //         // $iが5の時、$iに1を足す処理をし、スキップをする。
    //     }
    // echo $count . '<br />';
    // $count++;
    // }

    // $i = 0;
    // do {
    //     echo $i . '<br />';
    //     $i++;
    // } while ($i < 5);

    // $num = 0;
    // do {
    //     echo 'num = ' . $num . '<br />';
    //     $num++;
    // } while ($num < 3);


// $i = 0;
//     for ($i = 1; $i <= 50; $i++) {
//         if (($i % 3 == 0 ) && ($i % 5 == 0)){
//             echo $i . 'はFizzBuzz' . '<br />';
//         }
//         elseif ($i % 3 == 0){
//             echo $i . 'はFizz' . '<br />';
//         }
//         elseif ($i % 5 == 0){
//             echo $i . 'はBuzz' . '<br />';
//         }
//         else{
//             echo $i . '<br />';
//         }
//     }

    $i = 1;
    while ($i <= 25){
        
        if ($i % 5 == 0){
            $i++;
            echo '●' .'<br />';
        }
        else{
            echo '●' ;
            $i++;
        }
    }

    // for ($i = 1; $i < 6; $i++) {
    //     for ($j = 1; $j < 6; $j++) {
    //         echo "●";
    //     }
    // echo "<br />";
    // }