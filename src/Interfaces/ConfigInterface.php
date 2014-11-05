<?php
/**
 * File containing the ConfigInterface interface
 *
 * PHP version 5
 *
 * @category   Doppelgaenger
 * @package    AppserverIo\Doppelgaenger
 * @subpackage Interfaces
 * @author     Bernhard Wick <b.wick@techdivision.com>
 * @copyright  2014 TechDivision GmbH - <info@techdivision.com>
 * @license    http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link       http://www.techdivision.com/
 */

namespace AppserverIo\Doppelgaenger\Interfaces;

/**
 * AppserverIo\Doppelgaenger\Interfaces\ConfigInterface
 *
 * An interface defining the functionality of any possible configuration class
 *
 * @category   Doppelgaenger
 * @package    AppserverIo\Doppelgaenger
 * @subpackage Interfaces
 * @author     Bernhard Wick <b.wick@techdivision.com>
 * @copyright  2014 TechDivision GmbH - <info@techdivision.com>
 * @license    http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link       http://www.techdivision.com/
 */
interface ConfigInterface
{
    /**
     * Will load a certain configuration file into this instance. Might throw an exception if the file is not valid
     *
     * @param string $file The path of the configuration file we should load
     *
     * @return null
     *
     * @throws \Exception
     */
    public function load($file);

    /**
     * Will validate a potential configuration file. Returns false if file is no valid Doppelgaenger configuration, true otherwise
     *
     * @param string $file Path of the potential configuration file
     *
     * @return bool
     * @throws \Exception
     */
    public function isValidConfigFile($file);
}
