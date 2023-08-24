<?php

namespace Application\Services;

use Aura\Session\SessionFactory;

class Session
{
    protected $session;
    protected $segment = 'Blog';

    public function __construct()
    {
        $this->session = (new SessionFactory())->newInstance($_COOKIE);
    }

    public function setSegment(string $segment)
    {
        $this->segment = $segment;
    }

    public function getSegment()
    {
        return $this->session->getSegment($this->segment);
    }

    public function get(string $key)
    {
        return $this->getSegment()->get($key);
    }

    public function set(string $key, string $value)
    {
        $this->getSegment()->set($key, $value);
    }

    public function getFlash(string $key)
    {
        return $this->getSegment()->getFlash($key);
    }

    public function setFlash(string $key, string $value)
    {
        $this->getSegment()->setFlash($key, $value);
    }

}

