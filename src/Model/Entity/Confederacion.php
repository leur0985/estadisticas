<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Confederacion Entity
 *
 * @property int $id
 * @property string $abreviatura
 * @property string $nombre
 * @property int $fundacion
 * @property string $logo
 * @property \Cake\I18n\Time $agregado
 * @property \Cake\I18n\Time $modificado
 *
 * @property \App\Model\Entity\Paise[] $paises
 */
class Confederacion extends Entity
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
