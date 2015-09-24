<?php
App::uses('AppController', 'Controller');
/**
 * Genres Controller
 *
 * @property Genre $Genre
 * @property PaginatorComponent $Paginator
 * @property FlashComponent $Flash
 * @property SessionComponent $Session
 */
class GenresController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Flash', 'RequestHandler', 'Session');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Genre->recursive = 0;
		$this->set('genres', $this->Paginator->paginate());
	}

/**
 * getindex.json method
 *
 * @return void
 */
	public function getindex() {
		$genres = $this->Genre->find('all');
		$this->set(array('genres' => $genres, '_serialize' => array('genres')));
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Genre->exists($id)) {
			throw new NotFoundException(__('Invalid genre'));
		}
		$options = array('conditions' => array('Genre.' . $this->Genre->primaryKey => $id));
		$this->set('genre', $this->Genre->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Genre->create();
			if ($this->Genre->save($this->request->data)) {
				$this->Flash->success(__('The genre has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The genre could not be saved. Please, try again.'));
			}
		}
		$movies = $this->Genre->Movie->find('list');
		$this->set(compact('movies'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Genre->exists($id)) {
			throw new NotFoundException(__('Invalid genre'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Genre->save($this->request->data)) {
				$this->Flash->success(__('The genre has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The genre could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Genre.' . $this->Genre->primaryKey => $id));
			$this->request->data = $this->Genre->find('first', $options);
		}
		$movies = $this->Genre->Movie->find('list');
		$this->set(compact('movies'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Genre->id = $id;
		if (!$this->Genre->exists()) {
			throw new NotFoundException(__('Invalid genre'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Genre->delete()) {
			$this->Flash->success(__('The genre has been deleted.'));
		} else {
			$this->Flash->error(__('The genre could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
