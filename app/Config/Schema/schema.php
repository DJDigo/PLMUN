<?php 
class AppSchema extends CakeSchema {

    public function before($event = array()) {
        return true;
    }

    public function after($event = array()) {
    }

    public $departments = [
        'id' => [
            'type' => 'integer', 
            'null' => false, 
            'default' => null, 
            'unsigned' => false, 
            'key' => 'primary'
        ],
        'name' => [
            'type' => 'string', 
            'null' => false, 
            'default' => null, 
            'collate' => 'utf8_general_ci', 
            'charset' => 'utf8', 
            'comment' => 'Department Name'
        ],
        'created' => [
            'type' => 'datetime', 
            'null' => true, 
            'default' => null,
            'comment' => 'Date Created'
        ],
        'modified' => [
            'type' => 'datetime', 
            'null' => true, 
            'default' => null,
            'comment' => 'Modified Date'
        ],
        'deleted' => [
            'type' => 'boolean', 
            'null' => false, 
            'default' => 0, 
            'unsigned' => false,
            'comment' => '0: not deleted 1: deleted'
        ],
        'deleted_date' => [
            'type' => 'datetime', 
            'null' => true, 
            'default' => null,
            'comment' => 'Deleted date'
        ],
        'indexes' => [
            'PRIMARY' => [
                'column' => 'id', 
                'unique' => 1
            ]
        ]
    ];

    public $faculties = [
        'id' => [
            'type' => 'integer', 
            'null' => false, 
            'default' => null, 
            'unsigned' => false, 
            'key' => 'primary'
        ],
        'department_id' => [
            'type' => 'integer', 
            'null' => false, 
            'default' => null, 
            'unsigned' => false, 
            'comment' => 'Foreign Key'
        ],
        'title' => [
            'type' => 'string', 
            'null' => false, 
            'default' => null, 
            'collate' => 'utf8_general_ci', 
            'charset' => 'utf8', 
            'comment' => 'Title'
        ],
        'description' => [
            'type' => 'string', 
            'null' => false, 
            'default' => null, 
            'collate' => 'utf8_general_ci', 
            'charset' => 'utf8', 
            'comment' => 'Title'
        ],
        'created' => [
            'type' => 'datetime', 
            'null' => true, 
            'default' => null,
            'comment' => 'Date Created'
        ],
        'modified' => [
            'type' => 'datetime', 
            'null' => true, 
            'default' => null,
            'comment' => 'Modified Date'
        ],
        'deleted' => [
            'type' => 'boolean', 
            'null' => false, 
            'default' => 0, 
            'unsigned' => false,
            'comment' => '0: not deleted 1: deleted'
        ],
        'deleted_date' => [
            'type' => 'datetime', 
            'null' => true, 
            'default' => null,
            'comment' => 'Deleted date'
        ],
        'indexes' => [
            'PRIMARY' => [
                'column' => 'id', 
                'unique' => 1
            ],
            'department_id' => [
                'column' => 'department_id',
                'unique' => 0
            ]
        ]
    ];

    public $deans = [
        'id' => [
            'type' => 'integer', 
            'null' => false, 
            'default' => null, 
            'unsigned' => false, 
            'key' => 'primary'
        ],
        'department_id' => [
            'type' => 'integer', 
            'null' => false, 
            'default' => null, 
            'unsigned' => false, 
            'comment' => 'Foreign Key'
        ],
        'title' => [
            'type' => 'string', 
            'null' => false, 
            'default' => null, 
            'collate' => 'utf8_general_ci', 
            'charset' => 'utf8', 
            'comment' => 'Title'
        ],
        'description' => [
            'type' => 'string', 
            'null' => false, 
            'default' => null, 
            'collate' => 'utf8_general_ci', 
            'charset' => 'utf8', 
            'comment' => 'Title'
        ],
        'created' => [
            'type' => 'datetime', 
            'null' => true, 
            'default' => null,
            'comment' => 'Date Created'
        ],
        'modified' => [
            'type' => 'datetime', 
            'null' => true, 
            'default' => null,
            'comment' => 'Modified Date'
        ],
        'deleted' => [
            'type' => 'boolean', 
            'null' => false, 
            'default' => 0, 
            'unsigned' => false,
            'comment' => '0: not deleted 1: deleted'
        ],
        'deleted_date' => [
            'type' => 'datetime', 
            'null' => true, 
            'default' => null,
            'comment' => 'Deleted date'
        ],
        'indexes' => [
            'PRIMARY' => [
                'column' => 'id', 
                'unique' => 1
            ],
            'department_id' => [
                'column' => 'department_id',
                'unique' => 0
            ]
        ]
    ];
    
