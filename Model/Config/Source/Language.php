<?php
/**
 * Language
 *
 * @copyright Copyright © 2017 Space48. All rights reserved.
 * @author    raul@space48.com
 */

declare(strict_types=1);

namespace Space48\CustomerReviews\Model\Config\Source;

class Language
{

    /**
     * @return array
     * @SuppressWarnings("unused")
     */
    public function toArray()
    {
        $toArray = [];
        $optionsArray = $this->toOptionArray();
        // @codingStandardsIgnoreStart
        foreach ($optionsArray as $key => $item) {
            $toArray[] = [$item['value'] => $item['label']];
        }

        // @codingStandardsIgnoreStart
        return $toArray;
    }

    /**
     * @return array
     * @SuppressWarnings(PHPMD)
     */
    public function toOptionArray(): array
    {
        // @codingStandardsIgnoreStart
        return [
            ['label' => __('Afghanistan'), 'value' => 'AF'],
            ['label' => __('Abkhazian'), 'value' => 'ab'],
            ['label' => __('Afar'), 'value' => 'aa'],
            ['label' => __('Afrikaans'), 'value' => 'af'],
            ['label' => __('Albanian'), 'value' => 'sq'],
            ['label' => __('Amharic'), 'value' => 'am'],
            ['label' => __('Arabic'), 'value' => 'ar'],
            ['label' => __('Aragonese'), 'value' => 'an'],
            ['label' => __('Armenian'), 'value' => 'hy'],
            ['label' => __('Assamese'), 'value' => 'as'],
            ['label' => __('Aymara'), 'value' => 'ay'],
            ['label' => __('Azerbaijani'), 'value' => 'az'],
            ['label' => __('Bashkir'), 'value' => 'ba'],
            ['label' => __('Basque'), 'value' => 'eu'],
            ['label' => __('Bengali (Bangla)'), 'value' => 'bn'],
            ['label' => __('Bhutani'), 'value' => 'dz'],
            ['label' => __('Bihari'), 'value' => 'bh'],
            ['label' => __('Bislama'), 'value' => 'bi'],
            ['label' => __('Breton'), 'value' => 'br'],
            ['label' => __('Bulgarian'), 'value' => 'bg'],
            ['label' => __('Burmese'), 'value' => 'my'],
            ['label' => __('Byelorussian (Belarusian)'), 'value' => 'be'],
            ['label' => __('Cambodian'), 'value' => 'km'],
            ['label' => __('Catalan'), 'value' => 'ca'],
            ['label' => __('Chinese'), 'value' => 'zh'],
            ['label' => __('Chinese (Simplified)'), 'value' => 'zh-Hans'],
            ['label' => __('Chinese (Traditional)'), 'value' => 'zh-Hant'],
            ['label' => __('Corsican'), 'value' => 'co'],
            ['label' => __('Croatian'), 'value' => 'hr'],
            ['label' => __('Czech'), 'value' => 'cs'],
            ['label' => __('Danish'), 'value' => 'da'],
            ['label' => __('Dutch'), 'value' => 'nl'],
            ['label' => __('English'), 'value' => 'en'],
            ['label' => __('Esperanto'), 'value' => 'eo'],
            ['label' => __('Estonian'), 'value' => 'et'],
            ['label' => __('Faeroese'), 'value' => 'fo'],
            ['label' => __('Farsi'), 'value' => 'fa'],
            ['label' => __('Fiji'), 'value' => 'fj'],
            ['label' => __('Finnish'), 'value' => 'fi'],
            ['label' => __('French'), 'value' => 'fr'],
            ['label' => __('Frisian'), 'value' => 'fy'],
            ['label' => __('Galician'), 'value' => 'gl'],
            ['label' => __('Gaelic (Scottish)'), 'value' => 'gd'],
            ['label' => __('Gaelic (Manx)'), 'value' => 'gv'],
            ['label' => __('Georgian'), 'value' => 'ka'],
            ['label' => __('German'), 'value' => 'de'],
            ['label' => __('Greek'), 'value' => 'el'],
            ['label' => __('Greenlandic'), 'value' => 'kl'],
            ['label' => __('Guarani'), 'value' => 'gn'],
            ['label' => __('Gujarati'), 'value' => 'gu'],
            ['label' => __('Haitian Creole'), 'value' => 'ht'],
            ['label' => __('Hausa'), 'value' => 'ha'],
            ['label' => __('Hebrew'), 'value' => 'he'],
            ['label' => __('Hindi'), 'value' => 'hi'],
            ['label' => __('Hungarian'), 'value' => 'hu'],
            ['label' => __('Icelandic'), 'value' => 'is'],
            ['label' => __('Ido'), 'value' => 'io'],
            ['label' => __('Indonesian'), 'value' => 'id'],
            ['label' => __('Interlingua'), 'value' => 'ia'],
            ['label' => __('Interlingue'), 'value' => 'ie'],
            ['label' => __('Inuktitut'), 'value' => 'iu'],
            ['label' => __('Inupiak'), 'value' => 'ik'],
            ['label' => __('Irish'), 'value' => 'ga'],
            ['label' => __('Italian'), 'value' => 'it'],
            ['label' => __('Japanese'), 'value' => 'ja'],
            ['label' => __('Javanese'), 'value' => 'jv'],
            ['label' => __('Kannada'), 'value' => 'kn'],
            ['label' => __('Kashmiri'), 'value' => 'ks'],
            ['label' => __('Kazakh'), 'value' => 'kk'],
            ['label' => __('Kinyarwanda (Ruanda)'), 'value' => 'rw'],
            ['label' => __('Kirghiz'), 'value' => 'ky'],
            ['label' => __('Kirundi (Rundi)'), 'value' => 'rn'],
            ['label' => __('Korean'), 'value' => 'ko'],
            ['label' => __('Kurdish'), 'value' => 'ku'],
            ['label' => __('Laothian'), 'value' => 'lo'],
            ['label' => __('Latin'), 'value' => 'la'],
            ['label' => __('Latvian (Lettish)'), 'value' => 'lv'],
            ['label' => __('Limburgish ( Limburger)'), 'value' => 'li'],
            ['label' => __('Lingala'), 'value' => 'ln'],
            ['label' => __('Lithuanian'), 'value' => 'lt'],
            ['label' => __('Macedonian'), 'value' => 'mk'],
            ['label' => __('Malagasy'), 'value' => 'mg'],
            ['label' => __('Malay'), 'value' => 'ms'],
            ['label' => __('Malayalam'), 'value' => 'ml'],
            ['label' => __('Maltese'), 'value' => 'mt'],
            ['label' => __('Maori'), 'value' => 'mi'],
            ['label' => __('Marathi'), 'value' => 'mr'],
            ['label' => __('Moldavian'), 'value' => 'mo'],
            ['label' => __('Mongolian'), 'value' => 'mn'],
            ['label' => __('Nauru'), 'value' => 'na'],
            ['label' => __('Nepali'), 'value' => 'ne'],
            ['label' => __('Norwegian'), 'value' => 'no'],
            ['label' => __('Occitan'), 'value' => 'oc'],
            ['label' => __('Oriya'), 'value' => 'or'],
            ['label' => __('Oromo (Afaan Oromo)'), 'value' => 'om'],
            ['label' => __('Pashto (Pushto)'), 'value' => 'ps'],
            ['label' => __('Polish'), 'value' => 'pl'],
            ['label' => __('Portuguese'), 'value' => 'pt'],
            ['label' => __('Punjabi'), 'value' => 'pa'],
            ['label' => __('Quechua'), 'value' => 'qu'],
            ['label' => __('Rhaeto-Romance'), 'value' => 'rm'],
            ['label' => __('Romanian'), 'value' => 'ro'],
            ['label' => __('Russian'), 'value' => 'ru'],
            ['label' => __('Samoan'), 'value' => 'sm'],
            ['label' => __('Sangro'), 'value' => 'sg'],
            ['label' => __('Sanskrit'), 'value' => 'sa'],
            ['label' => __('Serbian'), 'value' => 'sr'],
            ['label' => __('Serbo-Croatian'), 'value' => 'sh'],
            ['label' => __('Sesotho'), 'value' => 'st'],
            ['label' => __('Setswana'), 'value' => 'tn'],
            ['label' => __('Shona'), 'value' => 'sn'],
            ['label' => __('Sichuan Yi'), 'value' => 'ii'],
            ['label' => __('Sindhi'), 'value' => 'sd'],
            ['label' => __('Sinhalese'), 'value' => 'si'],
            ['label' => __('Siswati'), 'value' => 'ss'],
            ['label' => __('Slovak'), 'value' => 'sk'],
            ['label' => __('Slovenian'), 'value' => 'sl'],
            ['label' => __('Somali'), 'value' => 'so'],
            ['label' => __('Spanish'), 'value' => 'es'],
            ['label' => __('Sundanese'), 'value' => 'su'],
            ['label' => __('Swahili (Kiswahili)'), 'value' => 'sw'],
            ['label' => __('Swedish'), 'value' => 'sv'],
            ['label' => __('Tagalog'), 'value' => 'tl'],
            ['label' => __('Tajik'), 'value' => 'tg'],
            ['label' => __('Tamil'), 'value' => 'ta'],
            ['label' => __('Tatar'), 'value' => 'tt'],
            ['label' => __('Telugu'), 'value' => 'te'],
            ['label' => __('Thai'), 'value' => 'th'],
            ['label' => __('Tibetan'), 'value' => 'bo'],
            ['label' => __('Tigrinya'), 'value' => 'ti'],
            ['label' => __('Tonga'), 'value' => 'to'],
            ['label' => __('Tsonga'), 'value' => 'ts'],
            ['label' => __('Turkish'), 'value' => 'tr'],
            ['label' => __('Turkmen'), 'value' => 'tk'],
            ['label' => __('Twi'), 'value' => 'tw'],
            ['label' => __('Uighur'), 'value' => 'ug'],
            ['label' => __('Ukrainian'), 'value' => 'uk'],
            ['label' => __('Urdu'), 'value' => 'ur'],
            ['label' => __('Uzbek'), 'value' => 'uz'],
            ['label' => __('Vietnamese'), 'value' => 'vi'],
            ['label' => __('Volapük'), 'value' => 'vo'],
            ['label' => __('Wallon'), 'value' => 'wa'],
            ['label' => __('Welsh'), 'value' => 'cy'],
            ['label' => __('Wolof'), 'value' => 'wo'],
            ['label' => __('Xhosa'), 'value' => 'xh'],
            ['label' => __('Yiddish'), 'value' => 'yi'],
            ['label' => __('Yoruba'), 'value' => 'yo'],
            ['label' => __('Zulu'), 'value' => 'zu']
        ];
        // @codingStandardsIgnoreStart
    }
}
