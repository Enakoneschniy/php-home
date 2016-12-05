<?php
class Logger{
    protected $logger = null;

    public function __construct(ILogger $logger){
        $this->logger = $logger;
    }

    public function setLogger(ILogger $logger){
        $this->logger = $logger;
    }

    public function log($message){
        $this->logger->log($message);
    }


}