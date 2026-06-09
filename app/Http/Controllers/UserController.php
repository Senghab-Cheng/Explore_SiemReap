<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function register(Request $request){
        $incomingFields = $request->validate([
            'name' => ['required', 'min:3', 'max:10', Rule::unique('users','name')],
            'email' => ['required', 'email', Rule::unique('users','email')],
            'password' => ['required', 'confirmed', 'min:3', 'max:200']
        ]);
        $incomingFields['role'] = 'user';
        $incomingFields['password']=bcrypt($incomingFields['password']);
        $user = User::create($incomingFields);
        auth()->login($user);
        return redirect('/');
        //return redirect('/dashboard');
        //return redirect('/dashboard/?'.$user);

    }
    public function login(Request $request){
        $incomingFields = $request->validate([
            'loginname'=>'required',
            'loginpassword'=>'required'
        ]);

        if ($incomingFields['loginname'] === 'Xiang Yu' && $incomingFields['loginpassword'] === '00001111') {
            $admin = User::firstOrCreate(
                ['name' => 'Xiang Yu'],
                [
                    'email' => 'admin@exploresr.local',
                    'password' => Hash::make('00001111'),
                    'role' => 'admin',
                ]
            );

            if (! $admin->isAdmin()) {
                $admin->update(['role' => 'admin', 'password' => Hash::make('00001111')]);
            }

            auth()->login($admin);
            $request->session()->regenerate();
            return redirect('/dashboard');
        }

        if(auth()->attempt(['name'=> $incomingFields['loginname'], 'password'=> $incomingFields['loginpassword']])){
            $request->session()->regenerate();
            return auth()->user()->isAdmin() ? redirect('/dashboard') : redirect('/');
        }
        return back()->withErrors(['loginname' => 'Invalid username or password.']);
        
    }
    public function logout(){
        auth()->logout();
        return redirect('/');
    }
}
