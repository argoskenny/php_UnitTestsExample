<?php
class LogAnalyzer
{
    public function isValidLogFileName($fileName)
    {
        $file_parts = pathinfo($fileName);
        if ($file_parts == "log") {
            return true;
        }
        return false;
    }
}