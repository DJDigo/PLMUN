<?php
App::uses('AppController', 'Controller');
/**
 * Users Controller
 *
 * @property User $User
 * @property PaginatorComponent $Paginator
 */
class UsersController extends AppController {

    public function beforeFilter() {
        parent::beforeFilter();
        $this->layout = 'admin';
    }


    public function register() {
     $data = ['username' => 'admin', 'password' => 'admin'];

     if ($this->User->save($data)) {
         echo "successfully saved.";
         die();
     }
    }

    public function login() {
        if ($this->request->is('post')) {
            $this->Auth->logout();
            if ($this->request->data['User']['username'] == '') {
                $this->Flash->error(__('Please enter your username.'));
                return $this->redirect('/superadmin/login');
            } elseif ($this->request->data['User']['password'] == '') {
                $this->Flash->error(__('Please input your password'));
                return $this->redirect('/superadmin/login');
            }
            if ($this->Auth->login()) {
                return $this->redirect('/superadmin/index');
            } else {
                $this->Flash->error(__('Invalid username or password.'));
                return $this->redirect('/superadmin/login');
            }
        }
    }

    public function index() {
        
    }

    public function logout() {
        if( $this->Auth->logout() ){
            return $this->redirect('/superadmin/login');
        }
    }
}
