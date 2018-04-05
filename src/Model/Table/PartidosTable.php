<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Partidos Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Torneos
 * @property \Cake\ORM\Association\BelongsTo $Equipos
 * @property \Cake\ORM\Association\BelongsTo $Tecnicos
 * @property \Cake\ORM\Association\BelongsTo $Equipos
 * @property \Cake\ORM\Association\BelongsTo $Tecnicos
 * @property \Cake\ORM\Association\BelongsTo $Estadios
 * @property \Cake\ORM\Association\BelongsTo $Arbitros
 * @property \Cake\ORM\Association\HasMany $Puntos
 *
 * @method \App\Model\Entity\Partido get($primaryKey, $options = [])
 * @method \App\Model\Entity\Partido newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Partido[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Partido|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Partido patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Partido[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Partido findOrCreate($search, callable $callback = null)
 */
class PartidosTable extends Table
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

        $this->table('partidos');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->belongsTo('Torneos', [
            'foreignKey' => 'torneo_id'
        ]);
        $this->belongsTo('Equipos', [
            'foreignKey' => 'equipo_local_id'
        ]);
        $this->belongsTo('Tecnicos', [
            'foreignKey' => 'tecnico_local_id'
        ]);
        $this->belongsTo('Equipos', [
            'foreignKey' => 'equipo_visitante_id'
        ]);
        $this->belongsTo('Tecnicos', [
            'foreignKey' => 'tecnico_visitante_id'
        ]);
        $this->belongsTo('Estadios', [
            'foreignKey' => 'estadio_id'
        ]);
        $this->belongsTo('Arbitros', [
            'foreignKey' => 'arbitro_id'
        ]);
        $this->hasMany('Puntos', [
            'foreignKey' => 'partido_id'
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
            ->integer('num_partido')
            ->allowEmpty('num_partido');

        $validator
            ->allowEmpty('jornada');

        $validator
            ->date('fecha')
            ->allowEmpty('fecha');

        $validator
            ->time('hora')
            ->allowEmpty('hora');

        $validator
            ->allowEmpty('equipolocal');

        $validator
            ->integer('goleslocal')
            ->allowEmpty('goleslocal');

        $validator
            ->allowEmpty('equipovisitante');

        $validator
            ->integer('golesvisitante')
            ->allowEmpty('golesvisitante');

        $validator
            ->allowEmpty('ganador');

        $validator
            ->integer('abierto')
            ->allowEmpty('abierto');

        $validator
            ->integer('puntos_local')
            ->allowEmpty('puntos_local');

        $validator
            ->integer('puntos_visitante')
            ->allowEmpty('puntos_visitante');

        $validator
            ->allowEmpty('comentarios');

        $validator
            ->integer('activo')
            ->allowEmpty('activo');

        $validator
            ->integer('procesado')
            ->allowEmpty('procesado');

        $validator
            ->date('capturado')
            ->allowEmpty('capturado');

        $validator
            ->date('fecha_procesado')
            ->allowEmpty('fecha_procesado');

        $validator
            ->boolean('penales')
            ->allowEmpty('penales');

         $validator
        ->boolean('estuve')
        ->allowEmpty('estuve');

        $validator
            ->boolean('tiempoextra')
            ->allowEmpty('tiempoextra');

        $validator
            ->integer('goleslocaltiempoextra')
            ->allowEmpty('goleslocaltiempoextra');

        $validator
            ->integer('golesvisitantetiempoextra')
            ->allowEmpty('golesvisitantetiempoextra');

        $validator
            ->integer('goleslocalpenales')
            ->allowEmpty('goleslocalpenales');

        $validator
            ->integer('golesvisitantepenales')
            ->allowEmpty('golesvisitantepenales');

        $validator
            ->integer('asistencia')
            ->allowEmpty('asistencia');

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
        $rules->add($rules->existsIn(['equipo_local_id'], 'Equipos'));
        $rules->add($rules->existsIn(['tecnico_local_id'], 'Tecnicos'));
        $rules->add($rules->existsIn(['equipo_visitante_id'], 'Equipos'));
        $rules->add($rules->existsIn(['tecnico_visitante_id'], 'Tecnicos'));
        $rules->add($rules->existsIn(['estadio_id'], 'Estadios'));
        $rules->add($rules->existsIn(['arbitro_id'], 'Arbitros'));

        return $rules;
    }
}
