<?php


namespace Erekle\Statistic;


use Erekle\Statistic\Contracts\ResponseInterface;

class Response implements ResponseInterface
{
    protected $data;

    protected $error;

    protected $message;


    public function getData(): self
    {
        return $this;
    }
}