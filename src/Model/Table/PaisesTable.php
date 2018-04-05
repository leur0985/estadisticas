<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Paises Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Confederacion
 *
 * @method \App\Model\Entity\Paise get($primaryKey, $options = [])
 * @method \App\Model\Entity\Paise newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Paise[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Paise|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Paise patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Paise[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Paise findOrCreate($search, callable $callback = null)
 */
class PaisesTable extends Table
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

        $this->table('paises');
        $this->displayField('nombre');
        $this->primaryKey('id');

        $this->belongsTo('Confederacion', [
            'foreignKey' => 'confederacion_id'
        ]);
        $this->hasMany('Equipos', [
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
            ->requirePresence('codigopais', 'create')
            ->notEmpty('codigopais')
            ->add('codigopais', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->requirePresence('nombre', 'create')
            ->notEmpty('nombre');

        $validator
            ->requirePresence('continente', 'create')
            ->notEmpty('continente');

        $validator
            ->allowEmpty('bandera');

        $validator
            ->allowEmpty('comentarios');

        $validator
            ->dateTime('creado')
            ->requirePresence('creado', 'create')
            ->notEmpty('creado');

        $validator
            ->dateTime('modficado')
            ->requirePresence('modficado', 'create')
            ->notEmpty('modficado');

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
        $rules->add($rules->isUnique(['codigopais']));
        $rules->add($rules->existsIn(['confederacion_id'], 'Confederacion'));

        return $rules;
    }
}
