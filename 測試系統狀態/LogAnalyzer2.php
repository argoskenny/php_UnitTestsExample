<?php
class LogAnalyzer
{

    public $isValidFile = false;

    public function IsValidLogFileName($fileName)
    {
        $file_parts = pathinfo($filename);
        if ($file_parts == "log") {
            $this->isValidFile = true;
        }
        $this->isValidFile = false;
    }
}