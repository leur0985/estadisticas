<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Arbitros Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Paises
 *
 * @method \App\Model\Entity\Arbitro get($primaryKey, $options = [])
 * @method \App\Model\Entity\Arbitro newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Arbitro[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Arbitro|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Arbitro patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Arbitro[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Arbitro findOrCreate($search, callable $callback = null)
 */
class ArbitrosTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->table('arbitros');
        $this->displayField('iniciales');
        $this->primaryKey('id');

        $this->belongsTo('Paises', [
            'foreignKey' => 'pais_id'
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->allowEmpty('iniciales')
            ->add('iniciales', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->allowEmpty('nombre');

        $validator
            ->date('nacimiento')
            ->allowEmpty('nacimiento');

        $validator
            ->date('creado')
            ->allowEmpty('creado');

        $validator
            ->date('modificado')
            ->allowEmpty('modificado');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->isUnique(['iniciales']));
        $rules->add($rules->existsIn(['pais_id'], 'Paises'));

        return $rules;
    }
}
