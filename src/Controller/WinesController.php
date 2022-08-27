<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Wines Controller
 *
 * @property \App\Model\Table\WinesTable $Wines
 * @method \App\Model\Entity\Wine[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class WinesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Wineries', 'Styles'],
        ];
        $wines = $this->paginate($this->Wines);

        $this->set(compact('wines'));
    }

    /**
     * View method
     *
     * @param string|null $id Wine id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $wine = $this->Wines->get($id, [
            'contain' => ['Wineries', 'Styles', 'Vintages'],
        ]);

        $this->set(compact('wine'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $wine = $this->Wines->newEmptyEntity();
        if ($this->request->is('post')) {
            $wine = $this->Wines->patchEntity($wine, $this->request->getData());
            if ($this->Wines->save($wine)) {
                $this->Flash->success(__('The wine has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The wine could not be saved. Please, try again.'));
        }
        $wineries = $this->Wines->Wineries->find('list', ['limit' => 200])->all();
        $styles = $this->Wines->Styles->find('list', ['limit' => 200])->all();
        $this->set(compact('wine', 'wineries', 'styles'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Wine id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $wine = $this->Wines->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $wine = $this->Wines->patchEntity($wine, $this->request->getData());
            if ($this->Wines->save($wine)) {
                $this->Flash->success(__('The wine has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The wine could not be saved. Please, try again.'));
        }
        $wineries = $this->Wines->Wineries->find('list', ['limit' => 200])->all();
        $styles = $this->Wines->Styles->find('list', ['limit' => 200])->all();
        $this->set(compact('wine', 'wineries', 'styles'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Wine id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $wine = $this->Wines->get($id);
        if ($this->Wines->delete($wine)) {
            $this->Flash->success(__('The wine has been deleted.'));
        } else {
            $this->Flash->error(__('The wine could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
