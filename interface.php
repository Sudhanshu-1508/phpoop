<?php

interface Logger{
    public function show();
}

class LogToFile implements Logger{
    public function execute( $message )
    {
        var_dump('message :');
    }
}


class UserController implements Logger {

    protected $logger;
    public function __construct( LogToFile $logger) {
        $this->logger=$logger;
         
    }

    public function show(){
        $user = 'sk';

        $this->logger->execute($user);
    }
}


$controller = new UserController(new LogToFile);
$controller->show();
