<?php
App::uses('AppController', 'Controller');

class FacultyFeedbacksController extends AppController {

    public function add() {
        $this->autoRender = false; 
        if ($this->request->is('Ajax')) {
            $data      = $this->request->data;
            $model     = 'FacultyFeedback';
            $save_data = $this->FeedbackCommon->get_department($data['department_name'], $data['serialize_data'], $model);
            $response  = "";
            if (empty($this->FeedbackCommon->__email_validations($save_data['FacultyFeedback']['email'], 
                $save_data['FacultyFeedback']['department_id'], $model))) {
                $this->FacultyFeedback->clear();
                if ($this->FacultyFeedback->save($save_data)) {
                    $this->Flash->success(__("Feedback has been successfully submit."));
                    $this->Session->delete('category');
                    $response = ['success' => 'success'];
                }
            } else {
                $error = $this->FeedbackCommon->__email_validations($save_data['FacultyFeedback']['email'], $save_data['FacultyFeedback']['department_id'], $model);
                $response = ['error' => $error];
            }
            return json_encode($response);
        }
    }
}
