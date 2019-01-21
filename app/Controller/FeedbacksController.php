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

        $dean = $this->Dean->find('first', [
            'conditions' => ['Dean.id' => $id]
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

        $this->set(compact('dean', 'department', 'id'));
    }

    public function faculty($id) {
        $this->Faculty = ClassRegistry::init('Faculty');
        $this->Department = ClassRegistry::init('Department');

        $faculty = $this->Faculty->find('first', [
            'conditions' => ['Faculty.id' => $id]
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

        $this->set(compact('faculty', 'department', 'id'));
    }

    public function registrar($id) {
        $this->Registrar = ClassRegistry::init('Registrar');
        $this->Department = ClassRegistry::init('Department');

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