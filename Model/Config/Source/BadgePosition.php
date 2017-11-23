<?php
/**
 * BadgePosition
 *
 * @copyright Copyright © 2017 Space48. All rights reserved.
 * @author    raul@space48.com
 */

declare(strict_types=1);

namespace Space48\CustomerReviews\Model\Config\Source;

class BadgePosition
{

    /**
     * @return array
     */
    public function toOptionArray()
    {
        return [
            ['value' => 'BOTTOM_RIGHT', 'label' => __('Bottom Right')],
            ['value' => 'BOTTOM_LEFT', 'label' => __('Bottom Left')],
            ['value' => 'USER_DEFINED', 'label' => __('User Defined')]
        ];
    }

    /**
     * @return array
     */
    public function toArray()
    {
        return [
            'BOTTOM_RIGHT' => __('Bottom Right'),
            'BOTTOM_LEFT'  => __('Bottom Left'),
            'USER_DEFINED' => __('User Defined')
        ];
    }
}
