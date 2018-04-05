<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Equipos Model
 *
 * @property \App\Model\Table\PaisesTable|\Cake\ORM\Association\BelongsTo $Paises
 * @property \App\Model\Table\EstadiosTable|\Cake\ORM\Association\BelongsTo $Estadios
 * @property \App\Model\Table\EquipostelevisorasTable|\Cake\ORM\Association\HasMany $Equipostelevisoras
 * @property |\Cake\ORM\Association\HasMany $Equipostorneos
 * @property \App\Model\Table\IncidenciaspartidosTable|\Cake\ORM\Association\HasMany $Incidenciaspartidos
 * @property \App\Model\Table\PuntosTable|\Cake\ORM\Association\HasMany $Puntos
 * @property \App\Model\Table\TecnicosequiposTable|\Cake\ORM\Association\HasMany $Tecnicosequipos
 * @property \App\Model\Table\TorneosTable|\Cake\ORM\Association\HasMany $Torneos
 *
 * @method \App\Model\Entity\Equipo get($primaryKey, $options = [])
 * @method \App\Model\Entity\Equipo newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Equipo[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Equipo|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Equipo patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Equipo[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Equipo findOrCreate($search, callable $callback = null, $options = [])
 */
class EquiposTable extends Table
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

        $this->setTable('equipos');
        $this->setDisplayField('nombre');
        $this->setPrimaryKey('id');

        $this->belongsTo('Paises', [
            'foreignKey' => 'pais_id'
        ]);
        $this->belongsTo('Estadios', [
            'foreignKey' => 'estadio_id'
        ]);
        $this->hasMany('Equipostelevisoras', [
            'foreignKey' => 'equipo_id'
        ]);
        $this->hasMany('Equipostorneos', [
            'foreignKey' => 'equipo_id'
        ]);
        $this->hasMany('Incidenciaspartidos', [
            'foreignKey' => 'equipo_id'
        ]);
        $this->hasMany('Puntos', [
            'foreignKey' => 'equipo_id'
        ]);
        $this->hasMany('Tecnicosequipos', [
            'foreignKey' => 'equipo_id'
        ]);
        $this->hasMany('Torneos', [
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

        $validator
            ->scalar('abreviacion')
            ->maxLength('abreviacion', 4)
            ->allowEmpty('abreviacion')
            ->add('abreviacion', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->scalar('nombre')
            ->maxLength('nombre', 100)
            ->allowEmpty('nombre');

        $validator
            ->scalar('logo')
            ->maxLength('logo', 200)
            ->allowEmpty('logo');

        $validator
            ->integer('tipo')
            ->allowEmpty('tipo');

        $validator
            ->dateTime('fecha_creacion')
            ->requirePresence('fecha_creacion', 'create')
            ->notEmpty('fecha_creacion');

        $validator
            ->date('fecha_fundacion')
            ->allowEmpty('fecha_fundacion');

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
        $rules->add($rules->isUnique(['abreviacion']));
        $rules->add($rules->existsIn(['pais_id'], 'Paises'));
        $rules->add($rules->existsIn(['estadio_id'], 'Estadios'));

        return $rules;
    }
}
