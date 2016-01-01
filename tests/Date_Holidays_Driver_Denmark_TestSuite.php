<?php
/**
 * Test class for running unit tests related to the driver for holidays in Denmark
 *
 * PHP Version 5
 *
 * @category Date
 * @package  Date_Holidays
 * @author   Ken Guest <kguest@php.net>
 * @license  http://www.php.net/license/3_01.txt PHP License 3.0.1
 * @version  CVS: $Id$
 * @link     http://pear.php.net/package/Date_Holidays
 */

/** Set up the environment */
require_once dirname(__FILE__) . '/helper.inc';

/**
 * Test class for running unit tests related to the driver for holidays in Denmark
 *
 * @uses PHPUnit_Framework_TestCase
 * @category Date
 * @package  Date_Holidays
 * @author   Ken Guest <kguest@php.net>
 * @license  http://www.php.net/license/3_01.txt PHP License 3.0.1
 * @version  CVS: $Id$
 * @link     http://pear.php.net/package/Date_Holidays
 */
class Date_Holidays_Driver_Denmark_TestSuite extends PHPUnit_Framework_TestCase
{

    var $testDates2006;
    var $testDates2007;

    /**
     * setUp
     *
     * @access public
     * @return void
     */
    function setUp()
    {
        $this->testDates2006 = array(
                'newYearsDay' => array ('day' => 1,
                    'month' => 1,
                    'year' => 2006),
                'epiphany' => array ('day' => 6,
                    'month' => 1,
                    'year' => 2006),
                'easter' => array ('day' => 16,
                    'month' => 4,
                    'year' => 2006),
                'easterMonday' => array ('day' => 17,
                    'month' => 4,
                    'year' => 2006),
                'palmSunday' => array ('day' => 9,
                    'month' => 4,
                    'year' => 2006),
                'goodFriday' => array ('day' => 14,
                    'month' => 4,
                    'year' => 2006),
                'greenThursday' => array ('day' => 13,
                    'month' => 4,
                    'year' => 2006),
                'whitsun' => array ('day' => 4,
                    'month' => 6,
                    'year' => 2006),
                'whitMonday' => array ('day' => 5,
                    'month' => 6,
                    'year' => 2006),
                'ascensionDay' => array ('day' => 25,
                    'month' => 5,
                    'year' => 2006),
                'heartJesus' => array ('day' => 12,
                    'month' => 5,
                    'year' => 2006),
                'christmasEve' => array ('day' => 24,
                    'month' => 12,
                    'year' => 2006),
                'christmasDay' => array ('day' => 25,
                    'month' => 12,
                    'year' => 2006),
                'secondChristmasDay' => array ('day' => 26,
                    'month' => 12,
                    'year' => 2006),
                'newYearsEve' => array ('day' => 31,
                    'month' => 12,
                    'year' => 2006),
                );

        $this->testDates2007 = array(
                'newYearsDay' => array ('day' => 1,
                    'month' => 1,
                    'year' => 2007),
                'epiphany' => array ('day' => 6,
                    'month' => 1,
                    'year' => 2007),
                'easter' => array ('day' => 8,
                    'month' => 4,
                    'year' => 2007),
                'easterMonday' => array ('day' => 9,
                    'month' => 4,
                    'year' => 2007),
                'palmSunday' => array ('day' => 1,
                    'month' => 4,
                    'year' => 2007),
                'goodFriday' => array ('day' => 6,
                    'month' => 4,
                    'year' => 2007),
                'greenThursday' => array ('day' => 5,
                    'month' => 4,
                    'year' => 2007),
                'whitsun' => array ('day' => 27,
                    'month' => 5,
                    'year' => 2007),
                'whitMonday' => array ('day' => 28,
                    'month' => 5,
                    'year' => 2007),
                'ascensionDay' => array ('day' => 17,
                    'month' => 5,
                    'year' => 2007),
                'heartJesus' => array ('day' => 4,
                    'month' => 5,
                    'year' => 2007),
                'christmasEve' => array ('day' => 24,
                    'month' => 12,
                    'year' => 2007),
                'christmasDay' => array ('day' => 25,
                    'month' => 12,
                    'year' => 2007),
                'secondChristmasDay' => array ('day' => 26,
                    'month' => 12,
                    'year' => 2007),
                'newYearsEve' => array ('day' => 31,
                    'month' => 12,
                    'year' => 2007),
                );

        $this->testDates2008 = array(
                'newYearsDay' => array ('day' => 1,
                    'month' => 1,
                    'year' => 2008),
                'epiphany' => array ('day' => 6,
                    'month' => 1,
                    'year' => 2008),
                'easter' => array ('day' => 23,
                    'month' => 3,
                    'year' => 2008),
                'easterMonday' => array ('day' => 24,
                    'month' => 3,
                    'year' => 2008),
                'palmSunday' => array ('day' => 16,
                    'month' => 3,
                    'year' => 2008),
                'goodFriday' => array ('day' => 21,
                    'month' => 3,
                    'year' => 2008),
                'greenThursday' => array ('day' => 20,
                    'month' => 3,
                    'year' => 2008),
                'whitsun' => array ('day' => 11,
                        'month' => 5,
                        'year' => 2008),
                'whitMonday' => array ('day' => 12,
                        'month' => 5,
                        'year' => 2008),
                'ascensionDay' => array ('day' => 1,
                        'month' => 5,
                        'year' => 2008),
                'heartJesus' => array ('day' => 18,
                        'month' => 4,
                        'year' => 2008),
                'christmasEve' => array ('day' => 24,
                        'month' => 12,
                        'year' => 2008),
                'christmasDay' => array ('day' => 25,
                        'month' => 12,
                        'year' => 2008),
                'secondChristmasDay' => array ('day' => 26,
                        'month' => 12,
                        'year' => 2008),
                'newYearsEve' => array ('day' => 31,
                        'month' => 12,
                        'year' => 2008),
                );

    }

