<?php
require('LogAnalyzer.php');

use PHPUnit\Framework\TestCase;

class LogAnalyzerTests extends TestCase
{
    protected function setUp(): void {
        parent::setUp();
    }

    public function IsValidFileName_BadExtension_ReturnsFalse() {
        $logAnalyzer = new LogAnalyzer();
        $result = $logAnalyzer->isValidLogFileName("filewithbadextension.foo");
        $this->assertEquals(false, $result);
    }
}