<?php
/**
 * Estimate
 *
 * @copyright Copyright © 2017 Space48. All rights reserved.
 * @author    raul@space48.com
 */

declare(strict_types=1);

namespace Space48\CustomerReviews\Model;

use Magento\Framework\App\Config\ScopeConfigInterface;
use Magento\Framework\Event\Manager;
use Magento\Sales\Model\Order;
use Magento\Store\Model\ScopeInterface;

class Estimate
{

    const ESTIMATED_SHIPPING_CONFIG_PATH = 'space48_certified_shops/other_settings/default_estimated_shipping';
    const ESTIMATED_DELIVERY_CONFIG_PATH = 'space48_certified_shops/other_settings/default_estimated_delivery';

    private $estimatedShippingDays;
    private $estimatedDeliveryDays;
    /**
     * @var ScopeConfigInterface
     */
    private $scopeConfig;
    /**
     * @var Manager
     */
    private $eventManager;

    /**
     * @var Order
     */
    private $order;

    /**
     * Estimate constructor.
     *
     * @param ScopeConfigInterface $scopeConfig
     * @param Manager              $eventManager
     */
    public function __construct(
        ScopeConfigInterface $scopeConfig,
        Manager $eventManager
    ) {
        $this->scopeConfig  = $scopeConfig;
        $this->eventManager = $eventManager;
    }

    /**
     * @return bool|false|string
     */
    public function getEstimatedShippingDate()
    {
        return $this->formatDate($this->estimatedShippingDays);
    }

    /**
     * @param $days
     *
     * @return bool|false|string
     */
    private function formatDate($days)
    {
        return is_numeric($days) ? date('Y-m-d', strtotime($days . ' weekdays')) : false;

    }

    /**
     * @return mixed
     */
    public function setDates()
    {
        $this->estimatedShippingDays = $this->getConfig(self::ESTIMATED_SHIPPING_CONFIG_PATH);
        $this->estimatedDeliveryDays = $this->getConfig(self::ESTIMATED_DELIVERY_CONFIG_PATH);

        $this->eventManager->dispatch('certified_shops_estimates_after', ['estimate' => $this]);

    }

    /**
     * @param $path
     * @param $scopeType
     *
     * @return mixed
     *
     */
    private function getConfig($path, $scopeType = ScopeInterface::SCOPE_STORE)
    {
        return $this->scopeConfig->getValue($path, $scopeType);
    }

    /**
     * @return bool|false|string
     */
    public function getEstimatedDeliveryDate()
    {
        return $this->formatDate($this->estimatedShippingDays);
    }

    /**
     * @param array $items
     *
     * @return bool
     */
    public function getOrderHasBackOrders($items)
    {
        foreach ($items as $item) {
            if ($item->getQtyBackordered() !== null) {
                return true;
            }
        }

        return false;
    }

    /**
     * @return Order
     */
    public function getOrder()
    {
        return $this->order;
    }

    /**
     * @param $order
     */
    public function setOrder($order)
    {
        $this->order = $order;
    }

    /**
     * @param integer $days
     */
    public function setEstimatedDeliveryDays($days)
    {
        $this->estimatedDeliveryDays = $days;
    }

    /**
     * @param integer $days
     */
    public function setEstimatedShippingDays($days)
    {
        $this->estimatedShippingDays = $days;
    }
}
