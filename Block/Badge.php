<?php

namespace Space48\CustomerReviews\Block;

use Magento\Catalog\Model\Product;
use Magento\Framework\App\Config\ScopeConfigInterface;
use Magento\Framework\Registry;
use Magento\Framework\View\Element\Template;
use Magento\Framework\View\Element\Template\Context;
use Magento\Store\Model\ScopeInterface;

class Badge extends Template
{

    const TRUSTED_STORE_ID_CONFIG_PATH = 'space48_customer_reviews/general/trusted_store_id';
    const SHOPPING_ACCOUNT_ID_CONFIG_PATH = 'space48_customer_reviews/badge_settings/google_shopping_account_id';
    const LOCALE_CONFIG_PATH = 'space48_customer_reviews/general/locale';
    const SHOPPING_COUNTRY_CONFIG_PATH = 'space48_customer_reviews/badge_settings/google_shopping_country';
    const SHOPPING_LANGUAGE_CONFIG_PATH = 'space48_customer_reviews/badge_settings/google_shopping_language';
    const BADGE_POSITION_CONFIG_CONFIG_PATH = 'space48_customer_reviews/badge_settings/badge_position';
    const ENABLE_CONFIG_PATH = 'space48_customer_reviews/general/enable';

    /**
     * @var ScopeConfigInterface
     */
    private $scopeConfig;
    /**
     * @var string
     */
    private $fullActionName;
    /**
     * @var Registry
     */
    private $registry;

    /**
     * Badge constructor.
     *
     * @param Context              $context
     * @param array                $data
     * @param ScopeConfigInterface $scopeConfig
     * @param Registry             $registry
     */
    public function __construct(
        Context $context,
        array $data = [],
        ScopeConfigInterface $scopeConfig,
        Registry $registry
    ) {
        parent::__construct($context, $data);

        $this->scopeConfig = $scopeConfig;
        $this->registry = $registry;
    }

    /**
     * @return bool
     */
    public function isGoogleOfferItemPage()
    {
        if ($this->getGoogleShoppingAccountId()) {
            $this->fullActionName = 'catalog_product_view';

            return true;
        }

        return false;
    }

    /**
     * @return string
     */
    public function getGoogleShoppingAccountId()
    {
        return $this->getConfig(self::SHOPPING_ACCOUNT_ID_CONFIG_PATH);
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
     * @return string
     */
    public function getGoogleBaseOfferId()
    {
        if ($this->fullActionName === 'catalog_product_view') {
            return $this->getProduct()->getData('sku');
        }
    }

    /**
     * @return Product
     */
    private function getProduct()
    {
        return $this->registry->registry('current_product');
    }

    /**
     * @return mixed
     */
    public function getTrustedId()
    {
        return $this->getConfig(self::TRUSTED_STORE_ID_CONFIG_PATH);
    }

    /**
     * @return string
     */
    public function getBadgePosition()
    {
        return $this->getConfig(self::BADGE_POSITION_CONFIG_CONFIG_PATH);
    }

    /**
     * @return string
     */
    public function getGoogleShoppingCountry()
    {
        return $this->getConfig(self::SHOPPING_COUNTRY_CONFIG_PATH);
    }

    /**
     * @return string
     */
    public function getGoogleShoppingLanguage()
    {
        return $this->getConfig(self::SHOPPING_LANGUAGE_CONFIG_PATH);
    }

    /**
     * @return string
     */
    public function getLocale()
    {
        return $this->getConfig(self::LOCALE_CONFIG_PATH);
    }

    /**
     * @return mixed
     */
    public function isEnabled()
    {
        return $this->getConfig(self::ENABLE_CONFIG_PATH);
    }
}

