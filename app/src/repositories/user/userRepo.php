<?php 

namespace src\repositories\user;

use src\user\User as userModel;
use Carbon\Carbon;

class userRepo {

	public $user;

	public function __construct(userModel $user)
	{
		$this->user = $user;
	}
	
	public function register($request)
	{
		$user = new userModel(array(
		 	'name' => $request->get('name'),
            'email' => $request->get('email'),
            'password' => bcrypt($request->get('password')),
            'lastname' => $request->get('lastname'),
            'address' => $request->get('address'),
            'zip' => $request->get('zip'),
            'profileimagepath' => $request->get('profileimagepath'),
            'trainee_id' => $request->get('trainee_id'),
            'department_id' => $request->get('department_id'),
            'company_id' => $request->get('company_id'),
            'lastlogin' => Carbon::now()
			));
		$user->save();
	}
}

?>
