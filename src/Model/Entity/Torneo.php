<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Torneo Entity
 *
 * @property int $id
 * @property string $nombre
 * @property \Cake\I18n\FrozenDate $inicio
 * @property \Cake\I18n\FrozenDate $final
 * @property string $logo
 * @property string $sede
 * @property int $tipo
 * @property int $status
 * @property string $comentarios
 * @property \Cake\I18n\FrozenTime $creado
 * @property \Cake\I18n\FrozenTime $modificado
 * @property int $equipo_id
 *
 * @property \App\Model\Entity\Equipo $equipo
 * @property \App\Model\Entity\Equipostorneo[] $equipostorneos
 * @property \App\Model\Entity\Partido[] $partidos
 * @property \App\Model\Entity\Punto[] $puntos
 */
class Torneo extends Entity
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
        'nombre' => true,
        'inicio' => true,
        'final' => true,
        'logo' => true,
        'sede' => true,
        'tipo' => true,
        'status' => true,
        'comentarios' => true,
        'creado' => true,
        'modificado' => true,
        'equipo_id' => true,
        'equipo' => true,
        'equipostorneos' => true,
        'partidos' => true,
        'puntos' => true
    ];
}
