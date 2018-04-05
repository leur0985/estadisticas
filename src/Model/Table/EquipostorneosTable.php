<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Equipostorneos Model
 *
 * @property |\Cake\ORM\Association\BelongsTo $Torneos
 * @property |\Cake\ORM\Association\BelongsTo $Equipos
 *
 * @method \App\Model\Entity\Equipostorneo get($primaryKey, $options = [])
 * @method \App\Model\Entity\Equipostorneo newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Equipostorneo[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Equipostorneo|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Equipostorneo patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Equipostorneo[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Equipostorneo findOrCreate($search, callable $callback = null, $options = [])
 */
class EquipostorneosTable extends Table
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

        $this->setTable('equipostorneos');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Torneos', [
            'foreignKey' => 'torneo_id'
        ]);
        $this->belongsTo('Equipos', [
            'foreignKey' => 'equipo_id'
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
        $rules->add($rules->existsIn(['torneo_id'], 'Torneos'));
        $rules->add($rules->existsIn(['equipo_id'], 'Equipos'));

        return $rules;
    }
}
