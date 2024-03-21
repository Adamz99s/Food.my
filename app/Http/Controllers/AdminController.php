<?php
// app/Http/Controllers/AdminController.php
// app/Http/Controllers/AdminController.php
   
namespace App\Http\Controllers;

use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function viewuser()
{
    $users = User::all(); 

    return view('admin.manage_user', compact('users'));
}

public function updateRole($id)
{
    
    $user = User::findOrFail($id);
    $user->usertype = 'RestaurantManager'; 
    $user->save();

    return redirect()->route('admin.manage_user')->with('success', 'Role updated successfully');
}
public function revertRole($id)
{
   
    $user = User::findOrFail($id);
    $user->usertype = 'user'; 
    $user->save();

    return redirect()->route('admin.manage_user')->with('success', 'Role updated successfully');
}

public function delete($id)
{
    $user = User::findOrFail($id);
    $user->delete();

    return redirect()->route('admin.manage_user')->with('success', 'User deleted successfully');

}

}