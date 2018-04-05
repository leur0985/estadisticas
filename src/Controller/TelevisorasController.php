<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Televisoras Controller
 *
 * @property \App\Model\Table\TelevisorasTable $Televisoras
 */
class TelevisorasController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $televisoras = $this->paginate($this->Televisoras);

        $this->set(compact('televisoras'));
        $this->set('_serialize', ['televisoras']);
    }

    /**
     * View method
     *
     * @param string|null $id Televisora id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $televisora = $this->Televisoras->get($id, [
            'contain' => []
        ]);

        $this->set('televisora', $televisora);
        $this->set('_serialize', ['televisora']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $televisora = $this->Televisoras->newEntity();
        if ($this->request->is('post')) {
            $televisora = $this->Televisoras->patchEntity($televisora, $this->request->data);
            if ($this->Televisoras->save($televisora)) {
                $this->Flash->success(__('The televisora has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The televisora could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('televisora'));
        $this->set('_serialize', ['televisora']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Televisora id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $televisora = $this->Televisoras->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $televisora = $this->Televisoras->patchEntity($televisora, $this->request->data);
            if ($this->Televisoras->save($televisora)) {
                $this->Flash->success(__('The televisora has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The televisora could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('televisora'));
        $this->set('_serialize', ['televisora']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Televisora id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $televisora = $this->Televisoras->get($id);
        if ($this->Televisoras->delete($televisora)) {
            $this->Flash->success(__('The televisora has been deleted.'));
        } else {
            $this->Flash->error(__('The televisora could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
