<?php

    require_once "src/Scrabble.php";

    class ScrabbleTest extends PHPUnit_Framework_TestCase
    {
        // function test_return_word()
        // {
        //     //Arrange
        //     $test_Scrabble = new Scrabble;
        //     $first_input = "faqir";
        //
        //     //Act
        //     $result = $test_Scrabble->returnWord($first_input);
        //
        //     //Assert
        //     $this->assertEquals("faqir", $result);
        // }
        function test_return_word()
        {
            //Arrange
            $test_Scrabble = new Scrabble;
            $first_input = "faqir";

            //Act
            $result = $test_Scrabble->returnWord($first_input);

            //Assert
            $this->assertEquals("14", $result);
        }
    }
 ?>
