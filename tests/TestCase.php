<?php

namespace Tests;

use Illuminate\Foundation\Testing\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    protected $link = "http://cuatroenlinea.ddev.site/jugar/17";
    use CreatesApplication;
}
