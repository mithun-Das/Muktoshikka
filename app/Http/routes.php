<?php


use Illuminate\Http\Request;
use App\User;

/********************************    ******************************/

Route::group(array('middleware' => 'guest'), function()
{
 
		Route::get('login', ['as' =>'login','uses' => 'pagecontroller@login']);		
});


/*************  User Can Access  If they are logged in ************/


Route::group(array('middleware' => 'auth'), function()
{

		Route::get('logout', ['as' => 'logout', 'uses' => 'Auth\AuthController@logout']);

		Route::get('userhome', ['as' => 'userhome',   'uses' => 'pagecontroller@userhome']);

		Route::get('userabout', ['as' => 'userabout',   'uses' => 'pagecontroller@userabout']);

		Route::get('video', ['as' => 'video',   'uses' => 'pagecontroller@video']);

		Route::get('usercontact', ['as' => 'usercontact',   'uses' => 'pagecontroller@usercontact']);

		Route::get('blog_list', ['as' => 'blog_list',   'uses' => 'pagecontroller@blog_list']);

		Route::get('single_blog/{id}', ['as' => 'single_blog',   'uses' => 'pagecontroller@single_blog']);

		Route::get('message', ['as' => 'message',   'uses' => 'pagecontroller@message_show']);




		/********************** Dhruba   ******************/

		Route::get('home', ['as' => 'index',   'uses' => 'qfeedcon@index']);


});


Route::get('register',['as' => 'register', 'uses' =>'pagecontroller@register']);

Route::post('dologin', ['as' => 'dologin', 'uses' => 'Auth\AuthController@doLogin']); 

Route::post('postuserhome', ['as' => 'postuserhome',   'uses' => 'pagecontroller@postuserhome']);

Route::post('postregister',['as' => 'postregister','uses'=>'logincontroller@postRegister']);

Route::post('messagestore', ['as' => 'messagestore',   'uses' => 'pagecontroller@messagestore']);

Route::post('userhome', ['as' => 'userhome', 'uses' => 'Auth\AuthController@userhome']); 



/*******************************   Dhruba ************************************/


Route::get('qs', ['as' => 'qs', 'uses' => 'pagecontroller@qs']);

Route::get('question/create',['as'=>'question.create', 'uses' =>'QuesController@create']);

Route::post('question/store',['as'=>'question.store', 'uses' =>'QuesController@store']);

Route::post('answer/store',['as'=>'asi', 'uses' =>'qfeedcon@store']);

Route::get('test', ['as' => 'test',   'uses' => 'pagecontroller@test']);

Route::get('allquastionsort/newest', ['as' => 'newest', 'uses' => 'QuesPageController@index']);

Route::get('allquastionsort/noans', ['as' => 'noans', 'uses' => 'QuesPageController@noAns']);

Route::get('allquastionsort/votes', ['as' => 'votes', 'uses' => 'QuesPageController@votes']);

Route::get('question/{id}' ,['as' => 'a2q' , 'uses' => 'qfeedcon@a2q']);

Route::get('category/{class}' ,['as' => 'classcategory' , 'uses' => 'qfeedcon@category_class']);

Route::get('category/{class}/{subject}' ,['as' => 'subjectcategory' , 'uses' => 'qfeedcon@category_subject']);

/*****************         End Dhruba            *****************/


?>