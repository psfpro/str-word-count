<?php

declare(strict_types=1);

namespace Psfpro\StrWordCount\Tests;

use PHPUnit\Framework\TestCase;

final class FunctionsTest extends TestCase
{
    /**
     * @param string $str
     * @dataProvider stringProvider
     */
    public function testFunction(string $str)
    {
        $result = most_common_words($str);
        $this->assertIsArray($result);
        $this->assertCount(5, $result);
    }

    public function stringProvider()
    {
        return [
            'lorem ipsum' => ['Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore 
magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
Duis aute irure dolor in reprehenderit in voluptate velit esse cillum.
 In culpa qui officia deserunt mollit anim id est laborum.'],
            'en' => ["Hello fri3nd, you're Hello looking          good today!"],
            'fr' => ["Le prénom est très important dans mon pays, c'est une partie de notre identité pour la vie. On dit même que le prénom a une influence sur notre caractère !"],
            'ru' => ["Воспитанные люди должны удовлетворять следующим условиям: Они уважают человеческую личность, человеческую личность, уважают, уважают"],
        ];
    }
}
