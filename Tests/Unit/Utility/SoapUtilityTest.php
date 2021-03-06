<?php

namespace MoveElevator\MeCleverreach\Tests\Unit\Utility;

use TYPO3\CMS\Core\Tests\UnitTestCase;
use MoveElevator\MeCleverreach\Utility;

/**
 * Class SoapUtilityTest
 *
 * @package MoveElevator\MeCleverreach\Tests\Unit\Utility
 */
class SoapUtilityTest extends UnitTestCase
{
    /*
     * @var array
     */
    protected $backupGlobalsBlacklist = array('GLOBALS', 'TYPO3_CONF_VARS');

    /**
     * @test
     * @cover \MoveElevator\MeCleverreach\Utility\SoapUtility::initializeApi
     * @return void
     */
    public function testGetSoapClient()
    {
        /** @var \SoapClient $soapClient */
        $soapClient = Utility\SoapUtility::initializeApi();
        $this->assertTrue($soapClient instanceof \SoapClient);
    }
}
