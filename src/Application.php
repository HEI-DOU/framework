<?php

namespace Heidou\Core;

class Application
{
    public function getHeader()
    {
        return getallheaders();
    }
}
