<?php
App::uses('AppController', 'Controller');
/**
 * RegistrarFeedbacks Controller
 *
 * @property RegistrarFeedback $RegistrarFeedback
 * @property PaginatorComponent $Paginator
 */
class RegistrarFeedbacksController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

	public function add() {
        $this->autoRender = false; 
        if ($this->request->is('Ajax')) {
            $data      = $this->request->data;
            $model     = 'RegistrarFeedback';
            $save_data = $this->FeedbackCommon->get_department($data['department_name'], $data['serialize_data'], $model);
            $response  = "";
            if (empty($this->FeedbackCommon->__email_validations($save_data['RegistrarFeedback']['email'], 
                $save_data['RegistrarFeedback']['department_id'], $model))) {
                $this->RegistrarFeedback->clear();
                if ($this->RegistrarFeedback->save($save_data)) {
                    $this->Flash->success(__("Feedback has been successfully submit."));
                    $this->Session->delete('category');
                    $response = ['success' => 'success'];
                }
            } else {
                $error = $this->FeedbackCommon->__email_validations($save_data['RegistrarFeedback']['email'], $save_data['RegistrarFeedback']['department_id'], $model);
                $response = ['error' => $error];
            }
            return json_encode($response);
        }
    }
}
