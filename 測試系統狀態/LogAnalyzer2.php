<?php
class LogAnalyzer
{

    public $isValidFile = false;

    public function isValidLogFileName($fileName)
    {
        $file_parts = pathinfo($fileName);
        if ($file_parts == "log") {
            $this->isValidFile = true;
        }
        $this->isValidFile = false;
    }
}