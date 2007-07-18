<?php
if (!defined("PHPUnit_MAIN_METHOD")) {
    define("PHPUnit_MAIN_METHOD", "Date_HolidaysTest::main");
}

//make cvs testing work
chdir(dirname(__FILE__) . '/../');
require_once 'Date/Holidays.php';

class Date_Holidays_Driver_Austria_TestSuite extends PHPUnit_Framework_TestCase {

    var $testDates2006;
    var $testDates2007;

    function setUp() {
        
        $this->testDates2006 = array(
            'newYearsDay'           => array('day' => 1, 'month' => 1, 'year' => 2006),
            'epiphany'              => array('day' => 6, 'month' => 1, 'year' => 2006),
            'easter'                => array('day' => 16, 'month' => 4, 'year' => 2006),
            'easterMonday'          => array('day' => 17, 'month' => 4, 'year' => 2006),
            'dayOfWork'             => array('day' => 1, 'month' => 5, 'year' => 2006),
            'mariaAscension'        => array('day' => 15, 'month' => 8, 'year' => 2006),
            'nationalDayAustria'    => array('day' => 26, 'month' => 10, 'year' => 2006),
            'allSaintsDay'          => array('day' => 1, 'month' => 11, 'year' => 2006),
            'xmasDay'               => array('day' => 25, 'month' => 12, 'year' => 2006),
            'boxingDay'             => array('day' => 26, 'month' => 12, 'year' => 2006)
        );
        $this->testDates2007 = array(
            'newYearsDay'           => array('day' => 1, 'month' => 1, 'year' => 2007),
            'easter'                => array('day' => 8, 'month' => 4, 'year' => 2007),
            'easterMonday'          => array('day' => 9, 'month' => 4, 'year' => 2007),
            'dayOfWork'             => array('day' => 1, 'month' => 5, 'year' => 2007),
            'whitsun'               => array('day'=> 27, 'month' => 5, 'year' =>2007),
            'whitMonday'            => array('day'=> 28, 'month' => 5, 'year' =>2007),
            'mariaAscension'        => array('day' => 15, 'month' => 8, 'year' => 2007),
            'nationalDayAustria'    => array('day' => 26, 'month' => 10, 'year' => 2007),
            'allSaintsDay'          => array('day' => 1, 'month' => 11, 'year' => 2007),
            'xmasDay'               => array('day' => 25, 'month' => 12, 'year' => 2007),
            'boxingDay'             => array('day' => 26, 'month' => 12, 'year' => 2007)
        );
    }

    function testHolidays2007() {
        $drv = Date_Holidays::factory('Austria', 2007, 'en_EN');
        $this->assertFalse(Date_Holidays::isError($drv));
        if (Date_Holidays::isError($drv)) {
            print_r($drv);
            die($drv->getMessage());
        }
        
        foreach ($this->testDates2007 as $name => $dateInfo) {
            $day = $drv->getHoliday($name);
            $this->assertFalse(Date_Holidays::isError($day));
            if (Date_Holidays::isError($day)) {
                die($day->getMessage());
            }
            $this->assertEquals($name, $day->getInternalName());
            $date = $day->getDate();
            $this->assertEquals($dateInfo['day'], $date->getDay(), $name);
            $this->assertEquals($dateInfo['month'], $date->getMonth(), $name);
            $this->assertEquals($dateInfo['year'], $date->getYear(), $name);
        }
    }

    function testHolidays2006() {
        $drv = Date_Holidays::factory('Austria', 2006, 'en_EN');
        $this->assertFalse(Date_Holidays::isError($drv));
        if (Date_Holidays::isError($drv)) {
            print_r($drv);
            die($drv->getMessage());
        }
        
        foreach ($this->testDates2006 as $name => $dateInfo) {
            $day = $drv->getHoliday($name);
            $this->assertFalse(Date_Holidays::isError($day));
            if (Date_Holidays::isError($day)) {
                die($day->getMessage());
            }
            $this->assertEquals($name, $day->getInternalName());
            $date = $day->getDate();
            $this->assertEquals($dateInfo['day'], $date->getDay(), $name);
            $this->assertEquals($dateInfo['month'], $date->getMonth(), $name);
            $this->assertEquals($dateInfo['year'], $date->getYear(), $name);
        }
    }

}

?>