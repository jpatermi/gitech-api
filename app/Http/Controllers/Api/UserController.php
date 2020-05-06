<?php

namespace App\Http\Controllers\Api;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use Exception;

class userController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return response()->json($users, 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->json()->all();

        $data = $request->validate([
            'name'      => ['required', 'string', 'max:255'],
            'email'     => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password'  => ['required', 'string', 'min:6'],
        ]);

        //dd($data);

        $user = User::create([
            'name'        => $data['name'],
            'email'       => $data['email'],
            'password'    => Hash::make($data['password']),
        ]);

        return response()->json($user, 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return response()->json($user, 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
       //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();
    }

    /**
     * Get the token resource from login.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function loginGetToken(Request $request)
    {
        try {
            $data = $request->json()->all();
            $user = User::where('email', $data['email'])->first();
            if ($user && Hash::check($data['password'], $user->password)) {
                return response()->json($user, 200);
            } else {
                return response()->json(['error' => 'Usuario o Clave inválida'], 406);
            }
        } catch (Exception $e) {
            //dd($e->getMessage());
            return response()->json(['error' => 'Sin contenido. (' . $e->getMessage() . ')'], 404);
        }
    }
}
