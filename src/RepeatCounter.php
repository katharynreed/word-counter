<?php

    class RepeatCounter
    {

        public $count_return = 0;

        function string_check($input) {
            if ($input) {
                return true;
            }
            else {
                return "You have not entered a sentance.";
            }
        }

        function count_repeats($string, $word) {
            $string_to_array = explode(" ", $string);
            foreach ($string_to_array as $input) {
                if ($word == $input) {
                    $count_return ++;
                }
            }
            return $count_return;
        }

        // function count_repeats($input1, $input2) {
        //     $count_return = substr_count(strtolower($input1), strtolower($input2));
        //     return $count_return;
        //
        // }
    }


 ?>
