<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\BaseController;
use Validator;
use Auth;
use Hash;
use App\Models\User;  
use App\Models\contact;

class UserController extends BaseController
{
    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => ['required', 'string'],
            'password' => ['required', 'string'],
        ]);

        if ($validator->fails()) {
            return $this->responseError('Login failed', 422, $validator->errors());
        }

        if (Auth::attempt(['name' => $request->name, 'password' => $request->password])) {
            $user = Auth::user();
            
            $response = [
                'token' => $user->createToken('MyToken')->accessToken,
                'name' => $user->name,
            ];

            return $this->responseOk($response);
        } else {
            return $this->responseError('Wrong email or password', 401);
        }
    }
//  register2 belum mau, task => insert into 2 table using 1 functions and make one to one relation
//  UI belum selesai
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => ['required', 'string', 'max:255'],
            // 'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        if ($validator->fails()) {
            return $this->responseError('Registration failed', 422, $validator->errors());
        }

        $params = [
            'name' => $request->name,
            // 'email' => $request->email,
            'password' => Hash::make($request->password),
        ];

        if ($user = User::create($params)) {
            $token = $user->createToken('MyToken')->accessToken;

            $response = [
                'token' => $token,
                'user' => $user,
            ];

            return $this->responseOk($response);
        } else {
            return $this->responseError('Registration failed', 400);
        }
    }

    public function addcontact(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'user_id' => ['required', 'string', 'max:255'],
            'nick_name' => ['required', 'string', 'max:255'],
            'fullname' => ['required', 'string', 'max:255'],
            'birthdate' => ['required', 'string', 'max:255'],
            'gender' => ['required', 'string', 'max:255'],
            'address' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
        ]);

        if ($validator->fails()) {
            return $this->responseError('Registration failed', 422, $validator->errors());
        }

        $params = [
            'user_id' => $request->user_id,
            'nick_name' => $request->nick_name,
            'fullname' => $request->fullname,
            'birthdate' => $request->birthdate,
            'gender' => $request->gender,
            'address' => $request->address,
            'email' => $request->email,
        ];

        if ($user = contact::create($params)) {
            $token = $user->createToken('MyToken')->accessToken;

            $response = [
                'token' => $token,
                'user' => $user,
            ];

            return $this->responseOk($response);
        } else {
            return $this->responseError('Registration failed', 400);
        }
    }

    public function profile($id)
    {
        $users = User::find($id);
        return $this->responseOk($users->contact());
    }
    public function destroy($id)
    {
      $contacts = contact::find($id);
      $contacts->delete();
      return "contact with id " . $id . " deleted";
    }
    public function update(Request $request, $id)
    {
        $book = Book::find($id);
        $book->title = $request->title;
        $book->author = $request->author;
        $book->publication = $request->publication;
        $book->year = $request->year;
        $book->update();

        return $book;
    }
    public function logout(Request $request)
    {
        $request->user()->token()->revoke();

        return $this->responseOk(null, 200, 'Logged out successfully.');
    }
}
