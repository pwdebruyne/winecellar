<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Vintages Controller
 *
 * @property \App\Model\Table\VintagesTable $Vintages
 * @method \App\Model\Entity\Vintage[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class VintagesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Wines', 'Classifications', 'Locations'],
        ];
        $vintages = $this->paginate($this->Vintages);

        $this->set(compact('vintages'));
    }

    /**
     * View method
     *
     * @param string|null $id Vintage id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $vintage = $this->Vintages->get($id, [
            'contain' => ['Wines', 'Classifications', 'Locations'],
        ]);

        $this->set(compact('vintage'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $vintage = $this->Vintages->newEmptyEntity();
        if ($this->request->is('post')) {
            $vintage = $this->Vintages->patchEntity($vintage, $this->request->getData());
            if ($this->Vintages->save($vintage)) {
                $this->Flash->success(__('The vintage has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The vintage could not be saved. Please, try again.'));
        }
        $wines = $this->Vintages->Wines->find('list', ['limit' => 200])->all();
        $classifications = $this->Vintages->Classifications->find('list', ['limit' => 200])->all();
        $locations = $this->Vintages->Locations->find('list', ['limit' => 200])->all();
        $this->set(compact('vintage', 'wines', 'classifications', 'locations'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Vintage id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $vintage = $this->Vintages->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $vintage = $this->Vintages->patchEntity($vintage, $this->request->getData());
            if ($this->Vintages->save($vintage)) {
                $this->Flash->success(__('The vintage has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The vintage could not be saved. Please, try again.'));
        }
        $wines = $this->Vintages->Wines->find('list', ['limit' => 200])->all();
        $classifications = $this->Vintages->Classifications->find('list', ['limit' => 200])->all();
        $locations = $this->Vintages->Locations->find('list', ['limit' => 200])->all();
        $this->set(compact('vintage', 'wines', 'classifications', 'locations'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Vintage id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $vintage = $this->Vintages->get($id);
        if ($this->Vintages->delete($vintage)) {
            $this->Flash->success(__('The vintage has been deleted.'));
        } else {
            $this->Flash->error(__('The vintage could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
