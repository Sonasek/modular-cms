<?php

namespace Modular\Admin\Http\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class LoginForm extends Component
{
    public $login;
    public $password;

    protected $rules = [
        'login' => 'required|email',
        'password' => 'required|min:8',
    ];

    protected $messages = [
        'login.required' => 'modular-admin::loginpage.form.errors.login.required',
        'login.email' => 'modular-admin::loginpage.form.errors.login.email',
        'password.required' => 'modular-admin::loginpage.form.errors.password.required',
        'password.min' => 'modular-admin::loginpage.form.errors.password.min',
    ];

    public function submit()
    {
        $this->validate();
        $credentials = [
            'email' => $this->login,
            'password' => $this->password
        ];


        if(Auth::attempt($credentials, true)){
            session()->push('message', trans('modular-admin::loginpage.form.errors.flash.bad_credentials'));

            return $this->redirect(route('admin.homepage'));
        }
            session()->push('message', trans('modular-admin::loginpage.form.errors.flash.bad_credentials'));
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function render()
    {
        return view('modular-admin::login.component.login-form');
    }
}
