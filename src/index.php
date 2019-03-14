<?php

/**
 * Main call file
 *
 * PHP Version 7.2
 *
 * @category  API
 * @package   PSNTrophies
 * @author    Nhu-Hoai Robert VO <nhuhoai.vo@franicflow.ch>
 * @copyright 2019 Nhu-Hoai Robert VO
 * @license   http://www.opensource.org/licenses/mit-license.html MIT License
 * @version   GIT: 0.2.2
 * @link      https://www.nhuvo.ch/
 * @since     0.1.0
 */

namespace NhuVo\PSNTrophies;

require_once __DIR__ . "/psn.class.php";

/*
$ch = curl_init("https://github.com");
curl_setopt_array(
    $ch,
    [
      CURLOPT_CONNECTTIMEOUT => 5,
      CURLOPT_TIMEOUT => 5,
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_SSL_VERIFYHOST => false,
      CURLOPT_SSL_VERIFYPEER => false,
      CURLOPT_PROXY => "3.17.154.4",
      CURLOPT_PROXYPORT => 8080
    ]
);

print curl_exec($ch);
print_r(curl_error($ch));
curl_close($ch);
*/


// https://auth.api.sonyentertainmentnetwork.com/signin/#/signin2sv/code?response_type=code&client_id=78420c74-1fdf-4575-b43f-eb94c7d770bf&redirect_uri=https%3A%2F%2Fwww.bungie.net%2Fen%2FUser%2FSignIn%2FPsnid&scope=psn:s2s&request_locale=en_US&state=5241062880857907588&ticket_uuid=b820bf6f-3965-4570-9620-d43d3e238767&layout_type=popup&entry=%2Fsignin2sv%2Fcode
//print PSN::getNPSSO("85639ccd-6118-4a26-97fc-1c974360956b", "563522");
//https://auth.api.sonyentertainmentnetwork.com/signin/#/signin2sv/code?response_type=code&client_id=78420c74-1fdf-4575-b43f-eb94c7d770bf&redirect_uri=https%3A%2F%2Fwww.bungie.net%2Fen%2FUser%2FSignIn%2FPsnid&scope=psn:s2s&request_locale=en_US&state=5241062880857907588&ticket_uuid=&layout_type=popup&entry=%2Fsignin2sv%2Fcode
// https://auth.api.sonyentertainmentnetwork.com/signin/#/signin2sv/code?response_type=code&client_id=78420c74-1fdf-4575-b43f-eb94c7d770bf&redirect_uri=https%3A%2F%2Fwww.bungie.net%2Fen%2FUser%2FSignIn%2FPsnid&scope=psn:s2s&request_locale=en_US&state=5241062880857907588&ticket_uuid=123a336a-6474-4a27-a9a0-18cfff7f5d69&layout_type=popup&entry=%2Fsignin2sv%2Fcode
// {"npsso":"wrl45kTBwbW3ppxQeMwH8VCbeIaYflhdGaZzkduEDY6TzRlF3VGzcX9F9BFVSJ1K"}
// cZFlo9lRs59qb0XznLXJ6YLc0RHBBbE2EtEv0H4dlNvuxi3RxU3iWYoDUdhie75D

// print PSN::getGrantCode("BWDpHD29ibfnDKVxQ0F3YxOSGUE3mKBjudDf2G80qbgBe8WrbyZO62Jy9V7jPRuy");
// E6TezZ

// print_r(PSN::getOAuth("K6taZK"));
// {"access_token":"fdc2e35e-10ba-4575-a9da-7999d7921819",
// "token_type":"bearer",
// "refresh_token":"00284cf9-f7b9-4fd9-b342-a403901f1742",
// "expires_in":3599,
// "scope":"capone:report_submission psn:sceapp user:account.get user:account.realName.get kamaji:ugc:distributor user:account.settings.privacy.update user:account.realName.update kamaji:get_account_hash user:account.settings.privacy.get oauth:manage_device_usercodes"}

// print_r(PSN::renewAccessToken("00284cf9-f7b9-4fd9-b342-a403901f1742"));


// PSNTrophies::getnpsso("b3fd480c-5c82-475f-bd71-dea24e3eaf75", "988557");

// PSNTrophies::getToken("OMgBl6cxeO80Et19hRjv8skTu9RfoQ5k1EmWuCmPBOzNLeQpi2i1q7HfwKpHSg4j");

// PSNTrophies::getOAuth("Kfdpdi");

// PSNTrophies::refreshToken("e777afd8-1427-4c36-ad84-f7ad0174dba4");

/*
{
  "access_token":"746c41b2-8362-4e9a-af37-a3ca35b83860",
  "token_type":"bearer",
  "refresh_token":"e777afd8-1427-4c36-ad84-f7ad0174dba4",
  "expires_in":3599,
  "scope":"capone:report_submission kamaji:get_account_hash kamaji:ugc:distributor oauth:manage_device_usercodes psn:sceapp user:account.get user:account.realName.get user:account.realName.update user:account.settings.privacy.get user:account.settings.privacy.update"
}
*/

/*
{
  "access_token":"27e4bf60-a7ac-49f7-a75b-a1027ef0858e",
  "token_type":"bearer",
  "refresh_token":"e777afd8-1427-4c36-ad84-f7ad0174dba4",
  "expires_in":3599,
  "scope":"capone:report_submission psn:sceapp user:account.get user:account.realName.get kamaji:ugc:distributor user:account.settings.privacy.update user:account.realName.update kamaji:get_account_hash user:account.settings.privacy.get oauth:manage_device_usercodes"
}

*/



//print PSN::getRefreshToken("fa326c29-db1a-4e9b-87f2-6ba4d01e1b3b", "728442");
// print_r(PSN::renewAccessToken("ca07d05e-1698-4fe7-afb5-92af861f8713"));

// https://auth.api.sonyentertainmentnetwork.com/signin/#/signin2sv/code?response_type=code&client_id=78420c74-1fdf-4575-b43f-eb94c7d770bf&redirect_uri=https%3A%2F%2Fwww.bungie.net%2Fen%2FUser%2FSignIn%2FPsnid&scope=psn:s2s&request_locale=en_US&state=2440630705549072344&ticket_uuid=&layout_type=popup&entry=%2Fsignin2sv%2Fcode