    public $faculty_feedbacks = [
        'id' => [
            'type' => 'integer', 
            'null' => false, 
            'default' => null, 
            'unsigned' => false, 
            'key' => 'primary'
        ],
        'department_id' => [
            'type' => 'integer', 
            'null' => false, 
            'default' => null, 
            'unsigned' => false, 
            'comment' => 'Foreign Key'
        ],
        'email' => [
            'type' => 'string', 
            'null' => false, 
            'default' => null, 
            'collate' => 'utf8_general_ci', 
            'charset' => 'utf8',
            'comment' => 'Email of user', 
            'length' => 1000
        ],
        'suggestion' => [
            'type' => 'string', 
            'null' => false, 
            'default' => null, 
            'collate' => 'utf8_general_ci', 
            'charset' => 'utf8',
            'comment' => 'Suggestions', 
            'length' => 1000 
        ],
        'rating_1' => [
            'type' => 'integer', 
            'null' => false, 
            'default' => null, 
            'unsigned' => false
        ],
        'rating_2' => [
            'type' => 'integer', 
            'null' => false, 
            'default' => null, 
            'unsigned' => false
        ],
        'rating_3' => [
            'type' => 'integer', 
            'null' => false, 
            'default' => null, 
            'unsigned' => false
        ],
        'rating_4' => [
            'type' => 'integer', 
            'null' => false, 
            'default' => null, 
            'unsigned' => false
        ],
        'rating_5' => [
            'type' => 'integer', 
            'null' => false, 
            'default' => null, 
            'unsigned' => false
        ],
        'rating_6' => [
            'type' => 'integer', 
            'null' => false, 
            'default' => null, 
            'unsigned' => false
        ],
        'rating_7' => [
            'type' => 'integer', 
            'null' => false, 
            'default' => null, 
            'unsigned' => false
        ],
        'rating_8' => [
            'type' => 'integer', 
            'null' => false, 
            'default' => null, 
            'unsigned' => false
        ],
        'created' => [
            'type' => 'datetime', 
            'null' => true, 
            'default' => null,
            'comment' => 'Date Created'
        ],
        'modified' => [
            'type' => 'datetime', 
            'null' => true, 
            'default' => null,
            'comment' => 'Modified Date'
        ],
        'deleted' => [
            'type' => 'boolean', 
            'null' => false, 
            'default' => 0, 
            'unsigned' => false,
            'comment' => '0: not deleted 1: deleted'
        ],
        'deleted_date' => [
            'type' => 'datetime', 
            'null' => true, 
            'default' => null,
            'comment' => 'Deleted date'
        ],
        'indexes' => [
            'PRIMARY' => [
                'column' => 'id', 
                'unique' => 1
            ],
            'department_id' => [
                'column' => 'department_id'
            ]
        ]
    ];

    public $dean_feedbacks = [
        'id' => [
            'type' => 'integer', 
            'null' => false, 
            'default' => null, 
            'unsigned' => false, 
            'key' => 'primary'
        ],
        'department_id' => [
            'type' => 'integer', 
            'null' => false, 
            'default' => null, 
            'unsigned' => false, 
            'comment' => 'Foreign Key'
        ],
        'email' => [
            'type' => 'string', 
            'null' => false, 
            'default' => null, 
            'collate' => 'utf8_general_ci', 
            'charset' => 'utf8',
            'comment' => 'Email of user', 
            'length' => 1000
        ],
        'suggestion' => [
            'type' => 'string', 
            'null' => false, 
            'default' => null, 
            'collate' => 'utf8_general_ci', 
            'charset' => 'utf8',
            'comment' => 'Suggestions', 
            'length' => 1000 
        ],
        'rating_1' => [
            'type' => 'integer', 
            'null' => false, 
            'default' => null, 
            'unsigned' => false
        ],
        'rating_2' => [
            'type' => 'integer', 
            'null' => false, 
            'default' => null, 
            'unsigned' => false
        ],
        'rating_3' => [
            'type' => 'integer', 
            'null' => false, 
            'default' => null, 
            'unsigned' => false
        ],
        'rating_4' => [
            'type' => 'integer', 
            'null' => false, 
            'default' => null, 
            'unsigned' => false
        ],
        'rating_5' => [
            'type' => 'integer', 
            'null' => false, 
            'default' => null, 
            'unsigned' => false
        ],
        'rating_6' => [
            'type' => 'integer', 
            'null' => false, 
            'default' => null, 
            'unsigned' => false
        ],
        'rating_7' => [
            'type' => 'integer', 
            'null' => false, 
            'default' => null, 
            'unsigned' => false
        ],
        'rating_8' => [
            'type' => 'integer', 
            'null' => false, 
            'default' => null, 
            'unsigned' => false
        ],
        'created' => [
            'type' => 'datetime', 
            'null' => true, 
            'default' => null,
            'comment' => 'Date Created'
        ],
        'modified' => [
            'type' => 'datetime', 
            'null' => true, 
            'default' => null,
            'comment' => 'Modified Date'
        ],
        'deleted' => [
            'type' => 'boolean', 
            'null' => false, 
            'default' => 0, 
            'unsigned' => false,
            'comment' => '0: not deleted 1: deleted'
        ],
        'deleted_date' => [
            'type' => 'datetime', 
            'null' => true, 
            'default' => null,
            'comment' => 'Deleted date'
        ],
        'indexes' => [
            'PRIMARY' => [
                'column' => 'id', 
                'unique' => 1
            ],
            'department_id' => [
                'column' => 'department_id'
            ]
        ]
    ];

