<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Winery Entity
 *
 * @property int $id
 * @property string $name
 * @property int $region_id
 * @property string|null $address
 * @property string|null $email
 * @property string|null $phone
 * @property string|null $website
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Region $region
 * @property \App\Model\Entity\Wine[] $wines
 */
class Winery extends Entity
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
        'name' => true,
        'region_id' => true,
        'address' => true,
        'email' => true,
        'phone' => true,
        'website' => true,
        'created' => true,
        'modified' => true,
        'region' => true,
        'wines' => true,
    ];
}
