<?php
/**
 * BadgePositionTest.php
 *
 * @Date        10/2017
 * @license     http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
 * @author      @diazwatson
 */

declare(strict_types=1);

namespace Space48\CustomerReviews\Model\Config\Source;

class BadgePositionTest extends \PHPUnit\Framework\TestCase
{

    /**
     * @var BadgePosition
     */
    private $configSource;

    public function setUp()
    {
        $this->configSource = new BadgePosition();
    }

    public function testToOptionArrayReturnsArrayType()
    {
        $this->assertInternalType('array', $this->configSource->toOptionArray());
    }

    public function testToOptionArrayReturnsTheRightData()
    {
        $expected = [
            ['value' => 'BOTTOM_RIGHT', 'label' => __('Bottom Right')],
            ['value' => 'BOTTOM_LEFT', 'label'  => __('Bottom Left')],
            ['value' => 'USER_DEFINED', 'label' => __('User Defined')]
        ];
        $this->assertEquals($expected, $this->configSource->toOptionArray());
    }

    public function testToArrayReturnsAnArrayContainingTheRightData()
    {
        $expected = [
            'BOTTOM_RIGHT' => __('Bottom Right'),
            'BOTTOM_LEFT'  => __('Bottom Left'),
            'USER_DEFINED' => __('User Defined')
        ];
        $this->assertEquals($expected, $this->configSource->toArray());
    }
}
