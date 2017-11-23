<?php
/**
 * LanguageTest.php
 *
 * @Date        10/2017
 * @license     http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
 * @author      @diazwatson
 */

declare(strict_types=1);

namespace Space48\CustomerReviews\Model\Config\Source;

class LanguageTest extends \PHPUnit\Framework\TestCase
{

    /**
     * @var Language
     */
    private $configSource;

    public function setUp()
    {
        $this->configSource = new Language();
    }

    public function assertToOptionArrayIsTheRightType()
    {
        $this->assertInternalType('array', $this->configSource->toOptionArray());
    }

    public function testToOptionArrayReturnsAnArrayContainingAListOfLanguages()
    {
        $this->assertEquals($this->getSampleToOptionArray(), $this->configSource->toOptionArray());
    }

    /**
     * @return array
     * @SuppressWarnings(PHPMD)
     */
    private function getSampleToOptionArray(): array
    {
        // @codingStandardsIgnoreStart
        $expected = [
            ['label' => 'Afghanistan', 'value' => 'AF'],
            ['label' => 'Abkhazian', 'value' => 'ab'],
            ['label' => 'Afar', 'value' => 'aa'],
            ['label' => 'Afrikaans', 'value' => 'af'],
            ['label' => 'Albanian', 'value' => 'sq'],
            ['label' => 'Amharic', 'value' => 'am'],
            ['label' => 'Arabic', 'value' => 'ar'],
            ['label' => 'Aragonese', 'value' => 'an'],
            ['label' => 'Armenian', 'value' => 'hy'],
            ['label' => 'Assamese', 'value' => 'as'],
            ['label' => 'Aymara', 'value' => 'ay'],
            ['label' => 'Azerbaijani', 'value' => 'az'],
            ['label' => 'Bashkir', 'value' => 'ba'],
            ['label' => 'Basque', 'value' => 'eu'],
            ['label' => 'Bengali (Bangla)', 'value' => 'bn'],
            ['label' => 'Bhutani', 'value' => 'dz'],
            ['label' => 'Bihari', 'value' => 'bh'],
            ['label' => 'Bislama', 'value' => 'bi'],
            ['label' => 'Breton', 'value' => 'br'],
            ['label' => 'Bulgarian', 'value' => 'bg'],
            ['label' => 'Burmese', 'value' => 'my'],
            ['label' => 'Byelorussian (Belarusian)', 'value' => 'be'],
            ['label' => 'Cambodian', 'value' => 'km'],
            ['label' => 'Catalan', 'value' => 'ca'],
            ['label' => 'Chinese', 'value' => 'zh'],
            ['label' => 'Chinese (Simplified)', 'value' => 'zh-Hans'],
            ['label' => 'Chinese (Traditional)', 'value' => 'zh-Hant'],
            ['label' => 'Corsican', 'value' => 'co'],
            ['label' => 'Croatian', 'value' => 'hr'],
            ['label' => 'Czech', 'value' => 'cs'],
            ['label' => 'Danish', 'value' => 'da'],
            ['label' => 'Dutch', 'value' => 'nl'],
            ['label' => 'English', 'value' => 'en'],
            ['label' => 'Esperanto', 'value' => 'eo'],
            ['label' => 'Estonian', 'value' => 'et'],
            ['label' => 'Faeroese', 'value' => 'fo'],
            ['label' => 'Farsi', 'value' => 'fa'],
            ['label' => 'Fiji', 'value' => 'fj'],
            ['label' => 'Finnish', 'value' => 'fi'],
            ['label' => 'French', 'value' => 'fr'],
            ['label' => 'Frisian', 'value' => 'fy'],
            ['label' => 'Galician', 'value' => 'gl'],
            ['label' => 'Gaelic (Scottish)', 'value' => 'gd'],
            ['label' => 'Gaelic (Manx)', 'value' => 'gv'],
            ['label' => 'Georgian', 'value' => 'ka'],
            ['label' => 'German', 'value' => 'de'],
            ['label' => 'Greek', 'value' => 'el'],
            ['label' => 'Greenlandic', 'value' => 'kl'],
            ['label' => 'Guarani', 'value' => 'gn'],
            ['label' => 'Gujarati', 'value' => 'gu'],
            ['label' => 'Haitian Creole', 'value' => 'ht'],
            ['label' => 'Hausa', 'value' => 'ha'],
            ['label' => 'Hebrew', 'value' => 'he'],
            ['label' => 'Hindi', 'value' => 'hi'],
            ['label' => 'Hungarian', 'value' => 'hu'],
            ['label' => 'Icelandic', 'value' => 'is'],
            ['label' => 'Ido', 'value' => 'io'],
            ['label' => 'Indonesian', 'value' => 'id'],
            ['label' => 'Interlingua', 'value' => 'ia'],
            ['label' => 'Interlingue', 'value' => 'ie'],
            ['label' => 'Inuktitut', 'value' => 'iu'],
            ['label' => 'Inupiak', 'value' => 'ik'],
            ['label' => 'Irish', 'value' => 'ga'],
            ['label' => 'Italian', 'value' => 'it'],
            ['label' => 'Japanese', 'value' => 'ja'],
            ['label' => 'Javanese', 'value' => 'jv'],
            ['label' => 'Kannada', 'value' => 'kn'],
            ['label' => 'Kashmiri', 'value' => 'ks'],
            ['label' => 'Kazakh', 'value' => 'kk'],
            ['label' => 'Kinyarwanda (Ruanda)', 'value' => 'rw'],
            ['label' => 'Kirghiz', 'value' => 'ky'],
            ['label' => 'Kirundi (Rundi)', 'value' => 'rn'],
            ['label' => 'Korean', 'value' => 'ko'],
            ['label' => 'Kurdish', 'value' => 'ku'],
            ['label' => 'Laothian', 'value' => 'lo'],
            ['label' => 'Latin', 'value' => 'la'],
            ['label' => 'Latvian (Lettish)', 'value' => 'lv'],
            ['label' => 'Limburgish ( Limburger)', 'value' => 'li'],
            ['label' => 'Lingala', 'value' => 'ln'],
            ['label' => 'Lithuanian', 'value' => 'lt'],
            ['label' => 'Macedonian', 'value' => 'mk'],
            ['label' => 'Malagasy', 'value' => 'mg'],
            ['label' => 'Malay', 'value' => 'ms'],
            ['label' => 'Malayalam', 'value' => 'ml'],
            ['label' => 'Maltese', 'value' => 'mt'],
            ['label' => 'Maori', 'value' => 'mi'],
            ['label' => 'Marathi', 'value' => 'mr'],
            ['label' => 'Moldavian', 'value' => 'mo'],
            ['label' => 'Mongolian', 'value' => 'mn'],
            ['label' => 'Nauru', 'value' => 'na'],
            ['label' => 'Nepali', 'value' => 'ne'],
            ['label' => 'Norwegian', 'value' => 'no'],
            ['label' => 'Occitan', 'value' => 'oc'],
            ['label' => 'Oriya', 'value' => 'or'],
            ['label' => 'Oromo (Afaan Oromo)', 'value' => 'om'],
            ['label' => 'Pashto (Pushto)', 'value' => 'ps'],
            ['label' => 'Polish', 'value' => 'pl'],
            ['label' => 'Portuguese', 'value' => 'pt'],
            ['label' => 'Punjabi', 'value' => 'pa'],
            ['label' => 'Quechua', 'value' => 'qu'],
            ['label' => 'Rhaeto-Romance', 'value' => 'rm'],
            ['label' => 'Romanian', 'value' => 'ro'],
            ['label' => 'Russian', 'value' => 'ru'],
            ['label' => 'Samoan', 'value' => 'sm'],
            ['label' => 'Sangro', 'value' => 'sg'],
            ['label' => 'Sanskrit', 'value' => 'sa'],
            ['label' => 'Serbian', 'value' => 'sr'],
            ['label' => 'Serbo-Croatian', 'value' => 'sh'],
            ['label' => 'Sesotho', 'value' => 'st'],
            ['label' => 'Setswana', 'value' => 'tn'],
            ['label' => 'Shona', 'value' => 'sn'],
            ['label' => 'Sichuan Yi', 'value' => 'ii'],
            ['label' => 'Sindhi', 'value' => 'sd'],
            ['label' => 'Sinhalese', 'value' => 'si'],
            ['label' => 'Siswati', 'value' => 'ss'],
            ['label' => 'Slovak', 'value' => 'sk'],
            ['label' => 'Slovenian', 'value' => 'sl'],
            ['label' => 'Somali', 'value' => 'so'],
            ['label' => 'Spanish', 'value' => 'es'],
            ['label' => 'Sundanese', 'value' => 'su'],
            ['label' => 'Swahili (Kiswahili)', 'value' => 'sw'],
            ['label' => 'Swedish', 'value' => 'sv'],
            ['label' => 'Tagalog', 'value' => 'tl'],
            ['label' => 'Tajik', 'value' => 'tg'],
            ['label' => 'Tamil', 'value' => 'ta'],
            ['label' => 'Tatar', 'value' => 'tt'],
            ['label' => 'Telugu', 'value' => 'te'],
            ['label' => 'Thai', 'value' => 'th'],
            ['label' => 'Tibetan', 'value' => 'bo'],
            ['label' => 'Tigrinya', 'value' => 'ti'],
            ['label' => 'Tonga', 'value' => 'to'],
            ['label' => 'Tsonga', 'value' => 'ts'],
            ['label' => 'Turkish', 'value' => 'tr'],
            ['label' => 'Turkmen', 'value' => 'tk'],
            ['label' => 'Twi', 'value' => 'tw'],
            ['label' => 'Uighur', 'value' => 'ug'],
            ['label' => 'Ukrainian', 'value' => 'uk'],
            ['label' => 'Urdu', 'value' => 'ur'],
            ['label' => 'Uzbek', 'value' => 'uz'],
            ['label' => 'Vietnamese', 'value' => 'vi'],
            ['label' => 'Volapük', 'value' => 'vo'],
            ['label' => 'Wallon', 'value' => 'wa'],
            ['label' => 'Welsh', 'value' => 'cy'],
            ['label' => 'Wolof', 'value' => 'wo'],
            ['label' => 'Xhosa', 'value' => 'xh'],
            ['label' => 'Yiddish', 'value' => 'yi'],
            ['label' => 'Yoruba', 'value' => 'yo'],
            ['label' => 'Zulu', 'value' => 'zu']
        ];

// @codingStandardsIgnoreEnd
        return $expected;
    }

    public function testToArrayIsTheRightType()
    {
        $this->assertInternalType('array', $this->configSource->toArray());
    }

    public function testToArrayReturnsTheRightValues()
    {
        $expected = $this->convertToArray($this->getSampleToOptionArray());

        $this->assertEquals($expected, $this->configSource->toArray());
    }

    /**
     * @param array $optionArray
     *
     * @return array
     * @SuppressWarnings("unused")
     */
    private function convertToArray($optionArray)
    {
        $result = [];
        foreach ($optionArray as $key => $item) {
            $result[] = [$item['value'] => $item['label']];
        }

        return $result;
    }
}
