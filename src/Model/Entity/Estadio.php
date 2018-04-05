<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Estadio Entity
 *
 * @property int $id
 * @property string $nombre
 * @property string $imagen
 * @property float $capacidad
 * @property string $ciudad
 * @property string $direccion
 * @property \Cake\I18n\Time $inaugurado
 * @property \Cake\I18n\Time $creado
 * @property \Cake\I18n\Time $modificado
 * @property int $pais_id
 *
 * @property \App\Model\Entity\Paise $paise
 */
class Estadio extends Entity
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
