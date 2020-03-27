<?php

namespace App\Http\Controllers;
use App\Helpers\JwtAuth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\db;
use App\Http\Requests;
use App\User;




class UserController extends Controller
{
   public function register(Request $request)
    {
        
        $json =$request->input('json',null);
        $params =json_decode($json);
        $email=(!is_null($json)&& isset($params->email)) ? $params->email :null;
        $name=(!is_null($json)&& isset($params->name)) ? $params->name :null;
        $surname=(!is_null($json)&& isset($params->surname)) ? $params->surname :null;
        $role='ROLE_USER';
        $password=(!is_null($json)&& isset($params->password)) ? $params->password :null;

    if(!is_null($email) && !is_null($password) && !is_null($name)){
        //crear usuario
        $user = new User();
        $user->email =$email;
        $user->name =$name;
        $user->surname =$surname;
        $user->role =$role;

        $pwd = hash('sha256',$password);
        $user->password = $pwd;

        //comprobar duplicado
        $isset_user = User::where('email','=',$email)->first();
        if(count($isset_user)==0){
            $user->save();
            $data = array(
                'status' => 'sucess',
            'code' => 200,
            'message' => 'Usuario creado satisfactoriamente'
            );
        }else{
        $data =array(
            'status' => 'error',
            'code' => 400,
            'message' => 'Usuario no creado'
        );

    }
     }

    }

    public function  login(Request $request){
         $jwtAuth = new JwtAuth();
         //Recibir post
         $json = $request->input('json',null);
         $params = json_decode($json);
         $email =(!is_null($json)&& isset($params->email)) ? $params->email :null;
         $password = (!is_null($json)&& isset($params->password)) ? $params->password :null;
         $getToken = (!is_null($json)&& isset($params->gettoken)) ? $params->gettoken :true;

        //cifrar contrasena
        $pwd = hash('sha256',$password);


        if(!is_null($email)&& !is_null($password) && ($getToken == null || $getToken == false )){
            $signup = $jwtAuth->signup($email,$pwd);
            
           

        }elseif($getToken != null){
            $signup = $jwtAuth->signup($email,$pwd,$getToken);
            
        }else{
            $signupv= array (
                'status'=> 'error',
                'message'=>'enviar los datos por post'
            );
        }
        return response()->json($signup,200);

    }
}
