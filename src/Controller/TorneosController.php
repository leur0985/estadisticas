<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Torneos Controller
 *
 * @property \App\Model\Table\TorneosTable $Torneos
 *
 * @method \App\Model\Entity\Torneo[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class TorneosController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Equipos']
        ];
        $torneos = $this->paginate($this->Torneos->find('all', array('order'=>array('Torneos.inicio'=>'DESC'))));
        $this->set(compact('torneos'));
    }

    /**
     * View method
     *
     * @param string|null $id Torneo id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $this->LoadModel('Equipostorneos');
        $equipostorneos = $this->Equipostorneos->find('all')
        ->where(['Equipostorneos.torneo_id'=>$id])
        ->order(['Equipos.nombre'=>'ASC'])
        ->contain (['Equipos', 'Torneos']);
        $torneo = $this->Torneos->get($id, [
            'contain' => ['Equipos', 'Equipostorneos', 'Partidos', 'Puntos']
        ]);

        $this->set('equipostorneos', $equipostorneos);
        $this->set('torneo', $torneo);
       
        
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $torneo = $this->Torneos->newEntity();
        if ($this->request->is('post')) {
            $torneo = $this->Torneos->patchEntity($torneo, $this->request->getData());
            if ($this->Torneos->save($torneo)) {
                $this->Flash->success(__('The torneo has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The torneo could not be saved. Please, try again.'));
        }
        $equipos = $this->Torneos->Equipos->find('list', ['limit' => 200]);
        $this->set(compact('torneo', 'equipos'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Torneo id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $torneo = $this->Torneos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $torneo = $this->Torneos->patchEntity($torneo, $this->request->getData());
            if ($this->Torneos->save($torneo)) {
                $this->Flash->success(__('The torneo has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The torneo could not be saved. Please, try again.'));
        }
        $equipos = $this->Torneos->Equipos->find('list', ['limit' => 200]);
        $this->set(compact('torneo', 'equipos'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Torneo id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $torneo = $this->Torneos->get($id);
        if ($this->Torneos->delete($torneo)) {
            $this->Flash->success(__('The torneo has been deleted.'));
        } else {
            $this->Flash->error(__('The torneo could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
