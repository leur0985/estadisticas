<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\EquiposTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\EquiposTable Test Case
 */
class EquiposTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\EquiposTable
     */
    public $Equipos;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.equipos',
        'app.paises',
        'app.confederacion',
        'app.estadios',
        'app.equipostelevisoras',
        'app.televisoras',
        'app.incidenciaspartidos',
        'app.puntos',
        'app.tecnicosequipos',
        'app.tecnicos',
        'app.tecnicosequipostorneos',
        'app.torneos',
        'app.equipostorneos',
        'app.partidos',
        'app.arbitros'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Equipos') ? [] : ['className' => EquiposTable::class];
        $this->Equipos = TableRegistry::get('Equipos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Equipos);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
