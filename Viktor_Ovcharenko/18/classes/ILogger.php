<?php
interface ILogger{

    public function log($message);

    public function save($log);
}