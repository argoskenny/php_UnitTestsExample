<?php
class LogAnalyzerUsingFactoryMethod
{
    public function isValidLogFile($fileName) {
        $extensionManager = $this->getManager();
        return $extensionManager->isValid($fileName);
    }

    protected function getManager() {
        return new FileExtensionManager();
    }
}

class TestableLogAnalyzer extends LogAnalyzerUsingFactoryMethod
{
    private $extensionManager;

    function __construct($extensionManager) {
        $this->extensionManager = $extensionManager;
    }

    // override 父類別的方法
    function getManager() {
        return $this->extensionManager;
    }
}

interface IExtensionManager
{
    public function isValid($fileName);
}

class FileExtensionManager implements IExtensionManager
{
    public function isValid($fileName) {
        // 讀取檔案
        $fileContent = file_get_contents($fileName);
        
        // 驗證檔案內容...
        
        return $result;
    }
}

class AlwaysValidFakeExtensionManager implements IExtensionManager
{
    public function isValid($fileName) {   
        return false;
    }
}