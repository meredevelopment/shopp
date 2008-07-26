<?php

/* DROP ALL TABLES SQL for install/init testing

DROP TABLE IF EXISTS `shopp_setting`;
DROP TABLE IF EXISTS `shopp_product`;
DROP TABLE IF EXISTS `shopp_category`;
DROP TABLE IF EXISTS `shopp_tag`;
DROP TABLE IF EXISTS `shopp_catalog`;
DROP TABLE IF EXISTS `shopp_price`;
DROP TABLE IF EXISTS `shopp_meta`;
DROP TABLE IF EXISTS `shopp_asset`;
DROP TABLE IF EXISTS `shopp_spec`;
DROP TABLE IF EXISTS `shopp_cart`;
DROP TABLE IF EXISTS `shopp_item`;
DROP TABLE IF EXISTS `shopp_customer`;
DROP TABLE IF EXISTS `shopp_shipping`;
DROP TABLE IF EXISTS `shopp_billing`;
DROP TABLE IF EXISTS `shopp_purchase`;
DROP TABLE IF EXISTS `shopp_purchased`;

*/

/**
 * Index of global region names */
function get_global_regions () {
	$regions = array();
	$regions[0] = "North America";
	$regions[1] = "Central America";
	$regions[2] = "South America";
	$regions[3] = "Europe";
	$regions[4] = "Middle East";
	$regions[5] = "Africa";
	$regions[6] = "Asia";
	$regions[7] = "Oceania";
	return $regions;
}

/**
 * Country data table
 * 20 KB in the database, load only when absolutely necessary and unset() asap */
