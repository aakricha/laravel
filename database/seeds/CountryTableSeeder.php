<?php

use Illuminate\Database\Seeder;

class CountryTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('country')->delete();
        
        \DB::table('country')->insert(array (
            0 => 
            array (
                'id' => 1,
                'country_code' => 'AF',
                'country_name' => 'Afghanistan',
                'isactive' => 1,
            ),
            1 => 
            array (
                'id' => 2,
                'country_code' => 'AL',
                'country_name' => 'Albania',
                'isactive' => 1,
            ),
            2 => 
            array (
                'id' => 3,
                'country_code' => 'DZ',
                'country_name' => 'Algeria',
                'isactive' => 1,
            ),
            3 => 
            array (
                'id' => 4,
                'country_code' => 'AS',
                'country_name' => 'American Samoa',
                'isactive' => 1,
            ),
            4 => 
            array (
                'id' => 5,
                'country_code' => 'AD',
                'country_name' => 'Andorra',
                'isactive' => 1,
            ),
            5 => 
            array (
                'id' => 6,
                'country_code' => 'AO',
                'country_name' => 'Angola',
                'isactive' => 1,
            ),
            6 => 
            array (
                'id' => 7,
                'country_code' => 'AI',
                'country_name' => 'Anguilla',
                'isactive' => 1,
            ),
            7 => 
            array (
                'id' => 8,
                'country_code' => 'AQ',
                'country_name' => 'Antarctica',
                'isactive' => 1,
            ),
            8 => 
            array (
                'id' => 9,
                'country_code' => 'AG',
                'country_name' => 'Antigua and Barbuda',
                'isactive' => 1,
            ),
            9 => 
            array (
                'id' => 10,
                'country_code' => 'AR',
                'country_name' => 'Argentina',
                'isactive' => 1,
            ),
            10 => 
            array (
                'id' => 11,
                'country_code' => 'AM',
                'country_name' => 'Armenia',
                'isactive' => 1,
            ),
            11 => 
            array (
                'id' => 12,
                'country_code' => 'AW',
                'country_name' => 'Aruba',
                'isactive' => 1,
            ),
            12 => 
            array (
                'id' => 13,
                'country_code' => 'AU',
                'country_name' => 'Australia',
                'isactive' => 1,
            ),
            13 => 
            array (
                'id' => 14,
                'country_code' => 'AT',
                'country_name' => 'Austria',
                'isactive' => 1,
            ),
            14 => 
            array (
                'id' => 15,
                'country_code' => 'AZ',
                'country_name' => 'Azerbaijan',
                'isactive' => 1,
            ),
            15 => 
            array (
                'id' => 16,
                'country_code' => 'BH',
                'country_name' => 'Bahrain',
                'isactive' => 1,
            ),
            16 => 
            array (
                'id' => 17,
                'country_code' => 'BD',
                'country_name' => 'Bangladesh',
                'isactive' => 1,
            ),
            17 => 
            array (
                'id' => 18,
                'country_code' => 'BB',
                'country_name' => 'Barbados',
                'isactive' => 1,
            ),
            18 => 
            array (
                'id' => 19,
                'country_code' => 'BY',
                'country_name' => 'Belarus',
                'isactive' => 1,
            ),
            19 => 
            array (
                'id' => 20,
                'country_code' => 'BE',
                'country_name' => 'Belgium',
                'isactive' => 1,
            ),
            20 => 
            array (
                'id' => 21,
                'country_code' => 'BZ',
                'country_name' => 'Belize',
                'isactive' => 1,
            ),
            21 => 
            array (
                'id' => 22,
                'country_code' => 'BJ',
                'country_name' => 'Benin',
                'isactive' => 1,
            ),
            22 => 
            array (
                'id' => 23,
                'country_code' => 'BM',
                'country_name' => 'Bermuda',
                'isactive' => 1,
            ),
            23 => 
            array (
                'id' => 24,
                'country_code' => 'BT',
                'country_name' => 'Bhutan',
                'isactive' => 1,
            ),
            24 => 
            array (
                'id' => 25,
                'country_code' => 'BO',
                'country_name' => 'Bolivia',
                'isactive' => 1,
            ),
            25 => 
            array (
                'id' => 26,
                'country_code' => 'BA',
                'country_name' => 'Bosnia and Herzegovina',
                'isactive' => 1,
            ),
            26 => 
            array (
                'id' => 27,
                'country_code' => 'BW',
                'country_name' => 'Botswana',
                'isactive' => 1,
            ),
            27 => 
            array (
                'id' => 28,
                'country_code' => 'BR',
                'country_name' => 'Brazil',
                'isactive' => 1,
            ),
            28 => 
            array (
                'id' => 29,
                'country_code' => 'IO',
                'country_name' => 'British Indian Ocean Territory',
                'isactive' => 1,
            ),
            29 => 
            array (
                'id' => 30,
                'country_code' => 'BN',
                'country_name' => 'Brunei',
                'isactive' => 1,
            ),
            30 => 
            array (
                'id' => 31,
                'country_code' => 'BG',
                'country_name' => 'Bulgaria',
                'isactive' => 1,
            ),
            31 => 
            array (
                'id' => 32,
                'country_code' => 'BF',
                'country_name' => 'Burkina Faso',
                'isactive' => 1,
            ),
            32 => 
            array (
                'id' => 33,
                'country_code' => 'BI',
                'country_name' => 'Burundi',
                'isactive' => 1,
            ),
            33 => 
            array (
                'id' => 34,
                'country_code' => 'KH',
                'country_name' => 'Cambodia',
                'isactive' => 1,
            ),
            34 => 
            array (
                'id' => 35,
                'country_code' => 'CM',
                'country_name' => 'Cameroon',
                'isactive' => 1,
            ),
            35 => 
            array (
                'id' => 36,
                'country_code' => 'CA',
                'country_name' => 'Canada',
                'isactive' => 1,
            ),
            36 => 
            array (
                'id' => 37,
                'country_code' => 'CV',
                'country_name' => 'Cape Verde',
                'isactive' => 1,
            ),
            37 => 
            array (
                'id' => 38,
                'country_code' => 'KY',
                'country_name' => 'Cayman Islands',
                'isactive' => 1,
            ),
            38 => 
            array (
                'id' => 39,
                'country_code' => 'CF',
                'country_name' => 'Central African Republic',
                'isactive' => 1,
            ),
            39 => 
            array (
                'id' => 40,
                'country_code' => 'TD',
                'country_name' => 'Chad',
                'isactive' => 1,
            ),
            40 => 
            array (
                'id' => 41,
                'country_code' => 'CL',
                'country_name' => 'Chile',
                'isactive' => 1,
            ),
            41 => 
            array (
                'id' => 42,
                'country_code' => 'CN',
                'country_name' => 'China',
                'isactive' => 1,
            ),
            42 => 
            array (
                'id' => 43,
                'country_code' => 'CX',
                'country_name' => 'Christmas Island',
                'isactive' => 1,
            ),
            43 => 
            array (
                'id' => 44,
                'country_code' => 'CO',
                'country_name' => 'Colombia',
                'isactive' => 1,
            ),
            44 => 
            array (
                'id' => 45,
                'country_code' => 'KM',
                'country_name' => 'Comoros',
                'isactive' => 1,
            ),
            45 => 
            array (
                'id' => 46,
                'country_code' => 'CG',
                'country_name' => 'Congo',
                'isactive' => 1,
            ),
            46 => 
            array (
                'id' => 47,
                'country_code' => 'CK',
                'country_name' => 'Cook Islands',
                'isactive' => 1,
            ),
            47 => 
            array (
                'id' => 48,
                'country_code' => 'CR',
                'country_name' => 'Costa Rica',
                'isactive' => 1,
            ),
            48 => 
            array (
                'id' => 49,
                'country_code' => 'CU',
                'country_name' => 'Cuba',
                'isactive' => 1,
            ),
            49 => 
            array (
                'id' => 50,
                'country_code' => 'CY',
                'country_name' => 'Cyprus',
                'isactive' => 1,
            ),
            50 => 
            array (
                'id' => 51,
                'country_code' => 'CZ',
                'country_name' => 'Czech Republic',
                'isactive' => 1,
            ),
            51 => 
            array (
                'id' => 52,
                'country_code' => 'DK',
                'country_name' => 'Denmark',
                'isactive' => 1,
            ),
            52 => 
            array (
                'id' => 53,
                'country_code' => 'DJ',
                'country_name' => 'Djibouti',
                'isactive' => 1,
            ),
            53 => 
            array (
                'id' => 54,
                'country_code' => 'DM',
                'country_name' => 'Dominica',
                'isactive' => 1,
            ),
            54 => 
            array (
                'id' => 55,
                'country_code' => 'DO',
                'country_name' => 'Dominican Republic',
                'isactive' => 1,
            ),
            55 => 
            array (
                'id' => 56,
                'country_code' => 'TP',
                'country_name' => 'East Timor',
                'isactive' => 1,
            ),
            56 => 
            array (
                'id' => 57,
                'country_code' => 'EC',
                'country_name' => 'Ecuador',
                'isactive' => 1,
            ),
            57 => 
            array (
                'id' => 58,
                'country_code' => 'EG',
                'country_name' => 'Egypt',
                'isactive' => 1,
            ),
            58 => 
            array (
                'id' => 59,
                'country_code' => 'SV',
                'country_name' => 'El Salvador',
                'isactive' => 1,
            ),
            59 => 
            array (
                'id' => 60,
                'country_code' => 'GQ',
                'country_name' => 'Equatorial Guinea',
                'isactive' => 1,
            ),
            60 => 
            array (
                'id' => 61,
                'country_code' => 'ER',
                'country_name' => 'Eritrea',
                'isactive' => 1,
            ),
            61 => 
            array (
                'id' => 62,
                'country_code' => 'EE',
                'country_name' => 'Estonia',
                'isactive' => 1,
            ),
            62 => 
            array (
                'id' => 63,
                'country_code' => 'ET',
                'country_name' => 'Ethiopia',
                'isactive' => 1,
            ),
            63 => 
            array (
                'id' => 64,
                'country_code' => 'FK',
                'country_name' => 'Falkland Islands',
                'isactive' => 1,
            ),
            64 => 
            array (
                'id' => 65,
                'country_code' => 'FO',
                'country_name' => 'Faroe Islands',
                'isactive' => 1,
            ),
            65 => 
            array (
                'id' => 66,
                'country_code' => 'FI',
                'country_name' => 'Finland',
                'isactive' => 1,
            ),
            66 => 
            array (
                'id' => 67,
                'country_code' => 'FR',
                'country_name' => 'France',
                'isactive' => 1,
            ),
            67 => 
            array (
                'id' => 68,
                'country_code' => 'GF',
                'country_name' => 'French Guiana',
                'isactive' => 1,
            ),
            68 => 
            array (
                'id' => 69,
                'country_code' => 'PF',
                'country_name' => 'French Polynesia',
                'isactive' => 1,
            ),
            69 => 
            array (
                'id' => 70,
                'country_code' => 'TF',
                'country_name' => 'French Southern Territories',
                'isactive' => 1,
            ),
            70 => 
            array (
                'id' => 71,
                'country_code' => 'GA',
                'country_name' => 'Gabon',
                'isactive' => 1,
            ),
            71 => 
            array (
                'id' => 72,
                'country_code' => 'GE',
                'country_name' => 'Georgia',
                'isactive' => 1,
            ),
            72 => 
            array (
                'id' => 73,
                'country_code' => 'DE',
                'country_name' => 'Germany',
                'isactive' => 1,
            ),
            73 => 
            array (
                'id' => 74,
                'country_code' => 'GH',
                'country_name' => 'Ghana',
                'isactive' => 1,
            ),
            74 => 
            array (
                'id' => 75,
                'country_code' => 'GI',
                'country_name' => 'Gibraltar',
                'isactive' => 1,
            ),
            75 => 
            array (
                'id' => 76,
                'country_code' => 'GR',
                'country_name' => 'Greece',
                'isactive' => 1,
            ),
            76 => 
            array (
                'id' => 77,
                'country_code' => 'GL',
                'country_name' => 'Greenland',
                'isactive' => 1,
            ),
            77 => 
            array (
                'id' => 78,
                'country_code' => 'GD',
                'country_name' => 'Grenada',
                'isactive' => 1,
            ),
            78 => 
            array (
                'id' => 79,
                'country_code' => 'GP',
                'country_name' => 'Guadeloupe',
                'isactive' => 1,
            ),
            79 => 
            array (
                'id' => 80,
                'country_code' => 'GU',
                'country_name' => 'Guam',
                'isactive' => 1,
            ),
            80 => 
            array (
                'id' => 81,
                'country_code' => 'GT',
                'country_name' => 'Guatemala',
                'isactive' => 1,
            ),
            81 => 
            array (
                'id' => 82,
                'country_code' => 'GQ',
                'country_name' => 'Guinea',
                'isactive' => 1,
            ),
            82 => 
            array (
                'id' => 83,
                'country_code' => 'GW',
                'country_name' => 'Guinea-Bissau',
                'isactive' => 1,
            ),
            83 => 
            array (
                'id' => 84,
                'country_code' => 'GY',
                'country_name' => 'Guyana',
                'isactive' => 1,
            ),
            84 => 
            array (
                'id' => 85,
                'country_code' => 'HT',
                'country_name' => 'Haiti',
                'isactive' => 1,
            ),
            85 => 
            array (
                'id' => 86,
                'country_code' => 'HN',
                'country_name' => 'Honduras',
                'isactive' => 1,
            ),
            86 => 
            array (
                'id' => 87,
                'country_code' => 'HU',
                'country_name' => 'Hungary',
                'isactive' => 1,
            ),
            87 => 
            array (
                'id' => 88,
                'country_code' => 'IS',
                'country_name' => 'Iceland',
                'isactive' => 1,
            ),
            88 => 
            array (
                'id' => 89,
                'country_code' => 'IO',
                'country_name' => 'India',
                'isactive' => 1,
            ),
            89 => 
            array (
                'id' => 90,
                'country_code' => 'ID',
                'country_name' => 'Indonesia',
                'isactive' => 1,
            ),
            90 => 
            array (
                'id' => 91,
                'country_code' => 'IR',
                'country_name' => 'Iran',
                'isactive' => 1,
            ),
            91 => 
            array (
                'id' => 92,
                'country_code' => 'IQ',
                'country_name' => 'Iraq',
                'isactive' => 1,
            ),
            92 => 
            array (
                'id' => 93,
                'country_code' => 'IE',
                'country_name' => 'Ireland',
                'isactive' => 1,
            ),
            93 => 
            array (
                'id' => 94,
                'country_code' => 'IL',
                'country_name' => 'Israel',
                'isactive' => 1,
            ),
            94 => 
            array (
                'id' => 95,
                'country_code' => 'IT',
                'country_name' => 'Italy',
                'isactive' => 1,
            ),
            95 => 
            array (
                'id' => 96,
                'country_code' => 'JM',
                'country_name' => 'Jamaica',
                'isactive' => 1,
            ),
            96 => 
            array (
                'id' => 97,
                'country_code' => 'JP',
                'country_name' => 'Japan',
                'isactive' => 1,
            ),
            97 => 
            array (
                'id' => 98,
                'country_code' => 'XJ',
                'country_name' => 'Jersey',
                'isactive' => 1,
            ),
            98 => 
            array (
                'id' => 99,
                'country_code' => 'KZ',
                'country_name' => 'Kazakhstan',
                'isactive' => 1,
            ),
            99 => 
            array (
                'id' => 100,
                'country_code' => 'KE',
                'country_name' => 'Kenya',
                'isactive' => 1,
            ),
            100 => 
            array (
                'id' => 101,
                'country_code' => 'KI',
                'country_name' => 'Kiribati',
                'isactive' => 1,
            ),
            101 => 
            array (
                'id' => 102,
                'country_code' => 'KW',
                'country_name' => 'Kuwait',
                'isactive' => 1,
            ),
            102 => 
            array (
                'id' => 103,
                'country_code' => 'KG',
                'country_name' => 'Kyrgyzstan',
                'isactive' => 1,
            ),
            103 => 
            array (
                'id' => 104,
                'country_code' => 'LA',
                'country_name' => 'Laos',
                'isactive' => 1,
            ),
            104 => 
            array (
                'id' => 105,
                'country_code' => 'LV',
                'country_name' => 'Latvia',
                'isactive' => 1,
            ),
            105 => 
            array (
                'id' => 106,
                'country_code' => 'LB',
                'country_name' => 'Lebanon',
                'isactive' => 1,
            ),
            106 => 
            array (
                'id' => 107,
                'country_code' => 'LS',
                'country_name' => 'Lesotho',
                'isactive' => 1,
            ),
            107 => 
            array (
                'id' => 108,
                'country_code' => 'LR',
                'country_name' => 'Liberia',
                'isactive' => 1,
            ),
            108 => 
            array (
                'id' => 109,
                'country_code' => 'LY',
                'country_name' => 'Libya',
                'isactive' => 1,
            ),
            109 => 
            array (
                'id' => 110,
                'country_code' => 'LI',
                'country_name' => 'Liechtenstein',
                'isactive' => 1,
            ),
            110 => 
            array (
                'id' => 111,
                'country_code' => 'LU',
                'country_name' => 'Luxembourg',
                'isactive' => 1,
            ),
            111 => 
            array (
                'id' => 112,
                'country_code' => 'MK',
                'country_name' => 'Macedonia',
                'isactive' => 1,
            ),
            112 => 
            array (
                'id' => 113,
                'country_code' => 'MG',
                'country_name' => 'Madagascar',
                'isactive' => 1,
            ),
            113 => 
            array (
                'id' => 114,
                'country_code' => 'MW',
                'country_name' => 'Malawi',
                'isactive' => 1,
            ),
            114 => 
            array (
                'id' => 115,
                'country_code' => 'MY',
                'country_name' => 'Malaysia',
                'isactive' => 1,
            ),
            115 => 
            array (
                'id' => 116,
                'country_code' => 'MV',
                'country_name' => 'Maldives',
                'isactive' => 1,
            ),
            116 => 
            array (
                'id' => 117,
                'country_code' => 'ML',
                'country_name' => 'Mali',
                'isactive' => 1,
            ),
            117 => 
            array (
                'id' => 118,
                'country_code' => 'MT',
                'country_name' => 'Malta',
                'isactive' => 1,
            ),
            118 => 
            array (
                'id' => 119,
                'country_code' => 'MH',
                'country_name' => 'Marshall Islands',
                'isactive' => 1,
            ),
            119 => 
            array (
                'id' => 120,
                'country_code' => 'MQ',
                'country_name' => 'Martinique',
                'isactive' => 1,
            ),
            120 => 
            array (
                'id' => 121,
                'country_code' => 'MR',
                'country_name' => 'Mauritania',
                'isactive' => 1,
            ),
            121 => 
            array (
                'id' => 122,
                'country_code' => 'MU',
                'country_name' => 'Mauritius',
                'isactive' => 1,
            ),
            122 => 
            array (
                'id' => 123,
                'country_code' => 'YT',
                'country_name' => 'Mayotte',
                'isactive' => 1,
            ),
            123 => 
            array (
                'id' => 124,
                'country_code' => 'MX',
                'country_name' => 'Mexico',
                'isactive' => 1,
            ),
            124 => 
            array (
                'id' => 125,
                'country_code' => 'MC',
                'country_name' => 'Monaco',
                'isactive' => 1,
            ),
            125 => 
            array (
                'id' => 126,
                'country_code' => 'MN',
                'country_name' => 'Mongolia',
                'isactive' => 1,
            ),
            126 => 
            array (
                'id' => 127,
                'country_code' => 'MS',
                'country_name' => 'Montserrat',
                'isactive' => 1,
            ),
            127 => 
            array (
                'id' => 128,
                'country_code' => 'MA',
                'country_name' => 'Morocco',
                'isactive' => 1,
            ),
            128 => 
            array (
                'id' => 129,
                'country_code' => 'MZ',
                'country_name' => 'Mozambique',
                'isactive' => 1,
            ),
            129 => 
            array (
                'id' => 130,
                'country_code' => 'NA',
                'country_name' => 'Namibia',
                'isactive' => 1,
            ),
            130 => 
            array (
                'id' => 131,
                'country_code' => 'NR',
                'country_name' => 'Nauru',
                'isactive' => 1,
            ),
            131 => 
            array (
                'id' => 132,
                'country_code' => 'NP',
                'country_name' => 'Nepal',
                'isactive' => 1,
            ),
            132 => 
            array (
                'id' => 133,
                'country_code' => 'NC',
                'country_name' => 'New Caledonia',
                'isactive' => 1,
            ),
            133 => 
            array (
                'id' => 134,
                'country_code' => 'NZ',
                'country_name' => 'New Zealand',
                'isactive' => 1,
            ),
            134 => 
            array (
                'id' => 135,
                'country_code' => 'NI',
                'country_name' => 'Nicaragua',
                'isactive' => 1,
            ),
            135 => 
            array (
                'id' => 136,
                'country_code' => 'NE',
                'country_name' => 'Niger',
                'isactive' => 1,
            ),
            136 => 
            array (
                'id' => 137,
                'country_code' => 'NG',
                'country_name' => 'Nigeria',
                'isactive' => 1,
            ),
            137 => 
            array (
                'id' => 138,
                'country_code' => 'NU',
                'country_name' => 'Niue',
                'isactive' => 1,
            ),
            138 => 
            array (
                'id' => 139,
                'country_code' => 'NF',
                'country_name' => 'Norfolk Island',
                'isactive' => 1,
            ),
            139 => 
            array (
                'id' => 140,
                'country_code' => 'MP',
                'country_name' => 'Northern Mariana Islands',
                'isactive' => 1,
            ),
            140 => 
            array (
                'id' => 141,
                'country_code' => 'NO',
                'country_name' => 'Norway',
                'isactive' => 1,
            ),
            141 => 
            array (
                'id' => 142,
                'country_code' => 'OM',
                'country_name' => 'Oman',
                'isactive' => 1,
            ),
            142 => 
            array (
                'id' => 143,
                'country_code' => 'PK',
                'country_name' => 'Pakistan',
                'isactive' => 1,
            ),
            143 => 
            array (
                'id' => 144,
                'country_code' => 'PW',
                'country_name' => 'Palau',
                'isactive' => 1,
            ),
            144 => 
            array (
                'id' => 145,
                'country_code' => 'PA',
                'country_name' => 'Panama',
                'isactive' => 1,
            ),
            145 => 
            array (
                'id' => 146,
                'country_code' => 'PG',
                'country_name' => 'Papua New Guinea',
                'isactive' => 1,
            ),
            146 => 
            array (
                'id' => 147,
                'country_code' => 'PY',
                'country_name' => 'Paraguay',
                'isactive' => 1,
            ),
            147 => 
            array (
                'id' => 148,
                'country_code' => 'PE',
                'country_name' => 'Peru',
                'isactive' => 1,
            ),
            148 => 
            array (
                'id' => 149,
                'country_code' => 'PH',
                'country_name' => 'Philippines',
                'isactive' => 1,
            ),
            149 => 
            array (
                'id' => 150,
                'country_code' => 'PL',
                'country_name' => 'Poland',
                'isactive' => 1,
            ),
            150 => 
            array (
                'id' => 151,
                'country_code' => 'PT',
                'country_name' => 'Portugal',
                'isactive' => 1,
            ),
            151 => 
            array (
                'id' => 152,
                'country_code' => 'PR',
                'country_name' => 'Puerto Rico',
                'isactive' => 1,
            ),
            152 => 
            array (
                'id' => 153,
                'country_code' => 'QA',
                'country_name' => 'Qatar',
                'isactive' => 1,
            ),
            153 => 
            array (
                'id' => 154,
                'country_code' => 'RO',
                'country_name' => 'Romania',
                'isactive' => 1,
            ),
            154 => 
            array (
                'id' => 155,
                'country_code' => 'RU',
                'country_name' => 'Russia',
                'isactive' => 1,
            ),
            155 => 
            array (
                'id' => 156,
                'country_code' => 'RW',
                'country_name' => 'Rwanda',
                'isactive' => 1,
            ),
            156 => 
            array (
                'id' => 157,
                'country_code' => 'SH',
                'country_name' => 'Saint Helena',
                'isactive' => 1,
            ),
            157 => 
            array (
                'id' => 158,
                'country_code' => 'KN',
                'country_name' => 'Saint Kitts and Nevis',
                'isactive' => 1,
            ),
            158 => 
            array (
                'id' => 159,
                'country_code' => 'LC',
                'country_name' => 'Saint Lucia',
                'isactive' => 1,
            ),
            159 => 
            array (
                'id' => 160,
                'country_code' => 'PM',
                'country_name' => 'Saint Pierre and Miquelon',
                'isactive' => 1,
            ),
            160 => 
            array (
                'id' => 161,
                'country_code' => 'VC',
                'country_name' => 'Saint Vincent and the Grenadines',
                'isactive' => 1,
            ),
            161 => 
            array (
                'id' => 162,
                'country_code' => 'AS',
                'country_name' => 'Samoa',
                'isactive' => 1,
            ),
            162 => 
            array (
                'id' => 163,
                'country_code' => 'SM',
                'country_name' => 'San Marino',
                'isactive' => 1,
            ),
            163 => 
            array (
                'id' => 164,
                'country_code' => 'SA',
                'country_name' => 'Saudi Arabia',
                'isactive' => 1,
            ),
            164 => 
            array (
                'id' => 165,
                'country_code' => 'SN',
                'country_name' => 'Senegal',
                'isactive' => 1,
            ),
            165 => 
            array (
                'id' => 166,
                'country_code' => 'RS',
                'country_name' => 'Serbia',
                'isactive' => 1,
            ),
            166 => 
            array (
                'id' => 167,
                'country_code' => 'SC',
                'country_name' => 'Seychelles',
                'isactive' => 1,
            ),
            167 => 
            array (
                'id' => 168,
                'country_code' => 'SL',
                'country_name' => 'Sierra Leone',
                'isactive' => 1,
            ),
            168 => 
            array (
                'id' => 169,
                'country_code' => 'SG',
                'country_name' => 'Singapore',
                'isactive' => 1,
            ),
            169 => 
            array (
                'id' => 170,
                'country_code' => 'SK',
                'country_name' => 'Slovakia',
                'isactive' => 1,
            ),
            170 => 
            array (
                'id' => 171,
                'country_code' => 'SI',
                'country_name' => 'Slovenia',
                'isactive' => 1,
            ),
            171 => 
            array (
                'id' => 172,
                'country_code' => 'SB',
                'country_name' => 'Solomon Islands',
                'isactive' => 1,
            ),
            172 => 
            array (
                'id' => 173,
                'country_code' => 'SO',
                'country_name' => 'Somalia',
                'isactive' => 1,
            ),
            173 => 
            array (
                'id' => 174,
                'country_code' => 'ZA',
                'country_name' => 'South Africa',
                'isactive' => 1,
            ),
            174 => 
            array (
                'id' => 175,
                'country_code' => 'SS',
                'country_name' => 'South Sudan',
                'isactive' => 1,
            ),
            175 => 
            array (
                'id' => 176,
                'country_code' => 'ES',
                'country_name' => 'Spain',
                'isactive' => 1,
            ),
            176 => 
            array (
                'id' => 177,
                'country_code' => 'LK',
                'country_name' => 'Sri Lanka',
                'isactive' => 1,
            ),
            177 => 
            array (
                'id' => 178,
                'country_code' => 'SS',
                'country_name' => 'Sudan',
                'isactive' => 1,
            ),
            178 => 
            array (
                'id' => 179,
                'country_code' => 'SR',
                'country_name' => 'Suriname',
                'isactive' => 1,
            ),
            179 => 
            array (
                'id' => 180,
                'country_code' => 'SZ',
                'country_name' => 'Swaziland',
                'isactive' => 1,
            ),
            180 => 
            array (
                'id' => 181,
                'country_code' => 'SE',
                'country_name' => 'Sweden',
                'isactive' => 1,
            ),
            181 => 
            array (
                'id' => 182,
                'country_code' => 'CH',
                'country_name' => 'Switzerland',
                'isactive' => 1,
            ),
            182 => 
            array (
                'id' => 183,
                'country_code' => 'SY',
                'country_name' => 'Syria',
                'isactive' => 1,
            ),
            183 => 
            array (
                'id' => 184,
                'country_code' => 'TW',
                'country_name' => 'Taiwan',
                'isactive' => 1,
            ),
            184 => 
            array (
                'id' => 185,
                'country_code' => 'TJ',
                'country_name' => 'Tajikistan',
                'isactive' => 1,
            ),
            185 => 
            array (
                'id' => 186,
                'country_code' => 'TZ',
                'country_name' => 'Tanzania',
                'isactive' => 1,
            ),
            186 => 
            array (
                'id' => 187,
                'country_code' => 'TH',
                'country_name' => 'Thailand',
                'isactive' => 1,
            ),
            187 => 
            array (
                'id' => 188,
                'country_code' => 'TG',
                'country_name' => 'Togo',
                'isactive' => 1,
            ),
            188 => 
            array (
                'id' => 189,
                'country_code' => 'TK',
                'country_name' => 'Tokelau',
                'isactive' => 1,
            ),
            189 => 
            array (
                'id' => 190,
                'country_code' => 'TO',
                'country_name' => 'Tonga',
                'isactive' => 1,
            ),
            190 => 
            array (
                'id' => 191,
                'country_code' => 'TT',
                'country_name' => 'Trinidad and Tobago',
                'isactive' => 1,
            ),
            191 => 
            array (
                'id' => 192,
                'country_code' => 'TN',
                'country_name' => 'Tunisia',
                'isactive' => 1,
            ),
            192 => 
            array (
                'id' => 193,
                'country_code' => 'TR',
                'country_name' => 'Turkey',
                'isactive' => 1,
            ),
            193 => 
            array (
                'id' => 194,
                'country_code' => 'TM',
                'country_name' => 'Turkmenistan',
                'isactive' => 1,
            ),
            194 => 
            array (
                'id' => 195,
                'country_code' => 'TC',
                'country_name' => 'Turks and Caicos Islands',
                'isactive' => 1,
            ),
            195 => 
            array (
                'id' => 196,
                'country_code' => 'TV',
                'country_name' => 'Tuvalu',
                'isactive' => 1,
            ),
            196 => 
            array (
                'id' => 197,
                'country_code' => 'UG',
                'country_name' => 'Uganda',
                'isactive' => 1,
            ),
            197 => 
            array (
                'id' => 198,
                'country_code' => 'UA',
                'country_name' => 'Ukraine',
                'isactive' => 1,
            ),
            198 => 
            array (
                'id' => 199,
                'country_code' => 'AE',
                'country_name' => 'United Arab Emirates',
                'isactive' => 1,
            ),
            199 => 
            array (
                'id' => 200,
                'country_code' => 'GB',
                'country_name' => 'United Kingdom',
                'isactive' => 1,
            ),
            200 => 
            array (
                'id' => 201,
                'country_code' => 'US',
                'country_name' => 'United States',
                'isactive' => 1,
            ),
            201 => 
            array (
                'id' => 202,
                'country_code' => 'UY',
                'country_name' => 'Uruguay',
                'isactive' => 1,
            ),
            202 => 
            array (
                'id' => 203,
                'country_code' => 'UZ',
                'country_name' => 'Uzbekistan',
                'isactive' => 1,
            ),
            203 => 
            array (
                'id' => 204,
                'country_code' => 'VU',
                'country_name' => 'Vanuatu',
                'isactive' => 1,
            ),
            204 => 
            array (
                'id' => 205,
                'country_code' => 'VE',
                'country_name' => 'Venezuela',
                'isactive' => 1,
            ),
            205 => 
            array (
                'id' => 206,
                'country_code' => 'VN',
                'country_name' => 'Vietnam',
                'isactive' => 1,
            ),
            206 => 
            array (
                'id' => 207,
                'country_code' => 'YE',
                'country_name' => 'Yemen',
                'isactive' => 1,
            ),
            207 => 
            array (
                'id' => 208,
                'country_code' => 'ZM',
                'country_name' => 'Zambia',
                'isactive' => 1,
            ),
            208 => 
            array (
                'id' => 209,
                'country_code' => 'ZW',
                'country_name' => 'Zimbabwe',
                'isactive' => 1,
            ),
        ));
        
        
    }
}