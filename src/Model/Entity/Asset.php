<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Asset Entity.
 *
 * @property int $id
 * @property string $asset_tag
 * @property int $department_id
 * @property \App\Model\Entity\Department $department
 * @property int $asset_model_id
 * @property \App\Model\Entity\AssetModel $asset_model
 * @property int $location_id
 * @property \App\Model\Entity\Location $location
 * @property string $notes
 */
class Asset extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        '*' => true,
        'id' => false,
    ];
}
