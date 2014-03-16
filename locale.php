<?php

function get_available_languages() {
/**
    References :
    1. http://en.wikipedia.org/wiki/ISO_3166-1#Officially_assigned_code_elements
*/
	$country_codes = array(
		'AF' => 'Afghanistan',
		'AX' => 'Aland Islands',
		'AL' => 'Albania',
		'DZ' => 'Algeria',
		'AS' => 'American Samoa',
		'AD' => 'Andorra',
		'AO' => 'Angola',
		'AI' => 'Anguilla',
		'AQ' => 'Antarctica',
		'AG' => 'Antigua And Barbuda',
		'AR' => 'Argentina',
		'AM' => 'Armenia',
		'AW' => 'Aruba',
		'AU' => 'Australia',
		'AT' => 'Austria',
		'AZ' => 'Azerbaijan',
		'BS' => 'Bahamas',
		'BH' => 'Bahrain',
		'BD' => 'Bangladesh',
		'BB' => 'Barbados',
		'BY' => 'Belarus',
		'BE' => 'Belgium',
		'BZ' => 'Belize',
		'BJ' => 'Benin',
		'BM' => 'Bermuda',
		'BT' => 'Bhutan',
		'BO' => 'Bolivia',
		'BA' => 'Bosnia And Herzegovina',
		'BW' => 'Botswana',
		'BV' => 'Bouvet Island',
		'BR' => 'Brazil',
		'IO' => 'British Indian Ocean Territory',
		'BN' => 'Brunei Darussalam',
		'BG' => 'Bulgaria',
		'BF' => 'Burkina Faso',
		'BI' => 'Burundi',
		'KH' => 'Cambodia',
		'CM' => 'Cameroon',
		'CA' => 'Canada',
		'CV' => 'Cape Verde',
		'KY' => 'Cayman Islands',
		'CF' => 'Central African Republic',
		'TD' => 'Chad',
		'CL' => 'Chile',
		'CN' => 'China',
		'CX' => 'Christmas Island',
		'CC' => 'Cocos (Keeling) Islands',
		'CO' => 'Colombia',
		'KM' => 'Comoros',
		'CG' => 'Congo',
		'CD' => 'Congo, Democratic Republic',
		'CK' => 'Cook Islands',
		'CR' => 'Costa Rica',
		'CI' => 'Cote D\'Ivoire',
		'HR' => 'Croatia',
		'CU' => 'Cuba',
		'CY' => 'Cyprus',
		'CZ' => 'Czech Republic',
		'DK' => 'Denmark',
		'DJ' => 'Djibouti',
		'DM' => 'Dominica',
		'DO' => 'Dominican Republic',
		'EC' => 'Ecuador',
		'EG' => 'Egypt',
		'SV' => 'El Salvador',
		'GQ' => 'Equatorial Guinea',
		'ER' => 'Eritrea',
		'EE' => 'Estonia',
		'ET' => 'Ethiopia',
		'FK' => 'Falkland Islands (Malvinas)',
		'FO' => 'Faroe Islands',
		'FJ' => 'Fiji',
		'FI' => 'Finland',
		'FR' => 'France',
		'GF' => 'French Guiana',
		'PF' => 'French Polynesia',
		'TF' => 'French Southern Territories',
		'GA' => 'Gabon',
		'GM' => 'Gambia',
		'GE' => 'Georgia',
		'DE' => 'Germany',
		'GH' => 'Ghana',
		'GI' => 'Gibraltar',
		'GR' => 'Greece',
		'GL' => 'Greenland',
		'GD' => 'Grenada',
		'GP' => 'Guadeloupe',
		'GU' => 'Guam',
		'GT' => 'Guatemala',
		'GG' => 'Guernsey',
		'GN' => 'Guinea',
		'GW' => 'Guinea-Bissau',
		'GY' => 'Guyana',
		'HT' => 'Haiti',
		'HM' => 'Heard Island & Mcdonald Islands',
		'VA' => 'Holy See (Vatican City State)',
		'HN' => 'Honduras',
		'HK' => 'Hong Kong',
		'HU' => 'Hungary',
		'IS' => 'Iceland',
		'IN' => 'India',
		'ID' => 'Indonesia',
		'IR' => 'Iran, Islamic Republic Of',
		'IQ' => 'Iraq',
		'IE' => 'Ireland',
		'IM' => 'Isle Of Man',
		'IL' => 'Israel',
		'IT' => 'Italy',
		'JM' => 'Jamaica',
		'JP' => 'Japan',
		'JE' => 'Jersey',
		'JO' => 'Jordan',
		'KZ' => 'Kazakhstan',
		'KE' => 'Kenya',
		'KI' => 'Kiribati',
		'KR' => 'Korea',
		'KW' => 'Kuwait',
		'KG' => 'Kyrgyzstan',
		'LA' => 'Lao People\'s Democratic Republic',
		'LV' => 'Latvia',
		'LB' => 'Lebanon',
		'LS' => 'Lesotho',
		'LR' => 'Liberia',
		'LY' => 'Libyan Arab Jamahiriya',
		'LI' => 'Liechtenstein',
		'LT' => 'Lithuania',
		'LU' => 'Luxembourg',
		'MO' => 'Macao',
		'MK' => 'Macedonia',
		'MG' => 'Madagascar',
		'MW' => 'Malawi',
		'MY' => 'Malaysia',
		'MV' => 'Maldives',
		'ML' => 'Mali',
		'MT' => 'Malta',
		'MH' => 'Marshall Islands',
		'MQ' => 'Martinique',
		'MR' => 'Mauritania',
		'MU' => 'Mauritius',
		'YT' => 'Mayotte',
		'MX' => 'Mexico',
		'FM' => 'Micronesia, Federated States Of',
		'MD' => 'Moldova',
		'MC' => 'Monaco',
		'MN' => 'Mongolia',
		'ME' => 'Montenegro',
		'MS' => 'Montserrat',
		'MA' => 'Morocco',
		'MZ' => 'Mozambique',
		'MM' => 'Myanmar',
		'NA' => 'Namibia',
		'NR' => 'Nauru',
		'NP' => 'Nepal',
		'NL' => 'Netherlands',
		'AN' => 'Netherlands Antilles',
		'NC' => 'New Caledonia',
		'NZ' => 'New Zealand',
		'NI' => 'Nicaragua',
		'NE' => 'Niger',
		'NG' => 'Nigeria',
		'NU' => 'Niue',
		'NF' => 'Norfolk Island',
		'MP' => 'Northern Mariana Islands',
		'NO' => 'Norway',
		'OM' => 'Oman',
		'PK' => 'Pakistan',
		'PW' => 'Palau',
		'PS' => 'Palestinian Territory, Occupied',
		'PA' => 'Panama',
		'PG' => 'Papua New Guinea',
		'PY' => 'Paraguay',
		'PE' => 'Peru',
		'PH' => 'Philippines',
		'PN' => 'Pitcairn',
		'PL' => 'Poland',
		'PT' => 'Portugal',
		'PR' => 'Puerto Rico',
		'QA' => 'Qatar',
		'RE' => 'Reunion',
		'RO' => 'Romania',
		'RU' => 'Russian Federation',
		'RW' => 'Rwanda',
		'BL' => 'Saint Barthelemy',
		'SH' => 'Saint Helena',
		'KN' => 'Saint Kitts And Nevis',
		'LC' => 'Saint Lucia',
		'MF' => 'Saint Martin',
		'PM' => 'Saint Pierre And Miquelon',
		'VC' => 'Saint Vincent And Grenadines',
		'WS' => 'Samoa',
		'SM' => 'San Marino',
		'ST' => 'Sao Tome And Principe',
		'SA' => 'Saudi Arabia',
		'SN' => 'Senegal',
		'RS' => 'Serbia',
		'SC' => 'Seychelles',
		'SL' => 'Sierra Leone',
		'SG' => 'Singapore',
		'SK' => 'Slovakia',
		'SI' => 'Slovenia',
		'SB' => 'Solomon Islands',
		'SO' => 'Somalia',
		'ZA' => 'South Africa',
		'GS' => 'South Georgia And Sandwich Isl.',
		'ES' => 'Spain',
		'LK' => 'Sri Lanka',
		'SD' => 'Sudan',
		'SR' => 'Suriname',
		'SJ' => 'Svalbard And Jan Mayen',
		'SZ' => 'Swaziland',
		'SE' => 'Sweden',
		'CH' => 'Switzerland',
		'SY' => 'Syrian Arab Republic',
		'TW' => 'Taiwan',
		'TJ' => 'Tajikistan',
		'TZ' => 'Tanzania',
		'TH' => 'Thailand',
		'TL' => 'Timor-Leste',
		'TG' => 'Togo',
		'TK' => 'Tokelau',
		'TO' => 'Tonga',
		'TT' => 'Trinidad And Tobago',
		'TN' => 'Tunisia',
		'TR' => 'Turkey',
		'TM' => 'Turkmenistan',
		'TC' => 'Turks And Caicos Islands',
		'TV' => 'Tuvalu',
		'UG' => 'Uganda',
		'UA' => 'Ukraine',
		'AE' => 'United Arab Emirates',
		'GB' => 'United Kingdom',
		'US' => 'United States',
		'UM' => 'United States Outlying Islands',
		'UY' => 'Uruguay',
		'UZ' => 'Uzbekistan',
		'VU' => 'Vanuatu',
		'VE' => 'Venezuela',
		'VN' => 'Viet Nam',
		'VG' => 'Virgin Islands, British',
		'VI' => 'Virgin Islands, U.S.',
		'WF' => 'Wallis And Futuna',
		'EH' => 'Western Sahara',
		'YE' => 'Yemen',
		'ZM' => 'Zambia',
		'ZW' => 'Zimbabwe',
	);

//End of country codes

/**
    ISO 639-1 Language Codes
    Useful in Locale analysis

    References :
    1. http://en.wikipedia.org/wiki/List_of_ISO_639-1_codes
*/

	$language_codes = array(
		 "aa" => "Afar",
		 "ab" => "Abkhazian",
		 "ae" => "Avestan",
		 "af" => "Afrikaans",
		 "ak" => "Akan",
		 "am" => "Amharic",
		 "an" => "Aragonese",
		 "ar" => "Arabic",
		 "as" => "Assamese",
		 "av" => "Avaric",
		 "ay" => "Aymara",
		 "az" => "Azerbaijani",
		 "ba" => "Bashkir",
		 "be" => "Belarusian",
		 "bg" => "Bulgarian",
		 "bh" => "Bihari",
		 "bi" => "Bislama",
		 "bm" => "Bambara",
		 "bn" => "Bengali",
		 "bo" => "Tibetan",
		 "br" => "Breton",
		 "bs" => "Bosnian",
		 "ca" => "Catalan",
		 "ce" => "Chechen",
		 "ch" => "Chamorro",
		 "co" => "Corsican",
		 "cr" => "Cree",
		 "cs" => "Czech",
		 "cu" => "Church Slavic",
		 "cv" => "Chuvash",
		 "cy" => "Welsh",
		 "da" => "Danish",
		 "de" => "German",
		 "dv" => "Divehi",
		 "dz" => "Dzongkha",
		 "ee" => "Ewe",
		 "el" => "Greek",
		 "en" => "English",
		 "eo" => "Esperanto",
		 "es" => "Spanish",
		 "et" => "Estonian",
		 "eu" => "Basque",
		 "fa" => "Persian",
		 "ff" => "Fulah",
		 "fi" => "Finnish",
		 "fj" => "Fijian",
		 "fo" => "Faroese",
		 "fr" => "French",
		 "fy" => "Western Frisian",
		 "ga" => "Irish",
		 "gd" => "Scottish Gaelic",
		 "gl" => "Galician",
		 "gn" => "Guarani",
		 "gu" => "Gujarati",
		 "gv" => "Manx",
		 "ha" => "Hausa",
		 "he" => "Hebrew",
		 "hi" => "Hindi",
		 "ho" => "Hiri Motu",
		 "hr" => "Croatian",
		 "ht" => "Haitian",
		 "hu" => "Hungarian",
		 "hy" => "Armenian",
		 "hz" => "Herero",
		 "ia" => "Interlingua (International Auxiliary Language Association)",
		 "id" => "Indonesian",
		 "ie" => "Interlingue",
		 "ig" => "Igbo",
		 "ii" => "Sichuan Yi",
		 "ik" => "Inupiaq",
		 "io" => "Ido",
		 "is" => "Icelandic",
		 "it" => "Italian",
		 "iu" => "Inuktitut",
		 "ja" => "Japanese",
		 "jv" => "Javanese",
		 "ka" => "Georgian",
		 "kg" => "Kongo",
		 "ki" => "Kikuyu",
		 "kj" => "Kwanyama",
		 "kk" => "Kazakh",
		 "kl" => "Kalaallisut",
		 "km" => "Khmer",
		 "kn" => "Kannada",
		 "ko" => "Korean",
		 "kr" => "Kanuri",
		 "ks" => "Kashmiri",
		 "ku" => "Kurdish",
		 "kv" => "Komi",
		 "kw" => "Cornish",
		 "ky" => "Kirghiz",
		 "la" => "Latin",
		 "lb" => "Luxembourgish",
		 "lg" => "Ganda",
		 "li" => "Limburgish",
		 "ln" => "Lingala",
		 "lo" => "Lao",
		 "lt" => "Lithuanian",
		 "lu" => "Luba-Katanga",
		 "lv" => "Latvian",
		 "mg" => "Malagasy",
		 "mh" => "Marshallese",
		 "mi" => "Maori",
		 "mk" => "Macedonian",
		 "ml" => "Malayalam",
		 "mn" => "Mongolian",
		 "mr" => "Marathi",
		 "ms" => "Malay",
		 "mt" => "Maltese",
		 "my" => "Burmese",
		 "na" => "Nauru",
		 "nb" => "Norwegian Bokmal",
		 "nd" => "North Ndebele",
		 "ne" => "Nepali",
		 "ng" => "Ndonga",
		 "nl" => "Dutch",
		 "nn" => "Norwegian Nynorsk",
		 "no" => "Norwegian",
		 "nr" => "South Ndebele",
		 "nv" => "Navajo",
		 "ny" => "Chichewa",
		 "oc" => "Occitan",
		 "oj" => "Ojibwa",
		 "om" => "Oromo",
		 "or" => "Oriya",
		 "os" => "Ossetian",
		 "pa" => "Panjabi",
		 "pi" => "Pali",
		 "pl" => "Polish",
		 "ps" => "Pashto",
		 "pt" => "Portuguese",
		 "qu" => "Quechua",
		 "rm" => "Raeto-Romance",
		 "rn" => "Kirundi",
		 "ro" => "Romanian",
		 "ru" => "Russian",
		 "rw" => "Kinyarwanda",
		 "sa" => "Sanskrit",
		 "sc" => "Sardinian",
		 "sd" => "Sindhi",
		 "se" => "Northern Sami",
		 "sg" => "Sango",
		 "si" => "Sinhala",
		 "sk" => "Slovak",
		 "sl" => "Slovenian",
		 "sm" => "Samoan",
		 "sn" => "Shona",
		 "so" => "Somali",
		 "sq" => "Albanian",
		 "sr" => "Serbian",
		 "ss" => "Swati",
		 "st" => "Southern Sotho",
		 "su" => "Sundanese",
		 "sv" => "Swedish",
		 "sw" => "Swahili",
		 "ta" => "Tamil",
		 "te" => "Telugu",
		 "tg" => "Tajik",
		 "th" => "Thai",
		 "ti" => "Tigrinya",
		 "tk" => "Turkmen",
		 "tl" => "Tagalog",
		 "tn" => "Tswana",
		 "to" => "Tonga",
		 "tr" => "Turkish",
		 "ts" => "Tsonga",
		 "tt" => "Tatar",
		 "tw" => "Twi",
		 "ty" => "Tahitian",
		 "ug" => "Uighur",
		 "uk" => "Ukrainian",
		 "ur" => "Urdu",
		 "uz" => "Uzbek",
		 "ve" => "Venda",
		 "vi" => "Vietnamese",
		 "vo" => "Volapuk",
		 "wa" => "Walloon",
		 "wo" => "Wolof",
		 "xh" => "Xhosa",
		 "yi" => "Yiddish",
		 "yo" => "Yoruba",
		 "za" => "Zhuang",
		 "zh" => "Chinese",
		 "zu" => "Zulu"
    );

	$locale_data = array();

	//Get locales from directory
	$path = "./locale/";
	$locales = scandir($path);

	foreach($locales as $c => $l) {
	    if ($l === '.' or $l === '..') continue;
	    if (is_dir($path . '/' . $l)) {
			$parts = explode('.' , $l);
			$lc = $parts[0];
			list($lcode , $ccode) = explode('_' , $lc);
			$lcode = strtolower($lcode);
			$language = $language_codes[$lcode];
			$country = $country_codes[$ccode];
			if(strlen($language) and strlen($country)) {
				$locale_data[$l] = "$language - $country";
			}
	    }
	}

	asort($locale_data);
	return $locale_data;
}

