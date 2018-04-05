<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Televisoras Model
 *
 * @method \App\Model\Entity\Televisora get($primaryKey, $options = [])
 * @method \App\Model\Entity\Televisora newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Televisora[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Televisora|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Televisora patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Televisora[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Televisora findOrCreate($search, callable $callback = null)
 */
class TelevisorasTable extends Table
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

        $this->table('televisoras');
        $this->displayField('nombre');
        $this->primaryKey('id');
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
            ->allowEmpty('nombre');

        $validator
            ->requirePresence('logo', 'create')
            ->notEmpty('logo');

        $validator
            ->dateTime('creado')
            ->allowEmpty('creado');

        $validator
            ->dateTime('modificado')
            ->allowEmpty('modificado');

        return $validator;
    }
}
