<?php
App::uses('AppController', 'Controller');

class DeanFeedbacksController extends AppController {

    public function add() {
        $this->autoRender = false; 
        if ($this->request->is('Ajax')) {
            $data      = $this->request->data;
            $save_data = $this->FeedbackCommon->get_department($data['department_name'], $data['serialize_data']);
            $response  = "";
            if (empty($this->__email_validations($save_data['DeanFeedback']['email'], $save_data['DeanFeedback']['department_id']))) {
                $this->DeanFeedback->clear();
                if ($this->DeanFeedback->save($save_data)) {
                    $this->Flash->success(__("Feedback has been successfully submit."));
                    $this->Session->delete('category');
                    $response = ['success' => 'success'];
                }
            } else {
                $error = $this->__email_validations($save_data['DeanFeedback']['email'], $save_data['DeanFeedback']['department_id']);
                $response = ['error' => $error];
            }
            return json_encode($response);
        }
    }

    private function __email_validations($email, $department_id) {
        $error_message = "";
        if (!empty($email)) {
            $check_email_exist = $this->DeanFeedback->findByEmailAndDepartmentId($email,$department_id);
            if ($check_email_exist) {
                $error_message = "Email is already exists.";
            } else { 
                if (!$this->__checkEmail($email)) {
                    $error_message = "Invalid email format.";
                }
            }
        } else {
            $error_message = "Email is required.";
        }

        return $error_message;
    }

    private function __checkEmail($email) {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return false;
        } else {
            return true;
        }
    }
}
