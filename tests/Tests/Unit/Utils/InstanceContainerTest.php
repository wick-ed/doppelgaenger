<?php

/**
 * \AppserverIo\Doppelgaenger\Tests\Unit\Utils\InstanceContainerTest
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 *
 * PHP version 5
 *
 * @author    Bernhard Wick <bw@appserver.io>
 * @copyright 2015 TechDivision GmbH - <info@appserver.io>
 * @license   http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link      https://github.com/appserver-io/doppelgaenger
 * @link      http://www.appserver.io/
 */

namespace AppserverIo\Doppelgaenger\Tests\Unit\Utils;

use AppserverIo\Doppelgaenger\Utils\InstanceContainer;

/**
 * This test will test the configuration class AppserverIo\Doppelgaenger\Config
 *
 * @author    Bernhard Wick <bw@appserver.io>
 * @copyright 2015 TechDivision GmbH - <info@appserver.io>
 * @license   http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link      https://github.com/appserver-io/doppelgaenger
 * @link      http://www.appserver.io/
 */
class InstanceContainerTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Container instance to be used for tests that do not rely on the static stay
     *
     * @var \AppserverIo\Doppelgaenger\Utils\InstanceContainer $container
     */
    protected $container;

    /**
     * Set one initial value into the container so we can test the getOffset method
     *
     * @return void
     */
    public function setUp()
    {
        $this->container = new InstanceContainer();
        $this->container[__CLASS__] = 'value';
    }

    /**
     * Test offsetGet method
     *
     * @return void
     */
    public function testSetOffset()
    {
        $container = new InstanceContainer();
        $container[__METHOD__] = 'value';
        $this->assertEquals($container[__METHOD__], 'value');
    }

    /**
     * Test offsetGet method
     *
     * @return void
     */
    public function testGetOffset()
    {
        $this->assertEquals($this->container[__CLASS__], 'value');
    }

    /**
     * Test offsetExists method
     *
     * @return void
     */
    public function testOffsetExists()
    {
        $this->assertTrue($this->container->offsetExists(__CLASS__));
        $this->assertFalse($this->container->offsetExists('iDoNotExist'));

    }

    /**
     * Test if static stay of values works
     *
     * @return void
     */
    public function testStaticStay()
    {
        $container = new InstanceContainer();
        $container[__METHOD__] = 'value';

        $tmpContainer = new InstanceContainer();
        $this->assertEquals($tmpContainer[__METHOD__], 'value');
    }

    /**
     * Test offsetUnset method
     *
     * @return void
     */
    public function testUnsetOffset()
    {
        $this->container->offsetUnset(__CLASS__);
        $this->assertFalse($this->container->offsetExists(__CLASS__));
    }
}
