<?php

declare(strict_types=1);

trait Logger
{
    public function log(string $message): void
    {
        echo $message;
    }
}

trait FileLogger {
    public function log($message): void {
        file_put_contents('log.txt', $message);
    }
}

trait Authenticatable {
    abstract public function authenticate(): void;
}

class User
{
    use FileLogger, Logger {
        FIleLogger::log insteadof Logger;
    }

    public function login(): void
    {
        $this->log('ログインしました。');
    }
}

class AdminUser
{
    use Authenticatable;

    public function authenticate(): void
    {
        echo '認証';
    }
}



