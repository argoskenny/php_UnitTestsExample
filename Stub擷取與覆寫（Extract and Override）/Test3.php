<?php
require('LogAnalyzer3.php');

use PHPUnit\Framework\TestCase;

class LogAnalyzerTests extends TestCase
{
    protected function setUp() {
    }

    public function IsValidFile_BadExtension_ReturnsFalse() {
        $fakeExtensionManager = new AlwaysValidFakeExtensionManager();
        $logAnalyzer = new TestableLogAnalyzer($fakeExtensionManager);
        $result = $logAnalyzer->IsValidLogFileName("filewithbadextension.foo");
        $this->assertEquals(false, $result);
    }
}