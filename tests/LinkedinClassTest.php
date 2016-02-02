<?php

/**
 * Linkedin API for Laravel Framework
 *
 * @author    Mauri de Souza Nunes <mauri870@gmail.com>
 * @copyright Copyright (c) 2015, Mauri de Souza Nunes <github.com/mauri870>
 * @license   https://opensource.org/licenses/MIT MIT License
 */

namespace Mauri870\LinkedIn\Tests;

use Happyr\LinkedIn\LinkedIn;
use Mauri870\LinkedIn\LinkedInLaravel;

class LinkedinClassTest extends TestCase
{
    const APP_ID = '123456789';
    const APP_SECRET = '987654321';

    /**
     * @var \Mauri870\LinkedIn\LinkedInLaravel
     */
    private $linkedin;

    public function setUp()
    {
        $this->linkedin = new LinkedInLaravel(self::APP_ID, self::APP_SECRET);
    }

    /**
     * Test constructor method
     */
    public function testConstructor()
    {
        $this->assertEquals(get_parent_class($this->linkedin), LinkedIn::class);
    }
}