<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\WinesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\WinesTable Test Case
 */
class WinesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\WinesTable
     */
    protected $Wines;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Wines',
        'app.Wineries',
        'app.Styles',
        'app.Vintages',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Wines') ? [] : ['className' => WinesTable::class];
        $this->Wines = $this->getTableLocator()->get('Wines', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Wines);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\WinesTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\WinesTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
