<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\EquipostorneosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\EquipostorneosTable Test Case
 */
class EquipostorneosTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\EquipostorneosTable
     */
    public $Equipostorneos;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.equipostorneos'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Equipostorneos') ? [] : ['className' => EquipostorneosTable::class];
        $this->Equipostorneos = TableRegistry::get('Equipostorneos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Equipostorneos);

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
