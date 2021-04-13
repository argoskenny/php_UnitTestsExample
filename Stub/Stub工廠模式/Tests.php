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
        ExtensionManagerFactory::setCustomManager($fakeExtensionManager);
        $logAnalyzer = new LogAnalyzer();
        $result = $logAnalyzer->isValidLogFile("filewithbadextension.foo");
        $this->assertEquals(false, $result);
    }

    protected function tearDown(): void {
        ExtensionManagerFactory::reset();
        parent::tearDown();
    }
}