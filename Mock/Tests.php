<?php
require('LogAnalyzer.php');

use PHPUnit\Framework\TestCase;

class LogAnalyzerTests extends TestCase
{
    protected function setUp(): void {
        parent::setUp();
    }

    public function Analyze_TooShortFileName_CallsWebService() {
        $mockService = new FakeWebService();
        $logAnalyzer = new LogAnalyzer($mockService);
        $logAnalyzer->analyze("abc.log");
        $this->assertEquals("FileName too short: abc.log", $mockService->lastError);
    }
}