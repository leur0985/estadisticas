<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * EquiposFixture
 *
 */
class EquiposFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'abreviacion' => ['type' => 'string', 'length' => 4, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'nombre' => ['type' => 'string', 'length' => 100, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'logo' => ['type' => 'string', 'length' => 200, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'tipo' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'fecha_creacion' => ['type' => 'timestamp', 'length' => null, 'null' => false, 'default' => 'CURRENT_TIMESTAMP', 'comment' => '', 'precision' => null],
        'fecha_fundacion' => ['type' => 'date', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'modificado' => ['type' => 'timestamp', 'length' => null, 'null' => false, 'default' => 'CURRENT_TIMESTAMP', 'comment' => '', 'precision' => null],
        'pais_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'estadio_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'equipos_estadio_id' => ['type' => 'index', 'columns' => ['estadio_id'], 'length' => []],
            'equipos_pais' => ['type' => 'index', 'columns' => ['pais_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'equipos$abreviacion_equipo' => ['type' => 'unique', 'columns' => ['abreviacion'], 'length' => []],
            'equipos$equipos_estadio_id' => ['type' => 'foreign', 'columns' => ['estadio_id'], 'references' => ['estadios', 'id'], 'update' => 'cascade', 'delete' => 'noAction', 'length' => []],
            'equipos$equipos_pais' => ['type' => 'foreign', 'columns' => ['pais_id'], 'references' => ['paises', 'id'], 'update' => 'cascade', 'delete' => 'noAction', 'length' => []],
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
            'abreviacion' => 'Lo',
            'nombre' => 'Lorem ipsum dolor sit amet',
            'logo' => 'Lorem ipsum dolor sit amet',
            'tipo' => 1,
            'fecha_creacion' => 1522803941,
            'fecha_fundacion' => '2018-04-04',
            'modificado' => 1522803941,
            'pais_id' => 1,
            'estadio_id' => 1
        ],
    ];
}
