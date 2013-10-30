<?php
require_once __DIR__ . '/define.php';
require_once __DIR__ . '/tester/tester.php';

abstract class TestCase extends ZTestCase
{
    const RESPONSE_TYPE = 'json';
}

new Tester( '/tmp/test.lock' );
