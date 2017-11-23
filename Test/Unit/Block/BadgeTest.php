<?php
/**
 * BadgeTest.php
 *
 * @Date        10/2017
 * @license     http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
 * @author      @diazwatson
 */

declare(strict_types=1);

namespace Space48\CustomerReviews\Block;

use Magento\Framework\App\Config\ScopeConfigInterface;
use Magento\Framework\Registry;
use Magento\Framework\View\Element\Template\Context;

class BadgeTest extends \PHPUnit\Framework\TestCase
{

    /**
     * @var Badge
     */
    private $badge;

    public function setUp()
    {
        /** @var Context | \PHPUnit_Framework_MockObject_MockBuilder $contextMock */
        $contextMock = $this->getMockBuilder(Context::class)
                            ->disableOriginalConstructor()
                            ->getMock();

        /** @var ScopeConfigInterface | \PHPUnit_Framework_MockObject_MockObject $globalConfig */
        $globalConfig = $this->getMockBuilder(ScopeConfigInterface::class)
                             ->getMockForAbstractClass();

        /** @var Registry | \PHPUnit_Framework_MockObject_MockObject $registryMock */
        $registryMock = $this->getMockBuilder(Registry::class)
                             ->disableOriginalConstructor()
                             ->getMock();

        $this->badge = new Badge($contextMock, [], $globalConfig, $registryMock);
    }

    public function testIsGoogleOfferItemPageReturnsBoolean()
    {
        $this->assertInternalType('bool', $this->badge->isGoogleOfferItemPage());
    }
}
