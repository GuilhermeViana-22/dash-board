<?php

namespace Src\Trait;

trait TraitUrlParser
{
    private $url;

    public function parseUrl()
    {
        return $this->url = explode("/", rtrim($_GET['url']), FILTER_SANITIZE_URL);
    }
}