    //registrar
    public $registrar_feedbacks = [
        'id' => [
            'type' => 'integer', 
            'null' => false, 
            'default' => null, 
            'unsigned' => false, 
            'key' => 'primary'
        ],
        'department_id' => [
            'type' => 'integer', 
            'null' => false, 
            'default' => null, 
            'unsigned' => false, 
            'comment' => 'Foreign Key'
        ],
        'email' => [
            'type' => 'string', 
            'null' => false, 
            'default' => null, 
            'collate' => 'utf8_general_ci', 
            'charset' => 'utf8',
            'comment' => 'Email of user', 
            'length' => 1000
        ],
        'suggestion' => [
            'type' => 'string', 
            'null' => false, 
            'default' => null, 
            'collate' => 'utf8_general_ci', 
            'charset' => 'utf8',
            'comment' => 'Suggestions', 
            'length' => 1000 
        ],
        'rating_1' => [
            'type' => 'integer', 
            'null' => false, 
            'default' => null, 
            'unsigned' => false
        ],
        'rating_2' => [
            'type' => 'integer', 
            'null' => false, 
            'default' => null, 
            'unsigned' => false
        ],
        'rating_3' => [
            'type' => 'integer', 
            'null' => false, 
            'default' => null, 
            'unsigned' => false
        ],
        'rating_4' => [
            'type' => 'integer', 
            'null' => false, 
            'default' => null, 
            'unsigned' => false
        ],
        'rating_5' => [
            'type' => 'integer', 
            'null' => false, 
            'default' => null, 
            'unsigned' => false
        ],
        'rating_6' => [
            'type' => 'integer', 
            'null' => false, 
            'default' => null, 
            'unsigned' => false
        ],
        'rating_7' => [
            'type' => 'integer', 
            'null' => false, 
            'default' => null, 
            'unsigned' => false
        ],
        'rating_8' => [
            'type' => 'integer', 
            'null' => false, 
            'default' => null, 
            'unsigned' => false
        ],
        'created' => [
            'type' => 'datetime', 
            'null' => true, 
            'default' => null,
            'comment' => 'Date Created'
        ],
        'modified' => [
            'type' => 'datetime', 
            'null' => true, 
            'default' => null,
            'comment' => 'Modified Date'
        ],
        'deleted' => [
            'type' => 'boolean', 
            'null' => false, 
            'default' => 0, 
            'unsigned' => false,
            'comment' => '0: not deleted 1: deleted'
        ],
        'deleted_date' => [
            'type' => 'datetime', 
            'null' => true, 
            'default' => null,
            'comment' => 'Deleted date'
        ],
        'indexes' => [
            'PRIMARY' => [
                'column' => 'id', 
                'unique' => 1
            ],
            'department_id' => [
                'column' => 'department_id'
            ]
        ]
    ];

