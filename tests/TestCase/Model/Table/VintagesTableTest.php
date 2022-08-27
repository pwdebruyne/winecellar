<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\VintagesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\VintagesTable Test Case
 */
class VintagesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\VintagesTable
     */
    protected $Vintages;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Vintages',
        'app.Wines',
        'app.Classifications',
        'app.Locations',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Vintages') ? [] : ['className' => VintagesTable::class];
        $this->Vintages = $this->getTableLocator()->get('Vintages', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Vintages);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\VintagesTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\VintagesTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
