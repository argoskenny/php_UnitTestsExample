<?php
class LogAnalyzer
{
    public function IsValidLogFile($fileName)
    {
        $fileExtensionManager = new FileExtensionManager();
        return $fileExtensionManager->isValid($fileName);
    }
}

class FileExtensionManager 
{
    public function isValid($fileName)
    {
        // 讀取檔案
        $fileContent = file_get_contents($fileName);
        
        // 驗證檔案內容...
        
        return $result;
    }
}