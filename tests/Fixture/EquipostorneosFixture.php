<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * EquipostorneosFixture
 *
 */
class EquipostorneosFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'torneo_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'equipo_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'equipos_torneos_equipo_id' => ['type' => 'index', 'columns' => ['equipo_id'], 'length' => []],
            'equipostorneos_torneo_id' => ['type' => 'index', 'columns' => ['torneo_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'equipostorneos$equipos_torneos_equipo_id' => ['type' => 'foreign', 'columns' => ['equipo_id'], 'references' => ['equipos', 'id'], 'update' => 'cascade', 'delete' => 'cascade', 'length' => []],
            'equipostorneos$equipostorneos_torneo_id' => ['type' => 'foreign', 'columns' => ['torneo_id'], 'references' => ['torneos', 'id'], 'update' => 'cascade', 'delete' => 'cascade', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'latin1_swedish_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd

    /**
     * Records
     *
     * @var array
     */
    public $records = [
        [
            'id' => 1,
            'torneo_id' => 1,
            'equipo_id' => 1
        ],
    ];
}
