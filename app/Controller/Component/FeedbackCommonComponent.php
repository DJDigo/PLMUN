<?php
App::uses('Component', 'Controller');

class FeedbackCommonComponent extends Component {
    
    public function get_department($name, $data, $model) {
        $this->Department = ClassRegistry::init('Department');
        $new_data         = [];

        $department_id = $this->Department->findByName($name);

        foreach ($data as $key => $value) {
            $new_data[$model][$value['name']] = $value['value'];
        }

        $new_data[$model]['department_id'] = $department_id['Department']['id'];

        return $new_data;
    }

    public function __email_validations($data) {
        $this->Feedback = ClassRegistry::init('Feedback');
        $error_message = "";
        if (!empty($data)) {
            $check_email_exist = $this->Feedback->find('first', [
                'conditions' => [
                    'Feedback.email' => $data['Feedback']['email'],
                    'Feedback.department_id' => $data['Feedback']['department_id'],
                    'Feedback.type' => $data['Feedback']['type']
                ]
            ]);
            if ($check_email_exist) {
                $error_message = "Email is already exists.";
            } else { 
                if (!$this->__checkEmail($data['Feedback']['email'])) {
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
    