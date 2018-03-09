<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CatalogTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CatalogTable Test Case
 */
class CatalogTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\CatalogTable
     */
    public $Catalog;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.catalog',
        'app.products'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Catalog') ? [] : ['className' => CatalogTable::class];
        $this->Catalog = TableRegistry::get('Catalog', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Catalog);

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
