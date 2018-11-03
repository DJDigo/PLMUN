<?php
App::uses('Component', 'Controller');

class FeedbackCommonComponent extends Component {
    
    public function get_department($name, $data) {
        $this->Department = ClassRegistry::init('Department');
        $new_data         = [];

        $department_id = $this->Department->findByName($name);

        foreach ($data as $key => $value) {
            $new_data['DeanFeedback'][$value['name']] = $value['value'];
        }

        $new_data['DeanFeedback']['department_id'] = $department_id['Department']['id'];

        return $new_data;
    }
}
    