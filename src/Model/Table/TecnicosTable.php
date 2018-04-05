<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Tecnicos Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Paises
 * @property \Cake\ORM\Association\HasMany $Tecnicosequipos
 *
 * @method \App\Model\Entity\Tecnico get($primaryKey, $options = [])
 * @method \App\Model\Entity\Tecnico newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Tecnico[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Tecnico|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Tecnico patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Tecnico[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Tecnico findOrCreate($search, callable $callback = null)
 */
class TecnicosTable extends Table
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

        $this->table('tecnicos');
        $this->displayField('nombre');
        $this->primaryKey('id');

        $this->belongsTo('Paises', [
            'foreignKey' => 'pais_id'
        ]);
        $this->hasMany('Tecnicosequipostorneos', [
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
            ->integer('nui')
            ->allowEmpty('nui');

        $validator
            ->allowEmpty('iniciales');

        $validator
            ->allowEmpty('nombre');

        $validator
            ->date('nacimiento')
            ->allowEmpty('nacimiento');

        $validator
            ->date('captura')
            ->allowEmpty('captura');

        $validator
            ->date('modificacion')
            ->allowEmpty('modificacion');

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
