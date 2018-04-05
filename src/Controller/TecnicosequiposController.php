<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Tecnicosequipos Controller
 *
 * @property \App\Model\Table\TecnicosequiposTable $Tecnicosequipos
 */
class TecnicosequiposController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Equipos', 'Tecnicos']
        ];
        $tecnicosequipos = $this->paginate($this->Tecnicosequipos);

        $this->set(compact('tecnicosequipos'));
        $this->set('_serialize', ['tecnicosequipos']);
    }

    /**
     * View method
     *
     * @param string|null $id Tecnicosequipo id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $tecnicosequipo = $this->Tecnicosequipos->get($id, [
            'contain' => ['Equipos', 'Tecnicos']
        ]);

        $this->set('tecnicosequipo', $tecnicosequipo);
        $this->set('_serialize', ['tecnicosequipo']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $tecnicosequipo = $this->Tecnicosequipos->newEntity();
        if ($this->request->is('post')) {
            $tecnicosequipo = $this->Tecnicosequipos->patchEntity($tecnicosequipo, $this->request->data);
            if ($this->Tecnicosequipos->save($tecnicosequipo)) {
                $this->Flash->success(__('The tecnicosequipo has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The tecnicosequipo could not be saved. Please, try again.'));
            }
        }
        $equipos = $this->Tecnicosequipos->Equipos->find('list', ['limit' => 200]);
        $tecnicos = $this->Tecnicosequipos->Tecnicos->find('list', ['limit' => 200]);
        $this->set(compact('tecnicosequipo', 'equipos', 'tecnicos'));
        $this->set('_serialize', ['tecnicosequipo']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Tecnicosequipo id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $tecnicosequipo = $this->Tecnicosequipos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $tecnicosequipo = $this->Tecnicosequipos->patchEntity($tecnicosequipo, $this->request->data);
            if ($this->Tecnicosequipos->save($tecnicosequipo)) {
                $this->Flash->success(__('The tecnicosequipo has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The tecnicosequipo could not be saved. Please, try again.'));
            }
        }
        $equipos = $this->Tecnicosequipos->Equipos->find('list', ['limit' => 200]);
        $tecnicos = $this->Tecnicosequipos->Tecnicos->find('list', ['limit' => 200]);
        $this->set(compact('tecnicosequipo', 'equipos', 'tecnicos'));
        $this->set('_serialize', ['tecnicosequipo']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Tecnicosequipo id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $tecnicosequipo = $this->Tecnicosequipos->get($id);
        if ($this->Tecnicosequipos->delete($tecnicosequipo)) {
            $this->Flash->success(__('The tecnicosequipo has been deleted.'));
        } else {
            $this->Flash->error(__('The tecnicosequipo could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
