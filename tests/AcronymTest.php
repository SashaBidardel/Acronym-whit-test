<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use App\Acronym;


class AcronymTest extends TestCase {
    

    public function test_fake(){
       
        $this->assertEquals(4, 4);

    }
    
    
    public function test_hello(){
        //Given
           $asincronym =new Acronym;
        //When
           $actual= $asincronym->helloWorld();
        //Then
        $this->assertEquals("hello world", $actual);
    }

    public function testBasicTitleCase(): void
    {
        
        $asincronym =new Acronym;
        $result= $asincronym->acronym('Portable Network Graphics');
        $this->assertEquals('PNG', $result);
    }


    public function testLowerCaseWord(): void
    {
        $asincronym =new Acronym;
        $result= $asincronym->acronym('Ruby on Rails');

        $this->assertEquals('ROR',$result );
    }
    public function testCamelCase(): void
    {
        $asincronym =new Acronym;
        $result= $asincronym->acronym('HyperText Markup Language');
        $this->assertEquals('HTML', $result);
    }
    public function testAllCapsWords(): void
    {
        $asincronym =new Acronym;
        $result= $asincronym->acronym('PHP: Hypertext Preprocessor');
        $this->assertEquals('PHP', $result);
    }
    public function testHyphenated(): void
    {
        $asincronym =new Acronym;
        $result= $asincronym->acronym('Complementary metal-oxide semiconductor');
        $this->assertEquals('CMOS',$result);
    }
    // Additional points for making the following tests pass
    public function testOneWordIsNotAbbreviated(): void
    {
        $asincronym =new Acronym;
        $result= $asincronym->acronym('Word');
        $this->assertEquals('',$result);
        
    }
   /* public function testUnicode(): void
    {
        $phrase = 'Специализированная процессорная часть';
        $this->assertEquals('СПЧ', acronym($phrase));
    }*/

}   