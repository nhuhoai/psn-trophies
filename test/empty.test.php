<?php declare(strict_types=1);

/**
 * Empty test
 * Only for checking PHPUnit and PHPCS config
 *
 * PHP Version 7.2
 *
 * @category  API
 * @package   PSNTrophies
 * @author    Nhu-Hoai Robert VO <nhuhoai.vo@nhuvo.ch>
 * @copyright 2019 Nhu-Hoai Robert VO
 * @license   http://www.opensource.org/licenses/mit-license.html MIT License
 * @version   GIT: 0.1.1
 * @link      https://www.nhuvo.ch/
 * @since     0.1.1
 */

namespace NhuVo\PSNTrophies;

use PHPUnit\Framework\TestCase;

/**
 * Empty test
 * Only for checking PHPUnit and PHPCS config
 *
 * PHP Version 7.2
 *
 * @category  API
 * @package   PSNTrophies
 * @author    Nhu-Hoai Robert VO <nhuhoai.vo@nhuvo.ch>
 * @copyright 2019 Nhu-Hoai Robert VO
 * @license   http://www.opensource.org/licenses/mit-license.html MIT License
 * @release   GIT: 0.1.1
 * @link      https://www.nhuvo.ch/
 * @since     0.1.1
 */
final class EmptyTest extends TestCase
{
  /**
   * 1 = 1
   *
   * @test testOneEqualsOne
   *
   * @return void
   */
  public function testOneEqualsOne() : void
  {
    $one = 1;
    $this->assertEquals($one, 1);
  }

  /**
   * True = true
   *
   * @test testTrueIsTrue
   *
   * @return void
   */
  public function testTrueIsTrue() : void
  {
    $true = true;
    $this->assertEquals($true, true);
    $this->assertTrue($true);
  }
}
