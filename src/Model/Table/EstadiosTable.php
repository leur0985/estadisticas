<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Estadios Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Paises
 * @property \Cake\ORM\Association\HasMany $Equipos
 *
 * @method \App\Model\Entity\Estadio get($primaryKey, $options = [])
 * @method \App\Model\Entity\Estadio newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Estadio[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Estadio|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Estadio patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Estadio[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Estadio findOrCreate($search, callable $callback = null)
 */
class EstadiosTable extends Table
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

        $this->table('estadios');
        $this->displayField('nombre');
        $this->primaryKey('id');

        $this->belongsTo('Paises', [
            'foreignKey' => 'pais_id',
            'joinType' => 'INNER'
        ]);
        $this->hasMany('Equipos', [
            'foreignKey' => 'estadio_id'
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
            ->requirePresence('nombre', 'create')
            ->notEmpty('nombre');
            

        $validator
            ->requirePresence('imagen', 'create')
            ->notEmpty('imagen');

        $validator
            ->decimal('capacidad')
            ->requirePresence('capacidad', 'create')
            ->notEmpty('capacidad');

        $validator
            ->allowEmpty('ciudad');

        $validator
            ->allowEmpty('direccion');

        $validator
            ->date('inaugurado')
            ->allowEmpty('inaugurado');

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
        $rules->add($rules->existsIn(['pais_id'], 'Paises'));

        return $rules;
    }
}
