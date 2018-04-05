<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Datasource\ConnectionManager;

/**
 * Arbitros Controller
 *
 * @property \App\Model\Table\ArbitrosTable $Arbitros
 */
class ArbitrosController extends AppController
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
        //$arbitros = $this->paginate($this->Arbitros);
        
        //$arbitros = $this->Arbitros->query("select i from arbitros");
        $connection = ConnectionManager::get('default');
      $results = $connection->execute("select a.id, a.iniciales, a.nombre, a.nacimiento, p.nombre as Pais, a.creado, YEAR(CURDATE())-YEAR(a.nacimiento) as Edad 
          from arbitros a 
          inner join paises p
          on p.id=a.pais_id");

       $this->set('results',$results);
        //$this->set('_serialize', ['results']);
    }

    /**
     * View method
     *
     * @param string|null $id Arbitro id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $arbitro = $this->Arbitros->get($id, [
            'contain' => ['Paises']
        ]);

        $this->set('arbitro', $arbitro);
        $this->set('_serialize', ['arbitro']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $arbitro = $this->Arbitros->newEntity();
        if ($this->request->is('post')) {
            $arbitro = $this->Arbitros->patchEntity($arbitro, $this->request->data);
            if ($this->Arbitros->save($arbitro)) {
                $this->Flash->success(__('The arbitro has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The arbitro could not be saved. Please, try again.'));
            }
        }
        $paises = $this->Arbitros->Paises->find('list', ['limit' => 200]);
        $this->set(compact('arbitro', 'paises'));
        $this->set('_serialize', ['arbitro']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Arbitro id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $arbitro = $this->Arbitros->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $arbitro = $this->Arbitros->patchEntity($arbitro, $this->request->data);
            if ($this->Arbitros->save($arbitro)) {
                $this->Flash->success(__('The arbitro has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The arbitro could not be saved. Please, try again.'));
            }
        }
        $paises = $this->Arbitros->Paises->find('list', ['limit' => 200]);
        $this->set(compact('arbitro', 'paises'));
        $this->set('_serialize', ['arbitro']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Arbitro id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $arbitro = $this->Arbitros->get($id);
        if ($this->Arbitros->delete($arbitro)) {
            $this->Flash->success(__('The arbitro has been deleted.'));
        } else {
            $this->Flash->error(__('The arbitro could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    
}
