<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * CountriesFixture
 */
class CountriesFixture extends TestFixture
{
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'name' => 'Lorem ipsum dolor sit amet',
                'iso' => 'L',
                'created' => '2022-08-27 15:43:18',
                'modified' => '2022-08-27 15:43:18',
            ],
        ];
        parent::init();
    }
}