function get_countries () {
	$countries = array();
	$countries['CA'] = array('name'=>'Canada','currency'=>'CAD','units'=>'metric','region'=>0); 
	$countries['US'] = array('name'=>'USA','currency'=>'USD','units'=>'imperial','region'=>0); 
	$countries['UK'] = array('name'=>'United Kingdom','currency'=>'GBP','units'=>'imperial','region'=>3); 
	$countries['AR'] = array('name'=>'Argentina','currency'=>'ARS','units'=>'metric','region'=>7); 
	$countries['AU'] = array('name'=>'Australia','currency'=>'AUD','units'=>'metric','region'=>7); 
	$countries['AT'] = array('name'=>'Austria','currency'=>'EUR','units'=>'metric','region'=>3); 
	$countries['BS'] = array('name'=>'Bahamas','currency'=>'BSD','units'=>'metric','region'=>0); 
	$countries['BE'] = array('name'=>'Belgium','currency'=>'EUR','units'=>'metric','region'=>3); 
	$countries['BR'] = array('name'=>'Brazil','currency'=>'BRL','units'=>'metric','region'=>2); 
	$countries['CL'] = array('name'=>'Chile','currency'=>'CLP','units'=>'metric','region'=>2); 
	$countries['CN'] = array('name'=>'China','currency'=>'CNY','units'=>'metric','region'=>6); 
	$countries['CO'] = array('name'=>'Colombia','currency'=>'COP','units'=>'metric','region'=>2); 
	$countries['CR'] = array('name'=>'Costa Rica','currency'=>'CRC','units'=>'metric','region'=>1); 
	$countries['HR'] = array('name'=>'Croatia','currency'=>'HRK','units'=>'metric','region'=>3); 
	$countries['CY'] = array('name'=>'Cyprus','currency'=>'CYP','units'=>'metric','region'=>3); 
	$countries['CZ'] = array('name'=>'Czech Republic','currency'=>'CZK','units'=>'metric','region'=>3); 
	$countries['DK'] = array('name'=>'Denmark','currency'=>'DKK','units'=>'metric','region'=>3); 
	$countries['EC'] = array('name'=>'Ecuador','currency'=>'ECS','units'=>'metric','region'=>2); 
	$countries['EE'] = array('name'=>'Estonia','currency'=>'EEK','units'=>'metric','region'=>3); 
	$countries['FI'] = array('name'=>'Finland','currency'=>'EUR','units'=>'metric','region'=>3); 
	$countries['FR'] = array('name'=>'France','currency'=>'EUR','units'=>'metric','region'=>3); 
	$countries['DE'] = array('name'=>'Germany','currency'=>'EUR','units'=>'metric','region'=>3); 
	$countries['GR'] = array('name'=>'Greece','currency'=>'EUR','units'=>'metric','region'=>3); 
	$countries['GP'] = array('name'=>'Guadeloupe','currency'=>'EUR','units'=>'metric','region'=>3); 
	$countries['HK'] = array('name'=>'Hong Kong','currency'=>'HKD','units'=>'metric','region'=>6); 
	$countries['HU'] = array('name'=>'Hungary','currency'=>'HUF','units'=>'metric','region'=>3); 
	$countries['IS'] = array('name'=>'Iceland','currency'=>'ISK','units'=>'metric','region'=>3); 
	$countries['IN'] = array('name'=>'India','currency'=>'INR','units'=>'metric','region'=>6); 
	$countries['ID'] = array('name'=>'Indonesia','currency'=>'IDR','units'=>'metric','region'=>7); 
	$countries['IE'] = array('name'=>'Ireland','currency'=>'EUR','units'=>'metric','region'=>3); 
	$countries['IL'] = array('name'=>'Israel','currency'=>'ILS','units'=>'metric','region'=>4); 
	$countries['IT'] = array('name'=>'Italy','currency'=>'EUR','units'=>'metric','region'=>3); 
	$countries['JM'] = array('name'=>'Jamaica','currency'=>'JMD','units'=>'metric','region'=>0); 
	$countries['JP'] = array('name'=>'Japan','currency'=>'JPY','units'=>'metric','region'=>6); 
	$countries['LV'] = array('name'=>'Latvia','currency'=>'LVL','units'=>'metric','region'=>3); 
	$countries['LT'] = array('name'=>'Lithuania','currency'=>'LTL','units'=>'metric','region'=>3); 
	$countries['LU'] = array('name'=>'Luxembourg','currency'=>'EUR','units'=>'metric','region'=>3); 
	$countries['MY'] = array('name'=>'Malaysia','currency'=>'MYR','units'=>'metric','region'=>6); 
	$countries['MT'] = array('name'=>'Malta','currency'=>'MTL','units'=>'metric','region'=>3); 
	$countries['MX'] = array('name'=>'Mexico','currency'=>'MXN','units'=>'metric','region'=>0); 
	$countries['NL'] = array('name'=>'Netherlands','currency'=>'EUR','units'=>'metric','region'=>3); 
	$countries['NZ'] = array('name'=>'New Zealand','currency'=>'NZD','units'=>'metric','region'=>7); 
	$countries['NO'] = array('name'=>'Norway','currency'=>'NOK','units'=>'metric','region'=>3); 
	$countries['PH'] = array('name'=>'Philippines','currency'=>'PHP','units'=>'metric','region'=>6); 
	$countries['PL'] = array('name'=>'Poland','currency'=>'PLZ','units'=>'metric','region'=>3); 
	$countries['PT'] = array('name'=>'Portugal','currency'=>'EUR','units'=>'metric','region'=>3); 
	$countries['PR'] = array('name'=>'Puerto Rico','currency'=>'USD','units'=>'imperial','region'=>0); 
	$countries['RO'] = array('name'=>'Romania','currency'=>'ROL','units'=>'metric','region'=>3); 
	$countries['RU'] = array('name'=>'Russia','currency'=>'RUR','units'=>'metric','region'=>6); 
	$countries['SG'] = array('name'=>'Singapore','currency'=>'SGD','units'=>'metric','region'=>6); 
	$countries['SK'] = array('name'=>'Slovakia','currency'=>'SKK','units'=>'metric','region'=>3); 
	$countries['SI'] = array('name'=>'Slovenia','currency'=>'SIT','units'=>'metric','region'=>3); 
	$countries['ZA'] = array('name'=>'South Africa','currency'=>'ZAR','units'=>'metric','region'=>5); 
	$countries['KR'] = array('name'=>'South Korea','currency'=>'KRW','units'=>'metric','region'=>6); 
	$countries['ES'] = array('name'=>'Spain','currency'=>'EUR','units'=>'metric','region'=>3); 
	$countries['VC'] = array('name'=>'St. Vincent','currency'=>'XCD','units'=>'metric','region'=>6); 
	$countries['SE'] = array('name'=>'Sweden','currency'=>'SEK','units'=>'metric','region'=>3); 
	$countries['CH'] = array('name'=>'Switzerland','currency'=>'CHF','units'=>'metric','region'=>3); 
	$countries['SY'] = array('name'=>'Syria','currency'=>'SYP','units'=>'metric','region'=>4); 
	$countries['TW'] = array('name'=>'Taiwan','currency'=>'TWD','units'=>'metric','region'=>6); 
	$countries['TH'] = array('name'=>'Thailand','currency'=>'THB','units'=>'metric','region'=>6); 
	$countries['TT'] = array('name'=>'Trinidad and Tobago','currency'=>'TTD','units'=>'metric','region'=>0); 
	$countries['TR'] = array('name'=>'Turkey','currency'=>'TRL','units'=>'metric','region'=>4); 
	$countries['AE'] = array('name'=>'United Arab Emirates','currency'=>'AED','units'=>'metric','region'=>4); 
	$countries['UY'] = array('name'=>'Uruguay','currency'=>'UYP','units'=>'metric','region'=>2); 
	$countries['VE'] = array('name'=>'Venezuela','currency'=>'VUB','units'=>'metric','region'=>2); 
	return $countries;
}

