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

    public function edit_dean() {
    
    }

    public function edit_staff() {
        
    }

    public function view_department() {
        
    }

    public function reviews() {
        
    }
    
    public function view_review() {
        
    }

    public function get_ratings() {
        $this->autoRender = false;
        $get_type = Configure::read('get_type');
        $type = Configure::read('type');

        if ($this->request->is('ajax')) {
            $data = $this->request->data;
            $this->FeedBack = ClassRegistry::init('Feedback');

            $feedbacks = $this->FeedBack->find('all', [
                'conditions' => ['Feedback.department_id' => $data['id']],
                'order' => 'Feedback.type DESC'
            ]);
            
            if ($data['id'] == 6) {
                $ratings = [
                    'value' => [
                        [
                            'subordinate' => $get_type[$type['registrar']],
                            'data_value' => $this->get_total_ratings($feedbacks, $type['registrar'])
                        ],
                        [
                            'subordinate' => $get_type[$type['treasury']],
                            'data_value' => $this->get_total_ratings($feedbacks, $type['treasury'])
                        ],
                        [
                            'subordinate' => $get_type[$type['guidance']],
                            'data_value' => $this->get_total_ratings($feedbacks, $type['guidance'])
                        ],
                        [
                            'subordinate' => $get_type[$type['nstp']],
                            'data_value' => $this->get_total_ratings($feedbacks, $type['nstp'])
                        ]
                    ]
                ];
            } else {
                $ratings = [
                    'value' => [
                        [
                            'subordinate' => $get_type[$type['dean']],
                            'data_value' => $this->get_total_ratings($feedbacks, $type['dean'])
                        ],
                        [
                            'subordinate' => $get_type[$type['faculty']],
                            'data_value' => $this->get_total_ratings($feedbacks, $type['faculty'])
                        ]
                    ]
                ];
            }
            return json_encode($ratings);
        }
    }

    private function get_total_ratings($feedbacks, $type) {
        $rating_1 = 0;
        $rating_2 = 0;
        $rating_3 = 0;
        $rating_4 = 0;
        $rating_5 = 0;
        $rating_6 = 0;
        $rating_7 = 0;
        $rating_8 = 0;
        if (!empty($feedbacks)) {
            $number_feedbacks = count($feedbacks);
            foreach ($feedbacks as $feedback) {
                if ($type == $feedback['Feedback']['type']) {
                    $rating_1 += $feedback['Feedback']['rating_1'];
                    $rating_2 += $feedback['Feedback']['rating_2'];
                    $rating_3 += $feedback['Feedback']['rating_3'];
                    $rating_4 += $feedback['Feedback']['rating_4'];
                    $rating_5 += $feedback['Feedback']['rating_5'];
                    $rating_6 += $feedback['Feedback']['rating_6'];
                    $rating_7 += $feedback['Feedback']['rating_7'];
                    $rating_8 += $feedback['Feedback']['rating_8'];
                }
            }
        }
        return [
            $rating_1 != 0 ? round($number_feedbacks / $rating_1*100) : 0,
            $rating_2 != 0 ? round($number_feedbacks / $rating_2*100) : 0,
            $rating_3 != 0 ? round($number_feedbacks / $rating_3*100) : 0,
            $rating_4 != 0 ? round($number_feedbacks / $rating_4*100) : 0,
            $rating_5 != 0 ? round($number_feedbacks / $rating_5*100) : 0,
            $rating_6 != 0 ? round($number_feedbacks / $rating_6*100) : 0,
            $rating_7 != 0 ? round($number_feedbacks / $rating_7*100) : 0,
            $rating_8 != 0 ? round($number_feedbacks / $rating_8*100) : 0
        ];
    }
}
