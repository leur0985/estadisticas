<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Equipostelevisoras Controller
 *
 * @property \App\Model\Table\EquipostelevisorasTable $Equipostelevisoras
 */
class EquipostelevisorasController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Equipos', 'Televisoras']
        ];
        $equipostelevisoras = $this->paginate($this->Equipostelevisoras);

        $this->set(compact('equipostelevisoras'));
        $this->set('_serialize', ['equipostelevisoras']);
    }

    /**
     * View method
     *
     * @param string|null $id Equipostelevisora id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $equipostelevisora = $this->Equipostelevisoras->get($id, [
            'contain' => ['Equipos', 'Televisoras']
        ]);

        $this->set('equipostelevisora', $equipostelevisora);
        $this->set('_serialize', ['equipostelevisora']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $equipostelevisora = $this->Equipostelevisoras->newEntity();
        if ($this->request->is('post')) {
            $equipostelevisora = $this->Equipostelevisoras->patchEntity($equipostelevisora, $this->request->data);
            if ($this->Equipostelevisoras->save($equipostelevisora)) {
                $this->Flash->success(__('The equipostelevisora has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The equipostelevisora could not be saved. Please, try again.'));
            }
        }
        $equipos = $this->Equipostelevisoras->Equipos->find('list', ['limit' => 200]);
        $televisoras = $this->Equipostelevisoras->Televisoras->find('list', ['limit' => 200]);
        $this->set(compact('equipostelevisora', 'equipos', 'televisoras'));
        $this->set('_serialize', ['equipostelevisora']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Equipostelevisora id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $equipostelevisora = $this->Equipostelevisoras->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $equipostelevisora = $this->Equipostelevisoras->patchEntity($equipostelevisora, $this->request->data);
            if ($this->Equipostelevisoras->save($equipostelevisora)) {
                $this->Flash->success(__('The equipostelevisora has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The equipostelevisora could not be saved. Please, try again.'));
            }
        }
        $equipos = $this->Equipostelevisoras->Equipos->find('list', ['limit' => 200]);
        $televisoras = $this->Equipostelevisoras->Televisoras->find('list', ['limit' => 200]);
        $this->set(compact('equipostelevisora', 'equipos', 'televisoras'));
        $this->set('_serialize', ['equipostelevisora']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Equipostelevisora id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $equipostelevisora = $this->Equipostelevisoras->get($id);
        if ($this->Equipostelevisoras->delete($equipostelevisora)) {
            $this->Flash->success(__('The equipostelevisora has been deleted.'));
        } else {
            $this->Flash->error(__('The equipostelevisora could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
