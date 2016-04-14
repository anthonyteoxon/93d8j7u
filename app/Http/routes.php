<?php
Route::get('/format', function () {
    return [
    	'error' => [
    			'name' => 'Please Enter Name',
    			'age'	=> [
    				'Age must be greater than 18 y/o',
    				'Age must be and integer',
    			]
    		],
    	'response' => [
    		'data' => [ 'id' => 11, 'name'	=>	'Product Name 11' ]
    	],
    ];
});

Route::get('/', function () {
    return view('home');
});

Route::get('/package-details', function () {
    $data['breadcrumbs'] = [
        [
            'text' => 'Recreational',
            'href'  => url('/package-list'),
            'current' => false
        ],
        [
            'text' => 'Coron Island Ultimate Tour',
            'href'  => url('/package-details'),
            'current' => true
        ],        
    ];
    return view('package', $data);
});

Route::get('/package-list', function () {
    $data['breadcrumbs'] = [
        [
            'text' => 'Beaches',
            'href'  => url('/package-list'),
            'current' => true
        ],        
    ];    
    return view('package-list', $data);
});

Route::get('/hub', function () {
    /*$data['breadcrumbs'] = [
        [
            'text' => 'Recreational',
            'href'  => url('/package-list'),
            'current' => false
        ],
        [
            'text' => 'Coron Island Ultimate Tour',
            'href'  => url('/package-details'),
            'current' => false
        ],
        [
            'text' => 'SEPANX Peeps Unite!',
            'href'  => url('/hub'),
            'current' => true
        ],                
    ];*/
    $data = [];
    return view('hub', $data);
});