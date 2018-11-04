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

    public function __email_validations($email, $department_id, $model) {
        $this->$model = ClassRegistry::init($model);
        $error_message = "";
        if (!empty($email)) {
            $check_email_exist = $this->$model->findByEmailAndDepartmentId($email,$department_id);
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
    