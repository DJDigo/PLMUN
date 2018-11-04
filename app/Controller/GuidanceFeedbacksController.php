<?php
App::uses('AppController', 'Controller');
/**
 * GuidanceFeedbacks Controller
 *
 * @property GuidanceFeedback $GuidanceFeedback
 * @property PaginatorComponent $Paginator
 */
class GuidanceFeedbacksController extends AppController {

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
            $model     = 'GuidanceFeedback';
            $save_data = $this->FeedbackCommon->get_department($data['department_name'], $data['serialize_data'], $model);
            $response  = "";
            if (empty($this->FeedbackCommon->__email_validations($save_data['GuidanceFeedback']['email'], 
                $save_data['GuidanceFeedback']['department_id'], $model))) {
                $this->GuidanceFeedback->clear();
                if ($this->GuidanceFeedback->save($save_data)) {
                    $this->Flash->success(__("Feedback has been successfully submit."));
                    $this->Session->delete('category');
                    $response = ['success' => 'success'];
                }
            } else {
                $error = $this->FeedbackCommon->__email_validations($save_data['GuidanceFeedback']['email'], $save_data['GuidanceFeedback']['department_id'], $model);
                $response = ['error' => $error];
            }
            return json_encode($response);
        }
    }
}
