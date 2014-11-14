<?php
/**
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 *
 * PHP version 5
 *
 * @category   Library
 * @package    Doppelgaenger
 * @subpackage Entities
 * @author     Bernhard Wick <b.wick@techdivision.com>
 * @copyright  2014 TechDivision GmbH - <info@techdivision.com>
 * @license    http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link       http://www.techdivision.com/
 */

namespace AppserverIo\Doppelgaenger\Tests\Data;

/**
 * AppserverIo\Doppelgaenger\Tests\Data\AnnotationTestClass
 *
 * Pointcut for specifying functions into which a certain advice has to be weaved.
 * Can only be used with a qualified method signature e.g. \AppserverIo\Doppelgaenger\Logger->log()
 *
 * @category   Library
 * @package    Doppelgaenger
 * @subpackage Entities
 * @author     Bernhard Wick <b.wick@techdivision.com>
 * @copyright  2014 TechDivision GmbH - <info@techdivision.com>
 * @license    http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link       http://www.techdivision.com/
 */
class AnnotationTestClass
{
    /**
     * @param array<\Exception>   $value
     */
    public function typeCollection($value)
    {

    }

    /**
     * @return array<\Exception>
     */
    public function typeCollectionReturn($value)
    {
        return $value;
    }

    /**
     * @param null|\Exception|string $value
     */
    public function orCombinator($value)
    {

    }

    /**
     * @param
     *          $param1
     */
    private function iHaveBadAnnotations($param1)
    {

    }
}
