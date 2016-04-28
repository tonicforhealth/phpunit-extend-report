<?php

namespace TonicForHealth\Test\Util\Log;

use PHPUnit_Framework_Test;
use PHPUnit_Util_Log_JUnit;

/**
 * Class JUnitExtended
 *
 * @author Dmitry Gopkalo <drefixs@gmail.com>
 */
class JUnitExtended extends PHPUnit_Util_Log_JUnit
{
    const REPORT_XML = 'junit_extended_report.xml';

    /**
     * JUnitExtended constructor.
     *
     * @param string $out
     * @param bool   $logIncompleteSkipped
     */
    public function __construct($out = self::REPORT_XML, $logIncompleteSkipped = false)
    {
        parent::__construct($out, $logIncompleteSkipped);
    }

    /**
     * @param PHPUnit_Framework_Test $test
     */
    public function startTest(PHPUnit_Framework_Test $test)
    {
        parent::startTest($test);
        $annotations = $test->getAnnotations();
        if (!empty($annotations['method']['ID'])) {
            $this->currentTestCase->setAttribute('id', $annotations['method']['ID'][0]);
        }
    }
}
