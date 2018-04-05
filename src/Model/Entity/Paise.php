<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Paise Entity
 *
 * @property int $id
 * @property string $codigopais
 * @property string $nombre
 * @property string $continente
 * @property string $bandera
 * @property string $comentarios
 * @property int $confederacion_id
 * @property \Cake\I18n\Time $creado
 * @property \Cake\I18n\Time $modficado
 *
 * @property \App\Model\Entity\Confederacion $confederacion
 * @property \App\Model\Entity\Equipo[] $equipos
 */
class Paise extends Entity
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