    //Treasury
    public $treasury_feedbacks = [
        'id' => [
            'type' => 'integer', 
            'null' => false, 
            'default' => null, 
            'unsigned' => false, 
            'key' => 'primary'
        ],
        'department_id' => [
            'type' => 'integer', 
            'null' => false, 
            'default' => null, 
            'unsigned' => false, 
            'comment' => 'Foreign Key'
        ],
        'email' => [
            'type' => 'string', 
            'null' => false, 
            'default' => null, 
            'collate' => 'utf8_general_ci', 
            'charset' => 'utf8',
            'comment' => 'Email of user', 
            'length' => 1000
        ],
        'suggestion' => [
            'type' => 'string', 
            'null' => false, 
            'default' => null, 
            'collate' => 'utf8_general_ci', 
            'charset' => 'utf8',
            'comment' => 'Suggestions', 
            'length' => 1000 
        ],
        'rating_1' => [
            'type' => 'integer', 
            'null' => false, 
            'default' => null, 
            'unsigned' => false
        ],
        'rating_2' => [
            'type' => 'integer', 
            'null' => false, 
            'default' => null, 
            'unsigned' => false
        ],
        'rating_3' => [
            'type' => 'integer', 
            'null' => false, 
            'default' => null, 
            'unsigned' => false
        ],
        'rating_4' => [
            'type' => 'integer', 
            'null' => false, 
            'default' => null, 
            'unsigned' => false
        ],
        'rating_5' => [
            'type' => 'integer', 
            'null' => false, 
            'default' => null, 
            'unsigned' => false
        ],
        'rating_6' => [
            'type' => 'integer', 
            'null' => false, 
            'default' => null, 
            'unsigned' => false
        ],
        'rating_7' => [
            'type' => 'integer', 
            'null' => false, 
            'default' => null, 
            'unsigned' => false
        ],
        'rating_8' => [
            'type' => 'integer', 
            'null' => false, 
            'default' => null, 
            'unsigned' => false
        ],
        'created' => [
            'type' => 'datetime', 
            'null' => true, 
            'default' => null,
            'comment' => 'Date Created'
        ],
        'modified' => [
            'type' => 'datetime', 
            'null' => true, 
            'default' => null,
            'comment' => 'Modified Date'
        ],
        'deleted' => [
            'type' => 'boolean', 
            'null' => false, 
            'default' => 0, 
            'unsigned' => false,
            'comment' => '0: not deleted 1: deleted'
        ],
        'deleted_date' => [
            'type' => 'datetime', 
            'null' => true, 
            'default' => null,
            'comment' => 'Deleted date'
        ],
        'indexes' => [
            'PRIMARY' => [
                'column' => 'id', 
                'unique' => 1
            ],
            'department_id' => [
                'column' => 'department_id'
            ]
        ]
    ];
    //Guidance
    public $guidance_feedbacks = [
        'id' => [
            'type' => 'integer', 
            'null' => false, 
            'default' => null, 
            'unsigned' => false, 
            'key' => 'primary'
        ],
        'department_id' => [
            'type' => 'integer', 
            'null' => false, 
            'default' => null, 
            'unsigned' => false, 
            'comment' => 'Foreign Key'
        ],
        'email' => [
            'type' => 'string', 
            'null' => false, 
            'default' => null, 
            'collate' => 'utf8_general_ci', 
            'charset' => 'utf8',
            'comment' => 'Email of user', 
            'length' => 1000
        ],
        'suggestion' => [
            'type' => 'string', 
            'null' => false, 
            'default' => null, 
            'collate' => 'utf8_general_ci', 
            'charset' => 'utf8',
            'comment' => 'Suggestions', 
            'length' => 1000 
        ],
        'rating_1' => [
            'type' => 'integer', 
            'null' => false, 
            'default' => null, 
            'unsigned' => false
        ],
        'rating_2' => [
            'type' => 'integer', 
            'null' => false, 
            'default' => null, 
            'unsigned' => false
        ],
        'rating_3' => [
            'type' => 'integer', 
            'null' => false, 
            'default' => null, 
            'unsigned' => false
        ],
        'rating_4' => [
            'type' => 'integer', 
            'null' => false, 
            'default' => null, 
            'unsigned' => false
        ],
        'rating_5' => [
            'type' => 'integer', 
            'null' => false, 
            'default' => null, 
            'unsigned' => false
        ],
        'rating_6' => [
            'type' => 'integer', 
            'null' => false, 
            'default' => null, 
            'unsigned' => false
        ],
        'rating_7' => [
            'type' => 'integer', 
            'null' => false, 
            'default' => null, 
            'unsigned' => false
        ],
        'rating_8' => [
            'type' => 'integer', 
            'null' => false, 
            'default' => null, 
            'unsigned' => false
        ],
        'created' => [
            'type' => 'datetime', 
            'null' => true, 
            'default' => null,
            'comment' => 'Date Created'
        ],
        'modified' => [
            'type' => 'datetime', 
            'null' => true, 
            'default' => null,
            'comment' => 'Modified Date'
        ],
        'deleted' => [
            'type' => 'boolean', 
            'null' => false, 
            'default' => 0, 
            'unsigned' => false,
            'comment' => '0: not deleted 1: deleted'
        ],
        'deleted_date' => [
            'type' => 'datetime', 
            'null' => true, 
            'default' => null,
            'comment' => 'Deleted date'
        ],
        'indexes' => [
            'PRIMARY' => [
                'column' => 'id', 
                'unique' => 1
            ],
            'department_id' => [
                'column' => 'department_id'
            ]
        ]
    ];
    //NSTP
    public $nstp_feedbacks = [
        'id' => [
            'type' => 'integer', 
            'null' => false, 
            'default' => null, 
            'unsigned' => false, 
            'key' => 'primary'
        ],
        'department_id' => [
            'type' => 'integer', 
            'null' => false, 
            'default' => null, 
            'unsigned' => false, 
            'comment' => 'Foreign Key'
        ],
        'email' => [
            'type' => 'string', 
            'null' => false, 
            'default' => null, 
            'collate' => 'utf8_general_ci', 
            'charset' => 'utf8',
            'comment' => 'Email of user', 
            'length' => 1000
        ],
        'suggestion' => [
            'type' => 'string', 
            'null' => false, 
            'default' => null, 
            'collate' => 'utf8_general_ci', 
            'charset' => 'utf8',
            'comment' => 'Suggestions', 
            'length' => 1000 
        ],
        'rating_1' => [
            'type' => 'integer', 
            'null' => false, 
            'default' => null, 
            'unsigned' => false
        ],
        'rating_2' => [
            'type' => 'integer', 
            'null' => false, 
            'default' => null, 
            'unsigned' => false
        ],
        'rating_3' => [
            'type' => 'integer', 
            'null' => false, 
            'default' => null, 
            'unsigned' => false
        ],
        'rating_4' => [
            'type' => 'integer', 
            'null' => false, 
            'default' => null, 
            'unsigned' => false
        ],
        'rating_5' => [
            'type' => 'integer', 
            'null' => false, 
            'default' => null, 
            'unsigned' => false
        ],
        'rating_6' => [
            'type' => 'integer', 
            'null' => false, 
            'default' => null, 
            'unsigned' => false
        ],
        'rating_7' => [
            'type' => 'integer', 
            'null' => false, 
            'default' => null, 
            'unsigned' => false
        ],
        'rating_8' => [
            'type' => 'integer', 
            'null' => false, 
            'default' => null, 
            'unsigned' => false
        ],
        'created' => [
            'type' => 'datetime', 
            'null' => true, 
            'default' => null,
            'comment' => 'Date Created'
        ],
        'modified' => [
            'type' => 'datetime', 
            'null' => true, 
            'default' => null,
            'comment' => 'Modified Date'
        ],
        'deleted' => [
            'type' => 'boolean', 
            'null' => false, 
            'default' => 0, 
            'unsigned' => false,
            'comment' => '0: not deleted 1: deleted'
        ],
        'deleted_date' => [
            'type' => 'datetime', 
            'null' => true, 
            'default' => null,
            'comment' => 'Deleted date'
        ],
        'indexes' => [
            'PRIMARY' => [
                'column' => 'id', 
                'unique' => 1
            ],
            'department_id' => [
                'column' => 'department_id'
            ]
        ]
    ];
    //users
    public $users = [
        'id' => [
            'type' => 'integer', 
            'null' => false, 
            'default' => null, 
            'unsigned' => false, 
            'key' => 'primary'
        ],
        'username' => [
            'type' => 'string', 
            'null' => false, 
            'default' => null, 
            'collate' => 'utf8_general_ci', 
            'charset' => 'utf8',
            'comment' => 'username', 
            'length' => 1000
        ],
        'password' => [
            'type' => 'string', 
            'null' => true, 
            'default' => null, 
            'collate' => 'utf8_general_ci', 
            'charset' => 'utf8',
            'comment' => 'Hash Password'
        ],
        'created' => [
            'type' => 'datetime', 
            'null' => true, 
            'default' => null,
            'comment' => 'Date Created'
        ],
        'modified' => [
            'type' => 'datetime', 
            'null' => true, 
            'default' => null,
            'comment' => 'Modified Date'
        ],
        'deleted' => [
            'type' => 'boolean', 
            'null' => false, 
            'default' => 0, 
            'unsigned' => false,
            'comment' => '0: not deleted 1: deleted'
        ],
        'deleted_date' => [
            'type' => 'datetime', 
            'null' => true, 
            'default' => null,
            'comment' => 'Deleted date'
        ]
    ];
}
