<?php
class FileLogger implements ILogger{

    public function save($log){
        if(!file_exists('log')){
            mkdir('log');
              
        }
        if(!file_exists('log/FileLog')){
                mkdir('log/FileLog');
            
            }  

        $handle = fopen('log/FileLog/FileLog.txt', 'a+');
        fwrite($handle, json_decode($log).PHP_EOL);
        fclose($handle);
    }

    public function log($message){
        $time = date('H:i:s d-m-Y');
        $log = json_encode("FileLogger [$time] $message");
        $this->save($log);
    }
}