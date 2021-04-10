<?php
class LogAnalyzerUsingFactoryMethod
{
    public function IsValidLogFile($fileName) {
        $extensionManager = GetManager();
        return $extensionManager->IsValid($fileName);
    }

    protected function GetManager() {
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
    function GetManager() {
        return $this->extensionManager;
    }
}

interface IExtensionManager
{
    public function IsValid($fileName);
}

class FileExtensionManager implements IExtensionManager
{
    public function IsValid($fileName) {
        // 讀取檔案
        $fileContent = file_get_contents($fileName);
        
        // 驗證檔案內容...
        
        return $result;
    }
}

class AlwaysValidFakeExtensionManager implements IExtensionManager
{
    public function IsValid($fileName) {   
        return false;
    }
}