<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Equipostelevisoras Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Equipos
 * @property \Cake\ORM\Association\BelongsTo $Televisoras
 *
 * @method \App\Model\Entity\Equipostelevisora get($primaryKey, $options = [])
 * @method \App\Model\Entity\Equipostelevisora newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Equipostelevisora[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Equipostelevisora|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Equipostelevisora patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Equipostelevisora[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Equipostelevisora findOrCreate($search, callable $callback = null)
 */
class EquipostelevisorasTable extends Table
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

        $this->table('equipostelevisoras');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->belongsTo('Equipos', [
            'foreignKey' => 'equipo_id'
        ]);
        $this->belongsTo('Televisoras', [
            'foreignKey' => 'televisora_id'
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
        $rules->add($rules->existsIn(['equipo_id'], 'Equipos'));
        $rules->add($rules->existsIn(['televisora_id'], 'Televisoras'));

        return $rules;
    }
}
