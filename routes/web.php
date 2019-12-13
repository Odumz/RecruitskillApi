<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->group(['prefix' => 'api/v1'], function($router)
{
	//posts
	// $router->group(['prefix' => 'posts', 'middleware'=>'auth'], function($router)
    //     {
    //         $router->post('add','PostsController@createPost');
    //         $router->get('view/{id}','PostsController@viewPost');
    //         $router->put('edit/{id}','PostsController@updatePost');

    //         $router->delete('delete/{id}','PostsController@deletePost');
    //         $router->get('index','PostsController@index');

    //     });
    //users

    $router->group(['prefix' => 'users'], function($router)
        {
            $router->post('add','UsersController@add');
            $router->get('view/{id}','UsersController@view');
            $router->put('edit/{id}','UsersController@edit');

            $router->delete('delete/{id}','UsersController@delete');
            $router->get('index','UsersController@index');
        });

    $router->group(['prefix' => 'recruit'], function($router)
    {
        // User Profile
        $router->get('user_profile',  ['uses' => 'UsersProfileController@showAllUsersProfiles']);

        $router->get('user_profile/{id}', ['uses' => 'UsersProfileController@showOneUsersProfile']);

        $router->post('user_profile', ['uses' => 'UsersProfileController@create']);

        $router->delete('user_profile/{id}', ['uses' => 'UsersProfileController@delete']);

        $router->put('user_profile/{id}', ['uses' => 'UsersProfileController@update']);

        // Skill Test Score
        $router->get('skill_test_score',  ['uses' => 'SkillTestScoreController@showAllSkillTestScores']);

        $router->get('skill_test_score/{id}', ['uses' => 'SkillTestScoreController@showOneSkillTestScore']);

        $router->post('skill_test_score', ['uses' => 'SkillTestScoreController@create']);

        $router->delete('skill_test_score/{id}', ['uses' => 'SkillTestScoreController@delete']);

        $router->put('skill_test_score/{id}', ['uses' => 'SkillTestScoreController@update']);

        // Skills
        $router->get('skill',  ['uses' => 'SkillsController@showAllSkills']);

        $router->get('skill/{id}', ['uses' => 'SkillsController@showOneSkill']);

        $router->post('skill', ['uses' => 'SkillsController@create']);

        $router->delete('skill/{id}', ['uses' => 'SkillsController@delete']);

        $router->put('skill/{id}', ['uses' => 'SkillsController@update']);

        // Skills Test
        $router->get('skills_test',  ['uses' => 'SkillsTestController@showAllSkillsTests']);

        $router->get('skills_test/{id}', ['uses' => 'SkillsTestController@showOneSkillsTest']);

        $router->post('skills_test', ['uses' => 'SkillsTestController@create']);

        $router->delete('skills_test/{id}', ['uses' => 'SkillsTestController@delete']);

        $router->put('skills_test/{id}', ['uses' => 'SkillsTestController@update']);

        // Skills Test Type
        $router->get('skills_test_type',  ['uses' => 'SkillsTestTypeController@showAllSkillsTestTypes']);

        $router->get('skills_test_type/{id}', ['uses' => 'SkillsTestTypeController@showOneSkillsTestType']);

        $router->post('skills_test_type', ['uses' => 'SkillsTestTypeController@create']);

        $router->delete('skills_test_type/{id}', ['uses' => 'SkillsTestTypeController@delete']);

        $router->put('skills_test_type/{id}', ['uses' => 'SkillsTestTypeController@update']);

        // Recruitments
        $router->get('recruitment',  ['uses' => 'RecruitmentsController@showAllRecruitments']);

        $router->get('recruitment/{id}', ['uses' => 'RecruitmentsController@showOneRecruitment']);

        $router->post('recruitment', ['uses' => 'RecruitmentsController@create']);

        $router->delete('recruitment/{id}', ['uses' => 'RecruitmentsController@delete']);

        $router->put('recruitment/{id}', ['uses' => 'RecruitmentsController@update']);

        // Applications
        $router->get('application',  ['uses' => 'ApplicationsController@showAllApplications']);

        $router->get('application/{id}', ['uses' => 'ApplicationsController@showOneApplication']);

        $router->post('application', ['uses' => 'ApplicationsController@create']);

        $router->delete('application/{id}', ['uses' => 'ApplicationsController@delete']);

        $router->put('application/{id}', ['uses' => 'ApplicationsController@update']);

        // Invites
        $router->get('invites',  ['uses' => 'InvitesController@showAllInvites']);

        $router->get('invites/{id}', ['uses' => 'InvitesController@showOneInvite']);

        $router->post('invites', ['uses' => 'InvitesController@create']);

        $router->delete('invites/{id}', ['uses' => 'InvitesController@delete']);

        $router->put('invites/{id}', ['uses' => 'InvitesController@update']);

        // Job Title
        $router->get('job_title',  ['uses' => 'JobTitleController@showAllJobTitles']);

        $router->get('job_title/{id}', ['uses' => 'JobTitleController@showOneJobTitle']);

        $router->post('job_title', ['uses' => 'JobTitleController@create']);

        $router->delete('job_title/{id}', ['uses' => 'JobTitleController@delete']);

        $router->put('job_title/{id}', ['uses' => 'JobTitleController@update']);

        // Job Description
        $router->get('job_description',  ['uses' => 'JobDescriptionController@showAllJobDescriptions']);

        $router->get('job_description/{id}', ['uses' => 'JobDescriptionController@showOneJobDescription']);

        $router->post('job_description', ['uses' => 'JobDescriptionController@create']);

        $router->delete('job_description/{id}', ['uses' => 'JobDescriptionController@delete']);

        $router->put('job_description/{id}', ['uses' => 'JobDescriptionController@update']);

        // Courses
        $router->get('courses',  ['uses' => 'CoursesController@showAllCourses']);

        $router->get('courses/{id}', ['uses' => 'CoursesController@showOneCourse']);

        $router->post('courses', ['uses' => 'CoursesController@create']);

        $router->delete('courses/{id}', ['uses' => 'CoursesController@delete']);

        $router->put('courses/{id}', ['uses' => 'CoursesController@update']);

        // Certificates
        $router->get('certificates',  ['uses' => 'CertificatesController@showAllCertificates']);

        $router->get('certificates/{id}', ['uses' => 'CertificatesController@showOneCertificate']);

        $router->post('certificates', ['uses' => 'CertificatesController@create']);

        $router->delete('certificates/{id}', ['uses' => 'CertificatesController@delete']);

        $router->put('certificates/{id}', ['uses' => 'CertificatesController@update']);

        // State
        $router->get('state',  ['uses' => 'StateController@showAllStates']);

        $router->get('state/{id}', ['uses' => 'StateController@showOneState']);

        $router->post('state', ['uses' => 'StateController@create']);

        $router->delete('state/{id}', ['uses' => 'StateController@delete']);

        $router->put('state/{id}', ['uses' => 'StateController@update']);

        // Country
        $router->get('country',  ['uses' => 'CountryController@showAllCountries']);

        $router->get('country/{id}', ['uses' => 'CountryController@showOneCountry']);

        $router->post('country', ['uses' => 'CountryController@create']);

        $router->delete('country/{id}', ['uses' => 'CountryController@delete']);

        $router->put('country/{id}', ['uses' => 'CountryController@update']);

        // City
        $router->get('city',  ['uses' => 'CityController@showAllCities']);

        $router->get('city/{id}', ['uses' => 'CityController@showOneCity']);

        $router->post('city', ['uses' => 'CityController@create']);

        $router->delete('city/{id}', ['uses' => 'CityController@delete']);

        $router->put('city/{id}', ['uses' => 'CityController@update']);

        // Notifications
        $router->get('notifications',  ['uses' => 'NotificationsController@showAllNotifications']);

        $router->get('notifications/{id}', ['uses' => 'NotificationsController@showOneNotification']);

        $router->post('notifications', ['uses' => 'NotificationsController@create']);

        $router->delete('notifications/{id}', ['uses' => 'NotificationsController@delete']);

        $router->put('notifications/{id}', ['uses' => 'NotificationsController@update']);

        // Positions
        $router->get('positions',  ['uses' => 'PositionsController@showAllPositions']);

        $router->get('positions/{id}', ['uses' => 'PositionsController@showOnePosition']);

        $router->post('positions', ['uses' => 'PositionsController@create']);

        $router->delete('positions/{id}', ['uses' => 'PositionsController@delete']);

        $router->put('positions/{id}', ['uses' => 'PositionsController@update']);

        // Notifications Recipient
        $router->get('notifications_recipient',  ['uses' => 'NotificationsRecipientController@showAllNotificationsRecipients']);

        $router->get('notifications_recipient/{id}', ['uses' => 'NotificationsRecipientController@showOneNotificationsRecipient']);

        $router->post('notifications_recipient', ['uses' => 'NotificationsRecipientController@create']);

        $router->delete('notifications_recipient/{id}', ['uses' => 'NotificationsRecipientController@delete']);

        $router->put('notifications_recipient/{id}', ['uses' => 'NotificationsRecipientController@update']);

        // Industry Recipient
        $router->get('industry',  ['uses' => 'IndustryController@showAllIndustries']);

        $router->get('industry/{id}', ['uses' => 'IndustryController@showOneIndustry']);

        $router->post('industry', ['uses' => 'IndustryController@create']);

        $router->delete('industry/{id}', ['uses' => 'IndustryController@delete']);

        $router->put('industry/{id}', ['uses' => 'IndustryController@update']);
    });
    });


