<?php

    require_once 'src/RepeatCounter.php';

    class RepeatCounter_Test extends PHPUnit_Framework_TestCase
    {

        function test_string_check_true() {
            $input = "This is a test.";
            $test_RepeatCounter  = new RepeatCounter;

            $result = $test_RepeatCounter->string_check($input);
            $this->assertEquals($result, true);
        }

        function test_string_check_false() {
            $input = "";
            $test_RepeatCounter  = new RepeatCounter;

            $result = $test_RepeatCounter->string_check($input);
            $this->assertEquals($result, "You have not entered a sentance.");
        }

        function test_count_return() {
            $input1 = "This test within a test file.";
            $input2 = "test";
            $test_RepeatCounter = new RepeatCounter;

            $result = $test_RepeatCounter->count_return($input1, $input2);
            $this->assertEquals($result, 2);
        }
    }


 ?>
