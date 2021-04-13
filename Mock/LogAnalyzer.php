<?php
class LogAnalyzer
{
    private $webService;

    function __construct($webService) {
        $this->webService = $webService;
    }

    public function analyze($fileName) {
        if (count($fileName) < 8) {
            $this->webService->logError("FileName too short: " + $fileName);
        }
    }
}

interface IWebService
{
    public function logError($message);
}

class ErrorLogWebService implements IWebService
{
    public function logError($message) {
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_POST, 1);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $message);
        curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
        curl_setopt($curl, CURLOPT_URL, "https://api.error.com");
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        $result = curl_exec($curl);
        curl_close($curl);
    }
}

class FakeWebService implements IWebService
{
    public $lastError;

    public function logError($message) {   
        $this->lastError = $message;
    }
}