<?php

use PHPUnit\Framework\TestCase;

/**
 * @author    jan huang <bboyjanhuang@gmail.com>
 * @copyright 2016
 *
 * @link      https://www.github.com/janhuang
 * @link      http://www.fast-d.cn/
 */
class HelperTest extends TestCase
{
    public function testLoad()
    {
        $this->assertEquals(['foo' => 'bar'], load(__DIR__.'/config/config.ini'));
        $this->assertEquals(['foo' => 'yml'], load(__DIR__.'/config/config.yml'));
    }
}
