<?php
App::uses('AppController', 'Controller');
/**
 * GenresMovies Controller
 *
 * @property GenresMovie $GenresMovie
 * @property PaginatorComponent $Paginator
 * @property FlashComponent $Flash
 * @property SessionComponent $Session
 */
class GenresMoviesController extends AppController {

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
		$this->GenresMovie->recursive = 0;
		$this->set('genresMovies', $this->Paginator->paginate());
	}

/**
 * getindex.json method
 *
 * @return void
 */
	public function getindex() {
		$genresMovies = $this->GenresMovie->find('all');
		$this->set(array('genresMovies' => $genresMovies, '_serialize' => array('genresMovies')));
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->GenresMovie->exists($id)) {
			throw new NotFoundException(__('Invalid genres movie'));
		}
		$options = array('conditions' => array('GenresMovie.' . $this->GenresMovie->primaryKey => $id));
		$this->set('genresMovie', $this->GenresMovie->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->GenresMovie->create();
			if ($this->GenresMovie->save($this->request->data)) {
				$this->Flash->success(__('The genres movie has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The genres movie could not be saved. Please, try again.'));
			}
		}
		$genres = $this->GenresMovie->Genre->find('list');
		$movies = $this->GenresMovie->Movie->find('list');
		$this->set(compact('genres', 'movies'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->GenresMovie->exists($id)) {
			throw new NotFoundException(__('Invalid genres movie'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->GenresMovie->save($this->request->data)) {
				$this->Flash->success(__('The genres movie has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The genres movie could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('GenresMovie.' . $this->GenresMovie->primaryKey => $id));
			$this->request->data = $this->GenresMovie->find('first', $options);
		}
		$genres = $this->GenresMovie->Genre->find('list');
		$movies = $this->GenresMovie->Movie->find('list');
		$this->set(compact('genres', 'movies'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->GenresMovie->id = $id;
		if (!$this->GenresMovie->exists()) {
			throw new NotFoundException(__('Invalid genres movie'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->GenresMovie->delete()) {
			$this->Flash->success(__('The genres movie has been deleted.'));
		} else {
			$this->Flash->error(__('The genres movie could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
