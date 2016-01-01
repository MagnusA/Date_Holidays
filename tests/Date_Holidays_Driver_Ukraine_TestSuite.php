<?php
                                             /**
 * Test class for running unit tests related to the driver for holidays in Austria
 *
 * PHP Versions 4 and 5
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
 * Test class for running unit tests related to the driver for holidays in Austria
 *
 * @uses PHPUnit_Framework_TestCase
 * @category Date
 * @package  Date_Holidays
 * @author   Ken Guest <kguest@php.net>
 * @license  http://www.php.net/license/3_01.txt PHP License 3.0.1
 * @version  CVS: $Id$
 * @link     http://pear.php.net/package/Date_Holidays
 */
class Date_Holidays_Driver_Ukraine_TestSuite extends PHPUnit_Framework_TestCase
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
            'newYearsDay'       => array('day' => 1,
                                          'month' => 1,
                                          'year' => 2006),
            'christmasDay'      => array('day' => 7,
                                          'month' => 1,
                                          'year' => 2006),
            'easter'            => array('day' => 23,
                                          'month' => 4,
                                          'year' => 2006),
            'triytsia'          => array('day' => 11,
                                          'month' => 6,
                                          'year' => 2006),
            'ukraineDay'        => array('day' => 22,
                                          'month' => 1,
                                          'year' => 2006),
            'womensDay'         => array('day' => 8,
                                          'month' => 3,
                                          'year' => 2006),
            'labourDay1'        => array('day' => 1,
                                          'month' => 5,
                                          'year' => 2006),
            'labourDay2'        => array('day' => 2,
                                          'month' => 5,
                                          'year' => 2006),
            'victoryDay'        => array('day' => 9,
                                          'month' => 5,
                                          'year' => 2006),
            'constitutionDay'   => array('day' => 28,
                                          'month' => 6,
                                          'year' => 2006),
            'independenceDay'   => array('day' => 24,
                                          'month' => 8,
                                          'year' => 2006),
        );
        $this->testDates2007 = array(
            'newYearsDay'       => array('day' => 1,
                                          'month' => 1,
                                          'year' => 2007),
            'christmasDay'      => array('day' => 7,
                                          'month' => 1,
                                          'year' => 2007),
            'easter'            => array('day' => 8,
                                          'month' => 4,
                                          'year' => 2007),
            'triytsia'          => array('day' => 27,
                                          'month' => 5,
                                          'year' => 2007),
            'ukraineDay'        => array('day' => 22,
                                          'month' => 1,
                                          'year' => 2007),
            'womensDay'         => array('day' => 8,
                                          'month' => 3,
                                          'year' => 2007),
            'labourDay1'        => array('day' => 1,
                                          'month' => 5,
                                          'year' => 2007),
            'labourDay2'        => array('day' => 2,
                                          'month' => 5,
                                          'year' => 2007),
            'victoryDay'        => array('day' => 9,
                                          'month' => 5,
                                          'year' => 2007),
            'constitutionDay'   => array('day' => 28,
                                          'month' => 6,
                                          'year' => 2007),
            'independenceDay'   => array('day' => 24,
                                          'month' => 8,
                                          'year' => 2007),
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
        $drv = Date_Holidays::factory('Ukraine', 2007, 'C');
        if (Date_Holidays::isError($drv)) {
            $this->fail(helper_get_error_message($drv));
        }

        foreach ($this->testDates2007 as $name => $dateInfo) {
            $day = $drv->getHoliday($name);
            if (Date_Holidays::isError($day)) {
                $this->fail(helper_get_error_message($day));
            }
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
        $drv = Date_Holidays::factory('Ukraine', 2006, 'C');
        if (Date_Holidays::isError($drv)) {
            $this->fail(helper_get_error_message($drv));
        }

        foreach ($this->testDates2006 as $name => $dateInfo) {
            $day = $drv->getHoliday($name);
            if (Date_Holidays::isError($day)) {
                $this->fail(helper_get_error_message($day));
            }
            $this->assertEquals($name, $day->getInternalName());
            $date = $day->getDate();
            $this->assertEquals($dateInfo['day'], $date->format('d'), $name);
            $this->assertEquals($dateInfo['month'], $date->format('m'), $name);
            $this->assertEquals($dateInfo['year'], $date->format('Y'), $name);
        }
    }

}

?>
