<?php
class LogAnalyzer
{
    private $extensionManager;

    // 依賴反轉
    function __construct($extensionManager) {
        $this->extensionManager = $extensionManager;
    }

    public function isValidLogFile($fileName) {
        return $this->extensionManager->isValid($fileName);
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