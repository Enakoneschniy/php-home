<?php
class XmlLogger implements ILogger{

    public function save($log){
         if(!file_exists('log')){
            mkdir('log');
                
        }
        if(!file_exists('log/XmlLog')){
                mkdir('log/XmlLog');
            
            }

        $handle = fopen('log/XmlLog/XmlLog.txt', 'a+');
        fwrite($handle, json_decode($log).PHP_EOL);
        fclose($handle);
    }

    public function log($message){
        $time = date('H:i:s d-m-Y');
        $log = json_encode("XmlLogger [$time] $message");
        $this->save($log);
    }
}