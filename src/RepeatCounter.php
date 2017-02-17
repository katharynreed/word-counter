<?php

    class RepeatCounter
    {

        public $count_return;

        function string_check($input) {
            if ($input) {
                return true;
            }
            else {
                return "You have not entered a sentance.";
            }
        }

        function count_repeats($input1, $input2) {
            $count_return = substr_count(strtolower($input1), strtolower($input2));
            return $count_return;

        }
    }


 ?>
