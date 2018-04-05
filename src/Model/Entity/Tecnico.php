<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Tecnico Entity
 *
 * @property int $id
 * @property int $nui
 * @property string $iniciales
 * @property string $nombre
 * @property int $pais_id
 * @property \Cake\I18n\Time $nacimiento
 * @property \Cake\I18n\Time $captura
 * @property \Cake\I18n\Time $modificacion
 *
 * @property \App\Model\Entity\Paise $paise
 * @property \App\Model\Entity\Tecnicosequipo[] $tecnicosequipos
 */
class Tecnico extends Entity
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
