<?php
class LogAnalyzer
{
    private $extensionManager;

    // 依賴反轉
    function __construct($extensionManager) {
        $this->extensionManager = $extensionManager;
    }

    public function isValidLogFile($fileName) {
        $extensionManager = ExtensionManagerFactory::create();
        return $extensionManager->isValid($fileName);
    }
}

class ExtensionManagerFactory
{
    private static $customManager;

    public static function create() {
        if (self::$customManager != NULL) {
            return self::$customManager;
        }
        return new FileExtensionManager();
    }

    public static function setCustomManager($customManager) {
        self::$customManager = $customManager;
    }

    public static function reset() {
        self::$customManager = NULL;
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