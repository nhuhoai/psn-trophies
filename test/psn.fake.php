<?php declare(strict_types=1);

/**
 * PlayStation Network API Wrapper Fake for test
 *
 * PHP Version 7.2
 *
 * @category  API
 * @package   PSNTrophies
 * @author    Nhu-Hoai Robert VO <nhuhoai.vo@nhuvo.ch>
 * @copyright 2019 Nhu-Hoai Robert VO
 * @license   http://www.opensource.org/licenses/mit-license.html  MIT License
 * @version   GIT: 0.2.2
 * @link      https://www.nhuvo.ch/
 * @since     0.2.2
 */

namespace NhuVo\PSNTrophies;

require_once __DIR__ . "/../src/psn.class.php";

/**
 * PlayStation Network API Wrapper Fake for test
 *
 * PHP Version 7.2
 *
 * @category  API
 * @package   PSNTrophies
 * @author    Nhu-Hoai Robert VO <nhuhoai.vo@nhuvo.ch>
 * @copyright 2019 Nhu-Hoai Robert VO
 * @license   http://www.opensource.org/licenses/mit-license.html  MIT License
 * @release   GIT: 0.2.2
 * @link      https://www.nhuvo.ch/
 * @since     0.2.2
 */
final class PSNFake extends PSN
{
  /**
   * Retrun the proxy
   *
   * @return string
   */
  public static function getProxy() : string
  {
    return static::$proxy;
  }

  /**
   * Retrun the proxy port
   *
   * @return int
   */
  public static function getProxyPort() : int
  {
    return static::$proxyPort;
  }

  /**
   * Default construtor
   */
  public function __construct()
  {
    parent::__construct();
  }
}
