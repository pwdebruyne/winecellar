<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * VintagesFixture
 */
class VintagesFixture extends TestFixture
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
                'wine_id' => 1,
                'year' => 'Lo',
                'classification_id' => 1,
                'stock' => 1,
                'price' => 1,
                'value' => 1,
                'min_age' => 1,
                'max_age' => 1,
                'location_id' => 1,
                'created' => '2022-08-27 15:43:57',
                'modified' => '2022-08-27 15:43:57',
            ],
        ];
        parent::init();
    }
}