/**
 * State/Province/Territory zone names
 * 2 KB in the database */
function get_country_zones() {
	$zones = array();
	$zones['AU'] = array();
	$zones['AU']['NSW'] = 'New South Wales';
	$zones['AU']['NT'] = 'Northern Territory';
	$zones['AU']['QLD'] = 'Queensland';
	$zones['AU']['TAS'] = 'Tasmania';
	$zones['AU']['VIC'] = 'Victoria';
	$zones['AU']['WA'] = 'Western Australia';

	$zones['CA'] = array();
	$zones['CA']['AB'] = 'Alberta';
	$zones['CA']['BC'] = 'British Columbia';
	$zones['CA']['MB'] = 'Manitoba';
	$zones['CA']['NB'] = 'New Brunswick';
	$zones['CA']['NF'] = 'Newfoundland';
	$zones['CA']['NT'] = 'Northwest Territories';
	$zones['CA']['NS'] = 'Nova Scotia';
	$zones['CA']['NU'] = 'Nunavut';
	$zones['CA']['ON'] = 'Ontario';
	$zones['CA']['PE'] = 'Prince Edward Island';
	$zones['CA']['PQ'] = 'Quebec';
	$zones['CA']['SK'] = 'Saskatchewan';
	$zones['CA']['YT'] = 'Yukon Territory';

	$zones['US'] = array();
	$zones['US']['AL'] = 'Alabama';
	$zones['US']['AK'] = 'Alaska ';
	$zones['US']['AZ'] = 'Arizona';
	$zones['US']['AR'] = 'Arkansas';
	$zones['US']['CA'] = 'California ';
	$zones['US']['CO'] = 'Colorado';
	$zones['US']['CT'] = 'Connecticut';
	$zones['US']['DE'] = 'Delaware';
	$zones['US']['DC'] = 'District Of Columbia ';
	$zones['US']['FL'] = 'Florida';
	$zones['US']['GA'] = 'Georgia ';
	$zones['US']['HI'] = 'Hawaii';
	$zones['US']['ID'] = 'Idaho';
	$zones['US']['IL'] = 'Illinois';
	$zones['US']['IN'] = 'Indiana';
	$zones['US']['IA'] = 'Iowa';
	$zones['US']['KS'] = 'Kansas';
	$zones['US']['KY'] = 'Kentucky';
	$zones['US']['LA'] = 'Louisiana';
	$zones['US']['ME'] = 'Maine';
	$zones['US']['MD'] = 'Maryland';
	$zones['US']['MA'] = 'Massachusetts';
	$zones['US']['MI'] = 'Michigan';
	$zones['US']['MN'] = 'Minnesota';
	$zones['US']['MS'] = 'Mississippi';
	$zones['US']['MO'] = 'Missouri';
	$zones['US']['MT'] = 'Montana';
	$zones['US']['NE'] = 'Nebraska';
	$zones['US']['NV'] = 'Nevada';
	$zones['US']['NH'] = 'New Hampshire';
	$zones['US']['NJ'] = 'New Jersey';
	$zones['US']['NM'] = 'New Mexico';
	$zones['US']['NY'] = 'New York';
	$zones['US']['NC'] = 'North Carolina';
	$zones['US']['ND'] = 'North Dakota';
	$zones['US']['OH'] = 'Ohio';
	$zones['US']['OK'] = 'Oklahoma';
	$zones['US']['OR'] = 'Oregon';
	$zones['US']['PA'] = 'Pennsylvania';
	$zones['US']['RI'] = 'Rhode Island';
	$zones['US']['SC'] = 'South Carolina';
	$zones['US']['SD'] = 'South Dakota';
	$zones['US']['TN'] = 'Tennessee';
	$zones['US']['TX'] = 'Texas';
	$zones['US']['UT'] = 'Utah';
	$zones['US']['VT'] = 'Vermont';
	$zones['US']['VA'] = 'Virginia';
	$zones['US']['WA'] = 'Washington';
	$zones['US']['WV'] = 'West Virginia';
	$zones['US']['WI'] = 'Wisconsin';
	$zones['US']['WY'] = 'Wyoming';
	return $zones;
}

