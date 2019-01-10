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

namespace Yasumi\tests\Germany\Bavaria;

use Yasumi\Holiday;

/**
 * Class for testing holidays in Bavaria (Germany)
 */
class BavariaTest extends BavariaBaseTestCase
{
    /**
     * @var int year random year number used for all tests in this Test Case
     */
    protected $year;

    /**
     * Tests if all official holidays in Bavaria (Germany) are defined by the provider class
     * @throws \ReflectionException
     */
    public function testOfficialHolidays()
    {
        $this->assertDefinedHolidays([
            'newYearsDay',
            'goodFriday',
            'easterMonday',
            'internationalWorkersDay',
            'ascensionDay',
            'pentecostMonday',
            'germanUnityDay',
            'christmasDay',
            'secondChristmasDay'
        ], self::REGION, $this->year, Holiday::TYPE_OFFICIAL);
    }

    /**
     * Tests if all observed holidays in Bavaria (Germany) are defined by the provider class
     * @throws \ReflectionException
     */
    public function testObservedHolidays()
    {
        $this->assertDefinedHolidays([], self::REGION, $this->year, Holiday::TYPE_OBSERVANCE);
    }

    /**
     * Tests if all seasonal holidays in Bavaria (Germany) are defined by the provider class
     * @throws \ReflectionException
     */
    public function testSeasonalHolidays()
    {
        $this->assertDefinedHolidays([], self::REGION, $this->year, Holiday::TYPE_SEASON);
    }

    /**
     * Tests if all bank holidays in Bavaria (Germany) are defined by the provider class
     * @throws \ReflectionException
     */
    public function testBankHolidays()
    {
        $this->assertDefinedHolidays([], self::REGION, $this->year, Holiday::TYPE_BANK);
    }

    /**
     * Tests if all other holidays in Bavaria (Germany) are defined by the provider class
     * @throws \ReflectionException
     */
    public function testOtherHolidays()
    {
        $this->assertDefinedHolidays(
            ['epiphany', 'corpusChristi', 'allSaintsDay'],
            self::REGION,
            $this->year,
            Holiday::TYPE_OTHER
        );
    }

    /**
     * Initial setup of this Test Case
     */
    protected function setUp()
    {
        $this->year = $this->generateRandomYear(1990);
    }
}
