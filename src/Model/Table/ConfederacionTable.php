<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Confederacion Model
 *
 * @property \Cake\ORM\Association\HasMany $Paises
 *
 * @method \App\Model\Entity\Confederacion get($primaryKey, $options = [])
 * @method \App\Model\Entity\Confederacion newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Confederacion[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Confederacion|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Confederacion patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Confederacion[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Confederacion findOrCreate($search, callable $callback = null)
 */
class ConfederacionTable extends Table
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

        $this->table('confederacion');
        $this->displayField('abreviatura');
        $this->primaryKey('id');

        $this->hasMany('Paises', [
            'foreignKey' => 'confederacion_id'
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
            ->allowEmpty('abreviatura');

        $validator
            ->allowEmpty('nombre');

        $validator
            ->integer('fundacion')
            ->allowEmpty('fundacion');

        $validator
            ->allowEmpty('logo');

        $validator
            ->dateTime('agregado')
            ->allowEmpty('agregado');

        $validator
            ->dateTime('modificado')
            ->allowEmpty('modificado');

        return $validator;
    }
}
