<?php
/**
 * Index
 *
 * @copyright Copyright © 2017 Space48. All rights reserved.
 * @author    raul@space48.com
 */

namespace Space48\CustomerReviews\Controller\Test;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\App\Config\ScopeConfigInterface;
use Magento\Framework\Controller\ResultFactory;
use Magento\Framework\Controller\ResultInterface;
use Magento\Framework\Registry;
use Magento\Framework\View\Result\PageFactory;
use Magento\Sales\Model\OrderFactory;
use Magento\Store\Model\ScopeInterface;

class Order extends Action
{
    const ENABLE_CONFIG_PATH = 'space48_certified_shops/general/enable';

    const ENABLE_TEST_CONFIG_PATH = 'space48_certified_shops/debug_settings/enable_test';

    /**
     * @var ResultFactory
     */
    protected $resultFactory;
    /**
     * @var PageFactory
     */
    private $pageFactory;
    /**
     * @var ScopeConfigInterface
     */
    private $scopeConfig;
    /**
     * @var OrderFactory
     */
    private $orderFactory;
    /**
     * @var Registry
     */
    private $registry;

    /**
     * Constructor
     *
     * @param Context              $context
     * @param PageFactory          $resultPageFactory
     * @param ScopeConfigInterface $scopeConfig
     * @param OrderFactory         $orderFactory
     * @param Registry             $registry
     * @param ResultFactory        $resultFactory
     */
    public function __construct(
        Context $context,
        PageFactory $resultPageFactory,
        ScopeConfigInterface $scopeConfig,
        OrderFactory $orderFactory,
        Registry $registry,
        ResultFactory $resultFactory
    ) {
        parent::__construct($context);
        $this->pageFactory   = $resultPageFactory;
        $this->scopeConfig   = $scopeConfig;
        $this->orderFactory  = $orderFactory;
        $this->registry      = $registry;
        $this->resultFactory = $resultFactory;
    }

    /**
     * Execute view action
     *
     * @return ResultInterface
     */
    public function execute()
    {
        if (!$this->isEnabled() || !$this->isTestMode()) {
            return $this->getRawResult('Test mode is not enabled. Please check module config.');

        }

        $orderIncrementId = $this->getRequest()->getParam('incrementid');

        if (empty($orderIncrementId)) {
            return $this->getRawResult('Please specify an order IncrementId');
        }

        /** @var \Magento\Sales\Model\Order $order */
        $order = $this->getOrderById($orderIncrementId);

        if (!$order->getId()) {
            return $this->getRawResult('There is no order with IncrementId #' . $orderIncrementId);
        } else {
            $this->registry->register('customerreviews_order', $order);

        }

        return $this->pageFactory->create();

    }

    /**
     * @return bool
     */
    public function isEnabled()
    {
        return $this->getConfig(self::ENABLE_CONFIG_PATH) === '1';
    }

    /**
     * @param string $path
     * @param string $scopeType
     *
     * @return mixed
     *
     */
    private function getConfig($path, $scopeType = ScopeInterface::SCOPE_STORE)
    {
        return $this->scopeConfig->getValue($path, $scopeType);
    }

    /**
     * @return bool
     */
    private function isTestMode()
    {
        return $this->getConfig(self::ENABLE_TEST_CONFIG_PATH) === '1';
    }

    /**
     * @param string $message
     *
     * @return ResultInterface
     */
    private function getRawResult($message)
    {
        $result = $this->resultFactory->create(ResultFactory::TYPE_RAW);
        $result->setHeader('Content-Type', 'text/plain');
        $result->setContents($message);

        return $result;
    }

    /**
     * @param $orderIncrementId
     *
     * @return \Magento\Sales\Model\Order
     */
    private function getOrderById($orderIncrementId)
    {
        $order = $this->orderFactory->create();
        $order->loadByIncrementId($orderIncrementId);

        return $order;
    }

}
