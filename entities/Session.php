<?php

class Session
{
    protected $user;
    protected $password;

    public function __construct(
        $user = '',
        $password = ''
    ) {
        $this->user = $user;
        $this->password = $password;
    }

    public function __get($property)
    {
        return $this->$property;
    }

    /**
     *
     * Start user session
     *
     */
    public function login()
    {
        session_start();
        $_SESSION["user"] = $this->user;
        $_SESSION["password"] = $this->password;
    }

    /**
     *
     * Stop user session
     *
     */
    public function logout()
    {
        session_destroy();
    }
}
