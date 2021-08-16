<?php


namespace App;


interface ApiConfigInterface
{
    public function baseUri() : string;
    public function clientId() : string;
    public function clientSecret() : string;
    public function signingKey() : string;
}