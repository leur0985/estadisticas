<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Tecnicosequipos Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Equipos
 * @property \Cake\ORM\Association\BelongsTo $Tecnicos
 *
 * @method \App\Model\Entity\Tecnicosequipo get($primaryKey, $options = [])
 * @method \App\Model\Entity\Tecnicosequipo newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Tecnicosequipo[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Tecnicosequipo|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Tecnicosequipo patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Tecnicosequipo[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Tecnicosequipo findOrCreate($search, callable $callback = null)
 */
class TecnicosequiposTable extends Table
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

        $this->table('tecnicosequipos');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->belongsTo('Equipos', [
            'foreignKey' => 'equipo_id'
        ]);
        $this->belongsTo('Tecnicos', [
            'foreignKey' => 'tecnico_id'
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
            ->boolean('actual')
            ->requirePresence('actual', 'create')
            ->notEmpty('actual');

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

        return $rules;
    }
}
