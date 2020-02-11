<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;

class HomeController extends Controller
{
    public function index()
    {
        $user = DB::table('users')->orderBy('name', 'ASC')->paginate(10);
        $student = DB::table('students')->orderBy('student_name', 'ASC')->paginate(10);

        return view('index', [
            'user' => $user,
            'student' => $student
        ]);
    }

    public function user()
    {
        $user = DB::table('users')->orderBy('name', 'ASC')->paginate(10);
        return view('users.users', compact('user'));
    }

    public function search(Request $request)
    {
        $keyword = $request->keyword;

        $user = DB::table('users')->where('name', 'like', '%' . $keyword . '%')->paginate();

        return view('users.search', compact('user'));
    }

    public function create()
    {
        return view('users.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|unique:users',
            'password' => 'required'
        ]);

        User::create($request->all());

        return redirect('/User')->with('status', 'Data successfully added.');
    }

    public function show(User $user)
    {
        // return $user;
        return view('users.show', compact('user'));
    }

    public function destroy(User $user)
    {
        User::destroy($user->id);
        return redirect('/User')->with('status', 'Data successfully deleted.');
    }

    public function edit(User $user)
    {
        return view('users.edit', compact('user'));
    }

    public function update(Request $request, User $user)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|unique:users'
        ]);

        User::where('id', $user->id)
            ->update([
                'name' => $request->name,
                'email' => $request->email
            ]);

        return redirect('/User')->with('status', 'Data successfully changed.');
    }
}
