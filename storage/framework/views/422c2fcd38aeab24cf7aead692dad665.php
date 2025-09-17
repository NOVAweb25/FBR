<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <title>تسجيل الدخول</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-white flex items-center justify-center min-h-screen font-sans">
    <div class="bg-white rounded-3xl shadow-xl w-full max-w-md border-t-4 border-t-gradient-to-r from-blue-400 via-blue-500 to-blue-600 p-10">
        <h2 class="text-3xl font-bold mb-8 text-center text-gray-800">تسجيل الدخول</h2>

        <?php if($errors->any()): ?>
            <div class="mb-6 text-red-600 bg-red-100 p-3 rounded">
                <ul class="list-disc list-inside">
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><?php echo e($error); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
        <?php endif; ?>

        <form method="POST" action="/login" class="space-y-5">
            <?php echo csrf_field(); ?>
            <div>
                <label class="block text-gray-700 mb-2">البريد الإلكتروني</label>
                <input type="email" name="email" class="w-full px-4 py-2 border rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-400">
            </div>

            <div>
                <label class="block text-gray-700 mb-2">كلمة المرور</label>
                <input type="password" name="password" class="w-full px-4 py-2 border rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-400">
            </div>

            <button type="submit" class="w-full py-3 bg-blue-500 text-white font-semibold rounded-xl shadow-lg hover:bg-blue-600 transition-all duration-300">
                دخول
            </button>
        </form>

        <p class="mt-6 text-center text-gray-600">لا تملك حساب؟ <a href="/register" class="text-blue-600 font-semibold hover:underline">سجل الآن</a></p>
    </div>
</body>
</html>
<?php /**PATH C:\Users\novaw\FBR\resources\views/login.blade.php ENDPATH**/ ?>