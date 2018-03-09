<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Catalog Model
 *
 * @property \App\Model\Table\CatalogTable|\Cake\ORM\Association\BelongsTo $ParentCatalog
 * @property \App\Model\Table\CatalogTable|\Cake\ORM\Association\HasMany $ChildCatalog
 * @property \App\Model\Table\ProductsTable|\Cake\ORM\Association\HasMany $Products
 *
 * @method \App\Model\Entity\Catalog get($primaryKey, $options = [])
 * @method \App\Model\Entity\Catalog newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Catalog[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Catalog|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Catalog patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Catalog[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Catalog findOrCreate($search, callable $callback = null, $options = [])
 */
class CatalogTable extends Table
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

        $this->setTable('catalog');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->belongsTo('ParentCatalog', [
            'className' => 'Catalog',
            'foreignKey' => 'parent_id'
        ]);
        $this->hasMany('ChildCatalog', [
            'className' => 'Catalog',
            'foreignKey' => 'parent_id'
        ]);
        $this->hasMany('Products', [
            'foreignKey' => 'catalog_id'
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
            ->scalar('name')
            ->maxLength('name', 128)
            ->requirePresence('name', 'create')
            ->notEmpty('name');

        $validator
            ->requirePresence('sort_order', 'create')
            ->notEmpty('sort_order');

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
        $rules->add($rules->existsIn(['parent_id'], 'ParentCatalog'));

        return $rules;
    }
}
