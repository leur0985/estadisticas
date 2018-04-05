<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Partido Entity
 *
 * @property int $id
 * @property int $num_partido
 * @property int $torneo_id
 * @property string $jornada
 * @property \Cake\I18n\Time $fecha
 * @property \Cake\I18n\Time $hora
 * @property int $equipo_local_id
 * @property string $equipolocal
 * @property int $goleslocal
 * @property int $tecnico_local_id
 * @property int $equipo_visitante_id
 * @property string $equipovisitante
 * @property int $golesvisitante
 * @property int $tecnico_visitante_id
 * @property string $ganador
 * @property int $abierto
 * @property int $estadio_id
 * @property int $puntos_local
 * @property int $puntos_visitante
 * @property string $comentarios
 * @property int $activo
 * @property int $procesado
 * @property \Cake\I18n\Time $capturado
 * @property \Cake\I18n\Time $fecha_procesado
 * @property bool $penales
 * @property bool $tiempoextra
 * @property int $goleslocaltiempoextra
 * @property int $golesvisitantetiempoextra
 * @property int $goleslocalpenales
 * @property int $golesvisitantepenales
 * @property int $asistencia
 * @property int $arbitro_id
 *
 * @property \App\Model\Entity\Torneo $torneo
 * @property \App\Model\Entity\Equipo $equipo
 * @property \App\Model\Entity\Estadio $estadio
 * @property \App\Model\Entity\Arbitro $arbitro
 */
class Partido extends Entity
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
