<?php
require('LogAnalyzer.php');

use PHPUnit\Framework\TestCase;

class LogAnalyzerTests extends TestCase
{
    protected function setUp(): void {
        parent::setUp();
    }

    public function IsValidFile_BadExtension_ReturnsFalse() {
        $fakeExtensionManager = new AlwaysValidFakeExtensionManager();
        $logAnalyzer = new LogAnalyzer();
        $logAnalyzer->extensionManager = $fakeExtensionManager
        $result = $logAnalyzer->isValidLogFile("filewithbadextension.foo");
        $this->assertEquals(false, $result);
    }
}