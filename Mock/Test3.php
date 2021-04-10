<?php
require('LogAnalyzer3.php');

use PHPUnit\Framework\TestCase;

class LogAnalyzerTests extends TestCase
{
    protected function setUp() {
    }

    public function Analyze_TooShortFileName_CallsWebService() {
        $mockService = new FakeWebService();
        $logAnalyzer = new LogAnalyzer($mockService);
        $logAnalyzer->Analyze("abc.log");
        $this->assertEquals("FileName too short: abc.log", $mockService->lastError);
    }
}