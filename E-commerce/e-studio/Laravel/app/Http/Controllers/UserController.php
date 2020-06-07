<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Http\Requests\UserRequest;
use \App\MailNeedValidated;
use \App\Http\Requests\NewMailRequest;
use \App\User;
use \App\Studio;
use \App\PasswordReset;
use \App\Http\Requests\PasswordRequest;
use Dotenv\Loader\Value;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\HttpFoundation\Request as HttpFoundationRequest;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;


class UserController extends Controller
{
      /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public $UserModel;

    public function index()
    {
        $user = User::find(1);
        $user->studios();
        dd($user->studios);
    }

    public function update(UserRequest $request, $id)
    {

    }
    public static function get_user($data = ["token","123456"])
    {
        if (in_array($data[0], ["token", "email"]) == false)
            return [false, "need token or email"];
        else
        {
            if (count(($user = User::where($data[0], '=', $data[1])->get())) == 1)
                return [true, $user[0]];
            else
                return [false, "user not found"];
        }
    }

    public function test($token = "")
    {
        return response()->json([ 'info' =>  self::is_connect("2020-06-03 00:49:12CONFIeRMe92b25cfc0ab84694d67a8e4")]);
    }
    public static function is_connect($token = "")
    {
        if (($user = self::get_user(["token", $token]))[0] == true)
        {
            if ($user[1]->confirmed == true)
                return [true, $user[1]];
            else
                return  [false, "need validate account"];
        }
        else
            return $user;// [false, "data error"]
    }

    public static function validate_account($token)
    {
        $user = new \App\User();
        if (($user = self::get_user(["token", urldecode($token)]))[0] && $user[1]->confirmed != true)
            {
               $user[1]->confirmed = true;
               $user[1]->save();
               return response()->json([ 'succes' => 'validate']);
            }
        return response()->json([ 'error' => $user[0] == true &&  $user[1]->confirmed ? "account already validate" : "token not found"]);
    }
    public function login(Request $request)
    {
        $user = new \App\User();
        $validator = Validator::make(json_decode($request->getContent(), true), [
            "email"=> 'required|email|max:191',
            "password" => 'required|min:6|max:191',
        ]);
        if ($validator->fails())
            return response()->json([ 'error' => 'validation form gone wrong', 'error'=> $validator->errors()->first()]);

        $user = User::where('email', '=', $request->email)->get();
        if (count($user) == 1 && $user[0]->password == $request->password && $user[0]->confirmed == true)
        {
            $user[0]->token = ($date = date("Y-m-d H:i:s")) . "T" . bin2hex(random_bytes(12));
            $user[0]->save();
            return response()->json(['user'=> $user]);
        }
        else if (count($user) == 1)
            return response()->json(['error'=> ($user[0]->confirmed != true ? "need activation account"  : "email or password is incorrect")]);
        else
            return response()->json(['error'=> "account no found"]);
    }
    public function store(Request $request)
    {
        $validator = Validator::make(json_decode($request->getContent(), true), [
            'name' => 'required|min:2|max:191',
            'firstname' => 'required|min:2|max:191',
            "email"=> 'required|email|max:191|unique:users',
            "password" => 'required|min:6|max:191',
        ]);

        if ($validator->fails())
            return response()->json([ 'error' => 'validation form gone wrong', 'error'=> $validator->errors()->first()]);

        $user = new \App\User();
        $user->nom          = $request->name;
        $user->prenom       = $request->firstname;
        $user->email        = $request->email;
        $user->token        = (($date = date("Y-m-d H:i:s")) . "CONFIRM" . bin2hex(random_bytes(12)));
        $user->password     = $request->password;
        $user->role         = 0;
        $user->save();

        $ContactController = new ContactController();
        $url = "http://127.0.0.1:8000/validate_account/" . urlencode($user->token);
        self::send_mail_a_validated(  $user->email, $url);

        return response()->json([ 'result' => 'valida ' ]);
    }
    public static function send_mail_a_validated($mail, $url)
    {
        error_log("here seend email");
        (Mail::to($mail)->send(new ContactMail(['url'=> $url])));
    }
}
