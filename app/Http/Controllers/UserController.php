<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Mail\Mailable;
use App\Model\User;
class UserController extends Controller
{
	function login(Request $rqst)
	{ 
		//print_r($post);exit;
		$validatedData = $rqst->validate([
		    'email' =>	['required','email'],
		    'password' => ['required','min:8'],
		]);
		if(isset($validatedData) && !empty($validatedData))
		{
			$post =  $rqst->input();
			//$user_where = array('email'=>'"'.$post['email'].'"','password'=>'"'.md5($post['password']).'"');
			//$user_data = DB::table('user')->where('email',$post['email'])->where('password',md5($post['password']))->get();
			$user_data = User::where('email',$post['email'])->where('password',md5($post['password']))->first();
			if($user_data != '')
			{	
				$user_details = $user_data->toArray();
				$rqst->session()->put('user', array('email'=>$user_details['email'],'password'=>$user_data['password'],'firstname'=>$user_data['name'],'lastname'=>$user_data['lastname']));
				if($rqst->session()->has('user'))
				{
					return redirect('dashboard');
				}
				return redirect('/');
			}
			else
			{
				return redirect('/');
			}
		}
		else
		{
			return $rqst->input();	
		}
		
	}
	public function register_submit(Request $req)
	{
		$validate_filed = $req->validate([
			'email'=>['required','email'],
			'firstname'=>['required'],
			'lastname'=>['required'],
			'pwd'=>['required','min:8']
		]);
		if(!empty($validate_filed))
		{
			$post =$req->input();
			$insert_data = array(
				'firstname'	=>$post['firstname'],
				'lastname'	=>$post['lastname'],
				'email'=>$post['email'],
				'password'=>md5($post['pwd']),
				'status'=>'1',
				'created_date'=>date('Y-m-d')
			);
			$inserted_data = User::insert($insert_data);
			//send email
			 $details = [
		        'title' => 'Mail from ItSolutionStuff.com',
		        'body' => 'You are successfully register with us.Please use click on link to verify you account:<a href="<?php echo '.env("APP_URL").'?>">Verification</a>'
		    ];

    //\Mail::to($post['email'])->send(new \App\Mail\MyTestMail($details));

			return redirect('/');
		}
		else
		{
			return $rqst->input();
		}
		
		
	}
	public function email_verification()
	{
		if(isset($_POST) && $_POST['email'] != '')
		{
			$user_data = User::where('email',$_POST['email'])->first();
			
			if(!empty($user_data))
			{
				echo json_encode('Email already exists');
			}
			else
			{
				echo json_encode('true');
			}
		}
		else
		{
			echo json_encode('false');
		}
	}
}
?> 