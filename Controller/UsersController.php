<?php
App::uses('AppController', 'Controller');
/**
 * Users Controller
 *
 * @property User $User
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class UsersController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Session');

	public function beforeFilter()
	{
		parent::beforeFilter();
		$this->Cookie->name = 'app-demo-id';
		$this->Cookie->time = '3600';
		$this->Cookie->secure = 'true';
		$this->Cookie->key = '37>]3%$W4FUYgf$>33hxrc{mFM/g7ri[Fkofcsa]4sEgx8Tdnjvy4wT@n';
    	$this->Cookie->httpOnly = true;
    	$this->Cookie->type('aes');
		$this->Auth->allow('add','logout');
	}

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->User->recursive = 0;
		$this->set('users', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->User->exists($id)) {
			throw new NotFoundException(__('Invalid user'));
		}
		$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
		$this->set('user', $this->User->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->User->create();
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash(__('The user has been saved.'));
				return $this->redirect(array('controller'=>'posts','action' => 'view'));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.'));
			}
		}
		$games = $this->User->Game->find('list');
		$this->set(compact('games'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->User->exists($id)) {
			throw new NotFoundException(__('Invalid user'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash(__('The user has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
			$this->request->data = $this->User->find('first', $options);
		}
		$games = $this->User->Game->find('list');
		$this->set(compact('games'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->User->id = $id;
		if (!$this->User->exists()) {
			throw new NotFoundException(__('Invalid user'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->User->delete()) {
			$this->Session->destroy();
			$this->Session->setFlash(__('The user has been deleted.'));
		} else {
			$this->Session->setFlash(__('The user could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

	public function login()
	{
		if ($this->request->is('post')) {
	        if ($this->Auth->login()) {
	        	//Buscamos informacion del usuario con el nombre del usuario.
	        	$userCookie = $this->sessionData($this->request->data['User']['username']);
	        	//Guardamos en la variable de sesion la informacion del usuario.
	        	$this->Cookie->write('User', $userCookie['User'],true);
	        	// //Buscamos el usuario correspondiente al nombre de usuario.
	        	// $user = $this->User->find('first', array('conditions' => array('User.username = ' => $this->request->data['User']['username'])));
	            return $this->redirect($this->Auth->redirect());
	        }
	        $this->Session->setFlash(__('Invalid username or password, try again'));
	    }
	}

	public function logout()
	{
		//Destruimos la sesion del usuario.
		$this->Cookie->destroy('User');
		return $this->redirect($this->Auth->logout());
	}

/*
*	sessionData method
*	Metodo para buscar informacion del usuario que va a ser guardada en sesion
*	@param string $username
*	@return object
*/
	public function sessionData($username){
		$user = $this->User->find('first', array('condition' => array('User.username = '.$username)));
		return $user;
	}
}
