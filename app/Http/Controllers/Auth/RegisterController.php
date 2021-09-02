<?php

namespace App\Http\Controllers\Auth;

use App\Models\Student;
use App\Models\Sermina;
use App\Models\Information;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use App\Http\Requests\RegisterRequest;
use Illuminate\Support\Str;


class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function showRegistrationForm()
    {

        $sermina = Sermina::All();
        $ranks = Information::withCount('students')->orderBy('students_count','desc')->limit(1)->get();
        $lists = Information::has('students')->withCount('students')->orderBy('students_count','desc')->get();
        return view('auth.register',compact('sermina','ranks','lists'));

    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        $data['email'] = strtolower($data['email']);
        $data['student_code'] = strtoupper($data['student_code']);
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255','unique:students'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'student_code' =>['required','string','regex:/^([1-9]0?)[0-9](TE|te|ad|AD)\B[0-9]+[0-9]+[1-9]$/m','unique:students'],
            'seminar_room' =>['string'],
            'grade' => ['string'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return Student::create([
            'name' => ($data['name']),
            'email' => strtolower($data['email']),
            'password' => Hash::make($data['password']),
            'student_code' => Str::upper($data['student_code']),
            'seminar_room' => $data['seminar_room'],
            'picture' => asset('Template/Gui2019/img/user.jpg'),
            'grade' => $data['grade'],
        ]);
    }
 
}
