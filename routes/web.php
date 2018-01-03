<?php


Route::get('/','WelcomeController@index');

Auth::routes();


/*..................................Download............................*/
Route::get('/download/{id}','GenerateController@download');
Route::get('/saved-questions','SavedController@manage');
Route::get('/saved/delete/{id}','SavedController@delete');



Route::group(['middleware' => ['web']], function () {
/*................................Department.........................*/
    
    Route::group(['prefix' => 'department'], function () {
        Route::get('/add', 'departmentController@createDepartment');
        Route::post('/save','departmentController@storeDepartment');
        Route::get('/manage', 'departmentController@manageDepartment');
        Route::get('/edit/{id}','departmentController@editDepartment');
        Route::post('/update','departmentController@updateDepartment');
        Route::get('/delete/{id}','departmentController@deleteDepartment');
    });

/*................................Subject.........................*/

    Route::group(['prefix' => 'subject'], function () {
        Route::get('/add', 'subjectController@createSubject');
        Route::post('/save','subjectController@storeSubject');
        Route::get('/manage', 'subjectController@manageSubject');
        Route::get('/edit/{id}','subjectController@editSubject');
        Route::post('/update','subjectController@updateSubject');
        Route::get('/delete/{id}','subjectController@deleteSubject');
    });

/*.....................................Tag..............................*/
    
    Route::group(['prefix' => 'tag'], function () {
        Route::get('/add', 'TagController@createTag');
        Route::post('/save','TagController@storeTag');
        Route::get('/manage', 'TagController@manageTag');
        Route::get('/delete/{id}','TagController@deleteTag');
    });
    
/*................................Broad-Question.........................*/
    
    Route::group(['prefix' => 'broad-question'], function () {
        Route::get('/add', 'BroadQuestionController@createBroadQuestion');
        Route::post('/save','BroadQuestionController@storeBroadQuestion');
        Route::get('/manage', 'BroadQuestionController@manageBroadQuestion');
        Route::get('/view/{id}','BroadQuestionController@viewBroadQuestion');
        Route::get('/edit/{id}','BroadQuestionController@editBroadQuestion');
        Route::post('/update','BroadQuestionController@updateBroadQuestion');
        Route::get('/delete/{id}','BroadQuestionController@deleteBroadQuestion');
    });

    Route::get('/generate/broad-question','GenerateController@generateBroadQuestion');
    Route::post('/generate/broad-question','GenerateController@generateBroadQuestionPost');


/*...............................Admin....................................*/
    Route::get('/admin/register', 'AdminController@showRegistrationForm');
    Route::post('/admin/register', 'AdminController@registerAdmin');
    Route::get('/admin/manage', 'AdminController@manageAdmins');
    Route::get('/admin/delete/{id}','AdminController@deleteAdmin');
    Route::get('/admin/profile/{id}','AdminController@adminProfile');
    Route::post('/admin/change/info','AdminController@changeInfoPost');
    Route::get('/admin/change/info/{id}','AdminController@changeInfo');
    Route::post('/admin/change/pw','AdminController@changePwPost');
    Route::get('/admin/change/pw/{id}','AdminController@changePw');
});

