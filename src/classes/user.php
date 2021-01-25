<?php


class user
{
    private $userName;
    private $userEmail;
    private $Token;

    public function __construct() {}


    public function setUserEmail($userEmail)
    {
        $this->userEmail = $userEmail;
    }

    public function setToken($Token)
    {
        $this->Token = $Token;
    }

    public function setUsername($username)
    {
        $this->userName = $username;
    }

    public function getUserEmail()
    {
        return $this->userEmail;
    }

    public function getToken()
    {
        return $this->Token;
    }

    public function getUsername()
    {
        return $this->userName;
    }

}