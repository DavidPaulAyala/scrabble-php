<?php

    class Scrabble
    {
          // function returnWord($input1)
          // {
          //     return $input1;
          // }
          function returnWord($input1)
          {
              $word_score = 0;
              $one_point = array("A","E","I","O","U","L","N","R","S","T");
              $two_points = array("D","G");
              $three_points = array("B","C","M","P");
              $four_points = array("F","H","V","W","Y");
              $five_points = array("K");
              $six_points = array("J","X");
              $seven_points = array("Q","Z");
              $upper_input1 = strtoupper($input1);
              $array_input1 = str_split($upper_input1);
              foreach ($array_input1 as $letter) {

                if (in_array($letter, $one_point)){
                    $word_score += 1;
                } elseif (in_array($letter, $two_points)){
                    $word_score +=2;
                } elseif (in_array($letter, $three_points)){
                    $word_score +=3;
                } elseif (in_array($letter, $four_points)){
                    $word_score +=4;
                } elseif (in_array($letter, $five_points)){
                    $word_score +=5;
                } elseif (in_array($letter, $six_points)){
                    $word_score +=6;
                } else {
                    $word_score +=7;
                }
              }
              return $word_score;
          }
    }
 ?>
