<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Confederacion Controller
 *
 * @property \App\Model\Table\ConfederacionTable $Confederacion
 */
class ConfederacionController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $confederacion = $this->paginate($this->Confederacion);

        $this->set(compact('confederacion'));
        $this->set('_serialize', ['confederacion']);
    }

    /**
     * View method
     *
     * @param string|null $id Confederacion id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $confederacion = $this->Confederacion->get($id, [
            'contain' => ['Paises']
        ]);

        $this->set('confederacion', $confederacion);
        $this->set('_serialize', ['confederacion']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $confederacion = $this->Confederacion->newEntity();
        if ($this->request->is('post')) {
            $confederacion = $this->Confederacion->patchEntity($confederacion, $this->request->data);
            if ($this->Confederacion->save($confederacion)) {
                $this->Flash->success(__('The confederacion has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The confederacion could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('confederacion'));
        $this->set('_serialize', ['confederacion']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Confederacion id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $confederacion = $this->Confederacion->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $confederacion = $this->Confederacion->patchEntity($confederacion, $this->request->data);
            if ($this->Confederacion->save($confederacion)) {
                $this->Flash->success(__('The confederacion has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The confederacion could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('confederacion'));
        $this->set('_serialize', ['confederacion']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Confederacion id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $confederacion = $this->Confederacion->get($id);
        if ($this->Confederacion->delete($confederacion)) {
            $this->Flash->success(__('The confederacion has been deleted.'));
        } else {
            $this->Flash->error(__('The confederacion could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
