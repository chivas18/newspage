<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Catalog Entity
 *
 * @property int $id
 * @property string $name
 * @property int $parent_id
 * @property int $sort_order
 *
 * @property \App\Model\Entity\ParentCatalog $parent_catalog
 * @property \App\Model\Entity\ChildCatalog[] $child_catalog
 * @property \App\Model\Entity\Product[] $products
 */
class Catalog extends Entity
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
        'name' => true,
        'parent_id' => true,
        'sort_order' => true,
        'parent_catalog' => true,
        'child_catalog' => true,
        'products' => true
    ];
}
