# Google CustomerReviews (Google Customer Reviews) for Magento2
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/Space48/CmsMenu/badges/quality-score.png?b=master&s=2ef036b4914a67ab3a7629d4a7cd722d422fee77)](https://scrutinizer-ci.com/g/Space48/CmsMenu/?branch=master)
[![Build Status](https://scrutinizer-ci.com/g/Space48/CmsMenu/badges/build.png?b=master&s=cfd32528f9ec408b7280749154c22c49933d53d3)](https://scrutinizer-ci.com/g/Space48/CmsMenu/build-status/master)
[![Code Coverage](https://scrutinizer-ci.com/g/Space48/CmsMenu/badges/coverage.png?b=master&s=058641925edf8931d988a11aa92003121356a4ba)](https://scrutinizer-ci.com/g/Space48/CmsMenu/?branch=master)


### About this Extension

This extension implements the GCS [badge code](https://support.google.com/merchants/answer/7105655) on every page of the website frontend.

[More Information about Google Customer Reviews](https://support.google.com/merchants/answer/7188525?hl=en-GB)

### Compatibility

- Magento OpenSource Edition 2.1.x | 2.2.x
- Magento Commerce Edition 2.1.x | 2.2.x

## Installation

**Manually:**

To install this module copy the code from this repo to `app/code/Space48/CustomerReviews` folder of your Magento 2 instance, then run php `bin/magento setup:upgrade`

**Via composer:**

From the terminal execute the following:

`composer config repositories.space48-google-customer-review vcs git@github.com:Space48/googlecustomerreviews.git`

then

`composer require "space48/googlecustomerreviews"`

**Using Modman (mainly development proposes):**

From the terminal execute the following:

`modman clone git@github.com:Space48/googlecustomerreviews.git`


### Usage

To enable and configure this module you need to login to the Magento admin and go to **Stores ➡ Configuration ➡ Space48 ➡ Google Certified Shops** and set 'Enable' to 'Yes'.

#### Link with Google Shopping

Optionally you can enter your Google Shopping ID to link products with those submitted in Merchant Centre feeds.

|Field|Value|
|---|---|
|Google Shopping Account ID|Your Google Shopping ID obtained from your account|
|Google Shopping Language|The language used by your Google Shopping account|
|Google Shopping Country|The default country used by your Google Shopping account|

#### Default Estimated Delivery/Shipping Days

You must provide an estimate on how many days it takes to dispatch an order (shipping) and how many days it takes for that item to be delivered (delivery).

These are the figures that will be used by the order confirmation code if these estimates aren't modified by an [observer as described below](#custom-shipping-estimates-with-observer).
