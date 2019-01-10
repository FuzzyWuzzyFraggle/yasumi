<?php
/**
 * This file is part of the Yasumi package.
 *
 * Copyright (c) 2015 - 2019 AzuyaLabs
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @author Sacha Telgenhof <me@sachatelgenhof.com>
 */

namespace Yasumi\tests\Netherlands;

use Yasumi\Holiday;

/**
 * Class for testing holidays in Netherlands.
 */
class NetherlandsTest extends NetherlandsBaseTestCase
{
    /**
     * @var int year random year number used for all tests in this Test Case
     */
    protected $year;

    /**
     * Tests if all official holidays in Netherlands are defined by the provider class
     * @throws \ReflectionException
     */
    public function testOfficialHolidays()
    {
        $this->assertDefinedHolidays([
            'newYearsDay',
            'easter',
            'easterMonday',
            'kingsDay',
            'ascensionDay',
            'pentecost',
            'pentecostMonday',
            'christmasDay',
            'secondChristmasDay'
        ], self::REGION, $this->year, Holiday::TYPE_OFFICIAL);
    }

    /**
     * Tests if all observed holidays in Netherlands are defined by the provider class
     * @throws \ReflectionException
     */
    public function testObservedHolidays()
    {
        $this->assertDefinedHolidays([
            'stMartinsDay',
            'goodFriday',
            'ashWednesday',
            'commemorationDay',
            'liberationDay',
            'halloween',
            'stNicholasDay',
            'carnivalDay',
            'secondCarnivalDay',
            'thirdCarnivalDay'
        ], self::REGION, $this->year, Holiday::TYPE_OBSERVANCE);
    }

    /**
     * Tests if all seasonal holidays in Netherlands are defined by the provider class
     * @throws \ReflectionException
     */
    public function testSeasonalHolidays()
    {
        $year = $this->generateRandomYear(1978, 2037);
        $this->assertDefinedHolidays(['summerTime', 'winterTime'], self::REGION, $year, Holiday::TYPE_SEASON);
    }

    /**
     * Tests if all bank holidays in Netherlands are defined by the provider class
     * @throws \ReflectionException
     */
    public function testBankHolidays()
    {
        $this->assertDefinedHolidays([], self::REGION, $this->year, Holiday::TYPE_BANK);
    }

    /**
     * Tests if all other holidays in Netherlands are defined by the provider class
     * @throws \ReflectionException
     */
    public function testOtherHolidays()
    {
        $this->assertDefinedHolidays([
            'internationalWorkersDay',
            'valentinesDay',
            'worldAnimalDay',
            'fathersDay',
            'mothersDay',
            'epiphany',
            'princesDay'
        ], self::REGION, $this->year, Holiday::TYPE_OTHER);
    }

    /**
     * Initial setup of this Test Case
     */
    protected function setUp()
    {
        $this->year = $this->generateRandomYear(2014);
    }
}
