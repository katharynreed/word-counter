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
    }


 ?>
