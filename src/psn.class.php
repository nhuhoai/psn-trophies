<?php declare(strict_types=1);

/**
 * PlayStation Network API Wrapper
 *
 * PHP Version 7.2
 *
 * @category  API
 * @package   PSNTrophies
 * @author    Nhu-Hoai Robert VO <nhuhoai.vo@nhuvo.ch>
 * @copyright 2019 Nhu-Hoai Robert VO
 * @license   http://www.opensource.org/licenses/mit-license.html  MIT License
 * @version   GIT: 0.2.0
 * @link      https://www.nhuvo.ch/
 * @since     0.2.0
 */

namespace NhuVo\PSNTrophies;

/**
 * PlayStation Network API Wrapper
 *
 * PHP Version 7.2
 *
 * @category  API
 * @package   PSNTrophies
 * @author    Nhu-Hoai Robert VO <nhuhoai.vo@nhuvo.ch>
 * @copyright 2019 Nhu-Hoai Robert VO
 * @license   http://www.opensource.org/licenses/mit-license.html  MIT License
 * @release   GIT: 0.2.0
 * @link      https://www.nhuvo.ch/
 * @since     0.2.0
 */
class PSN
{
  /// Official PSN API SSO url
  private const URL_SSO = "https://auth.api.sonyentertainmentnetwork.com/2.0/ssocookie";

  /// Official PSN API Code url
  private const URL_CODE = "https://auth.api.sonyentertainmentnetwork.com/2.0/oauth/authorize";

  /// Official PSN API OAuth url
  private const URL_OAUTH = "https://auth.api.sonyentertainmentnetwork.com/2.0/oauth/token";
}
