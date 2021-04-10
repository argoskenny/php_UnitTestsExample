<?php
class LogAnalyzer
{
    public function IsValidLogFile($fileName)
    {
        $FileExtensionManager = new FileExtensionManager();
        return $FileExtensionManager->IsValid($fileName);
    }
}

class FileExtensionManager 
{
    public function IsValid($fileName)
    {
        // 讀取檔案
        $fileContent = file_get_contents($fileName);
        
        // 驗證檔案內容...
        
        return $result;
    }
}