<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\WineriesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\WineriesTable Test Case
 */
class WineriesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\WineriesTable
     */
    protected $Wineries;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Wineries',
        'app.Regions',
        'app.Wines',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Wineries') ? [] : ['className' => WineriesTable::class];
        $this->Wineries = $this->getTableLocator()->get('Wineries', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Wineries);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\WineriesTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\WineriesTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
