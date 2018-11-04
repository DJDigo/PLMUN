<?php
App::uses('AppController', 'Controller');
/**
 * NstpFeedbacks Controller
 *
 * @property NstpFeedback $NstpFeedback
 * @property PaginatorComponent $Paginator
 */
class NstpFeedbacksController extends AppController {

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
            $model     = 'NstpFeedback';
            $save_data = $this->FeedbackCommon->get_department($data['department_name'], $data['serialize_data'], $model);
            $response  = "";
            if (empty($this->FeedbackCommon->__email_validations($save_data['NstpFeedback']['email'], 
                $save_data['NstpFeedback']['department_id'], $model))) {
                $this->NstpFeedback->clear();
                if ($this->NstpFeedback->save($save_data)) {
                    $this->Flash->success(__("Feedback has been successfully submit."));
                    $this->Session->delete('category');
                    $response = ['success' => 'success'];
                }
            } else {
                $error = $this->FeedbackCommon->__email_validations($save_data['NstpFeedback']['email'], $save_data['NstpFeedback']['department_id'], $model);
                $response = ['error' => $error];
            }
            return json_encode($response);
        }
    }
}
