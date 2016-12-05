<?php
    include_once 'init.php';

    $logger = new Logger(new FileLogger());
    $animals = new Animal();
    $logger->log('Создан объект класса Animals');

    $animals->add(new Cat());
    $logger->log('Добавили кошку');
    $animals->add(new Cat());
    $logger->log('Добавили ещё кошку');
    $animals->add(new Dog());
    $logger->log('Добавли собаку');
    $animals->add(new Cat());
    $logger->setLogger(new XmlLogger());
    $logger->log('Добавили ещё кошку');
    $animals->add(new Dog());
    $logger->log('Добавили ещё собаку');
    $animals->add(new Cat());
    $logger->log('Добавили ещё кошку');

    $animals->say();
    $logger->log('Перекличка');
