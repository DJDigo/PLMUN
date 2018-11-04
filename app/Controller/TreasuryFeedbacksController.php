<?php
App::uses('AppController', 'Controller');
/**
 * TreasuryFeedbacks Controller
 *
 * @property TreasuryFeedback $TreasuryFeedback
 * @property PaginatorComponent $Paginator
 */
class TreasuryFeedbacksController extends AppController {

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
            $model     = 'TreasuryFeedback';
            $save_data = $this->FeedbackCommon->get_department($data['department_name'], $data['serialize_data'], $model);
            $response  = "";
            if (empty($this->FeedbackCommon->__email_validations($save_data['TreasuryFeedback']['email'], 
                $save_data['TreasuryFeedback']['department_id'], $model))) {
                $this->TreasuryFeedback->clear();
                if ($this->TreasuryFeedback->save($save_data)) {
                    $this->Flash->success(__("Feedback has been successfully submit."));
                    $this->Session->delete('category');
                    $response = ['success' => 'success'];
                }
            } else {
                $error = $this->FeedbackCommon->__email_validations($save_data['TreasuryFeedback']['email'], $save_data['TreasuryFeedback']['department_id'], $model);
                $response = ['error' => $error];
            }
            return json_encode($response);
        }
    }
}
