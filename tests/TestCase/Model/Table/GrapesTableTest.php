<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\GrapesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\GrapesTable Test Case
 */
class GrapesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\GrapesTable
     */
    protected $Grapes;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Grapes',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Grapes') ? [] : ['className' => GrapesTable::class];
        $this->Grapes = $this->getTableLocator()->get('Grapes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Grapes);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\GrapesTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
