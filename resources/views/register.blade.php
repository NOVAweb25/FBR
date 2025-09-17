<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <title>تسجيل مستخدم جديد</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-white flex items-center justify-center min-h-screen font-sans">
    <div class="bg-white rounded-3xl shadow-xl w-full max-w-md border-t-4 border-t-gradient-to-r from-blue-400 via-blue-500 to-blue-600 p-10">
        <h2 class="text-3xl font-bold mb-8 text-center text-gray-800">تسجيل مستخدم جديد</h2>

        @if ($errors->any())
            <div class="mb-6 text-red-600 bg-red-100 p-3 rounded">
                <ul class="list-disc list-inside">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="/register" class="space-y-5">
            @csrf
            <div>
                <label class="block text-gray-700 mb-2">الاسم</label>
                <input type="text" name="name" class="w-full px-4 py-2 border rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-400">
            </div>

            <div>
                <label class="block text-gray-700 mb-2">البريد الإلكتروني</label>
                <input type="email" name="email" class="w-full px-4 py-2 border rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-400">
            </div>

            <div>
                <label class="block text-gray-700 mb-2">كلمة المرور</label>
                <input type="password" name="password" class="w-full px-4 py-2 border rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-400">
            </div>

            <button type="submit" class="w-full py-3 bg-blue-500 text-white font-semibold rounded-xl shadow-lg hover:bg-blue-600 transition-all duration-300">
                تسجيل
            </button>
        </form>

        <p class="mt-6 text-center text-gray-600">لديك حساب؟ <a href="/login" class="text-blue-600 font-semibold hover:underline">تسجيل الدخول</a></p>
    </div>
</body>
</html>
