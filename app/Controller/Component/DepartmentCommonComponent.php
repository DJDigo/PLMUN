<?php
App::uses('Component', 'Controller');

class DepartmentCommonComponent extends Component {


	public function get_departments($department_id) {
		$this->Department = ClassRegistry::init('Department');
		$departments = $this->Department->find('first' ,[
            'conditions' => [
                'Department.id' => $department_id
            ],
            'joins' => [
                [
                    'table' => 'deans',
                    'alias' => 'Dean',
                    'type'  => 'INNER',
                    'conditions' => [
                        'Dean.department_id = Department.id'
                    ]
                ],
                [
                    'table' => 'faculties',
                    'alias' => 'Faculty',
                    'type'  => 'INNER',
                    'conditions' => [
                        'Faculty.department_id = Department.id'
                    ]
                ]
            ],
            'fields' => ['*']
        ]);

		return $departments;
	}

	public function update_dean($data) { 
		$this->Dean = ClassRegistry::init('Dean');
		if ($this->Dean->save($data)) {
			return true;
		}
	}
}