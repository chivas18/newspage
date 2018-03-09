<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Product Entity
 *
 * @property int $id
 * @property int $catalog_id
 * @property string $name
 * @property float $price
 * @property string $content
 * @property int $discount
 * @property string $image_link
 * @property string $image_list
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 * @property int $view
 *
 * @property \App\Model\Entity\Catalog $catalog
 */
class Product extends Entity
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
        'id' => true,
        'catalog_id' => true,
        'name' => true,
        'price' => true,
        'content' => true,
        'discount' => true,
        'image_link' => true,
        'image_list' => true,
        'created' => true,
        'modified' => true,
        'view' => true,
        'catalog' => true
    ];
}
