<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Wineries Controller
 *
 * @property \App\Model\Table\WineriesTable $Wineries
 * @method \App\Model\Entity\Winery[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class WineriesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Regions'],
        ];
        $wineries = $this->paginate($this->Wineries);

        $this->set(compact('wineries'));
    }

    /**
     * View method
     *
     * @param string|null $id Winery id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $winery = $this->Wineries->get($id, [
            'contain' => ['Regions', 'Wines'],
        ]);

        $this->set(compact('winery'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $winery = $this->Wineries->newEmptyEntity();
        if ($this->request->is('post')) {
            $winery = $this->Wineries->patchEntity($winery, $this->request->getData());
            if ($this->Wineries->save($winery)) {
                $this->Flash->success(__('The winery has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The winery could not be saved. Please, try again.'));
        }
        $regions = $this->Wineries->Regions->find('list', ['limit' => 200])->all();
        $this->set(compact('winery', 'regions'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Winery id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $winery = $this->Wineries->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $winery = $this->Wineries->patchEntity($winery, $this->request->getData());
            if ($this->Wineries->save($winery)) {
                $this->Flash->success(__('The winery has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The winery could not be saved. Please, try again.'));
        }
        $regions = $this->Wineries->Regions->find('list', ['limit' => 200])->all();
        $this->set(compact('winery', 'regions'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Winery id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $winery = $this->Wineries->get($id);
        if ($this->Wineries->delete($winery)) {
            $this->Flash->success(__('The winery has been deleted.'));
        } else {
            $this->Flash->error(__('The winery could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
