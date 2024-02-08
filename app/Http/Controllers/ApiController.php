<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Motor;
use App\Models\Fren;
use App\Models\Kaporta;
use App\Models\Sanz;
use Illuminate\Support\Facades\Validator;

class ApiController extends Controller
{
    public function getUser( Request $request)
    {   
        $email=$request->email;
        $password=$request->password;
        $user = User::where('email', $email)->first();
        if($user->email == $email && $user->password == $password){
            return response()->json(['message' => 'Giriş başarılı'], 200);
        }
         else {
            
            return response()->json(['message' => 'Giriş bilgileri geçersiz'], 401);
        }
    }

    public function createUser(Request $request)
    {
        // Gelen verileri doğrulama
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required',
        ]);

        // Doğrulama başarısız ise hataları döndür
        if ($validator->fails()) {
            return response()->json(['message' => 'Bu Kullanıcı Var'], 401);

        }

        // Kullanıcıyı oluştur
        $user = new User([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => $request->input('password'),
        ]);

        // Kullanıcıyı kaydet
        $user->save();

        // Başarılı kayıt mesajı ile kullanıcıyı başka bir sayfaya yönlendir
        return response()->json(['message' => 'Kayıt başarılı'], 200);
    }

    public function getMotor()
    {
        return Motor::all();
    }

    public function getFren()
    {
        return Fren::all();
    }

    public function getKaporta()
    {
        return Kaporta::all();
    }

    public function getSanz()
    {
        return Sanz::all();
    }
}
