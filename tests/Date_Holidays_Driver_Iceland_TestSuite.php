<?php
                                             /**
 * Test class for running unit tests related to the driver for holidays in Austria
 *
 * PHP Versions 4 and 5
 *
 * @category Date
 * @package  Date_Holidays
 * @author   Carsten Lucke <luckec@tool-garage.de>
 * @license  http://www.php.net/license/3_01.txt PHP License 3.0.1
 * @version  CVS: $Id$
 * @link     http://pear.php.net/package/Date_Holidays
 */

/** Set up the environment */
require_once dirname(__FILE__) . '/helper.inc';

/**
 * Test class for running unit tests related to the driver for holidays in Austria
 *
 * @uses PHPUnit_Framework_TestCase
 * @category Date
 * @package  Date_Holidays
 * @author   Carsten Lucke <luckec@tool-garage.de>
 * @license  http://www.php.net/license/3_01.txt PHP License 3.0.1
 * @version  CVS: $Id$
 * @link     http://pear.php.net/package/Date_Holidays
 */
class Date_Holidays_Driver_Iceland_TestSuite extends PHPUnit_Framework_TestCase
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
            'newYearsDay'        => array('day' => 1,
                                          'month' => 1,
                                          'year' => 2006),
            'epiphany'           => array('day' => 6,
                                          'month' => 1,
                                          'year' => 2006),
            'husbandsDay'        => array('day' => 20,
                                          'month' => 1,
                                          'year' => 2006),
            'womansDay'          => array('day' => 19,
                                          'month' => 2,
                                          'year' => 2006),
            'shroveMonday'       => array('day' => 6,
                                          'month' => 3,
                                          'year' => 2006),
            'shroveTuesday'      => array('day' => 7,
                                          'month' => 3,
                                          'year' => 2006),
            'ashWednesday'       => array('day' => 8,
                                          'month' => 3,
                                          'year' => 2006),
            'palmSunday'         => array('day' => 9,
                                          'month' => 4,
                                          'year' => 2006),
            'maundyThursday'     => array('day' => 13,
                                          'month' => 4,
                                          'year' => 2006),
            'goodFriday'         => array('day' => 14,
                                          'month' => 4,
                                          'year' => 2006),
            'easter'             => array('day' => 16,
                                          'month' => 4,
                                          'year' => 2006),
            'easterMonday'       => array('day' => 17,
                                          'month' => 4,
                                          'year' => 2006),
            'firstDayOfSummer'   => array('day' => 20,
                                          'month' => 4,
                                          'year' => 2006),
            'mayDay'             => array('day' => 1,
                                          'month' => 5,
                                          'year' => 2006),
            'mothersDay'         => array('day' => 13,
                                          'month' => 5,
                                          'year' => 2006),
            'whitsun'            => array('day' => 4,
                                          'month' => 6,
                                          'year' => 2006),
            'whitMonday'         => array('day' => 5,
                                          'month' => 6,
                                          'year' => 2006),
            'ascensionDay'       => array('day' => 25,
                                          'month' => 5,
                                          'year' => 2006),
            'seamansDay'         => array('day' => 3,
                                          'month' => 6,
                                          'year' => 2006),
            'jonsMass'           => array('day' => 24,
                                          'month' => 6,
                                          'year' => 2006),
            'commerceDay'        => array('day' => 5,
                                          'month' => 8,
                                          'year' => 2006),
            'languageDay'        => array('day' => 16,
                                          'month' => 11,
                                          'year' => 2006),
            'nationalDay'        => array('day' => 17,
                                          'month' => 6,
                                          'year' => 2006),
            'independenceDay'    => array('day' => 1,
                                          'month' => 12,
                                          'year' => 2006),
            'christmas'            => array('day' => 24,
                                          'month' => 12,
                                          'year' => 2006),
            'christmasDay'            => array('day' => 25,
                                          'month' => 12,
                                          'year' => 2006),
            'secondChristmasDay'      => array('day' => 26,
                                          'month' => 12,
                                          'year' => 2006),
            'newYearsEve'        => array('day' => 31,
                                          'month' => 12,
                                          'year' => 2006)
        );
        $this->testDates2007 = array(
            'newYearsDay'        => array('day' => 1,
                                          'month' => 1,
                                          'year' => 2007),
            'epiphany'           => array('day' => 6,
                                          'month' => 1,
                                          'year' => 2007),
            'husbandsDay'        => array('day' => 19,
                                          'month' => 1,
                                          'year' => 2007),
            'womansDay'          => array('day' => 18,
                                          'month' => 2,
                                          'year' => 2007),
            'shroveMonday'       => array('day' => 26,
                                          'month' => 2,
                                          'year' => 2007),
            'shroveTuesday'      => array('day' => 27,
                                          'month' => 2,
                                          'year' => 2007),
            'ashWednesday'       => array('day' => 28,
                                          'month' => 2,
                                          'year' => 2007),
            'palmSunday'         => array('day' => 1,
                                          'month' => 4,
                                          'year' => 2007),
            'maundyThursday'     => array('day' => 5,
                                          'month' => 4,
                                          'year' => 2007),
            'goodFriday'         => array('day' => 6,
                                          'month' => 4,
                                          'year' => 2007),
            'easter'             => array('day' => 8,
                                          'month' => 4,
                                          'year' => 2007),
            'easterMonday'       => array('day' => 9,
                                          'month' => 4,
                                          'year' => 2007),
            'firstDayOfSummer'   => array('day' => 19,
                                          'month' => 4,
                                          'year' => 2007),
            'mayDay'             => array('day' => 1,
                                          'month' => 5,
                                          'year' => 2007),
            'mothersDay'         => array('day' => 13,
                                          'month' => 5,
                                          'year' => 2007),
            'whitsun'            => array('day' => 27,
                                          'month' => 5,
                                          'year' => 2007),
            'whitMonday'         => array('day' => 28,
                                          'month' => 5,
                                          'year' => 2007),
            'ascensionDay'       => array('day' => 17,
                                          'month' => 5,
                                          'year' => 2007),
            'seamansDay'         => array('day' => 3,
                                          'month' => 6,
                                          'year' => 2007),
            'jonsMass'           => array('day' => 24,
                                          'month' => 6,
                                          'year' => 2007),
            'commerceDay'        => array('day' => 4,
                                          'month' => 8,
                                          'year' => 2007),
            'languageDay'        => array('day' => 16,
                                          'month' => 11,
                                          'year' => 2007),
            'nationalDay'        => array('day' => 17,
                                          'month' => 6,
                                          'year' => 2007),
            'independenceDay'    => array('day' => 1,
                                          'month' => 12,
                                          'year' => 2007),
            'christmas'            => array('day' => 24,
                                          'month' => 12,
                                          'year' => 2007),
            'christmasDay'            => array('day' => 25,
                                          'month' => 12,
                                          'year' => 2007),
            'secondChristmasDay'      => array('day' => 26,
                                          'month' => 12,
                                          'year' => 2007),
            'newYearsEve'        => array('day' => 31,
                                          'month' => 12,
                                          'year' => 2007)
        );
    }

    /**
     * test Holidays for 2007
     *
     * @access public
     * @return void
     */
    function testHolidays2007()
    {
        $drv = Date_Holidays::factory('Iceland', 2007);
        $this->assertFalse(Date_Holidays::isError($drv), "Holidays Driver for Iceland");

        foreach ($this->testDates2007 as $name => $dateInfo) {
            $day = $drv->getHoliday($name);
            $this->assertFalse(Date_Holidays::isError($day), "$name is an error?");
            $this->assertEquals($name, $day->getInternalName(), $day->getInternalName() . " is not the same as $name");
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
        $drv = Date_Holidays::factory('Iceland', 2006);
        $this->assertFalse(Date_Holidays::isError($drv), "Holidays Driver for Iceland");

        foreach ($this->testDates2006 as $name => $dateInfo) {
            $day = $drv->getHoliday($name);
            $this->assertFalse(Date_Holidays::isError($day), "$name is an error?");
            $this->assertEquals($name, $day->getInternalName(), $day->getInternalName() . " is not the same as $name");
            $date = $day->getDate();
            $this->assertEquals($dateInfo['day'], $date->format('d'), $name);
            $this->assertEquals($dateInfo['month'], $date->format('m'), $name);
            $this->assertEquals($dateInfo['year'], $date->format('Y'), $name);
        }
    }

}

?>
