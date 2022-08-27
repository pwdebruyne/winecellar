<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * WineriesFixture
 */
class WineriesFixture extends TestFixture
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
                'region_id' => 1,
                'address' => 'Lorem ipsum dolor sit amet',
                'email' => 'Lorem ipsum dolor sit amet',
                'phone' => 'Lorem ipsum dolor sit amet',
                'website' => 'Lorem ipsum dolor sit amet',
                'created' => '2022-08-27 15:44:02',
                'modified' => '2022-08-27 15:44:02',
            ],
        ];
        parent::init();
    }
}
