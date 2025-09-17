<!doctype html>
<html lang="ar" dir="rtl">
<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>لوحة تحكم الأدمن - FBR</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
	<style>
		body {
			font-family: 'Cairo', Arial, Tahoma, sans-serif;
			background: #f7fafd;
			margin: 0; padding: 0;
		}
		.sidebar {
			width: 220px;
			background: linear-gradient(180deg, #2c3e50 80%, #3498db 100%);
			color: #fff;
			position: fixed;
			top: 0; bottom: 0; right: 0;
			padding: 32px 0 0 0;
			box-shadow: -2px 0 12px #3498db22;
			z-index: 10;
		}
		.sidebar h2 {
			text-align: center;
			font-size: 1.3em;
			margin-bottom: 32px;
			letter-spacing: 1px;
		}
		.sidebar ul {
			list-style: none;
			padding: 0 0 0 0;
		}
		.sidebar ul li {
			margin: 18px 0;
		}
		.sidebar ul li a {
			color: #fff;
			text-decoration: none;
			font-size: 1.1em;
			display: flex;
			align-items: center;
			gap: 10px;
			padding: 10px 32px 10px 10px;
			border-radius: 0 20px 20px 0;
			transition: background 0.2s, color 0.2s;
		}
		.sidebar ul li a:hover {
			background: #3498db;
			color: #fff;
		}
		.main-content {
			margin-right: 240px;
			padding: 40px 32px;
		}
		.header {
			background: linear-gradient(90deg, #2c3e50 60%, #3498db 100%);
			color: #fff;
			padding: 32px 0 24px 0;
			text-align: center;
			box-shadow: 0 2px 8px #3498db44;
			border-radius: 0 0 24px 24px;
		}
		.header h1 {
			font-size: 2.2em;
			letter-spacing: 2px;
		}
		.dashboard-welcome {
			margin: 32px 0 24px 0;
			text-align: center;
		}
		.dashboard-welcome h2 {
			color: #2c3e50;
			font-size: 1.5em;
		}
		.dashboard-welcome p {
			color: #555;
		}
		.dashboard-cards {
			display: flex;
			flex-wrap: wrap;
			gap: 24px;
			justify-content: center;
			margin-bottom: 40px;
		}
		.dashboard-card {
			background: linear-gradient(135deg, #e3f2fd 0%, #fff 100%);
			border-radius: 12px;
			padding: 28px 18px;
			min-width: 200px;
			text-align: center;
			box-shadow: 0 2px 8px #3498db22;
			transition: transform 0.2s;
		}
		.dashboard-card:hover {
			transform: translateY(-4px) scale(1.03);
			box-shadow: 0 6px 24px #3498db33;
		}
		.dashboard-card .icon {
			font-size: 2.5em;
			color: #3498db;
			margin-bottom: 10px;
		}
		.dashboard-card .title {
			font-size: 1.1em;
			color: #2c3e50;
			margin-bottom: 8px;
			font-weight: bold;
		}
		.dashboard-card .value {
			font-size: 2em;
			color: #3498db;
			margin-bottom: 4px;
			font-weight: bold;
		}
		.dashboard-card .trend {
			font-size: 1em;
			color: #27ae60;
		}
		@media (max-width: 900px) {
			.main-content { margin-right: 0; padding: 16px; }
			.sidebar { position: static; width: 100%; border-radius: 0; box-shadow: none; }
		}
	</style>
</head>
<body>
	<div class="sidebar">
		<h2>القائمة الرئيسية</h2>
		<ul>
			<li><a href="#dashboard"><i class="fa-solid fa-gauge"></i> لوحة التحكم</a></li>
			<li><a href="#assets"><i class="fa-solid fa-layer-group"></i> الأصول</a></li>
			<li><a href="#buildings"><i class="fa-solid fa-building"></i> المباني</a></li>
			<li><a href="#contracts"><i class="fa-solid fa-file-contract"></i> العقود</a></li>
			<li><a href="#users"><i class="fa-solid fa-users"></i> المستخدمين</a></li>
			<li><a href="#inventory"><i class="fa-solid fa-boxes-stacked"></i> المخزون</a></li>
			<li><a href="#tasks"><i class="fa-solid fa-list-check"></i> المهام</a></li>
			<li><a href="#reports"><i class="fa-solid fa-chart-line"></i> التقارير</a></li>
			<li><a href="#vendors"><i class="fa-solid fa-truck"></i> الموردين</a></li>
			<li><a href="#warehouses"><i class="fa-solid fa-warehouse"></i> المستودعات</a></li>
			<li><a href="#warranties"><i class="fa-solid fa-shield"></i> الضمانات</a></li>
			<li><a href="#work-orders"><i class="fa-solid fa-clipboard-list"></i> أوامر العمل</a></li>
		</ul>
	</div>
	<div class="main-content">
		<div class="header">
			<h1>لوحة تحكم الأدمن - FBR إدارة الأصول و الأملاك</h1>
		</div>
		<div class="dashboard-welcome">
			<h2>مرحباً بك في نظام FBR</h2>
			<p>هذه لوحة تحكم احترافية لإدارة جميع بيانات الأصول والممتلكات.</p>
		</div>
		<div class="dashboard-cards">
			<div class="dashboard-card">
				<div class="icon"><i class="fa-solid fa-layer-group"></i></div>
				<div class="title">عدد الأصول</div>
				<div class="value">120</div>
				<div class="trend">+5% هذا الشهر</div>
			</div>
			<div class="dashboard-card">
				<div class="icon"><i class="fa-solid fa-building"></i></div>
				<div class="title">عدد المباني</div>
				<div class="value">8</div>
				<div class="trend">ثابت</div>
			</div>
			<div class="dashboard-card">
				<div class="icon"><i class="fa-solid fa-clipboard-list"></i></div>
				<div class="title">طلبات العمل المفتوحة</div>
				<div class="value">15</div>
				<div class="trend">+10% هذا الشهر</div>
			</div>
			<div class="dashboard-card">
				<div class="icon"><i class="fa-solid fa-money-bill-wave"></i></div>
				<div class="title">إجمالي الإنفاق</div>
				<div class="value">25,000 ريال</div>
				<div class="trend">-2% هذا الشهر</div>
			</div>
		</div>
		<!-- يمكنك إضافة جداول أو أقسام أخرى هنا حسب الحاجة -->
	</div>
</body>
</html>
<?php /**PATH C:\Users\novaw\FBR\resources\views/admin1.blade.php ENDPATH**/ ?>