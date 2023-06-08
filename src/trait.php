<?php

namespace StudentManage\Traits;

trait Loggable {
    public function log($message) {
        $logFile = 'log.txt';
        $fp = fopen('log.txt', 'w');
        fwrite($fp, 'add .addstudent->"majd"');
        fwrite($fp, '23');
        fclose($fp);        
        file_put_contents($logFile, $message . PHP_EOL, FILE_APPEND);
     
    }
}