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
                    'type'  => 'LEFT',
                    'conditions' => [
                        'Dean.department_id = Department.id'
                    ]
                ],
                [
                    'table' => 'faculties',
                    'alias' => 'Faculty',
                    'type'  => 'LEFT',
                    'conditions' => [
                        'Faculty.department_id = Department.id'
                    ]
                ],
                [
                    'table' => 'registrar',
                    'alias' => 'Registrar',
                    'type'  => 'LEFT',
                    'conditions' => [
                        'Registrar.department_id = Department.id'
                    ]
                ],
                [
                    'table' => 'guidance',
                    'alias' => 'Guidance',
                    'type'  => 'LEFT',
                    'conditions' => [
                        'Guidance.department_id = Department.id'
                    ]
                ],
                [
                    'table' => 'nstp',
                    'alias' => 'Nstp',
                    'type'  => 'LEFT',
                    'conditions' => [
                        'Nstp.department_id = Department.id'
                    ]
                ],
                [
                    'table' => 'treasury',
                    'alias' => 'Treasury',
                    'type'  => 'LEFT',
                    'conditions' => [
                        'Treasury.department_id = Department.id'
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