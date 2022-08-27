<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * GrapesFixture
 */
class GrapesFixture extends TestFixture
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
                'created' => '2022-08-27 15:43:35',
                'modified' => '2022-08-27 15:43:35',
            ],
        ];
        parent::init();
    }
}
