<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    //
    public function index(){
        $users=User::all();
        return view("dashboard.all-user",compact("users"));
    }
    public function create(Request $request){
        $validate = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', Rule::unique('users')],
            'password' => ['required'],
            'phone' => ['nullable', 'string'],
        ]);
        
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->phone = $request->phone;
        $user->save();
        return redirect()->route('users.index')->with('success','create users done');
    }
    public function edit($id)
{
    $user = User::findOrFail($id);
    return view('dashboard.updateusers', compact('user'));
}

public function update(Request $request, $id)
{
    $validate = $request->validate([
        'name' => ['required', 'string', 'max:255'],
        'email' => ['required', 'string', 'email', 'max:255', Rule::unique('users')->ignore($id)],
        'password' => ['nullable'],
        'phone' => ['nullable', 'string'],
    ]);

    $user = User::findOrFail($id);
    $user->name = $request->name;
    $user->email = $request->email;
    if ($request->filled('password')) {
        $user->password = Hash::make($request->password);
    }
    $user->phone = $request->phone;
    $user->save();

    return redirect()->route('users.index')->with('success', 'User updated successfully!');
}

public function destroy($id)
{
    $user = User::find($id);
    if ($user) {
        $user->delete();
    }
    return response()->json(['success' => 'User deleted successfully!']);
}


}
