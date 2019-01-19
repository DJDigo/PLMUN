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
}
