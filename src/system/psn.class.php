<?php

/**
 * PSN object
 *
 * PHP Version 7.2
 *
 * @category  API
 * @package   PSNTrophies
 * @author    Nhu-Hoai Robert VO <nhuhoai.vo@nhuvo.ch>
 * @copyright 2019 Nhu-Hoai Robert VO
 * @license   http://www.opensource.org/licenses/mit-license.html  MIT License
 * @version   GIT: 0.1.1
 * @link      https://www.nhuvo.ch/
 * @since     0.1.0
 */

namespace NhuVo\PSNTrophies;

/**
 * PSN object
 *
 * PHP Version 7.2
 *
 * @category  API
 * @package   PSNTrophies
 * @author    Nhu-Hoai Robert VO <nhuhoai.vo@nhuvo.ch>
 * @copyright 2019 Nhu-Hoai Robert VO
 * @license   http://www.opensource.org/licenses/mit-license.html  MIT License
 * @release   GIT: 0.1.1
 * @link      https://www.nhuvo.ch/
 * @since     0.1.0
 */
class PSNTrophies
{
  /// Official PSN API SSO url
  private const URL_SSO = "https://auth.api.sonyentertainmentnetwork.com/2.0/ssocookie";

  /// Official PSN API Code url
  private const URL_CODE = "https://auth.api.sonyentertainmentnetwork.com/2.0/oauth/authorize";

  /// Official PSN API OAuth url
  private const URL_OAUTH = "https://auth.api.sonyentertainmentnetwork.com/2.0/oauth/token";

  /**
   * Get NPS SO token
   *
   * @param string $ticket_uuid Ticket UUID from 2 factors login
   * @param string $code        From your mobile phone
   *
   * @return void
   */
  public static function getnpsso(string $ticket_uuid, string $code) : void
  {
    $verbose = fopen(__DIR__ . "/log.txt", 'w+');

    $data = [
      "authentication_type" => "two_step",
      "ticket_uuid" => $ticket_uuid,
      "code" => $code,
      "client_id" => "b7cbf451-6bb6-4a5a-8913-71e61f462787"
    ];
    $postText = http_build_query($data);
    $ch = curl_init();
    curl_setopt_array(
        $ch,
        [
          CURLOPT_URL => PSNTrophies::URL_SSO,
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_POST => true,
          CURLOPT_SSL_VERIFYHOST => false,
          CURLOPT_SSL_VERIFYPEER => false,
          CURLOPT_VERBOSE => true,
          CURLOPT_STDERR => $verbose,
          CURLOPT_ENCODING => "",
          CURLOPT_CUSTOMREQUEST => "POST",
          CURLOPT_POSTFIELDS => $postText,
          CURLOPT_HTTPHEADER => [
            "Content-Type: application/x-www-form-urlencoded"
          ]
        ]
    );

    $result = curl_exec($ch);
    rewind($verbose);
    curl_close($ch);
    print_r($result);
  }

  /**
   * Get grant code
   *
   * @param string $npsso npsso
   *
   * @return void
   */
  public static function getToken(string $npsso) : void
  {
    $data = [
      "state" => "06d7AuZpOmJAwYYOWmVU63OMY",
      "duid" => "0000000d000400808F4B3AA3301B4945B2E3636E38C0DDFC",
      "app_context" => "inapp_ios",
      "client_id" => "b7cbf451-6bb6-4a5a-8913-71e61f462787",
      "scope" => "capone:report_submission,psn:sceapp,user:account.get,user:account.settings.privacy.get,user:account.settings.privacy.update,user:account.realName.get,user:account.realName.update,kamaji:get_account_hash,kamaji:ugc:distributor,oauth:manage_device_usercodes",
      "response_type" => "code"
    ];
    $getData = http_build_query($data);
    $url = PSNTrophies::URL_CODE . "?{$getData}";

    $verbose = fopen(__DIR__ . "/log.txt", 'w+');
    $ch = curl_init();
    curl_setopt_array(
        $ch,
        [
          CURLOPT_URL => $url,
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_SSL_VERIFYHOST => false,
          CURLOPT_SSL_VERIFYPEER => false,
          CURLOPT_VERBOSE => true,
          CURLOPT_STDERR => $verbose,
          CURLOPT_ENCODING => "",
          CURLOPT_HEADER => true,
          CURLOPT_HTTPHEADER => [
            "Cookie: npsso={$npsso}"
          ]
        ]
    );

    $result = curl_exec($ch);
    rewind($verbose);
    curl_close($ch);
    print_r($result);
  }

