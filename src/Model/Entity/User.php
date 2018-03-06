<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * User Entity
 *
 * @property int $id
 * @property string $username
 * @property string $password
 * @property string $display_name
 * @property string $email
 * @property int $position
 * @property int $status
 * @property string $facebook
 * @property string $google
 * @property string $twitter
 * @property int $phone
 * @property string $description
 * @property string $url_avatar
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 */
class User extends Entity
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
        'username' => true,
        'password' => true,
        'display_name' => true,
        'email' => true,
        'position' => true,
        'status' => true,
        'facebook' => true,
        'google' => true,
        'twitter' => true,
        'phone' => true,
        'description' => true,
        'url_avatar' => true,
        'created' => true,
        'modified' => true
    ];

    /**
     * Fields that are excluded from JSON versions of the entity.
     *
     * @var array
     */
    protected $_hidden = [
        'password'
    ];
}
