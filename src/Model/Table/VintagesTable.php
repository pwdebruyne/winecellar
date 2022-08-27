<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Vintages Model
 *
 * @property \App\Model\Table\WinesTable&\Cake\ORM\Association\BelongsTo $Wines
 * @property \App\Model\Table\ClassificationsTable&\Cake\ORM\Association\BelongsTo $Classifications
 * @property \App\Model\Table\LocationsTable&\Cake\ORM\Association\BelongsTo $Locations
 *
 * @method \App\Model\Entity\Vintage newEmptyEntity()
 * @method \App\Model\Entity\Vintage newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Vintage[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Vintage get($primaryKey, $options = [])
 * @method \App\Model\Entity\Vintage findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Vintage patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Vintage[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Vintage|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Vintage saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Vintage[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Vintage[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Vintage[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Vintage[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class VintagesTable extends Table
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

        $this->setTable('vintages');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Wines', [
            'foreignKey' => 'wine_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Classifications', [
            'foreignKey' => 'classification_id',
        ]);
        $this->belongsTo('Locations', [
            'foreignKey' => 'location_id',
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
            ->integer('wine_id')
            ->requirePresence('wine_id', 'create')
            ->notEmptyString('wine_id');

        $validator
            ->scalar('year')
            ->maxLength('year', 4)
            ->requirePresence('year', 'create')
            ->notEmptyString('year');

        $validator
            ->integer('classification_id')
            ->allowEmptyString('classification_id');

        $validator
            ->integer('stock')
            ->requirePresence('stock', 'create')
            ->notEmptyString('stock');

        $validator
            ->numeric('price')
            ->requirePresence('price', 'create')
            ->notEmptyString('price');

        $validator
            ->numeric('value')
            ->requirePresence('value', 'create')
            ->notEmptyString('value');

        $validator
            ->integer('min_age')
            ->requirePresence('min_age', 'create')
            ->notEmptyString('min_age');

        $validator
            ->integer('max_age')
            ->requirePresence('max_age', 'create')
            ->notEmptyString('max_age');

        $validator
            ->integer('location_id')
            ->allowEmptyString('location_id');

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
        $rules->add($rules->existsIn('wine_id', 'Wines'), ['errorField' => 'wine_id']);
        $rules->add($rules->existsIn('classification_id', 'Classifications'), ['errorField' => 'classification_id']);
        $rules->add($rules->existsIn('location_id', 'Locations'), ['errorField' => 'location_id']);

        return $rules;
    }
}
