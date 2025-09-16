<!doctype html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>FBR إدارة الأصول و الأملاك</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <style>
        body {
            font-family: 'Cairo', Arial, Tahoma, sans-serif;
            background: linear-gradient(135deg, #e0e7ff 0%, #f7f7f7 100%);
            margin: 0; padding: 0;
        }
        .header {
            background: linear-gradient(90deg, #2c3e50 60%, #3498db 100%);
            color: #fff;
            padding: 32px 0 24px 0;
            text-align: center;
            box-shadow: 0 2px 8px #3498db44;
        }
        .header h1 {
            font-size: 2.5em;
            letter-spacing: 2px;
        }
        .container {
            max-width: 1100px;
            margin: 40px auto;
            background: #fff;
            border-radius: 16px;
            box-shadow: 0 4px 24px #3498db22;
            padding: 40px 32px;
        }
        .main-menu {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 18px;
            margin-bottom: 32px;
        }
        .main-menu a {
            display: flex;
            align-items: center;
            gap: 8px;
            background: #e3f2fd;
            color: #34495e;
            border-radius: 8px;
            padding: 12px 24px;
            font-size: 1.1em;
            text-decoration: none;
            box-shadow: 0 1px 4px #3498db22;
            transition: background 0.2s, color 0.2s, transform 0.2s;
        }
        .main-menu a:hover {
            background: #3498db;
            color: #fff;
            transform: translateY(-2px) scale(1.04);
        }
        .section {
            margin-bottom: 40px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 24px;
            margin-bottom: 32px;
            background: #f8fafc;
            border-radius: 8px;
            overflow: hidden;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 14px;
            text-align: center;
        }
        th {
            background: #e3f2fd;
            font-weight: bold;
        }
        tr:nth-child(even) {
            background: #f2f2f2;
        }
        @media (max-width: 800px) {
            .container { padding: 12px; }
            .main-menu { flex-direction: column; gap: 10px; }
            table, th, td { font-size: 14px; }
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>FBR إدارة الأصول و الأملاك</h1>
        <p>لوحة تحكم احترافية بنفس تصميم الصفحة الأصلية</p>
    </div>
    <div class="container">
        <nav class="main-menu">
            <a href="#assets"><i class="fa-solid fa-layer-group"></i> الأصول</a>
            <a href="#buildings"><i class="fa-solid fa-building"></i> المباني</a>
            <a href="#contracts"><i class="fa-solid fa-file-contract"></i> العقود</a>
            <a href="#users"><i class="fa-solid fa-users"></i> المستخدمين</a>
            <a href="#inventory"><i class="fa-solid fa-boxes-stacked"></i> المخزون</a>
            <a href="#tasks"><i class="fa-solid fa-list-check"></i> المهام</a>
            <a href="#reports"><i class="fa-solid fa-chart-line"></i> التقارير</a>
            <a href="#vendors"><i class="fa-solid fa-truck"></i> الموردين</a>
            <a href="#warehouses"><i class="fa-solid fa-warehouse"></i> المستودعات</a>
            <a href="#warranties"><i class="fa-solid fa-shield"></i> الضمانات</a>
            <a href="#work-orders"><i class="fa-solid fa-clipboard-list"></i> أوامر العمل</a>
        </nav>
        <div class="section" id="assets">
            <h2>جدول الأصول</h2>
            <table>
                <thead>
                    <tr><th>الرقم</th><th>اسم الأصل</th><th>النوع</th><th>الحالة</th><th>الموقع</th></tr>
                </thead>
                <tbody>
                    <tr><td>1</td><td>حاسوب مكتبي</td><td>إلكترونيات</td><td>فعال</td><td>المكتب الرئيسي</td></tr>
                    <tr><td>2</td><td>طابعة ليزر</td><td>إلكترونيات</td><td>تحت الصيانة</td><td>قسم الطباعة</td></tr>
                    <tr><td>3</td><td>مكيف هواء</td><td>كهربائيات</td><td>فعال</td><td>الطابق الثاني</td></tr>
                </tbody>
            </table>
        </div>
        <!-- يمكنك إضافة أقسام أخرى هنا بنفس النمط -->
    </div>
</body>
</html>
