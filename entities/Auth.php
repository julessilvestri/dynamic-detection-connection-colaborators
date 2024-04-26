<?php

class Auth
{
    private $user;
    private $token;
    
    public function __construct(
        $user,
        $token
    ){
        $this->user = $user;
        $this->token = $token;
    }
}
