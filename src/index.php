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
 * @license   MIT https://opensource.org/licenses/mit-license.html
 * @version   GIT: 0.1.0
 * @link      https://www.nhuvo.ch/
 * @since     0.1.0
 */

namespace NhuVo\PSNTrophies;

require_once __DIR__ . "/system/core.php";

// PSNTrophies::getnpsso("b3fd480c-5c82-475f-bd71-dea24e3eaf75", "988557");

// PSNTrophies::getToken("OMgBl6cxeO80Et19hRjv8skTu9RfoQ5k1EmWuCmPBOzNLeQpi2i1q7HfwKpHSg4j");

// PSNTrophies::getOAuth("Kfdpdi");

PSNTrophies::refreshToken("e777afd8-1427-4c36-ad84-f7ad0174dba4");

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

// https://auth.api.sonyentertainmentnetwork.com/signin/#/signin2sv/code?response_type=code&client_id=78420c74-1fdf-4575-b43f-eb94c7d770bf&redirect_uri=https%3A%2F%2Fwww.bungie.net%2Fen%2FUser%2FSignIn%2FPsnid&scope=psn:s2s&request_locale=en_US&state=2440630705549072344&ticket_uuid=&layout_type=popup&entry=%2Fsignin2sv%2Fcode
