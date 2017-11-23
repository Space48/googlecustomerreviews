<?php

namespace Space48\CustomerReviews\Block;

use Magento\Checkout\Model\Session;
use Magento\Framework\App\Config\ScopeConfigInterface;
use Magento\Framework\Registry;
use Magento\Framework\View\Element\Template;
use Magento\Framework\View\Element\Template\Context;
use Magento\Sales\Model\Order;
use Magento\Sales\Model\OrderFactory;
use Magento\Store\Model\ScopeInterface;
use Space48\CustomerReviews\Model\Estimate;

class Success extends Template
{

    const GSHOPPING_ACCOUNT_ID_CONFIG_PATH = 'space48_customer_reviews/badge_settings/google_shopping_account_id';

    /**
     * @var bool
     */
    private $hasLastOrder = false;

    /**
     * @var Registry
     */
    private $registry;

    /**
     * @var Order
     */
    private $testOrder;

    /**
     * @var OrderFactory
     */
    private $orderFactory;

    /**
     * @var Session
     */
    private $checkoutSession;

    /**
     * @var Order
     */
    private $lastOrder;

    /**
     * @var array
     */
    private $allVisibleItems = [];

    /**
     * @var array
     */
    private $allItems;

    /**
     * @var ScopeConfigInterface
     */
    private $scopeConfig;

    /**
     * @var Estimate
     */
    private $estimate;

    /**
     * Success constructor.
     *
     * @param Context              $context
     * @param ScopeConfigInterface $scopeConfig
     * @param Registry             $registry
     * @param Session              $checkoutSession
     * @param OrderFactory         $orderFactory
     * @param Estimate             $estimate
     */
    public function __construct(
        Context $context,
        ScopeConfigInterface $scopeConfig,
        Registry $registry,
        Session $checkoutSession,
        OrderFactory $orderFactory,
        Estimate $estimate
    ) {
        parent::__construct($context);
        $this->scopeConfig     = $scopeConfig;
        $this->registry        = $registry;
        $this->checkoutSession = $checkoutSession;
        $this->orderFactory    = $orderFactory;
        $this->estimate        = $estimate;
    }

    /**
     * @return bool
     */
    public function hasLastOrder()
    {
        $this->initLastOrder();

        return $this->hasLastOrder;
    }

    /**
     * Initialize Last Order
     */
    private function initLastOrder()
    {
        if ($this->isTestOrderPage()) {
            $order = $this->testOrder;
        } else {
            /** @var Order $order */
            $order = $this->orderFactory->create();
            $order->loadByIncrementId($this->checkoutSession->getLastRealOrder()->getIncrementId());
        }

        if ($order->getId()) {
            $this->hasLastOrder    = true;
            $this->lastOrder       = $order;
            $this->allVisibleItems = $order->getAllVisibleItems();
            $this->allItems        = $order->getAllItems();

            $this->estimate->setOrder($this->lastOrder);
            $this->estimate->setDates();
        }
    }

    /**
     * @return bool
     */
    private function isTestOrderPage()
    {
        $testOrder = $this->registry->registry('customerreviews_order');
        if ($testOrder) {
            $this->testOrder = $testOrder;

            return true;
        }

        return false;
    }

    /**
     * @param $price
     *
     * @return float
     */
    public function formatPrice($price)
    {
        return number_format($price, 2, '.', '');
    }

    /**
     * @return Order
     */
    public function getLastOrder()
    {
        return $this->lastOrder;
    }

    /**
     * @return string
     */
    public function getGoogleShoppingAccountId()
    {
        return $this->getConfig(self::GSHOPPING_ACCOUNT_ID_CONFIG_PATH, ScopeInterface::SCOPE_STORE);
    }

    /**
     * @param $path
     * @param $scopeType
     *
     * @return mixed
     *
     */
    private function getConfig($path, $scopeType)
    {
        return $this->scopeConfig->getValue($path, $scopeType);
    }

    /**
     * @return string
     */
    public function getEstimatedShippingDate()
    {
        return $this->estimate->getEstimatedShippingDate();
    }

    /**
     * @return string
     */
    public function getEstimatedDeliveryDate()
    {
        return $this->estimate->getEstimatedDeliveryDate();

    }

    /**
     * @return array
     */
    public function getAllVisibleItems()
    {
        return $this->allVisibleItems;
    }

    /**
     * @return string
     */
    public function getFormattedBaseUrl()
    {
        return str_replace(
            '/',
            '',
            str_replace(array('http://', 'https://'), '', $this->getBaseUrl()));

    }

    /**
     * @return string
     */
    public function getOrderCountry()
    {
        return $this->lastOrder->getShippingAddress()->getCountryId();
    }

    /**
     * @return string
     */
    public function isVirtual()
    {
        return ($this->lastOrder->getIsVirtual() === '0') ? 'N' : 'Y';
    }

    /**
     * @return string
     */
    public function getOrderHasPreOrders()
    {
        return $this->estimate->getOrderHasBackOrders($this->allItems) ? 'Y' : 'N';

    }
}

