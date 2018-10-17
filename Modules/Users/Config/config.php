<?php

return [
    'name'              => 'Users',
    'roleRegister'      => [
        1               => 'employees',
        2               => 'customer'
    ],
    'profileActivities' =>[
    	'activities', // show all actitivies of profile
		'details',	// show all informtions of profile
    	'photos',	// show all albums and photos of profile
    	'timeline' //show all activities of user and user's profiles followed
    ],
    'userStatus'=>[
        'active'    => 1,
        'block'     => 2
    ]
];
