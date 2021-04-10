<?php
class LogAnalyzer
{
    public function IsValidLogFileName($fileName)
    {
        $file_parts = pathinfo($filename);
        if ($file_parts == "log") {
            return true;
        }
        return false;
    }
}