function get_wunderground_languages($lang) {
	$wunderground_language_codes = array(
		'af' => 'AF',
		'sq' => 'AL',
		'ar' => 'AR',
		'hy' => 'HY',
		'az' => 'AZ',
		'eu' => 'EU',
		'be' => 'BY',
		'bg' => 'BU',
		'io' => 'LI',
		'my' => 'MY',
		'ca' => 'CA',
		'cn' => 'CN',
		'tw' => 'TW',
		'cr' => 'CR',
		'cz' => 'CZ',
		'da' => 'DK',
		'dv' => 'DV',
		'nl' => 'NL',
		'en' => 'EN',
		'eo' => 'EO',
		'et' => 'ET',
		'fa' => 'FA',
		'fi' => 'FI',
		'fr' => 'FR',
		'gl' => 'GZ',
		'de' => 'DL',
		'ka' => 'KA',
		'el' => 'GR',
		'gu' => 'GU',
		'ht' => 'HT',
		'he' => 'IL',
		'hi' => 'HI',
		'hu' => 'HU',
		'is' => 'IS',
		'io' => 'IO',
		'id' => 'ID',
		'ga' => 'IR',
		'it' => 'IT',
		'ja' => 'JP',
		'jv' => 'JW',
		'km' => 'KM',
		'ko' => 'KR',
		'ku' => 'KU',
		'la' => 'LA',
		'lv' => 'LV',
		'lt' => 'LT',
		'nd' => 'ND',
		'mk' => 'MK',
		'mt' => 'MT',
		'mi' => 'MI',
		'mr' => 'MR',
		'mn' => 'MN',
		'no' => 'NO',
		'oc' => 'OC',
		'ps' => 'PS',
		'pl' => 'PL',
		'pt' => 'BR',
		'pa' => 'PA',
		'ro' => 'RO',
		'ru' => 'RU',
		'sr' => 'SR',
		'sk' => 'SK',
		'sl' => 'SL',
		'es' => 'SP',
		'sw' => 'SI',
		'sv' => 'SW',
		'tl' => 'TL',
		'tt' => 'TT',
		'th' => 'TH',
		'tr' => 'TR',
		'tk' => 'TK',
		'uk' => 'UA',
		'uz' => 'UZ',
		'vi' => 'VU',
		'cy' => 'CY',
		'wo' => 'SN',
		'yi' => 'YI',
		'zh' => 'CN',
	  );
	  $lang = substr($lang,-5,2);
	  if (isset($wunderground_language_codes[$lang])) $lang = $wunderground_language_codes[$lang];
	  else $lang = "EN";
	  return $lang;
}
?>
