<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AuthController extends Controller
{
    // تسجيل مستخدم جديد
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6'
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return redirect('/login')->with('success', 'تم إنشاء الحساب بنجاح، سجل دخولك.');
    }

    // تسجيل الدخول
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $user = User::where('email', $request->email)->first();

        if ($user && Hash::check($request->password, $user->password)) {
            // حفظ بيانات الجلسة
            session(['user_id' => $user->id]);

            // تحويل المستخدم مباشرة بعد تسجيل الدخول
            return redirect('/admin');
        }

        return back()->withErrors(['email' => 'بيانات الدخول غير صحيحة']);
    }

    // تسجيل الخروج
     public function logout(Request $request)
    {
        // مسح التوكن أو المعرف من الجلسة
        session()->forget('user_id'); 
       
        // session()->flush(); 

        // إعادة توجيه إلى صفحة الدخول
        return redirect('/login');
    }

}
