<?php

    require_once 'src/RepeatCounter.php';

    class RepeatCounter_Test extends PHPUnit_Framework_TestCase
    {

        function test_count_repeats_inputfind() {
            $input1 = "";
            $input2 = "";
            $test_RepeatCounter  = new RepeatCounter;

            $result = $test_RepeatCounter->count_repeats($input1, $input2);
            $this->assertEquals($result, "You have not entered a sentence.");
        }

        function test_count_repeats() {
            $input1 = "This test within a test file.";
            $input2 = "test";
            $test_RepeatCounter = new RepeatCounter;

            $result = $test_RepeatCounter->count_repeats($input1, $input2);
            $this->assertEquals($result, "2 instances of TEST");
        }

        function test_count_repeats_punct() {
            $input1 = "This test! within a test! file.";
            $input2 = "test";
            $test_RepeatCounter = new RepeatCounter;

            $result = $test_RepeatCounter->count_repeats($input1, $input2);
            $this->assertEquals($result, "2 instances of TEST");
        }

        function test_count_repeats_single_word_punct() {
            $input1 = "This test within a test file.";
            $input2 = "test!";
            $test_RepeatCounter = new RepeatCounter;

            $result = $test_RepeatCounter->count_repeats($input1, $input2);
            $this->assertEquals($result, "2 instances of TEST");
        }
    }


 ?>
