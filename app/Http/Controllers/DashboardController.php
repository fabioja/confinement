<?php

namespace App\Http\Controllers;

use App\Repositories\UserRepository;
use App\Validators\UserValidator;
use Illuminate\Http\Request;
use Exception;
use Auth;

class DashboardController extends Controller
{
    /**
     * @var UserRepository
     */
    protected $repository;

    /**
     * @var UserValidator
     */
    protected $validator;

    /**
     * UsersController constructor.
     *
     * @param UserRepository $repository
     * @param UserValidator $validator
     */
    public function __construct(UserRepository $repository, UserValidator $validator)
    {
        $this->repository = $repository;
        $this->validator  = $validator;
    }

    public function index(){
        return view('user.dashboard');
    }

    public function auth(Request $request){
        $data = [
            'email' => $request->get('username'),
            'password' => $request->get('password')
        ];

       //dd($request->all());

       try{
           if(env('PASSWORD_HASH')){
               Auth::attempt($data, false);
           }
           else{
               $user = $this->repository->findWhere(['email'=>$request->get('username')])->first();
               if(!$user){
                    throw new Exception("Credenciais inválidas");
               }

               //dd($user);
                if($user->password != md5($request->get('password')))
                    throw  new Exception("A senha informada é inválida");

                Auth::login($user);

           }
           return redirect()->route('user.dashboard');
       }
        catch (Exception $e){
            return $e->getMessage();
        }

        ///dd($request->all());

    }
}
