<?php

    class RepeatCounter
    {

        public $count_return = 0;

        function count_repeats($string, $word) {
            $punctuation = [".", ",", ";", ":", "(", ")", "[", "]", "{", "}", "!", "?", "/", "'s", "\"", "'", "$", "#", "&", "-", "*", "_", "~", "^", "\\", "@", "+"];
            $special_characters = str_split($special_characters);
            $string = strtolower($string);
            $string = str_replace($punctuation, "", $string);
            $word = strtolower($word);
            $word = str_replace($punctuation, "", $word);
            $string_to_array = explode(" ", $string);
            foreach ($string_to_array as $input) {
                if ($word == $input) {
                    $this->count_return ++;
                }
            }
            $word = strtoupper($word);
            if ((($string == "") && ($word == "")) || ($string == "") || ($word == "")) {
                return "You have not entered a sentence.";
            }
            elseif ($this->count_return == 1) {
                return $this->count_return.' instance of '.$word;
            }
            elseif (($this->count_return >= 0) && ($this->count_return < 10)) {
                return $this->count_return.' instances of '.$word;
            }
            else {
                return $this->count_return.' instances of '.$word.', you should buy a thesuarus for sure.';
            }
        }
    }


 ?>
