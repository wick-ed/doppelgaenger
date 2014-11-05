<?php
/**
 * This file will bootstrap our library to be used within it's vendor dir
 *
 * PHP version 5
 *
 * @category  Doppelgaenger
 * @package   AppserverIo\Doppelgaenger
 * @author    Bernhard Wick <b.wick@techdivision.com>
 * @copyright 2014 TechDivision GmbH - <info@techdivision.com>
 * @license   http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link      http://www.techdivision.com/
 */
$vendorDir = '';
if (realpath(__DIR__ . "/../../../../../../vendor")) {

    $vendorDir = realpath(__DIR__ . "/../../../../../../vendor");

} else {

    throw new Exception('Could not locate vendor dir');
}

// Include the composer autoloader as a fallback
$loader = require $vendorDir . DIRECTORY_SEPARATOR . 'autoload.php';
$loader->add('AppserverIo\\Doppelgaenger\\', $vendorDir . DIRECTORY_SEPARATOR . 'appserver-io/doppelgaenger/src');

// We have to register our autoLoader to put our proxies in place
$autoLoader = new AppserverIo\Doppelgaenger\AutoLoader();
$autoLoader->register();
