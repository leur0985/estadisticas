<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Equipostorneos Controller
 *
 * @property \App\Model\Table\EquipostorneosTable $Equipostorneos
 *
 * @method \App\Model\Entity\Equipostorneo[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class EquipostorneosController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Torneos', 'Equipos']
        ];
        $equipostorneos = $this->paginate($this->Equipostorneos);

        $this->set(compact('equipostorneos'));
    }

    /**
     * View method
     *
     * @param string|null $id Equipostorneo id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $equipostorneo = $this->Equipostorneos->get($id, [
            'contain' => ['Equipos']
        ]);

        $this->set('equipostorneo', $equipostorneo);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $equipostorneo = $this->Equipostorneos->newEntity();
        if ($this->request->is('post')) {
            $equipostorneo = $this->Equipostorneos->patchEntity($equipostorneo, $this->request->getData());
            if ($this->Equipostorneos->save($equipostorneo)) {
                $this->Flash->success(__('The equipostorneo has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The equipostorneo could not be saved. Please, try again.'));
        }
        $torneos = $this->Equipostorneos->Torneos->find('list', ['limit' => 200]);
        $equipos = $this->Equipostorneos->Equipos->find('list', ['limit' => 200]);
        $this->set(compact('equipostorneo', 'torneos', 'equipos'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Equipostorneo id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $equipostorneo = $this->Equipostorneos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $equipostorneo = $this->Equipostorneos->patchEntity($equipostorneo, $this->request->getData());
            if ($this->Equipostorneos->save($equipostorneo)) {
                $this->Flash->success(__('The equipostorneo has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The equipostorneo could not be saved. Please, try again.'));
        }
        $torneos = $this->Equipostorneos->Torneos->find('list', ['limit' => 200]);
        $equipos = $this->Equipostorneos->Equipos->find('list', ['limit' => 200]);
        $this->set(compact('equipostorneo', 'torneos', 'equipos'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Equipostorneo id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $equipostorneo = $this->Equipostorneos->get($id);
        if ($this->Equipostorneos->delete($equipostorneo)) {
            $this->Flash->success(__('The equipostorneo has been deleted.'));
        } else {
            $this->Flash->error(__('The equipostorneo could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
