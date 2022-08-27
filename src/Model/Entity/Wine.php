<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Wine Entity
 *
 * @property int $id
 * @property string $name
 * @property int $winery_id
 * @property int $style_id
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Winery $winery
 * @property \App\Model\Entity\Style $style
 * @property \App\Model\Entity\Vintage[] $vintages
 */
class Wine extends Entity
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
        'winery_id' => true,
        'style_id' => true,
        'created' => true,
        'modified' => true,
        'winery' => true,
        'style' => true,
        'vintages' => true,
    ];
}