/**
 * Domestic areas for US and Canada mapped by postcode
 * 3 KB in the database */
function get_country_areas () {
	$areas = array();
	$areas['CA'] = array();
	$areas['CA']['Northern Canada'] = array('YT'=>array('Y'),'NT'=>array('X'),'NU'=>array('X'));
	$areas['CA']['Western Canada'] = array('BC'=>array('V'),'AB'=>array('T'),'SK'=>array('S'),'MB'=>array('R'));
	$areas['CA']['Eastern Canada'] = array('OT'=>array('K','L','M','N','P'),'PQ'=>array('G','H','J'),'NB'=>array('E'),'PE'=>array('C'),'NS'=>array('B'),'NF'=>array('A'));

	$areas['US'] = array();
	$areas['US']['Northeast US'] = array('MA'=>array('01000','02799'),'RI'=>array('02800','02999'),'NH'=>array('03000','03899'),'ME'=>array('04000','04999'),'VT'=>array('05000','05999'),'CT'=>array('06800','06999'),'NJ'=>array('07000','08999'),'NY'=>array('10000','14999'),'PA'=>array('15000','16999'));
	$areas['US']['Midwest US'] = array('OH'=>array('43000','45899'),'IN'=>array('46000','47999'),'MI'=>array('48000','49799'),'IA'=>array('50000','52899'),'WI'=>array('53000','54899'),'MN'=>array('55000','56799'),'SD'=>array('57000','57799'),'ND'=>array('58000','58899'),'IL'=>array('60000','62999'),'MO'=>array('63000','65899'),'KS'=>array('66000','64799'),'NE'=>array('68000','69399'));
	$areas['US']['South US'] =array('DE'=>array('19700','19999'),'DC'=>array('20001','20599'),'MD'=>array('20600','21999'),'VA'=>array('22000','24699'),'WV'=>array('25000','26899'),'NC'=>array('27000','28999'),'SC'=>array('29000','29999'),'GA'=>array('30000','31999'),'FL'=>array('32100','34999'),'AL'=>array('35000','36999'),'TN'=>array('37000','38899'),'MS'=>array('38600','39599'),'KY'=>array('40000','42799'),'LA'=>array('70000','71499'),'AR'=>array('71600','72999'),'OK'=>array('73000','74999'),'TX'=>array('75000','79999'));
	$areas['US']['West US'] =array('MT'=>array('59000','59999'),'CO'=>array('80000','81699'),'WY'=>array('82000','83199'),'ID'=>array('83200','83899'),'UT'=>array('84000','84799'),'AZ'=>array('85000','86599'),'NM'=>array('87000','88499'),'NV'=>array('89000','89899'),'CA'=>array('90000','96199'),'HI'=>array('96700','96899'),'OR'=>array('97000','97999'),'WA'=>array('98000','99499'),'AK'=>array('99500','99999'));
	return $areas;	
}

/**
 * Currency refernece table
 * 16 KB in the database, load only when absolutely necessary and unset() asap */
