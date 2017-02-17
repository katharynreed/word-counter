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
            $string = strtolower($string);
            $word = strtolower($word);
            $string_to_array = explode(" ", $string);
            foreach ($string_to_array as $input) {
                if ($word == $input) {
                    $this->count_return ++;
                }
            }
            $word = strtoupper($word);
            if ($this->count_return == 1) {
                return $this->count_return.' instance of '.$word;
            }
            elseif (($this->count_return > 1) && ($this->count_return < 10)) {
                return $this->count_return.' instances of '.$word;
            }
            else {
                return $this->count_return.' instances of '.$word.', you should buy a thesuarus for sure.';
            }
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
