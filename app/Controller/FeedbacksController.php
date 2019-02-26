<?php
App::uses('AppController', 'Controller');

class FeedbacksController extends AppController {
    public $uses = ['Feedback'];

    public function beforeFilter() {
        parent::beforeFilter();
        $type = Configure::read('type');
        $this->set(compact('type'));
    }    

    public function dean($id) {
        $this->Dean = ClassRegistry::init('Dean');
        $this->Department = ClassRegistry::init('Department');
        //checking if session is already exists
        $this->Session->delete('offices_id');
        if ($this->Session->check('feedback_id')) {
            $id = $this->Session->read('feedback_id');
        } else {
            $this->Session->write('feedback_id', $id);
        }
        
        $dean = $this->Dean->find('first', [
            'conditions' => ['Dean.id' => $id]
        ]);
        //checking if dean is exists
        if (empty($dean)) {
            $this->Session->delete('feedback_id');
            return $this->redirect(['controllers' => 'pages', 'action' => 'dashboard']);
        }

        $department = $this->Department->find('list', [
            'fields' => ['Department.name']
        ]);

        if ($this->request->is('post')) {
            $data['Feedback'] = $this->request->data;
            if (empty($this->FeedbackCommon->__email_validations($data))) {
                $this->Feedback->clear();
                if ($this->Feedback->save($data)) {
                    $this->Flash->success(__("Feedback has been successfully submit."));
                    return $this->redirect('/');
                }
            } else {
                $this->Flash->error(__($this->FeedbackCommon->__email_validations($data)));
            }
        }

        $this->set(compact('dean', 'department', 'id'));
    }

    public function faculty($id) {
        $this->Faculty = ClassRegistry::init('Faculty');
        $this->Department = ClassRegistry::init('Department');
        //checking if session is already exists
        $this->Session->delete('offices_id');
        if ($this->Session->check('feedback_id')) {
            $id = $this->Session->read('feedback_id');
        } else {
            $this->Session->write('feedback_id', $id);
        }
        $faculty = $this->Faculty->find('first', [
            'conditions' => ['Faculty.id' => $id]
        ]);
        //checking if faculty is exists
        if (empty($faculty)) {
            $this->Session->delete('feedback_id');
            return $this->redirect(['controllers' => 'pages', 'action' => 'dashboard']);
        }
        $department = $this->Department->find('list', [
            'fields' => ['Department.name']
        ]);

        if ($this->request->is('post')) {
            $data['Feedback'] = $this->request->data;
            if (empty($this->FeedbackCommon->__email_validations($data))) {
                $this->Feedback->clear();
                if ($this->Feedback->save($data)) {
                    $this->Flash->success(__("Feedback has been successfully submit."));
                    return $this->redirect('/');
                }
            } else {
                $this->Flash->error(__($this->FeedbackCommon->__email_validations($data)));
            }
        }

        $this->set(compact('faculty', 'department', 'id'));
    }

    public function registrar($id) {
        $this->Registrar = ClassRegistry::init('Registrar');
        $this->Department = ClassRegistry::init('Department');
        //checking if session is already exists
        $this->Session->delete('feedback_id');
        if ($this->Session->check('offices_id')) {
            $id = $this->Session->read('offices_id');
        } else {
            $this->Session->write('offices_id', $id);
        }
        $registrar = $this->Registrar->find('first', [
            'conditions' => ['Registrar.id' => $id]
        ]);

        $department = $this->Department->find('list', [
            'fields' => ['Department.name']
        ]);

        if ($this->request->is('post')) {
            $data['Feedback'] = $this->request->data;
            if (empty($this->FeedbackCommon->__email_validations($data))) {
                $this->Feedback->clear();
                if ($this->Feedback->save($data)) {
                    $this->Flash->success(__("Feedback has been successfully submit."));
                    return $this->redirect('/');
                }
            } else {
                $this->Flash->error(__($this->FeedbackCommon->__email_validations($data)));
            }
        }

        $this->set(compact('registrar', 'department', 'id'));
    }

    public function guidance($id) {
        $this->Guidance = ClassRegistry::init('Guidance');
        $this->Department = ClassRegistry::init('Department');
        //checking if session is already exists
        $this->Session->delete('feedback_id');
        if ($this->Session->check('offices_id')) {
            $id = $this->Session->read('offices_id');
        } else {
            $this->Session->write('offices_id', $id);
        }
        $guidance = $this->Guidance->find('first', [
            'conditions' => ['Guidance.id' => $id]
        ]);

        $department = $this->Department->find('list', [
            'fields' => ['Department.name']
        ]);

        if ($this->request->is('post')) {
            $data['Feedback'] = $this->request->data;
            if (empty($this->FeedbackCommon->__email_validations($data))) {
                $this->Feedback->clear();
                if ($this->Feedback->save($data)) {
                    $this->Flash->success(__("Feedback has been successfully submit."));
                    return $this->redirect('/');
                }
            } else {
                $this->Flash->error(__($this->FeedbackCommon->__email_validations($data)));
            }
        }

        $this->set(compact('guidance', 'department', 'id'));
    }

    public function nstp($id) {
        $this->Nstp = ClassRegistry::init('Nstp');
        $this->Department = ClassRegistry::init('Department');
        //checking if session is already exists
        $this->Session->delete('feedback_id');
        if ($this->Session->check('offices_id')) {
            $id = $this->Session->read('offices_id');
        } else {
            $this->Session->write('offices_id', $id);
        }
        $nstp = $this->Nstp->find('first', [
            'conditions' => ['Nstp.id' => $id]
        ]);

        $department = $this->Department->find('list', [
            'fields' => ['Department.name']
        ]);

        if ($this->request->is('post')) {
            $data['Feedback'] = $this->request->data;
            if (empty($this->FeedbackCommon->__email_validations($data))) {
                $this->Feedback->clear();
                if ($this->Feedback->save($data)) {
                    $this->Flash->success(__("Feedback has been successfully submit."));
                    return $this->redirect('/');
                }
            } else {
                $this->Flash->error(__($this->FeedbackCommon->__email_validations($data)));
            }
        }

        $this->set(compact('nstp', 'department', 'id'));
    }

    public function treasury($id) {
        $this->Treasury = ClassRegistry::init('Treasury');
        $this->Department = ClassRegistry::init('Department');
        //checking if session is already exists
        $this->Session->delete('feedback_id');
        if ($this->Session->check('offices_id')) {
            $id = $this->Session->read('offices_id');
        } else {
            $this->Session->write('offices_id', $id);
        }
        $treasury = $this->Treasury->find('first', [
            'conditions' => ['Treasury.id' => $id]
        ]);

        $department = $this->Department->find('list', [
            'fields' => ['Department.name']
        ]);

        if ($this->request->is('post')) {
            $data['Feedback'] = $this->request->data;
            if (empty($this->FeedbackCommon->__email_validations($data))) {
                $this->Feedback->clear();
                if ($this->Feedback->save($data)) {
                    $this->Flash->success(__("Feedback has been successfully submit."));
                    return $this->redirect('/');
                }
            } else {
                $this->Flash->error(__($this->FeedbackCommon->__email_validations($data)));
            }
        }

        $this->set(compact('treasury', 'department', 'id'));
    }
}