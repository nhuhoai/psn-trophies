<?php declare(strict_types=1);

/**
 * Fake API OAuth for unit tests
 *
 * PHP Version 7.2
 *
 * @category  API
 * @package   PSNTrophies
 * @author    Nhu-Hoai Robert VO <nhuhoai.vo@nhuvo.ch>
 * @copyright 2019 Nhu-Hoai Robert VO
 * @license   http://www.opensource.org/licenses/mit-license.html MIT License
 * @version   GIT: 0.2.2
 * @link      https://www.nhuvo.ch/
 * @since     0.2.2
 */

namespace NhuVo\PSNTrophies;

$token = '{"access_token":"aaaaaaaa-aaaa-aaaa-aaaa-aaaaaaaaaaaa",';
$token .= '"token_type":"bearer","refresh_token":"aaaaaaaa-aaaa-aaaa-aaaa-aaaaaaaaaaaa",';
$token .= '"expires_in":9999,';
$token .= '"scope":"capone:report_submission psn:sceapp user:account.get ';
$token .= 'user:account.realName.get kamaji:ugc:distributor user:account.settings.privacy.update ';
$token .= 'user:account.realName.update kamaji:get_account_hash user:account.settings.privacy.get ';
$token .= 'oauth:manage_device_usercodes"}';

die($token);
