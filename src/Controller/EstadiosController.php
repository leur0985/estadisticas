<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Database\Type;


/**
 * Estadios Controller
 *
 * @property \App\Model\Table\EstadiosTable $Estadios
 */
class EstadiosController extends AppController
{

	/**
	 * Index method
	 *
	 * @return \Cake\Network\Response|null
	 */
	public function index()
	{
		$this->paginate = [
			'contain' => ['Paises']
		];
		$estadios = $this->paginate($this->Estadios);
		//return debug(estadios);
		$this->set(compact('estadios'));
		$this->set('_serialize', ['estadios']);

	}

	/**
	 * View method
	 *
	 * @param string|null $id Estadio id.
	 * @return \Cake\Network\Response|null
	 * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
	 */
	public function view($id = null)
	{
		$estadio = $this->Estadios->get($id, [
			'contain' => ['Paises']
		]);

		$this->set('estadio', $estadio);
		$this->set('_serialize', ['estadio']);
	}

	/**
	 * Add method
	 *
	 * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
	 */
	public function add()
	{
		$estadio = $this->Estadios->newEntity();
		if ($this->request->is('post')) {
			$estadio = $this->Estadios->patchEntity($estadio, $this->request->data);
			if ($this->Estadios->save($estadio)) {
				$this->Flash->success(__('The estadio has been saved.'));

				return $this->redirect(['action' => 'index']);
			} else {
				$this->Flash->error(__('The estadio could not be saved. Please, try again.'));
			}
		}
		//$this->data['Paises']['creado'] = DboSource::expression('NOW()');
		$paises = $this->Estadios->Paises->find('list');
		$this->set(compact('estadio', 'paises'));
	   // $this->set('_serialize', ['estadio']);
	}

	/**
	 * Edit method
	 *
	 * @param string|null $id Estadio id.
	 * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
	 * @throws \Cake\Network\Exception\NotFoundException When record not found.
	 */
	public function edit($id = null)
	{
		$estadio = $this->Estadios->get($id, [
			'contain' => []
		]);
		if ($this->request->is(['patch', 'post', 'put'])) {
			$estadio = $this->Estadios->patchEntity($estadio, $this->request->data);
			if ($this->Estadios->save($estadio)) {
				$this->Flash->success(__('The estadio has been saved.'));

				return $this->redirect(['action' => 'index']);
			} else {
				$this->Flash->error(__('The estadio could not be saved. Please, try again.'));
			}
		}
		$paises = $this->Estadios->Paises->find('list', ['limit' => 200]);
		$this->set(compact('estadio', 'paises'));
		$this->set('_serialize', ['estadio']);
	}

	/**
	 * Delete method
	 *
	 * @param string|null $id Estadio id.
	 * @return \Cake\Network\Response|null Redirects to index.
	 * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
	 */
	public function delete($id = null)
	{
		$this->request->allowMethod(['post', 'delete']);
		$estadio = $this->Estadios->get($id);
		if ($this->Estadios->delete($estadio)) {
			$this->Flash->success(__('The estadio has been deleted.'));
		} else {
			$this->Flash->error(__('The estadio could not be deleted. Please, try again.'));
		}

		return $this->redirect(['action' => 'index']);
	}
}
