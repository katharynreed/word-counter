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
                    $this->count_return ++;
                }
            }
            return $this->count_return;
        }

        function get($property)
        {
            if (property_exists($this, $property)) {
                return $this->$property;
            } else {
                return "That property does not exist.";
            }
        }
    }


 ?>
