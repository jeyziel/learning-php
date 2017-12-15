<?php

abstract class SocialShare
{
    /**
     * authenticate token
     */
    protected $token;

    public function getToken()
    {
        return $this->token;
    }

    /**
     * share return bool
     */
    abstract public function share();
}