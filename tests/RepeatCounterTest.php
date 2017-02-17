<?php

    require_once 'src/RepeatCounter.php';

    class RepeatCounter_Test extends PHPUnit_Framework_TestCase
    {

        function test_string_check() {
            $input = "This is a test.";
            $test_RepeatCounter  = new RepeatCounter;

            $result = $test_RepeatCounter->string_check($input);
            $this->assertEquals($result, true);
        }
    }


 ?>
