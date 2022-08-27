<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Vintage Entity
 *
 * @property int $id
 * @property int $wine_id
 * @property string $year
 * @property int|null $classification_id
 * @property int $stock
 * @property float $price
 * @property float $value
 * @property int $min_age
 * @property int $max_age
 * @property int|null $location_id
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Wine $wine
 * @property \App\Model\Entity\Classification $classification
 * @property \App\Model\Entity\Location $location
 */
class Vintage extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array<string, bool>
     */
    protected $_accessible = [
        'wine_id' => true,
        'year' => true,
        'classification_id' => true,
        'stock' => true,
        'price' => true,
        'value' => true,
        'min_age' => true,
        'max_age' => true,
        'location_id' => true,
        'created' => true,
        'modified' => true,
        'wine' => true,
        'classification' => true,
        'location' => true,
    ];
}
