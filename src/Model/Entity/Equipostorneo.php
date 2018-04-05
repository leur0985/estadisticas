<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Equipostorneo Entity
 *
 * @property int $id
 * @property int $torneo_id
 * @property int $equipo_id
 */
class Equipostorneo extends Entity
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
        'torneo_id' => true,
        'equipo_id' => true
    ];
}
