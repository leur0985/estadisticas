<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Tecnicosequipostorneos Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Equipos
 * @property \Cake\ORM\Association\BelongsTo $Tecnicos
 * @property \Cake\ORM\Association\BelongsTo $Torneos
 *
 * @method \App\Model\Entity\Tecnicosequipostorneo get($primaryKey, $options = [])
 * @method \App\Model\Entity\Tecnicosequipostorneo newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Tecnicosequipostorneo[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Tecnicosequipostorneo|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Tecnicosequipostorneo patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Tecnicosequipostorneo[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Tecnicosequipostorneo findOrCreate($search, callable $callback = null)
 */
class TecnicosequipostorneosTable extends Table
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

        $this->table('tecnicosequipostorneos');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->belongsTo('Equipos', [
            'foreignKey' => 'equipo_id'
        ]);
        $this->belongsTo('Tecnicos', [
            'foreignKey' => 'tecnico_id'
        ]);
        $this->belongsTo('Torneos', [
            'foreignKey' => 'torneo_id'
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
            ->dateTime('creado')
            ->requirePresence('creado', 'create')
            ->notEmpty('creado');

        $validator
            ->dateTime('modificado')
            ->requirePresence('modificado', 'create')
            ->notEmpty('modificado');

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
        $rules->add($rules->existsIn(['tecnico_id'], 'Tecnicos'));
        $rules->add($rules->existsIn(['torneo_id'], 'Torneos'));

        return $rules;
    }
}
