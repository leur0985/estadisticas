<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Torneos Model
 *
 * @property \App\Model\Table\EquiposTable|\Cake\ORM\Association\BelongsTo $Equipos
 * @property \App\Model\Table\EquipostorneosTable|\Cake\ORM\Association\HasMany $Equipostorneos
 * @property \App\Model\Table\PartidosTable|\Cake\ORM\Association\HasMany $Partidos
 * @property \App\Model\Table\PuntosTable|\Cake\ORM\Association\HasMany $Puntos
 *
 * @method \App\Model\Entity\Torneo get($primaryKey, $options = [])
 * @method \App\Model\Entity\Torneo newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Torneo[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Torneo|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Torneo patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Torneo[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Torneo findOrCreate($search, callable $callback = null, $options = [])
 */
class TorneosTable extends Table
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

        $this->setTable('torneos');
        $this->setDisplayField('nombre');
        $this->setPrimaryKey('id');

        $this->belongsTo('Equipos', [
            'foreignKey' => 'equipo_id'
        ]);
        $this->hasMany('Equipostorneos', [
            'foreignKey' => 'torneo_id'
        ]);
        $this->hasMany('Partidos', [
            'foreignKey' => 'torneo_id'
        ]);
        $this->hasMany('Puntos', [
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
            ->scalar('nombre')
            ->maxLength('nombre', 100)
            ->allowEmpty('nombre')
            ->add('nombre', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->date('inicio')
            ->allowEmpty('inicio');

        $validator
            ->date('final')
            ->allowEmpty('final');

        $validator
            ->scalar('logo')
            ->maxLength('logo', 200)
            ->allowEmpty('logo');

        $validator
            ->scalar('sede')
            ->maxLength('sede', 200)
            ->allowEmpty('sede');

        $validator
            ->integer('tipo')
            ->allowEmpty('tipo');

        $validator
            ->integer('status')
            ->allowEmpty('status');

        $validator
            ->scalar('comentarios')
            ->maxLength('comentarios', 4294967295)
            ->allowEmpty('comentarios');

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
        $rules->add($rules->isUnique(['nombre']));
        $rules->add($rules->existsIn(['equipo_id'], 'Equipos'));

        return $rules;
    }
}
