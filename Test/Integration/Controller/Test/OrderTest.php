<?php
/**
 * OrderTest.php
 *
 * @Date        11/2017
 * @license     http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
 * @author      @diazwatson
 */

namespace Space48\CustomerReviews\Controller\Test;

use Magento\TestFramework\TestCase\AbstractController;

class OrderTest extends AbstractController
{

    public function testCanHandleGetRequests()
    {
        $this->getRequest()->setMethod('GET');
        $this->dispatch('customerreviews/test/order/');
        $this->assertSame(200, $this->getResponse()->getHttpResponseCode());
    }

    /**
     * @magentoConfigFixture current_store space48_customer_reviews/general/enable 1
     * @magentoConfigFixture current_store space48_customer_reviews/debug_settings/enable_test 0
     */
    public function testDebugModeIsNotEnable()
    {
        $this->dispatch('customerreviews/test/order/');
        $this->assertEquals('Test mode is not enabled. Please check module config.', $this->getResponse()->getBody());

    }

    /**
     * @magentoConfigFixture current_store space48_customer_reviews/general/enable 1
     * @magentoConfigFixture current_store space48_customer_reviews/debug_settings/enable_test 1
     */
    public function testOrderIncrementIdIsNotProvided()
    {
        $this->dispatch('customerreviews/test/order/');
        $this->assertEquals('Please specify an order IncrementId', $this->getResponse()->getBody());
    }

    /**
     * @magentoConfigFixture current_store space48_customer_reviews/general/enable 1
     * @magentoConfigFixture current_store space48_customer_reviews/debug_settings/enable_test 1
     */
    public function testOrderIncrementIdIsNotFound()
    {
        $this->dispatch('customerreviews/test/order/incrementid/1000282051');
        $this->assertEquals('There is no order with IncrementId #1000282051', $this->getResponse()->getBody());
    }

    /**
     * @magentoConfigFixture current_store space48_customer_reviews/general/enable 1
     * @magentoConfigFixture current_store space48_customer_reviews/debug_settings/enable_test 1
     * @magentoDataFixture   Magento/Sales/_files/order.php
     */
    public function testSampleOrderReturnsBadge()
    {
        $this->dispatch('customerreviews/test/order/incrementid/100000001');
        $this->assertContains('<span id="gts-o-id">100000001</span>', $this->getResponse()->getBody());
    }

}
