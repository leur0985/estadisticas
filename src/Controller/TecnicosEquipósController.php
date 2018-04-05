<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * TecnicosEquipós Controller
 *
 * @property \App\Model\Table\TecnicosEquipósTable $TecnicosEquipós
 */
class TecnicosEquipósController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $tecnicosEquip?s = $this->paginate($this->TecnicosEquipós);

        $this->set(compact('tecnicosEquip?s'));
        $this->set('_serialize', ['tecnicosEquip?s']);
    }

    /**
     * View method
     *
     * @param string|null $id Tecnicos Equip? id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $tecnicosEquip? = $this->TecnicosEquipós->get($id, [
            'contain' => []
        ]);

        $this->set('tecnicosEquip?', $tecnicosEquip?);
        $this->set('_serialize', ['tecnicosEquip?']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $tecnicosEquip? = $this->TecnicosEquipós->newEntity();
        if ($this->request->is('post')) {
            $tecnicosEquip? = $this->TecnicosEquipós->patchEntity($tecnicosEquip?, $this->request->data);
            if ($this->TecnicosEquipós->save($tecnicosEquip?)) {
                $this->Flash->success(__('The tecnicos equip? has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The tecnicos equip? could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('tecnicosEquip?'));
        $this->set('_serialize', ['tecnicosEquip?']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Tecnicos Equip? id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $tecnicosEquip? = $this->TecnicosEquipós->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $tecnicosEquip? = $this->TecnicosEquipós->patchEntity($tecnicosEquip?, $this->request->data);
            if ($this->TecnicosEquipós->save($tecnicosEquip?)) {
                $this->Flash->success(__('The tecnicos equip? has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The tecnicos equip? could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('tecnicosEquip?'));
        $this->set('_serialize', ['tecnicosEquip?']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Tecnicos Equip? id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $tecnicosEquip? = $this->TecnicosEquipós->get($id);
        if ($this->TecnicosEquipós->delete($tecnicosEquip?)) {
            $this->Flash->success(__('The tecnicos equip? has been deleted.'));
        } else {
            $this->Flash->error(__('The tecnicos equip? could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
