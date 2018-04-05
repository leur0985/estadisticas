<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Tecnicosequipo Entity
 *
 * @property int $id
 * @property int $equipo_id
 * @property int $tecnico_id
 * @property bool $actual
 * @property \Cake\I18n\Time $creado
 * @property \Cake\I18n\Time $modificado
 *
 * @property \App\Model\Entity\Equipo $equipo
 * @property \App\Model\Entity\Tecnico $tecnico
 */
class Tecnicosequipo extends Entity
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
        'id' => false
    ];
}
