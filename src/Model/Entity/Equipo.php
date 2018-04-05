<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Equipo Entity
 *
 * @property int $id
 * @property string $abreviacion
 * @property string $nombre
 * @property string $logo
 * @property int $tipo
 * @property \Cake\I18n\FrozenTime $fecha_creacion
 * @property \Cake\I18n\FrozenDate $fecha_fundacion
 * @property \Cake\I18n\FrozenTime $modificado
 * @property int $pais_id
 * @property int $estadio_id
 *
 * @property \App\Model\Entity\Paise $paise
 * @property \App\Model\Entity\Estadio $estadio
 * @property \App\Model\Entity\Equipostelevisora[] $equipostelevisoras
 * @property \App\Model\Entity\Incidenciaspartido[] $incidenciaspartidos
 * @property \App\Model\Entity\Punto[] $puntos
 * @property \App\Model\Entity\Tecnicosequipo[] $tecnicosequipos
 * @property \App\Model\Entity\Torneo[] $torneos
 */
class Equipo extends Entity
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
        'abreviacion' => true,
        'nombre' => true,
        'logo' => true,
        'tipo' => true,
        'fecha_creacion' => true,
        'fecha_fundacion' => true,
        'modificado' => true,
        'pais_id' => true,
        'estadio_id' => true,
        'paise' => true,
        'estadio' => true,
        'equipostelevisoras' => true,
        'incidenciaspartidos' => true,
        'puntos' => true,
        'tecnicosequipos' => true,
        'torneos' => true
    ];
}
