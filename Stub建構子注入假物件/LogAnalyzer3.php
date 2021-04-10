<?php
class LogAnalyzer
{
    private $extensionManager;

    public function setExtensionManager($extensionManager) {
        $this->extensionManager = $extensionManager;
    }

    public function IsValidLogFile($fileName) {
        return $this->extensionManager->IsValid($fileName);
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