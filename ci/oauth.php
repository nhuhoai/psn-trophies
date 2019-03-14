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

header("Content-Type: application/json; charset=utf-8");
print("{");
print("\"access_token\":\"aaaaaaaa-aaaa-aaaa-aaaa-aaaaaaaaaaaa\",");
print("\"token_type\":\"bearer\",");
print("\"refresh_token\":\"aaaaaaaa-aaaa-aaaa-aaaa-aaaaaaaaaaaa\",");
print("\"expires_in\":9999,");
print("\"scope\":\"capone:report_submission psn:sceapp user:account.get user:account.realName.get kamaji:ugc:distributor user:account.settings.privacy.update user:account.realName.update kamaji:get_account_hash user:account.settings.privacy.get oauth:manage_device_usercodes\"");
print("}");