    /**
     * test Holidays for 2008
     *
     * @access public
     * @return void
     */
    function testHolidays2008()
    {
        $drv = Date_Holidays::factory('Denmark', 2008, 'en_EN');
        $this->assertFalse(Date_Holidays::isError($drv), "Driver construction");

        foreach ($this->testDates2008 as $name => $dateInfo) {
            $day = $drv->getHoliday($name);
            $this->assertFalse(Date_Holidays::isError($day));
            $this->assertEquals($name, $day->getInternalName());
            $date = $day->getDate();
            $this->assertEquals($dateInfo['day'], $date->format('d'), $name);
            $this->assertEquals($dateInfo['month'], $date->format('m'), $name);
            $this->assertEquals($dateInfo['year'], $date->format('Y'), $name);
        }
    }

    /**
     * test Holidays for 2007
     *
     * @access public
     * @return void
     */
    function testHolidays2007()
    {
        $drv = Date_Holidays::factory('Denmark', 2007, 'en_EN');
        $this->assertFalse(Date_Holidays::isError($drv), "Driver construction");

        foreach ($this->testDates2007 as $name => $dateInfo) {
            $day = $drv->getHoliday($name);
            $this->assertFalse(Date_Holidays::isError($day));
            $this->assertEquals($name, $day->getInternalName());
            $date = $day->getDate();
            $this->assertEquals($dateInfo['day'], $date->format('d'), $name);
            $this->assertEquals($dateInfo['month'], $date->format('m'), $name);
            $this->assertEquals($dateInfo['year'], $date->format('Y'), $name);
        }
    }

    /**
     * test Holidays for 2006
     *
     * @access public
     * @return void
     */
    function testHolidays2006()
    {
        $drv = Date_Holidays::factory('Denmark', 2006, 'en_EN');
        $this->assertFalse(Date_Holidays::isError($drv));

        foreach ($this->testDates2006 as $name => $dateInfo) {

            $day = $drv->getHoliday($name);
            $this->assertFalse(Date_Holidays::isError($day));
            $this->assertEquals($name, $day->getInternalName());
            $date = $day->getDate();
            $this->assertEquals($dateInfo['day'], $date->format('d'), $name);
            $this->assertEquals($dateInfo['month'], $date->format('m'), $name);
            $this->assertEquals($dateInfo['year'], $date->format('Y'), $name);
        }
    }

}

?>
