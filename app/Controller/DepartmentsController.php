<?php
App::uses('AppController', 'Controller');

class DepartmentsController extends AppController {

    public $components = ['DepartmentCommon'];


    public function beforeFilter() {
        parent::beforeFilter();
        $this->layout = 'admin';
    }

    public function citcs() {
        $department_id = 1;
        $department = $this->DepartmentCommon->get_departments($department_id);

        $this->set(compact('department'));
    }

    public function cas() {
        $department_id = 2;
        $department = $this->DepartmentCommon->get_departments($department_id);

        $this->set(compact('department'));
    }

    public function cba() {
        $department_id = 3;
        $department = $this->DepartmentCommon->get_departments($department_id);

        $this->set(compact('department'));
    }

    public function cte() {
        $department_id = 4;
        $department = $this->DepartmentCommon->get_departments($department_id);

        $this->set(compact('department'));
    }

    public function ccj() {
        $department_id = 5;
        $department = $this->DepartmentCommon->get_departments($department_id);

        $this->set(compact('department'));
    }

    public function offices() {
        $department_id = 6;
        $department = $this->DepartmentCommon->get_departments($department_id);

        $this->set(compact('department'));
    }

    public function dean_edit($id) {
        $this->Dean = ClassRegistry::init('Dean');
        $dean = $this->Dean->find('first', [
            'conditions' => ['Dean.id' => $id]
        ]);

        if ($this->request->is(['post', 'put'])) {
            $data = $this->request->data;
            $this->Dean->id = $id;
            $this->Dean->set($data);
            if ($this->Dean->save($data)) {
                $this->Flash->success(__('Dean has been successfully updated.'));
                return $this->redirect('/superadmin/dean/'.$id);
            }

        }
        if (!$this->request->data) {
            $this->request->data = $dean;
        }
        $this->set(compact('dean'));
    }

    public function faculty_edit($id) {
        $this->Faculty = ClassRegistry::init('Faculty');
        $faculty = $this->Faculty->find('first', [
            'conditions' => ['Faculty.id' => $id]
        ]);

        if ($this->request->is(['post', 'put'])) {
            $data = $this->request->data;
            $this->Faculty->id = $id;
            $this->Faculty->set($data);
            if ($this->Faculty->save($data)) {
                $this->Flash->success(__('Faculty has been successfully updated.'));
                return $this->redirect('/superadmin/faculty/'.$id);
            }
        }
        if (!$this->request->data) {
            $this->request->data = $faculty;
        }
        $this->set(compact('faculty'));
    }

    public function registrar_edit($id) {
        $this->Registrar = ClassRegistry::init('Registrar');
        $registrar = $this->Registrar->find('first', [
            'conditions' => ['Registrar.id' => $id]
        ]);

        if ($this->request->is(['post', 'put'])) {
            $data = $this->request->data;
            $this->Registrar->id = $id;
            $this->Registrar->set($data);
            if ($this->Registrar->save($data)) {
                $this->Flash->success(__('Registrar has been successfully updated.'));
                return $this->redirect('/superadmin/registrar/'.$id);
            }
        }
        if (!$this->request->data) {
            $this->request->data = $registrar;
        }
        $this->set(compact('registrar'));
    }

    public function treasury_edit($id) {
        $this->Treasury = ClassRegistry::init('Treasury');
        $treasury = $this->Treasury->find('first', [
            'conditions' => ['Treasury.id' => $id]
        ]);

        if ($this->request->is(['post', 'put'])) {
            $data = $this->request->data;
            $this->Treasury->id = $id;
            $this->Treasury->set($data);
            if ($this->Treasury->save($data)) {
                $this->Flash->success(__('Treasury has been successfully updated.'));
                return $this->redirect('/superadmin/treasury/'.$id);
            }
        }
        if (!$this->request->data) {
            $this->request->data = $treasury;
        }
        $this->set(compact('treasury'));
    }

    public function guidance_edit($id) {
        $this->Guidance = ClassRegistry::init('Guidance');
        $guidance = $this->Guidance->find('first', [
            'conditions' => ['Guidance.id' => $id]
        ]);

        if ($this->request->is(['post', 'put'])) {
            $data = $this->request->data;
            $this->Guidance->id = $id;
            $this->Guidance->set($data);
            if ($this->Guidance->save($data)) {
                $this->Flash->success(__('Guidance has been successfully updated.'));
                return $this->redirect('/superadmin/guidance/'.$id);
            }
        }
        if (!$this->request->data) {
            $this->request->data = $guidance;
        }
        $this->set(compact('guidance'));
    }

    public function nstp_edit($id) {
        $this->Nstp = ClassRegistry::init('Nstp');
        $nstp = $this->Nstp->find('first', [
            'conditions' => ['Nstp.id' => $id]
        ]);

        if ($this->request->is(['post', 'put'])) {
            $data = $this->request->data;
            $this->Nstp->id = $id;
            $this->Nstp->set($data);
            if ($this->Nstp->save($data)) {
                $this->Flash->success(__('Nstp has been successfully updated.'));
                return $this->redirect('/superadmin/nstp/'.$id);
            }
        }
        if (!$this->request->data) {
            $this->request->data = $nstp;
        }
        $this->set(compact('nstp'));
    }

    public function reviews() {
        $this->Feedback = ClassRegistry::init('Feedback');
        $type           = Configure::read('get_type');
        $ddepartments   = Configure::read('departments');
        $feedbacks      = $this->Feedback->find('all');

        $this->set(compact('type', 'feedbacks', 'ddepartments'));
    }

    public function view($id) {
        $this->Feedback = ClassRegistry::init('Feedback');
        $type           = Configure::read('get_type');
        $feedback       = $this->Feedback->find('first', [
            'conditions' => ['Feedback.id' => $id]
        ]);

        $this->set(compact('type', 'feedback'));
    }
}