function get_currencies () {
	// Currency data set
	$currencies = array();
	$currencies['AED'] = array('name'=>'Arab Emirates Dirham','symbol'=>'','entity'=>''); 
	$currencies['AFA'] = array('name'=>'Afghanistan Afghani','symbol'=>'','entity'=>''); 
	$currencies['ALL'] = array('name'=>'Albanian Lek','symbol'=>'','entity'=>''); 
	$currencies['AMD'] = array('name'=>'Armenian Dram','symbol'=>'','entity'=>''); 
	$currencies['ANG'] = array('name'=>'Netherlands Antillean Guilder','symbol'=>'','entity'=>''); 
	$currencies['AON'] = array('name'=>'Angolan New Kwanza','symbol'=>'','entity'=>''); 
	$currencies['ARS'] = array('name'=>'Argentine Peso','symbol'=>'','entity'=>''); 
	$currencies['ATA'] = array('name'=>'Dollar','symbol'=>'$','entity'=>'&#036;'); 
	$currencies['AUD'] = array('name'=>'Australian Dollar','symbol'=>'$','entity'=>'&#036;'); 
	$currencies['AWG'] = array('name'=>'Aruban Guilder','symbol'=>'','entity'=>''); 
	$currencies['AZM'] = array('name'=>'Azerbaijanian Manat','symbol'=>'','entity'=>''); 
	$currencies['BAM'] = array('name'=>'Marka','symbol'=>'','entity'=>''); 
	$currencies['BBD'] = array('name'=>'Barbados Dollar','symbol'=>'$','entity'=>'&#036;'); 
	$currencies['BDT'] = array('name'=>'Bangladeshi Taka','symbol'=>'','entity'=>''); 
	$currencies['BGL'] = array('name'=>'Bulgarian Lev','symbol'=>'','entity'=>''); 
	$currencies['BHD'] = array('name'=>'Bahraini Dinar','symbol'=>'','entity'=>''); 
	$currencies['BIF'] = array('name'=>'Burundi Franc','symbol'=>'','entity'=>''); 
	$currencies['BMD'] = array('name'=>'Bermudian Dollar','symbol'=>'$','entity'=>'&#036;'); 
	$currencies['BND'] = array('name'=>'Brunei Dollar','symbol'=>'$','entity'=>'&#036;'); 
	$currencies['BOB'] = array('name'=>'Boliviano','symbol'=>'','entity'=>''); 
	$currencies['BRL'] = array('name'=>'Brazilian Real','symbol'=>'','entity'=>''); 
	$currencies['BSD'] = array('name'=>'Bahamian Dollar','symbol'=>'$','entity'=>'&#036;'); 
	$currencies['BTN'] = array('name'=>'Bhutan Ngultrum','symbol'=>'','entity'=>''); 
	$currencies['BWP'] = array('name'=>'Botswana Pula','symbol'=>'','entity'=>''); 
	$currencies['BYB'] = array('name'=>'Belarussian Ruble','symbol'=>'','entity'=>''); 
	$currencies['BZD'] = array('name'=>'Belize Dollar','symbol'=>'$','entity'=>'&#036;'); 
	$currencies['CAD'] = array('name'=>'Canadian Dollar','symbol'=>'$','entity'=>'&#036;'); 
	$currencies['CDF'] = array('name'=>'Francs','symbol'=>'','entity'=>''); 
	$currencies['CHF'] = array('name'=>'Swiss Franc','symbol'=>'','entity'=>''); 
	$currencies['CLP'] = array('name'=>'Chilean Peso','symbol'=>'','entity'=>''); 
	$currencies['CNY'] = array('name'=>'Yuan Renminbi','symbol'=>'','entity'=>''); 
	$currencies['COP'] = array('name'=>'Colombian Peso','symbol'=>'','entity'=>''); 
	$currencies['CRC'] = array('name'=>'Costa Rican Colon','symbol'=>'','entity'=>''); 
	$currencies['CUP'] = array('name'=>'Cuban Peso','symbol'=>'','entity'=>''); 
	$currencies['CVE'] = array('name'=>'Cape Verde Escudo','symbol'=>'','entity'=>''); 
	$currencies['CYP'] = array('name'=>'Cyprus Pound','symbol'=>'','entity'=>''); 
	$currencies['CZK'] = array('name'=>'Czech Koruna','symbol'=>'','entity'=>''); 
	$currencies['DJF'] = array('name'=>'Djibouti Franc','symbol'=>'','entity'=>''); 
	$currencies['DKK'] = array('name'=>'Danish Krone','symbol'=>'','entity'=>''); 
	$currencies['DOP'] = array('name'=>'Dominican Peso','symbol'=>'','entity'=>''); 
	$currencies['DZD'] = array('name'=>'Algerian Dinar','symbol'=>'','entity'=>''); 
	$currencies['ECS'] = array('name'=>'Ecuador Sucre','symbol'=>'','entity'=>''); 
	$currencies['EEK'] = array('name'=>'Estonian Kroon','symbol'=>'','entity'=>''); 
	$currencies['EGP'] = array('name'=>'Egyptian Pound','symbol'=>'','entity'=>''); 
	$currencies['ERN'] = array('name'=>'Eritrean Nakfa','symbol'=>'','entity'=>''); 
	$currencies['ETB'] = array('name'=>'Ethiopian Birr','symbol'=>'','entity'=>''); 
	$currencies['EUR'] = array('name'=>'Euro','symbol'=>'€','entity'=>'&#8364;'); 
	$currencies['FJD'] = array('name'=>'Fiji Dollar','symbol'=>'$','entity'=>'&#036;'); 
	$currencies['FKP'] = array('name'=>'Falkland Islands Pound','symbol'=>'','entity'=>''); 
	$currencies['GBP'] = array('name'=>'Pound Sterling','symbol'=>'£','entity'=>'&#163;'); 
	$currencies['GEL'] = array('name'=>'Georgian Lari','symbol'=>'','entity'=>''); 
	$currencies['GHC'] = array('name'=>'Ghanaian Cedi','symbol'=>'','entity'=>''); 
	$currencies['GIP'] = array('name'=>'Gibraltar Pound','symbol'=>'','entity'=>''); 
	$currencies['GMD'] = array('name'=>'Gambian Dalasi','symbol'=>'','entity'=>''); 
	$currencies['GNF'] = array('name'=>'Guinea Franc','symbol'=>'','entity'=>''); 
	$currencies['GWP'] = array('name'=>'Guinea-Bissau Peso','symbol'=>'','entity'=>''); 
	$currencies['GYD'] = array('name'=>'Guyana Dollar','symbol'=>'$','entity'=>'&#036;'); 
	$currencies['HKD'] = array('name'=>'Hong Kong Dollar','symbol'=>'$','entity'=>'&#036;'); 
	$currencies['HNL'] = array('name'=>'Honduran Lempira','symbol'=>'','entity'=>''); 
	$currencies['HRK'] = array('name'=>'Croatian Kuna','symbol'=>'','entity'=>''); 
	$currencies['HTG'] = array('name'=>'Haitian Gourde','symbol'=>'','entity'=>''); 
	$currencies['HUF'] = array('name'=>'Hungarian Forint','symbol'=>'','entity'=>''); 
	$currencies['IDR'] = array('name'=>'Indonesian Rupiah','symbol'=>'','entity'=>''); 
	$currencies['ILS'] = array('name'=>'Israeli New Shekel','symbol'=>'','entity'=>''); 
	$currencies['INR'] = array('name'=>'Indian Rupee','symbol'=>'','entity'=>''); 
	$currencies['IQD'] = array('name'=>'Iraqi Dinar','symbol'=>'','entity'=>''); 
	$currencies['IRR'] = array('name'=>'Iranian Rial','symbol'=>'','entity'=>''); 
	$currencies['ISK'] = array('name'=>'Iceland Krona','symbol'=>'','entity'=>''); 
	$currencies['ITL'] = array('name'=>'Italian Lira','symbol'=>'','entity'=>''); 
	$currencies['JMD'] = array('name'=>'Jamaican Dollar','symbol'=>'$','entity'=>'&#036;'); 
	$currencies['JOD'] = array('name'=>'Jordanian Dinar','symbol'=>'','entity'=>''); 
	$currencies['JPY'] = array('name'=>'Japanese Yen','symbol'=>'¥','entity'=>'&#165;'); 
	$currencies['KES'] = array('name'=>'Kenyan Shilling','symbol'=>'','entity'=>''); 
	$currencies['KGS'] = array('name'=>'Som','symbol'=>'','entity'=>''); 
	$currencies['KHR'] = array('name'=>'Kampuchean Riel','symbol'=>'','entity'=>''); 
	$currencies['KMF'] = array('name'=>'Comoros Franc','symbol'=>'','entity'=>''); 
	$currencies['KPW'] = array('name'=>'North Korean Won','symbol'=>'','entity'=>''); 
	$currencies['KRW'] = array('name'=>'Korean Won','symbol'=>'','entity'=>''); 
	$currencies['KWD'] = array('name'=>'Kuwaiti Dinar','symbol'=>'','entity'=>''); 
	$currencies['KYD'] = array('name'=>'Cayman Islands Dollar','symbol'=>'$','entity'=>'&#036;'); 
	$currencies['KZT'] = array('name'=>'Kazakhstan Tenge','symbol'=>'','entity'=>''); 
	$currencies['LAK'] = array('name'=>'Lao Kip','symbol'=>'','entity'=>''); 
	$currencies['LBP'] = array('name'=>'Lebanese Pound','symbol'=>'','entity'=>''); 
	$currencies['LKR'] = array('name'=>'Sri Lanka Rupee','symbol'=>'','entity'=>''); 
	$currencies['LRD'] = array('name'=>'Liberian Dollar','symbol'=>'$','entity'=>'&#036;'); 
	$currencies['LSL'] = array('name'=>'Lesotho Loti','symbol'=>'','entity'=>''); 
	$currencies['LTL'] = array('name'=>'Lithuanian Litas','symbol'=>'','entity'=>''); 
	$currencies['LVL'] = array('name'=>'Latvian Lats','symbol'=>'','entity'=>''); 
	$currencies['LYD'] = array('name'=>'Libyan Dinar','symbol'=>'','entity'=>''); 
	$currencies['MAD'] = array('name'=>'Moroccan Dirham','symbol'=>'','entity'=>''); 
	$currencies['MDL'] = array('name'=>'Moldovan Leu','symbol'=>'','entity'=>''); 
	$currencies['MGF'] = array('name'=>'Malagasy Franc','symbol'=>'','entity'=>''); 
	$currencies['MKD'] = array('name'=>'Denar','symbol'=>'','entity'=>''); 
	$currencies['MMK'] = array('name'=>'Myanmar Kyat','symbol'=>'','entity'=>''); 
	$currencies['MNT'] = array('name'=>'Mongolian Tugrik','symbol'=>'','entity'=>''); 
	$currencies['MOP'] = array('name'=>'Macau Pataca','symbol'=>'','entity'=>''); 
	$currencies['MRO'] = array('name'=>'Mauritanian Ouguiya','symbol'=>'','entity'=>''); 
	$currencies['MTL'] = array('name'=>'Maltese Lira','symbol'=>'','entity'=>''); 
	$currencies['MUR'] = array('name'=>'Mauritius Rupee','symbol'=>'','entity'=>''); 
	$currencies['MVR'] = array('name'=>'Maldive Rufiyaa','symbol'=>'','entity'=>''); 
	$currencies['MWK'] = array('name'=>'Malawi Kwacha','symbol'=>'','entity'=>''); 
	$currencies['MXN'] = array('name'=>'Mexican Nuevo Peso','symbol'=>'','entity'=>''); 
	$currencies['MYR'] = array('name'=>'Malaysian Ringgit','symbol'=>'','entity'=>''); 
	$currencies['MZM'] = array('name'=>'Mozambique Metical','symbol'=>'','entity'=>''); 
	$currencies['NAD'] = array('name'=>'Namibian Dollar','symbol'=>'$','entity'=>'&#036;'); 
	$currencies['NGN'] = array('name'=>'Nigerian Naira','symbol'=>'','entity'=>''); 
	$currencies['NIC'] = array('name'=>'Nicaraguan Cordoba Oro','symbol'=>'','entity'=>''); 
	$currencies['NOK'] = array('name'=>'Norwegian Krone','symbol'=>'','entity'=>''); 
	$currencies['NPR'] = array('name'=>'Nepalese Rupee','symbol'=>'','entity'=>''); 
	$currencies['NZD'] = array('name'=>'New Zealand Dollar','symbol'=>'$','entity'=>'&#036;'); 
	$currencies['OMR'] = array('name'=>'Omani Rial','symbol'=>'','entity'=>''); 
	$currencies['PAB'] = array('name'=>'Panamanian Balboa','symbol'=>'','entity'=>''); 
	$currencies['PEN'] = array('name'=>'Peruvian Nuevo Sol','symbol'=>'','entity'=>''); 
	$currencies['PGK'] = array('name'=>'Papua New Guinea Kina','symbol'=>'','entity'=>''); 
	$currencies['PHP'] = array('name'=>'Philippine Peso','symbol'=>'','entity'=>''); 
	$currencies['PKR'] = array('name'=>'Pakistan Rupee','symbol'=>'','entity'=>''); 
	$currencies['PLZ'] = array('name'=>'Polish Zloty','symbol'=>'','entity'=>''); 
	$currencies['PYG'] = array('name'=>'Paraguay Guarani','symbol'=>'','entity'=>''); 
	$currencies['QAR'] = array('name'=>'Qatari Rial','symbol'=>'','entity'=>''); 
	$currencies['QTQ'] = array('name'=>'Guatemalan Quetzal','symbol'=>'','entity'=>''); 
	$currencies['ROL'] = array('name'=>'Romanian Leu','symbol'=>'','entity'=>''); 
	$currencies['RSD'] = array('name'=>'Serbian Dinar','symbol'=>'','entity'=>''); 
	$currencies['RUR'] = array('name'=>'Russian Ruble','symbol'=>'','entity'=>''); 
	$currencies['RWF'] = array('name'=>'Rwanda Franc','symbol'=>'','entity'=>''); 
	$currencies['SAR'] = array('name'=>'Saudi Riyal','symbol'=>'','entity'=>''); 
	$currencies['SBD'] = array('name'=>'Solomon Islands Dollar','symbol'=>'$','entity'=>'&#036;'); 
	$currencies['SCR'] = array('name'=>'Seychelles Rupee','symbol'=>'','entity'=>''); 
	$currencies['SDD'] = array('name'=>'Sudanese Dinar','symbol'=>'','entity'=>''); 
	$currencies['SEK'] = array('name'=>'Swedish Krona','symbol'=>'','entity'=>''); 
	$currencies['SGD'] = array('name'=>'Singapore Dollar','symbol'=>'$','entity'=>'&#036;'); 
	$currencies['SHP'] = array('name'=>'St. Helena Pound','symbol'=>'','entity'=>''); 
	$currencies['SIT'] = array('name'=>'Slovenian Tolar','symbol'=>'','entity'=>''); 
	$currencies['SKK'] = array('name'=>'Slovak Koruna','symbol'=>'','entity'=>''); 
	$currencies['SLL'] = array('name'=>'Sierra Leone Leone','symbol'=>'','entity'=>''); 
	$currencies['SOD'] = array('name'=>'Somali Shilling','symbol'=>'','entity'=>''); 
	$currencies['SRG'] = array('name'=>'Surinam Guilder','symbol'=>'','entity'=>''); 
	$currencies['STD'] = array('name'=>'Dobra','symbol'=>'','entity'=>''); 
	$currencies['SVC'] = array('name'=>'El Salvador Colon','symbol'=>'','entity'=>''); 
	$currencies['SYP'] = array('name'=>'Syrian Pound','symbol'=>'','entity'=>''); 
	$currencies['SZL'] = array('name'=>'Swaziland Lilangeni','symbol'=>'','entity'=>''); 
	$currencies['THB'] = array('name'=>'Thai Baht','symbol'=>'','entity'=>''); 
	$currencies['TJR'] = array('name'=>'Tajik Ruble','symbol'=>'','entity'=>''); 
	$currencies['TMM'] = array('name'=>'Manat','symbol'=>'','entity'=>''); 
	$currencies['TND'] = array('name'=>'Tunisian Dollar','symbol'=>'$','entity'=>'&#036;'); 
	$currencies['TOP'] = array('name'=>'Tongan Pa\'anga','symbol'=>'','entity'=>''); 
	$currencies['TPE'] = array('name'=>'Timor Escudo','symbol'=>'','entity'=>''); 
	$currencies['TRL'] = array('name'=>'Turkish Lira','symbol'=>'','entity'=>''); 
	$currencies['TTD'] = array('name'=>'Trinidad and Tobago Dollar','symbol'=>'$','entity'=>'&#036;'); 
	$currencies['TWD'] = array('name'=>'Taiwan Dollar','symbol'=>'$','entity'=>'&#036;'); 
	$currencies['TZS'] = array('name'=>'Tanzanian Shilling','symbol'=>'','entity'=>''); 
	$currencies['UAG'] = array('name'=>'Ukraine Hryvnia','symbol'=>'','entity'=>''); 
	$currencies['UGS'] = array('name'=>'Uganda Shilling','symbol'=>'','entity'=>''); 
	$currencies['USD'] = array('name'=>'US Dollar','symbol'=>'$','entity'=>'&#036;'); 
	$currencies['UYP'] = array('name'=>'Uruguayan Peso','symbol'=>'','entity'=>''); 
	$currencies['UZS'] = array('name'=>'Uzbekistan Sum','symbol'=>'','entity'=>''); 
	$currencies['VND'] = array('name'=>'Vietnamese Dong','symbol'=>'','entity'=>''); 
	$currencies['VUB'] = array('name'=>'Venezuelan Bolivar','symbol'=>'','entity'=>''); 
	$currencies['VUV'] = array('name'=>'Vanuatu Vatu','symbol'=>'','entity'=>''); 
	$currencies['WST'] = array('name'=>'Samoan Tala','symbol'=>'','entity'=>''); 
	$currencies['XAF'] = array('name'=>'CFA Franc BEAC','symbol'=>'','entity'=>''); 
	$currencies['XCD'] = array('name'=>'East Carribean Dollar','symbol'=>'$','entity'=>'&#036;'); 
	$currencies['XOF'] = array('name'=>'CFA Franc BCEAO','symbol'=>'','entity'=>''); 
	$currencies['XPF'] = array('name'=>'CFP Franc','symbol'=>'','entity'=>''); 
	$currencies['YER'] = array('name'=>'Yemeni Rial','symbol'=>'','entity'=>''); 
	$currencies['YUN'] = array('name'=>'Yugoslav New Dinar','symbol'=>'','entity'=>''); 
	$currencies['ZAR'] = array('name'=>'South African Rand','symbol'=>'','entity'=>''); 
	$currencies['ZMK'] = array('name'=>'Zambian Kwacha','symbol'=>'','entity'=>''); 
	$currencies['ZWD'] = array('name'=>'Zimbabwe Dollar','symbol'=>'','entity'=>'&#036;');
	return $currencies;
}

?>