<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * LocationsFixture
 */
class LocationsFixture extends TestFixture
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
                'rack' => 'Lorem ipsum dolor sit amet',
                'row' => 1,
                'created' => '2022-08-27 15:43:40',
                'modified' => '2022-08-27 15:43:40',
            ],
        ];
        parent::init();
    }
}
