<?php
require('LogAnalyzer.php');

use PHPUnit\Framework\TestCase;

class LogAnalyzerTests extends TestCase
{
    protected function setUp() {
    }

    public function IsValidFileName_BadExtension_ReturnsFalse() {
        $logAnalyzer = new LogAnalyzer();
        $result = $logAnalyzer->IsValidLogFileName("filewithbadextension.foo");
        $result = $logAnalyzer->isValidFile;
        $this->assertEquals(false, $result);
    }
}