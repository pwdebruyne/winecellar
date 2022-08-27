<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * WinesFixture
 */
class WinesFixture extends TestFixture
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
                'winery_id' => 1,
                'style_id' => 1,
                'created' => '2022-08-27 15:44:10',
                'modified' => '2022-08-27 15:44:10',
            ],
        ];
        parent::init();
    }
}
