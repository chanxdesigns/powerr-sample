<?php
/**
 * Created by PhpStorm.
 * User: wangbren
 * Date: 3/7/18
 * Time: 6:27 PM
 */

namespace Iapac\Panel\Custom;


class CustomHelpers
{
    static function isoToCountry(string $isoCode) {
        switch ($isoCode) {
            case 'ZH':
                return 'China';
                break;
            case 'HK':
                return 'Hong Kong';
                break;
            case 'IN':
                return 'India';
                break;
            case 'INDO':
                return 'Indonesia';
                break;
            case 'JP':
                return 'Japan';
                break;
            case 'MY':
                return 'Malaysia';
                break;
            case 'SG':
                return 'Singapore';
                break;
            case 'ROK':
                return 'South Korea';
                break;
            case 'TW':
                return 'Taiwan';
                break;
            case 'TH':
                return 'Thailand';
                break;
            case 'VN':
                return 'Vietnam';
                break;
        }
    }

    static function industry($industryCode) {
        switch ($industryCode) {
            case 'accounting':
                return 'Accounting';
                break;
            case 'adv-pr':
                return 'Advertising/Public Relations';
                break;
            case 'banking':
                return 'Banking';
                break;
            case 'computers':
                return 'Computers';
                break;
            case 'construction':
                return 'Construction';
                break;
            case 'ed-aca':
                return 'Education/Academia';
                break;
            case 'hr':
                return 'Human Resource';
                break;
            case 'finserv':
                return 'Financial Services';
                break;
            case 'gov-mil':
                return 'Governmnet to the CTA';
                break;
            case 'healthcare';
                return 'Healthcare';
                break;
            case 'law':
                return 'Law';
                break;
            case 'marketing':
                return 'Marketing';
                break;
            case 'media-journo';
                return 'Media/Journalism';
                break;
            case 'profserv':
                return 'Professional Services';
                break;
            case 'realest':
                return 'Real Estate';
                break;
            case 'retail':
                return 'Retail';
                break;
            case 'science':
                return 'Science';
                break;

                case 'telecom':
                    return 'Telecommunications';
                        break;
            case 'agri':
                return 'Agriculture';
                break;
            case 'transportation':
                return 'Transportation';
                break;
            case 'travel-tourism':
                return 'Travel/Tourism';
                break;
            case 'others':
                return 'Others';
                break;
            case 'biotech':
                return 'Biotech';
                break;
            case 'comm':
                return 'Communications';
                break;
            case 'consultancy':
                return 'Consultancy';
                break;
            case 'embassy':
                return 'Embassy';
                break;
            case 'exim':
                return 'Export/Import';
                break;
            case 'food':
                return 'Food';
                break;
            case 'hotel-resto':
                return 'Hotels/Restaurant';
                break;
            case 'insurance':
                return 'Insurance';
                break;
            case 'mr':
                return 'Market Research';
                break;
            case 'pub':
                return 'Publishing';
                break;
        }
    }
}