  /**
   * Get OAuth token
   *
   * @param string $grantCode Grant code
   *
   * @return void
   */
  public static function getOAuth(string $grantCode) : void
  {
    $verbose = fopen(__DIR__ . "/log.txt", 'w+');

    $data = [
      "app_context" => "inapp_ios",
      "client_id" => "b7cbf451-6bb6-4a5a-8913-71e61f462787",
      "client_secret" => "zsISsjmCx85zgCJg",
      "code" => $grantCode,
      "duid" => "0000000d000400808F4B3AA3301B4945B2E3636E38C0DDFC",
      "grant_type" => "authorization_code",
      "scope" => "capone:report_submission,psn:sceapp,user:account.get,user:account.settings.privacy.get,user:account.settings.privacy.update,user:account.realName.get,user:account.realName.update,kamaji:get_account_hash,kamaji:ugc:distributor,oauth:manage_device_usercodes"
    ];
    $postText = http_build_query($data);
    $ch = curl_init();
    curl_setopt_array(
        $ch,
        [
          CURLOPT_URL => PSNTrophies::URL_OAUTH,
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_POST => true,
          CURLOPT_SSL_VERIFYHOST => false,
          CURLOPT_SSL_VERIFYPEER => false,
          CURLOPT_VERBOSE => true,
          CURLOPT_STDERR => $verbose,
          CURLOPT_ENCODING => "",
          CURLOPT_CUSTOMREQUEST => "POST",
          CURLOPT_POSTFIELDS => $postText,
          CURLOPT_HTTPHEADER => [
            "Content-Type: application/x-www-form-urlencoded"
          ]
        ]
    );

    $result = curl_exec($ch);
    rewind($verbose);
    curl_close($ch);
    print_r($result);
  }

  /**
   * Refresh token
   *
   * @param string $refreshToken Refresh token
   *
   * @return void
   */
  public static function refreshToken(string $refreshToken) : void
  {
    $verbose = fopen(__DIR__ . "/log.txt", 'w+');
    $data = [
      "app_context" => "inapp_ios",
      "client_id" => "b7cbf451-6bb6-4a5a-8913-71e61f462787",
      "client_secret" => "zsISsjmCx85zgCJg",
      "refresh_token" => $refreshToken,
      "duid" => "0000000d000400808F4B3AA3301B4945B2E3636E38C0DDFC",
      "grant_type" => "refresh_token",
      "scope" => "capone:report_submission,psn:sceapp,user:account.get,user:account.settings.privacy.get,user:account.settings.privacy.update,user:account.realName.get,user:account.realName.update,kamaji:get_account_hash,kamaji:ugc:distributor,oauth:manage_device_usercodes"
    ];

    $postText = http_build_query($data);
    $ch = curl_init();
    curl_setopt_array(
        $ch,
        [
          CURLOPT_URL => PSNTrophies::URL_OAUTH,
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_POST => true,
          CURLOPT_SSL_VERIFYHOST => false,
          CURLOPT_SSL_VERIFYPEER => false,
          CURLOPT_VERBOSE => true,
          CURLOPT_STDERR => $verbose,
          CURLOPT_ENCODING => "",
          CURLOPT_CUSTOMREQUEST => "POST",
          CURLOPT_POSTFIELDS => $postText,
          CURLOPT_HTTPHEADER => [
            "Content-Type: application/x-www-form-urlencoded"
          ]
        ]
    );

    $result = curl_exec($ch);
    rewind($verbose);
    curl_close($ch);
    print_r($result);
  }
}
