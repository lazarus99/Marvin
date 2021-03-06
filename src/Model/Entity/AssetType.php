<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * AssetType Entity.
 *
 * @property int $id
 * @property string $asset_type_desc
 * @property \Cake\I18n\Time $created_date
 * @property \Cake\I18n\Time $modified_date
 * @property \App\Model\Entity\AssetModel[] $asset_models
 */
class AssetType extends Entity
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
