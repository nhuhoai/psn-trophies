<?php declare(strict_types=1);

/**
 * PSN API test
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

use PHPUnit\Framework\TestCase;

require_once __DIR__ . "/psn.fake.php";

/**
 * PSN API test
 *
 * PHP Version 7.2
 *
 * @category  API
 * @package   PSNTrophies
 * @author    Nhu-Hoai Robert VO <nhuhoai.vo@nhuvo.ch>
 * @copyright 2019 Nhu-Hoai Robert VO
 * @license   http://www.opensource.org/licenses/mit-license.html MIT License
 * @release   GIT: 0.2.2
 * @link      https://www.nhuvo.ch/
 * @since     0.2.2
 */
final class PSNTest extends TestCase
{
  /**
   * Test constructor
   *
   * @test testConstructor
   *
   * @return void
   */
  public function testConstructor()
  {
    $test = new PSNFake();
    $this->assertTrue(is_a($test, "NhuVo\\PSNTrophies\\PSNFake"));
    $this->assertTrue(is_a($test, "NhuVo\\PSNTrophies\\PSN"));
  }

  /**
   * Test constructor
   *
   * @test testConstructor
   *
   * @return void
   */
  public function testProxy()
  {
    $this->assertEquals(PSNFake::getProxy(), "");
    $this->assertEquals(PSNFake::getProxyPort(), 0);

    $server = "0.0.0.0";
    $port = 8080;
    PSNFake::setProxy($server, $port);

    $this->assertEquals(PSNFake::getProxy(), $server);
    $this->assertEquals(PSNFake::getProxyPort(), $port);

    PSNFake::removeProxy();

    $this->assertEquals(PSNFake::getProxy(), "");
    $this->assertEquals(PSNFake::getProxyPort(), 0);
  }
}
