<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Wines Model
 *
 * @property \App\Model\Table\WineriesTable&\Cake\ORM\Association\BelongsTo $Wineries
 * @property \App\Model\Table\StylesTable&\Cake\ORM\Association\BelongsTo $Styles
 * @property \App\Model\Table\VintagesTable&\Cake\ORM\Association\HasMany $Vintages
 *
 * @method \App\Model\Entity\Wine newEmptyEntity()
 * @method \App\Model\Entity\Wine newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Wine[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Wine get($primaryKey, $options = [])
 * @method \App\Model\Entity\Wine findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Wine patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Wine[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Wine|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Wine saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Wine[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Wine[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Wine[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Wine[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class WinesTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('wines');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Wineries', [
            'foreignKey' => 'winery_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Styles', [
            'foreignKey' => 'style_id',
            'joinType' => 'INNER',
        ]);
        $this->hasMany('Vintages', [
            'foreignKey' => 'wine_id',
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->scalar('name')
            ->maxLength('name', 255)
            ->requirePresence('name', 'create')
            ->notEmptyString('name');

        $validator
            ->integer('winery_id')
            ->requirePresence('winery_id', 'create')
            ->notEmptyString('winery_id');

        $validator
            ->integer('style_id')
            ->requirePresence('style_id', 'create')
            ->notEmptyString('style_id');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules): RulesChecker
    {
        $rules->add($rules->existsIn('winery_id', 'Wineries'), ['errorField' => 'winery_id']);
        $rules->add($rules->existsIn('style_id', 'Styles'), ['errorField' => 'style_id']);

        return $rules;
    }
}
