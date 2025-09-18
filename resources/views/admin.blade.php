<!doctype html>
<html lang="ar" dir="rtl">
<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>لوحة تحكم الأدمن - FBR</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
			 <!-- زر إظهار/إخفاء القائمة الجانبية سيتم نقله إلى <body> -->
	<style>
		body {
			font-family: 'Cairo', Arial, Tahoma, sans-serif;
			background: #f7fafd;
			margin: 0; padding: 0;
		}
		.sidebar {
			width: 240px;
			background: linear-gradient(180deg, #2c3e50 80%, #3498db 100%);
			color: #fff;
			position: fixed;
			top: 0; bottom: 0; left: 0;
			padding: 32px 0 0 0;
			box-shadow: 2px 0 12px #3498db22;
			z-index: 1000;
			transition: transform 0.3s cubic-bezier(.4,2,.6,1);
			display: flex;
			flex-direction: column;
		}
		.sidebar h2 {
			<script>
function logout() {
    if (confirm('هل أنت متأكد من تسجيل الخروج؟')) {
        window.location.href = '/logout';
    }
}

			// جميع الأقسام الديناميكية (لوحة التحكم، الأصول، المستخدمون، المباني، العقود، التقارير، المهام ...)
			const sections = {
					dashboard: `
					<div style="padding:0 8px;">
						<h1 style="font-size:2em;font-weight:bold;margin-bottom:8px;color:#2c3e50;">لوحة التحكم</h1>
						<p style="color:#888;margin-bottom:24px;">مرحباً بك في نظام FBR لإدارة الأصول والأملاك. هذه نظرة عامة على الوضع الحالي.</p>
						<div class="dashboard-cards" style="display:flex;flex-wrap:wrap;gap:24px;justify-content:center;margin-bottom:40px;">
							<div class="dashboard-card" style="background:linear-gradient(135deg,#e3f2fd 0%,#fff 100%);border-radius:12px;padding:28px 18px;min-width:200px;text-align:center;box-shadow:0 2px 8px #3498db22;transition:transform 0.2s;">
								<div class="icon" style="font-size:2.5em;color:#3498db;margin-bottom:10px;"><i class="fa-solid fa-layer-group"></i></div>
								<div class="title" style="font-size:1.1em;color:#2c3e50;margin-bottom:8px;font-weight:bold;">إجمالي الأصول</div>
								<div class="value" style="font-size:2em;color:#3498db;margin-bottom:4px;font-weight:bold;">42</div>
								<div class="trend" style="font-size:1em;color:#27ae60;">↑ 8% منذ الشهر الماضي</div>
							</div>
							<div class="dashboard-card" style="background:linear-gradient(135deg,#e3f2fd 0%,#fff 100%);border-radius:12px;padding:28px 18px;min-width:200px;text-align:center;box-shadow:0 2px 8px #3498db22;transition:transform 0.2s;">
								<div class="icon" style="font-size:2.5em;color:#3498db;margin-bottom:10px;"><i class="fa-solid fa-building"></i></div>
								<div class="title" style="font-size:1.1em;color:#2c3e50;margin-bottom:8px;font-weight:bold;">المباني</div>
								<div class="value" style="font-size:2em;color:#3498db;margin-bottom:4px;font-weight:bold;">4</div>
								<div class="trend" style="font-size:1em;color:#888;">0% منذ الشهر الماضي</div>
							</div>
							<div class="dashboard-card" style="background:linear-gradient(135deg,#e3f2fd 0%,#fff 100%);border-radius:12px;padding:28px 18px;min-width:200px;text-align:center;box-shadow:0 2px 8px #3498db22;transition:transform 0.2s;">
								<div class="icon" style="font-size:2.5em;color:#3498db;margin-bottom:10px;"><i class="fa-solid fa-clipboard-list"></i></div>
								<div class="title" style="font-size:1.1em;color:#2c3e50;margin-bottom:8px;font-weight:bold;">طلبات الصيانة النشطة</div>
								<div class="value" style="font-size:2em;color:#3498db;margin-bottom:4px;font-weight:bold;">12</div>
								<div class="trend" style="font-size:1em;color:#e74c3c;">↓ 5% منذ الشهر الماضي</div>
							</div>
							<div class="dashboard-card" style="background:linear-gradient(135deg,#e3f2fd 0%,#fff 100%);border-radius:12px;padding:28px 18px;min-width:200px;text-align:center;box-shadow:0 2px 8px #3498db22;transition:transform 0.2s;">
								<div class="icon" style="font-size:2.5em;color:#3498db;margin-bottom:10px;"><i class="fa-solid fa-money-bill-wave"></i></div>
								<div class="title" style="font-size:1.1em;color:#2c3e50;margin-bottom:8px;font-weight:bold;">تكاليف الصيانة الشهرية</div>
								<div class="value" style="font-size:2em;color:#3498db;margin-bottom:4px;font-weight:bold;">45,200 ر.س</div>
								<div class="trend" style="font-size:1em;color:#27ae60;">↑ 12% منذ الشهر الماضي</div>
							</div>
						</div>
						<div style="display:flex;flex-wrap:wrap;gap:24px;justify-content:stretch;">
							<!-- حالة الأصول -->
							<div style="flex:1 1 320px;min-width:260px;background:#fff;border-radius:12px;box-shadow:0 2px 8px #3498db22;padding:24px;">
								<h2 style="font-size:1.2em;color:#2c3e50;margin-bottom:16px;"><i class="fa-solid fa-circle-info"></i> حالة الأصول</h2>
								<div style="margin-bottom:18px;">
									<div style="display:flex;justify-content:space-between;font-size:1em;margin-bottom:4px;"><span>تعمل</span><span>75%</span></div>
									<div style="background:#e3f2fd;height:8px;border-radius:6px;overflow:hidden;"><div style="width:75%;height:100%;background:#27ae60;"></div></div>
								</div>
								<div style="margin-bottom:18px;">
									<div style="display:flex;justify-content:space-between;font-size:1em;margin-bottom:4px;"><span>صيانة</span><span>15%</span></div>
									<div style="background:#e3f2fd;height:8px;border-radius:6px;overflow:hidden;"><div style="width:15%;height:100%;background:#e67e22;"></div></div>
								</div>
								<div>
									<div style="display:flex;justify-content:space-between;font-size:1em;margin-bottom:4px;"><span>متوقفة</span><span>10%</span></div>
									<div style="background:#e3f2fd;height:8px;border-radius:6px;overflow:hidden;"><div style="width:10%;height:100%;background:#e74c3c;"></div></div>
								</div>
							</div>
							<!-- آخر الأنشطة -->
							<div style="flex:2 1 400px;min-width:320px;background:#fff;border-radius:12px;box-shadow:0 2px 8px #3498db22;padding:24px;max-height:340px;overflow-y:auto;">
								<h2 style="font-size:1.2em;color:#2c3e50;margin-bottom:16px;"><i class="fa-solid fa-clock"></i> آخر الأنشطة</h2>
								<ul style="list-style:none;padding:0;margin:0;">
									<li style="margin-bottom:18px;border-bottom:1px solid #f0f0f0;padding-bottom:10px;">
										<div style="font-weight:bold;color:#3498db;">تم إكمال صيانة نظام إطفاء الحريق</div>
										<div style="color:#888;font-size:0.95em;">أكمل عمر حسن صيانة نظام إطفاء الحريق في المبنى الرئيسي</div>
										<div style="color:#aaa;font-size:0.9em;">منذ ساعتين</div>
									</li>
									<li style="margin-bottom:18px;border-bottom:1px solid #f0f0f0;padding-bottom:10px;">
										<div style="font-weight:bold;color:#e74c3c;">تنبيه: مضخة المياه الرئيسية متوقفة</div>
										<div style="color:#888;font-size:0.95em;">تم تسجيل توقف مضخة المياه الرئيسية في مبنى الخدمات</div>
										<div style="color:#aaa;font-size:0.9em;">منذ 5 ساعات</div>
									</li>
									<li style="margin-bottom:18px;border-bottom:1px solid #f0f0f0;padding-bottom:10px;">
										<div style="font-weight:bold;color:#27ae60;">تم جدولة صيانة المولد الكهربائي</div>
										<div style="color:#888;font-size:0.95em;">تمت جدولة الصيانة الدورية للمولد الكهربائي الاحتياطي</div>
										<div style="color:#aaa;font-size:0.9em;">منذ يوم</div>
									</li>
									<li style="margin-bottom:18px;border-bottom:1px solid #f0f0f0;padding-bottom:10px;">
										<div style="font-weight:bold;color:#3498db;">تم إضافة أصل جديد</div>
										<div style="color:#888;font-size:0.95em;">تمت إضافة نظام أمان جديد إلى قائمة الأصول</div>
										<div style="color:#aaa;font-size:0.9em;">منذ 2 يوم</div>
									</li>
									<li>
										<div style="font-weight:bold;color:#3498db;">تم تحديث معلومات المبنى الإداري</div>
										<div style="color:#888;font-size:0.95em;">تم تحديث بيانات المبنى الإداري وإضافة مرافق جديدة</div>
										<div style="color:#aaa;font-size:0.9em;">منذ 3 أيام</div>
									</li>
								</ul>
							</div>
							<!-- جدول الصيانة -->
							<div style="flex:1 1 320px;min-width:260px;background:#fff;border-radius:12px;box-shadow:0 2px 8px #3498db22;padding:24px;">
								<h2 style="font-size:1.2em;color:#2c3e50;margin-bottom:16px;"><i class="fa-solid fa-calendar-check"></i> جدول الصيانة</h2>
								<ul style="list-style:none;padding:0;margin:0;">
									<li style="margin-bottom:18px;border-bottom:1px solid #f0f0f0;padding-bottom:10px;">
										<span style="font-weight:bold;color:#e67e22;">صيانة دورية لنظام التكييف</span>
										<span style="color:#888;font-size:0.95em;display:block;">مكيف مركزي رئيسي</span>
										<span style="background:#e67e22;color:#fff;padding:2px 10px;border-radius:8px;font-size:0.95em;">متوسطة</span>
										<span style="color:#888;font-size:0.95em;float:left;">بعد 21 يوم</span>
									</li>
									<li style="margin-bottom:18px;border-bottom:1px solid #f0f0f0;padding-bottom:10px;">
										<span style="font-weight:bold;color:#e74c3c;">إصلاح مصعد الزوار</span>
										<span style="color:#888;font-size:0.95em;display:block;">مصعد الزوار</span>
										<span style="background:#e74c3c;color:#fff;padding:2px 10px;border-radius:8px;font-size:0.95em;">عالية</span>
										<span style="color:#888;font-size:0.95em;float:left;">بعد 3 أيام</span>
									</li>
									<li>
										<span style="font-weight:bold;color:#27ae60;">فحص نظام الإنذار</span>
										<span style="color:#888;font-size:0.95em;display:block;">نظام الإنذار المبكر</span>
										<span style="background:#27ae60;color:#fff;padding:2px 10px;border-radius:8px;font-size:0.95em;">منخفضة</span>
										<span style="color:#888;font-size:0.95em;float:left;">بعد 10 أيام</span>
									</li>
								</ul>
							</div>
						</div>
					</div>
					`,
								 assets: `
	<div style='padding:0 8px;'>
		<h2 style='color:#2c3e50;font-size:1.5em;margin-bottom:18px;'><i class='fa-solid fa-layer-group'></i> إدارة الأصول</h2>
		<div style='display:flex;flex-wrap:wrap;gap:32px;margin-bottom:32px;'>
			<div style='flex:1 1 320px;min-width:260px;background:#fff;border-radius:12px;box-shadow:0 2px 8px #3498db22;padding:24px;'>
				<h3 style='color:#2c3e50;font-size:1.1em;margin-bottom:12px;'><i class='fa-solid fa-chart-pie'></i> توزيع الأصول حسب النوع</h3>
				<div style='width:100%;height:180px;display:flex;align-items:center;justify-content:center;'>
					<img src="https://quickchart.io/chart?c={type:'doughnut',data:{labels:['إلكترونيات','كهربائيات','أثاث'],datasets:[{data:[12,8,5],backgroundColor:['#3498db','#27ae60','#e67e22']}]} }" alt="pie chart" style="max-width:100%;max-height:160px;">
				</div>
			</div>
			<div style='flex:2 1 480px;min-width:320px;background:#fff;border-radius:12px;box-shadow:0 2px 8px #3498db22;padding:24px;'>
				<h3 style='color:#2c3e50;font-size:1.1em;margin-bottom:12px;'><i class='fa-solid fa-chart-column'></i> تطور الأصول خلال السنة</h3>
				<div style='width:100%;height:180px;display:flex;align-items:center;justify-content:center;'>
					<img src="https://quickchart.io/chart?c={type:'bar',data:{labels:['يناير','فبراير','مارس','ابريل','مايو','يونيو'],datasets:[{label:'أصول جديدة',data:[2,3,4,2,5,3],backgroundColor:'#3498db'}]},options:{scales:{y:{beginAtZero:true}}}}" alt="bar chart" style="max-width:100%;max-height:160px;">
				</div>
			</div>
		</div>
		<div style='background:#fff;border-radius:12px;box-shadow:0 2px 8px #3498db22;overflow:hidden;margin-bottom:32px;padding:24px;'>
			<div style='display:flex;flex-wrap:wrap;gap:16px 24px;align-items:center;margin-bottom:18px;'>
				<input type='text' placeholder='بحث عن أصل...' style='flex:1 1 200px;padding:8px 16px;border:1px solid #e3f2fd;border-radius:8px;font-size:1em;'>
				<select style='padding:8px 16px;border:1px solid #e3f2fd;border-radius:8px;font-size:1em;'>
					<option>الكل</option>
					<option>إلكترونيات</option>
					<option>كهربائيات</option>
					<option>أثاث</option>
				</select>
				<button style='background:#3498db;color:#fff;padding:10px 24px;border:none;border-radius:8px;font-size:1em;cursor:pointer;'><i class='fa-solid fa-plus'></i> إضافة أصل جديد</button>
			</div>
			<div style='overflow-x:auto;'>
				<table style='width:100%;min-width:600px;'>
					<thead style='background:#e3f2fd;'><tr><th>#</th><th>اسم الأصل</th><th>النوع</th><th>الحالة</th><th>الموقع</th><th>إجراءات</th></tr></thead>
					<tbody>
						<tr><td>1</td><td>حاسوب مكتبي</td><td>إلكترونيات</td><td><span style='color:#27ae60;font-weight:bold;'>فعال</span></td><td>المكتب الرئيسي</td><td><button style='background:#e3f2fd;color:#3498db;border:none;padding:6px 16px;border-radius:6px;cursor:pointer;'><i class='fa-solid fa-eye'></i> تفاصيل</button></td></tr>
						<tr><td>2</td><td>طابعة ليزر</td><td>إلكترونيات</td><td><span style='color:#e67e22;font-weight:bold;'>تحت الصيانة</span></td><td>قسم الطباعة</td><td><button style='background:#e3f2fd;color:#3498db;border:none;padding:6px 16px;border-radius:6px;cursor:pointer;'><i class='fa-solid fa-eye'></i> تفاصيل</button></td></tr>
						<tr><td>3</td><td>مكيف هواء</td><td>كهربائيات</td><td><span style='color:#27ae60;font-weight:bold;'>فعال</span></td><td>الطابق الثاني</td><td><button style='background:#e3f2fd;color:#3498db;border:none;padding:6px 16px;border-radius:6px;cursor:pointer;'><i class='fa-solid fa-eye'></i> تفاصيل</button></td></tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
								 `,
								users: `
				<div style='margin-bottom:24px;'>
					<h2 style='color:#2c3e50;display:flex;align-items:center;gap:10px;'><i class='fa-solid fa-users'></i> إدارة المستخدمين</h2>
					<p style='color:#888;margin-bottom:12px;font-size:1.08em;'>تابع حالة المستخدمين، أدوارهم، أضف أو عدّل بياناتهم بسهولة.</p>
				</div>
				<div style='background:#fff;border-radius:12px;box-shadow:0 2px 8px #3498db22;overflow:hidden;margin-bottom:24px;padding:24px;'>
					<table style='width:100%;min-width:700px;'>
						<thead style='background:#e3f2fd;'><tr><th>#</th><th>الصورة</th><th>الاسم</th><th>القسم</th><th>الدور</th><th>الحالة</th><th>الوصف</th><th>إجراءات</th></tr></thead>
						<tbody>
							<tr>
								<td>1</td>
								<td><img src="https://img.icons8.com/ios-filled/32/3498db/user-male-circle.png" alt="user" style="width:32px;height:32px;border-radius:50%;background:#f7fafd;"></td>
								<td>أحمد</td>
								<td>الإدارة</td>
								<td><span style="background:#e3f2fd;color:#3498db;padding:2px 10px;border-radius:8px;font-size:0.98em;">مدير</span></td>
								<td><span style='color:#27ae60;font-weight:bold;'><i class='fa-solid fa-circle'></i> نشط</span></td>
								<td>مسؤول النظام الرئيسي، يملك جميع الصلاحيات.</td>

							</tr>
							<tr>
								<td>2</td>
								<td><img src="https://img.icons8.com/ios-filled/32/e67e22/user-female-circle.png" alt="user" style="width:32px;height:32px;border-radius:50%;background:#f7fafd;"></td>
								<td>سارة</td>
								<td>الصيانة</td>
								<td><span style="background:#e3f2fd;color:#e67e22;padding:2px 10px;border-radius:8px;font-size:0.98em;">فني</span></td>
								<td><span style='color:#e67e22;font-weight:bold;'><i class='fa-solid fa-circle'></i> مؤقت</span></td>
								<td>فنية صيانة متخصصة في الأجهزة الإلكترونية.</td>

							</tr>
						</tbody>
					</table>
					<div style='text-align:left;margin-top:16px;'>
						<button style='background:#3498db;color:#fff;padding:10px 24px;border:none;border-radius:8px;font-size:1em;cursor:pointer;'><i class='fa-solid fa-user-plus'></i> إضافة مستخدم جديد</button>
					</div>
				</div>
				<div style='margin-top:12px;text-align:center;color:#aaa;font-size:1.05em;'>يمكنك الضغط على زر التفاصيل لأي مستخدم لمزيد من المعلومات أو التعديل.</div>
				`,
								buildings: `
				<div style='margin-bottom:24px;'>
					<h2 style='color:#2c3e50;display:flex;align-items:center;gap:10px;'><i class='fa-solid fa-building'></i> إدارة المباني</h2>
					<p style='color:#888;margin-bottom:12px;font-size:1.08em;'>تابع حالة المباني، مواقعها وعدد الأصول في كل مبنى.</p>
				</div>
				<div style='background:#fff;border-radius:12px;box-shadow:0 2px 8px #3498db22;overflow:hidden;margin-bottom:24px;padding:24px;'>
					<table style='width:100%;min-width:600px;'>
						<thead style='background:#e3f2fd;'><tr><th>#</th><th>اسم المبنى</th><th>الموقع</th><th>عدد الأصول</th><th>الحالة</th><th>الوصف</th><th>إجراءات</th></tr></thead>
						<tbody>
							<tr>
								<td>1</td>
								<td>المبنى الرئيسي</td>
								<td>الرياض</td>
								<td>50</td>
								<td><span style='color:#27ae60;font-weight:bold;'><i class='fa-solid fa-circle'></i> نشط</span></td>
								<td>مبنى إداري مركزي يضم الإدارة العامة وقاعات الاجتماعات.</td>

							</tr>
							<tr>
								<td>2</td>
								<td>مبنى الإدارة</td>
								<td>جدة</td>
								<td>30</td>
								<td><span style='color:#e67e22;font-weight:bold;'><i class='fa-solid fa-circle'></i> تحت الصيانة</span></td>
								<td>مبنى إداري فرعي يضم مكاتب الدعم الفني.</td>

							</tr>
						</tbody>
					</table>
					<div style='text-align:left;margin-top:16px;'>
						<button style='background:#3498db;color:#fff;padding:10px 24px;border:none;border-radius:8px;font-size:1em;cursor:pointer;'><i class='fa-solid fa-plus'></i> إضافة مبنى جديد</button>
					</div>
				</div>
				<div style='margin-top:12px;text-align:center;color:#aaa;font-size:1.05em;'>يمكنك الضغط على زر التفاصيل لأي مبنى لمزيد من المعلومات أو التعديل.</div>
				`,
								contracts: `
				<div style='margin-bottom:24px;'>
					<h2 style='color:#2c3e50;display:flex;align-items:center;gap:10px;'><i class='fa-solid fa-file-contract'></i> إدارة العقود</h2>
					<p style='color:#888;margin-bottom:12px;font-size:1.08em;'>تابع حالة العقود، أنواعها، تواريخها، وأضف عقود جديدة بسهولة.</p>
				</div>
				<div style='background:#fff;border-radius:12px;box-shadow:0 2px 8px #3498db22;overflow:hidden;margin-bottom:24px;padding:24px;'>
					<table style='width:100%;min-width:700px;'>
						<thead style='background:#e3f2fd;'><tr><th>#</th><th>اسم العقد</th><th>النوع</th><th>الحالة</th><th>تاريخ البداية</th><th>تاريخ النهاية</th><th>الوصف</th><th>إجراءات</th></tr></thead>
						<tbody>
							<tr>
								<td>1</td>
								<td>عقد صيانة سنوي</td>
								<td><span style="background:#e3f2fd;color:#3498db;padding:2px 10px;border-radius:8px;font-size:0.98em;">صيانة</span></td>
								<td><span style='color:#27ae60;font-weight:bold;'><i class='fa-solid fa-circle'></i> ساري</span></td>
								<td>2025-01-01</td>
								<td>2025-12-31</td>
								<td>عقد صيانة سنوي يشمل جميع المباني والأصول.</td>

							</tr>
							<tr>
								<td>2</td>
								<td>عقد توريد أجهزة</td>
								<td><span style="background:#e3f2fd;color:#e67e22;padding:2px 10px;border-radius:8px;font-size:0.98em;">توريد</span></td>
								<td><span style='color:#e74c3c;font-weight:bold;'><i class='fa-solid fa-circle'></i> منتهي</span></td>
								<td>2024-01-01</td>
								<td>2024-06-30</td>
								<td>عقد لتوريد أجهزة إلكترونية ومكتبية.</td>
								<td><button style='background:#e3f2fd;color:#3498db;border:none;padding:6px 16px;border-radius:6px;cursor:pointer;'><i class='fa-solid fa-eye'></i> تفاصيل</button></td>
							</tr>
						</tbody>
					</table>
					<div style='text-align:left;margin-top:16px;'>
						<button style='background:#3498db;color:#fff;padding:10px 24px;border:none;border-radius:8px;font-size:1em;cursor:pointer;'><i class='fa-solid fa-plus'></i> إضافة عقد جديد</button>
					</div>
				</div>
				<div style='margin-top:12px;text-align:center;color:#aaa;font-size:1.05em;'>يمكنك الضغط على زر التفاصيل لأي عقد لمزيد من المعلومات أو التعديل.</div>
				`,
								reports: `
				<div style='margin-bottom:24px;'>
					<h2 style='color:#2c3e50;display:flex;align-items:center;gap:10px;'><i class='fa-solid fa-chart-line'></i> التقارير والإحصائيات</h2>
					<p style='color:#888;margin-bottom:12px;font-size:1.08em;'>اطلع على ملخصات الأداء، حالة الأصول، الصيانة والتكاليف برسوم بيانية وجداول تفاعلية.</p>
				</div>
				<div style='display:flex;flex-wrap:wrap;gap:32px;margin-bottom:32px;'>
					<div style='flex:1 1 320px;min-width:260px;background:#fff;border-radius:12px;box-shadow:0 2px 8px #3498db22;padding:24px;'>
						<h3 style='color:#2c3e50;font-size:1.1em;margin-bottom:12px;'><i class='fa-solid fa-chart-pie'></i> توزيع الأصول</h3>
						<div style='width:100%;height:180px;display:flex;align-items:center;justify-content:center;'>
							<img src="https://quickchart.io/chart?c={type:'doughnut',data:{labels:['إلكترونيات','كهربائيات','أثاث'],datasets:[{data:[12,8,5],backgroundColor:['#3498db','#27ae60','#e67e22']}]} }" alt="pie chart" style="max-width:100%;max-height:160px;">
						</div>
					</div>
					<div style='flex:2 1 480px;min-width:320px;background:#fff;border-radius:12px;box-shadow:0 2px 8px #3498db22;padding:24px;'>
						<h3 style='color:#2c3e50;font-size:1.1em;margin-bottom:12px;'><i class='fa-solid fa-chart-column'></i> تطور الأصول خلال السنة</h3>
						<div style='width:100%;height:180px;display:flex;align-items:center;justify-content:center;'>
							<img src="https://quickchart.io/chart?c={type:'bar',data:{labels:['يناير','فبراير','مارس','ابريل','مايو','يونيو'],datasets:[{label:'أصول جديدة',data:[2,3,4,2,5,3],backgroundColor:'#3498db'}]},options:{scales:{y:{beginAtZero:true}}}}" alt="bar chart" style="max-width:100%;max-height:160px;">
						</div>
					</div>
				</div>
				<div style='background:#fff;border-radius:12px;box-shadow:0 2px 8px #3498db22;overflow:hidden;margin-bottom:32px;padding:24px;'>
					<h3 style='color:#2c3e50;font-size:1.1em;margin-bottom:12px;'><i class='fa-solid fa-table'></i> ملخص التكاليف الشهرية</h3>
					<table style='width:100%;min-width:500px;'>
						<thead style='background:#e3f2fd;'><tr><th>الشهر</th><th>التكاليف (ر.س)</th><th>النسبة</th></tr></thead>
						<tbody>
							<tr><td>يناير</td><td>10,000</td><td style='color:#27ae60;font-weight:bold;'>+5%</td></tr>
							<tr><td>فبراير</td><td>12,000</td><td style='color:#e67e22;font-weight:bold;'>+2%</td></tr>
							<tr><td>مارس</td><td>9,500</td><td style='color:#e74c3c;font-weight:bold;'>-3%</td></tr>
							<tr><td>ابريل</td><td>11,200</td><td style='color:#27ae60;font-weight:bold;'>+4%</td></tr>
						</tbody>
					</table>
				</div>
				<div style='margin-top:12px;text-align:center;color:#aaa;font-size:1.05em;'>يمكنك استعراض وتحميل التقارير التفصيلية من هنا.</div>
				`,
								tasks: `
				<div style='margin-bottom:24px;'>
					<h2 style='color:#2c3e50;display:flex;align-items:center;gap:10px;'><i class='fa-solid fa-list-check'></i> إدارة المهام</h2>
					<p style='color:#888;margin-bottom:12px;font-size:1.08em;'>تابع حالة المهام، أولوياتها، أضف أو عدّل المهام بسهولة.</p>
				</div>
				<div style='background:#fff;border-radius:12px;box-shadow:0 2px 8px #3498db22;overflow:hidden;margin-bottom:24px;padding:24px;'>
					<table style='width:100%;min-width:600px;'>
						<thead style='background:#e3f2fd;'><tr><th>#</th><th>اسم المهمة</th><th>الحالة</th><th>الأولوية</th><th>الوصف</th><th>إجراءات</th></tr></thead>
						<tbody>
							<tr>
								<td>1</td>
								<td>صيانة طابعة</td>
								<td><span style='color:#e67e22;font-weight:bold;'><i class='fa-solid fa-circle'></i> قيد التنفيذ</span></td>
								<td><span style="background:#e3f2fd;color:#e67e22;padding:2px 10px;border-radius:8px;font-size:0.98em;">متوسطة</span></td>
								<td>إصلاح عطل في طابعة الليزر بقسم الطباعة.</td>
								<td><button style='background:#e3f2fd;color:#3498db;border:none;padding:6px 16px;border-radius:6px;cursor:pointer;'><i class='fa-solid fa-eye'></i> تفاصيل</button></td>
							</tr>
							<tr>
								<td>2</td>
								<td>تركيب مكيف</td>
								<td><span style='color:#27ae60;font-weight:bold;'><i class='fa-solid fa-circle'></i> مكتملة</span></td>
								<td><span style="background:#e3f2fd;color:#27ae60;padding:2px 10px;border-radius:8px;font-size:0.98em;">عالية</span></td>
								<td>تركيب مكيف هواء جديد في الطابق الثاني.</td>
								<td><button style='background:#e3f2fd;color:#3498db;border:none;padding:6px 16px;border-radius:6px;cursor:pointer;'><i class='fa-solid fa-eye'></i> تفاصيل</button></td>
							</tr>
						</tbody>
					</table>
					<div style='text-align:left;margin-top:16px;'>
						<button style='background:#3498db;color:#fff;padding:10px 24px;border:none;border-radius:8px;font-size:1em;cursor:pointer;'><i class='fa-solid fa-plus'></i> إضافة مهمة</button>
					</div>
				</div>
				<div style='margin-top:12px;text-align:center;color:#aaa;font-size:1.05em;'>يمكنك الضغط على زر التفاصيل لأي مهمة لمزيد من المعلومات أو التعديل.</div>
				`,
								vendors: `
				<div style='margin-bottom:24px;'>
					<h2 style='color:#2c3e50;display:flex;align-items:center;gap:10px;'><i class='fa-solid fa-truck'></i> إدارة الموردين</h2>
					<p style='color:#888;margin-bottom:12px;font-size:1.08em;'>تابع حالة الموردين، نوع الخدمة، أضف أو عدّل بيانات الموردين بسهولة.</p>
				</div>
				<div style='background:#fff;border-radius:12px;box-shadow:0 2px 8px #3498db22;overflow:hidden;margin-bottom:24px;padding:24px;'>
					<table style='width:100%;min-width:600px;'>
						<thead style='background:#e3f2fd;'><tr><th>#</th><th>اسم المورد</th><th>نوع الخدمة</th><th>الحالة</th><th>إجراءات</th></tr></thead>
						<tbody>
							<tr><td>1</td><td>شركة التقنية</td><td>توريد أجهزة</td><td><span style='color:#27ae60;font-weight:bold;'><i class='fa-solid fa-circle'></i> نشط</span></td><td><button style='background:#e3f2fd;color:#3498db;border:none;padding:6px 16px;border-radius:6px;cursor:pointer;'><i class='fa-solid fa-eye'></i> تفاصيل</button></td></tr>
							<tr><td>2</td><td>شركة الصيانة</td><td>صيانة دورية</td><td><span style='color:#e74c3c;font-weight:bold;'><i class='fa-solid fa-circle'></i> متوقف</span></td><td><button style='background:#e3f2fd;color:#3498db;border:none;padding:6px 16px;border-radius:6px;cursor:pointer;'><i class='fa-solid fa-eye'></i> تفاصيل</button></td></tr>
						</tbody>
					</table>
				</div>
				<div style='margin-top:12px;text-align:center;color:#aaa;font-size:1.05em;'>يمكنك الضغط على زر التفاصيل لأي مورد لمزيد من المعلومات أو التعديل.</div>
				`,
								warehouses: `
				<div style='margin-bottom:24px;'>
					<h2 style='color:#2c3e50;display:flex;align-items:center;gap:10px;'><i class='fa-solid fa-warehouse'></i> إدارة المستودعات</h2>
					<p style='color:#888;margin-bottom:12px;font-size:1.08em;'>تابع حالة المستودعات، مواقعها وعدد الأصناف في كل مستودع.</p>
				</div>
				<div style='background:#fff;border-radius:12px;box-shadow:0 2px 8px #3498db22;overflow:hidden;margin-bottom:24px;padding:24px;'>
					<table style='width:100%;min-width:600px;'>
						<thead style='background:#e3f2fd;'><tr><th>#</th><th>اسم المستودع</th><th>الموقع</th><th>عدد الأصناف</th><th>إجراءات</th></tr></thead>
						<tbody>
							<tr><td>1</td><td>المخزن الرئيسي</td><td>الرياض</td><td>100</td><td><button style='background:#e3f2fd;color:#3498db;border:none;padding:6px 16px;border-radius:6px;cursor:pointer;'><i class='fa-solid fa-eye'></i> تفاصيل</button></td></tr>
							<tr><td>2</td><td>مخزن قطع الغيار</td><td>جدة</td><td>40</td><td><button style='background:#e3f2fd;color:#3498db;border:none;padding:6px 16px;border-radius:6px;cursor:pointer;'><i class='fa-solid fa-eye'></i> تفاصيل</button></td></tr>
						</tbody>
					</table>
				</div>
				<div style='margin-top:12px;text-align:center;color:#aaa;font-size:1.05em;'>يمكنك الضغط على زر التفاصيل لأي مستودع لمزيد من المعلومات أو التعديل.</div>
				`,
								warranties: `
				<div style='margin-bottom:24px;'>
					<h2 style='color:#2c3e50;display:flex;align-items:center;gap:10px;'><i class='fa-solid fa-shield'></i> إدارة الضمانات</h2>
					<p style='color:#888;margin-bottom:12px;font-size:1.08em;'>تابع حالة الضمانات، نوع الأصل، حالة الضمان، أضف أو عدّل الضمانات بسهولة.</p>
				</div>
				<div style='background:#fff;border-radius:12px;box-shadow:0 2px 8px #3498db22;overflow:hidden;margin-bottom:24px;padding:24px;'>
					<table style='width:100%;min-width:600px;'>
						<thead style='background:#e3f2fd;'><tr><th>#</th><th>اسم الأصل</th><th>نوع الأصل</th><th>حالة الضمان</th><th>إجراءات</th></tr></thead>
						<tbody>
							<tr><td>1</td><td>حاسوب مكتبي</td><td>إلكترونيات</td><td><span style='color:#27ae60;font-weight:bold;'><i class='fa-solid fa-circle'></i> ساري</span></td><td><button style='background:#e3f2fd;color:#3498db;border:none;padding:6px 16px;border-radius:6px;cursor:pointer;'><i class='fa-solid fa-eye'></i> تفاصيل</button></td></tr>
							<tr><td>2</td><td>مكيف هواء</td><td>كهربائيات</td><td><span style='color:#e74c3c;font-weight:bold;'><i class='fa-solid fa-circle'></i> منتهي</span></td><td><button style='background:#e3f2fd;color:#3498db;border:none;padding:6px 16px;border-radius:6px;cursor:pointer;'><i class='fa-solid fa-eye'></i> تفاصيل</button></td></tr>
						</tbody>
					</table>
				</div>
				<div style='margin-top:12px;text-align:center;color:#aaa;font-size:1.05em;'>يمكنك الضغط على زر التفاصيل لأي ضمان لمزيد من المعلومات أو التعديل.</div>
				`,
								'work-orders': `
				<div style='margin-bottom:24px;'>
					<h2 style='color:#2c3e50;display:flex;align-items:center;gap:10px;'><i class='fa-solid fa-clipboard-list'></i> إدارة أوامر العمل</h2>
					<p style='color:#888;margin-bottom:12px;font-size:1.08em;'>تابع حالة أوامر العمل، نوع المهمة، أضف أو عدّل أوامر العمل بسهولة.</p>
				</div>
				<div style='background:#fff;border-radius:12px;box-shadow:0 2px 8px #3498db22;overflow:hidden;margin-bottom:24px;padding:24px;'>
					<table style='width:100%;min-width:600px;'>
						<thead style='background:#e3f2fd;'><tr><th>#</th><th>اسم الأمر</th><th>نوع المهمة</th><th>الحالة</th><th>إجراءات</th></tr></thead>
						<tbody>
							<tr><td>1</td><td>إصلاح مكيف</td><td>صيانة</td><td><span style='color:#27ae60;font-weight:bold;'><i class='fa-solid fa-circle'></i> مفتوح</span></td><td><button style='background:#e3f2fd;color:#3498db;border:none;padding:6px 16px;border-radius:6px;cursor:pointer;'><i class='fa-solid fa-eye'></i> تفاصيل</button></td></tr>
							<tr><td>2</td><td>استبدال طابعة</td><td>توريد</td><td><span style='color:#e74c3c;font-weight:bold;'><i class='fa-solid fa-circle'></i> مغلق</span></td><td><button style='background:#e3f2fd;color:#3498db;border:none;padding:6px 16px;border-radius:6px;cursor:pointer;'><i class='fa-solid fa-eye'></i> تفاصيل</button></td></tr>
						</tbody>
					</table>
				</div>
				<div style='margin-top:12px;text-align:center;color:#aaa;font-size:1.05em;'>يمكنك الضغط على زر التفاصيل لأي أمر عمل لمزيد من المعلومات أو التعديل.</div>
				`
			};
			// تفعيل الروابط الجانبية
			const sidebarLinks = document.querySelectorAll('.sidebar ul li a');
			const dynamicContent = document.getElementById('dynamic-content');
			function showSection(section) {
				sidebarLinks.forEach(l => l.classList.remove('active'));
				const link = Array.from(sidebarLinks).find(l => l.getAttribute('href') === '#' + section);
				if(link) link.classList.add('active');
				dynamicContent.innerHTML = sections[section] || '<div style="text-align:center;color:#aaa;">لا توجد بيانات</div>';
			}
			sidebarLinks.forEach(link => {
				link.addEventListener('click', function(e) {
					e.preventDefault();
					const section = this.getAttribute('href').replace('#','');
					showSection(section);
				});
			});
			// عرض القسم الافتراضي
			showSection('dashboard');
			</script>
		}
		.dashboard-welcome p {
			color: #555;
		}
		.dashboard-cards {
			display: flex;
			flex-wrap: wrap;
			@media (max-width: 900px) {
				#sidebar { transform: translateX(100%); transition: transform 0.3s cubic-bezier(.4,2,.6,1); }
				#sidebar.open { transform: translateX(0); }
				#sidebar-toggle { display: block; }
			}
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
		 <!-- زر إظهار/إخفاء القائمة الجانبية (يظهر فقط على الجوال) -->
		 <button id="sidebar-toggle"><i class="fa-solid fa-bars"></i></button>
		 <!-- القائمة الجانبية الرئيسية (واحدة فقط) -->
		<div id="sidebar" class="sidebar">
		   <div style="padding:32px 0 0 0;text-align:center;">
			   <img src="https://img.icons8.com/ios-filled/50/3498db/user-male-circle.png" alt="user" style="width:60px;height:60px;border-radius:50%;background:#fff;margin-bottom:8px;box-shadow:0 2px 8px #3498db33;">
			   <div style="font-weight:bold;font-size:1.1em;">مدير النظام</div>
			   <div style="font-size:0.95em;color:#b0c4d6;">admin@example.com</div>
		   </div>
		   <nav style="flex:1;overflow-y:auto;padding:24px 0 0 0;">
			   <ul style="list-style:none;padding:0 0 0 0;margin:0;">
				   <li style="padding:8px 32px 8px 0;"><span style="font-size:0.9em;color:#b0c4d6;font-weight:bold;">الرئيسية</span></li>
				   <li><a href="#dashboard" class="sidebar-link"><i class="fa-solid fa-gauge"></i> لوحة التحكم</a></li>
				   <li style="padding:8px 32px 8px 0;"><span style="font-size:0.9em;color:#b0c4d6;font-weight:bold;">الأصول والمرافق</span></li>
				   <li><a href="#assets" class="sidebar-link"><i class="fa-solid fa-layer-group"></i> الأصول</a></li>
				   <li><a href="#buildings" class="sidebar-link"><i class="fa-solid fa-building"></i> المباني</a></li>
				   <li style="padding:8px 32px 8px 0;"><span style="font-size:0.9em;color:#b0c4d6;font-weight:bold;">الصيانة والعمليات</span></li>
				   <li><a href="#tasks" class="sidebar-link"><i class="fa-solid fa-list-check"></i> المهام</a></li>
				   <li><a href="#work-orders" class="sidebar-link"><i class="fa-solid fa-clipboard-list"></i> أوامر العمل</a></li>
				   <li style="padding:8px 32px 8px 0;"><span style="font-size:0.9em;color:#b0c4d6;font-weight:bold;">الإدارة والتقارير</span></li>
				   <li><a href="#users" class="sidebar-link"><i class="fa-solid fa-users"></i> المستخدمين</a></li>
				   <li><a href="#contracts" class="sidebar-link"><i class="fa-solid fa-file-contract"></i> العقود</a></li>
				   <li><a href="#reports" class="sidebar-link"><i class="fa-solid fa-chart-line"></i> التقارير</a></li>
				   <li><a href="#vendors" class="sidebar-link"><i class="fa-solid fa-truck"></i> الموردين</a></li>
				   <li><a href="#warehouses" class="sidebar-link"><i class="fa-solid fa-warehouse"></i> المستودعات</a></li>
				   <li><a href="#warranties" class="sidebar-link"><i class="fa-solid fa-shield"></i> الضمانات</a></li>
			   </ul>
		   </nav>
		   <div style="text-align:center; margin:24px 0 24px 0;">
			   <button onclick="logout()" style="background:#e74c3c;color:#fff;border:none;padding:12px 32px;border-radius:24px;font-size:1.1em;cursor:pointer;transition:background 0.2s;"><i class="fa-solid fa-right-from-bracket"></i> تسجيل خروج</button>
		   </div>
	   </div>
<style>
.main-content {
	margin-left: 260px;
	margin-right: 0;
	transition: margin 0.3s;
}
#sidebar-toggle {
	position: fixed;
	top: 24px;
	left: 24px;
	z-index: 1001;
	background: #3498db;
	color: #fff;
	border: none;
	padding: 10px 18px;
	border-radius: 12px;
	font-size: 1.2em;
	box-shadow: 0 2px 8px #3498db33;
	cursor: pointer;
	transition: background 0.2s;
	display: none;
}
.sidebar-link {
	display: flex;
	align-items: center;
	gap: 12px;
	color: #fff;
	text-decoration: none;
	font-size: 1.08em;
	padding: 10px 32px 10px 0;
	border-radius: 8px 0 0 8px;
	margin: 2px 0;
	transition: background 0.15s, color 0.15s;
}
.sidebar-link:hover, .sidebar-link.active {
	background: #3498db33;
	color: #3498db;
}
@media (max-width: 900px) {
	#sidebar { transform: translateX(-100%) !important; left: 0; right: auto; }
	#sidebar.open { transform: translateX(0) !important; }
	#sidebar-toggle { display: block !important; left: 24px; right: auto; }
	.main-content { margin-left: 0 !important; padding: 16px; }
	.sidebar { position: static; width: 100%; border-radius: 0; box-shadow: none; left: 0; }
}
</style>
<script>
const sidebar = document.getElementById('sidebar');
const sidebarToggle = document.getElementById('sidebar-toggle');
function toggleSidebar() {
   sidebar.classList.toggle('open');
}
sidebarToggle.addEventListener('click', function(e) {
   e.stopPropagation();
   toggleSidebar();
});
// إغلاق القائمة عند الضغط خارجها على الجوال
document.addEventListener('click', function(e) {
   if(window.innerWidth <= 900 && sidebar.classList.contains('open')) {
	   if(!sidebar.contains(e.target) && e.target !== sidebarToggle) {
		   sidebar.classList.remove('open');
	   }
   }
});
</script>
	<style>
	.sidebar-link {
		display: flex;
		align-items: center;
		gap: 12px;
		color: #fff;
		text-decoration: none;
		font-size: 1.08em;
		padding: 10px 32px 10px 0;
		border-radius: 8px 0 0 8px;
		margin: 2px 0;
		transition: background 0.15s, color 0.15s;
	}
	.sidebar-link:hover, .sidebar-link.active {
		background: #3498db33;
		color: #3498db;
	}
	</style>
	<script>
	function logout() {
		alert('تم تسجيل الخروج (تجريبي). يمكنك ربط الزر بوظيفة تسجيل الخروج الفعلية لاحقاً.');
		// location.href = '/logout';
	}
	</script>
	<div class="main-content">
		<div class="header">
			<img src="https://img.icons8.com/ios-filled/50/ffffff/combo-chart.png" alt="لوغو" style="vertical-align:middle;margin-left:12px;">
			<span style="font-size:2em;vertical-align:middle;">لوحة تحكم الأدمن</span>
		</div>
		<div id="dynamic-content" style="margin-top:32px;"></div>
	</div>
	<script>
	function logout() {
		window.location.href = '/logout';
	}
	// بيانات الأقسام
	const sections = {
			dashboard: `
			<div style="margin-bottom:32px;">
				<h1 style="font-size:2em;font-weight:bold;margin-bottom:8px;color:#2c3e50;display:flex;align-items:center;gap:12px;">
					<i class="fa-solid fa-gauge"></i> لوحة التحكم الرئيسية
				</h1>
				<p style="color:#888;margin-bottom:24px;font-size:1.1em;">مرحباً بك في نظام إدارة الأصول والممتلكات. يمكنك هنا متابعة كل التفاصيل المهمة بشكل سريع وذكي.</p>
			</div>
			<div class='dashboard-cards' style="display:flex;flex-wrap:wrap;gap:24px;justify-content:center;">
				<!-- كرت عدد الأصول -->
				<div class='dashboard-card' style="flex:1 1 220px;min-width:220px;max-width:270px;">
					<div style="display:flex;align-items:center;gap:10px;justify-content:center;margin-bottom:8px;">
						<span class='icon' style="font-size:2.2em;color:#3498db;"><i class='fa-solid fa-layer-group'></i></span>
						<span style="font-size:1.1em;color:#2c3e50;font-weight:bold;">عدد الأصول</span>
					</div>
					<div class='value' style="font-size:2.2em;color:#3498db;font-weight:bold;">120</div>
					<div style="color:#888;font-size:0.98em;margin-bottom:8px;">إجمالي الأصول المسجلة في النظام حتى الآن</div>
					<div style="display:flex;align-items:center;gap:6px;margin-bottom:8px;">
						<span class='trend' style="color:#27ae60;font-weight:bold;font-size:1em;"><i class="fa-solid fa-arrow-up"></i> +5%</span>
						<span style="color:#888;font-size:0.95em;">هذا الشهر</span>
					</div>
					<div style="background:#e3f2fd;height:8px;border-radius:6px;overflow:hidden;margin-bottom:10px;"><div style="width:85%;height:100%;background:#27ae60;"></div></div>
					<button style="background:#3498db;color:#fff;padding:7px 18px;border:none;border-radius:8px;font-size:0.98em;cursor:pointer;">تفاصيل</button>
				</div>
				<!-- كرت عدد المباني -->
				<div class='dashboard-card' style="flex:1 1 220px;min-width:220px;max-width:270px;">
					<div style="display:flex;align-items:center;gap:10px;justify-content:center;margin-bottom:8px;">
						<span class='icon' style="font-size:2.2em;color:#8e44ad;"><i class='fa-solid fa-building'></i></span>
						<span style="font-size:1.1em;color:#2c3e50;font-weight:bold;">عدد المباني</span>
					</div>
					<div class='value' style="font-size:2.2em;color:#8e44ad;font-weight:bold;">8</div>
					<div style="color:#888;font-size:0.98em;margin-bottom:8px;">عدد المباني المسجلة في النظام</div>
					<div style="display:flex;align-items:center;gap:6px;margin-bottom:8px;">
						<span class='trend' style="color:#888;font-weight:bold;font-size:1em;"><i class="fa-solid fa-minus"></i> ثابت</span>
						<span style="color:#888;font-size:0.95em;">هذا الشهر</span>
					</div>
					<div style="background:#e3f2fd;height:8px;border-radius:6px;overflow:hidden;margin-bottom:10px;"><div style="width:100%;height:100%;background:#8e44ad;"></div></div>
					<button style="background:#8e44ad;color:#fff;padding:7px 18px;border:none;border-radius:8px;font-size:0.98em;cursor:pointer;">تفاصيل</button>
				</div>
				<!-- كرت طلبات العمل المفتوحة -->
				<div class='dashboard-card' style="flex:1 1 220px;min-width:220px;max-width:270px;">
					<div style="display:flex;align-items:center;gap:10px;justify-content:center;margin-bottom:8px;">
						<span class='icon' style="font-size:2.2em;color:#e67e22;"><i class='fa-solid fa-clipboard-list'></i></span>
						<span style="font-size:1.1em;color:#2c3e50;font-weight:bold;">طلبات العمل المفتوحة</span>
					</div>
					<div class='value' style="font-size:2.2em;color:#e67e22;font-weight:bold;">15</div>
					<div style="color:#888;font-size:0.98em;margin-bottom:8px;">عدد الطلبات التي لم تُغلق بعد</div>
					<div style="display:flex;align-items:center;gap:6px;margin-bottom:8px;">
						<span class='trend' style="color:#e67e22;font-weight:bold;font-size:1em;"><i class="fa-solid fa-arrow-up"></i> +10%</span>
						<span style="color:#888;font-size:0.95em;">هذا الشهر</span>
					</div>
					<div style="background:#e3f2fd;height:8px;border-radius:6px;overflow:hidden;margin-bottom:10px;"><div style="width:60%;height:100%;background:#e67e22;"></div></div>
					<button style="background:#e67e22;color:#fff;padding:7px 18px;border:none;border-radius:8px;font-size:0.98em;cursor:pointer;">تفاصيل</button>
				</div>
				<!-- كرت إجمالي الإنفاق -->
				<div class='dashboard-card' style="flex:1 1 220px;min-width:220px;max-width:270px;">
					<div style="display:flex;align-items:center;gap:10px;justify-content:center;margin-bottom:8px;">
						<span class='icon' style="font-size:2.2em;color:#e74c3c;"><i class='fa-solid fa-money-bill-wave'></i></span>
						<span style="font-size:1.1em;color:#2c3e50;font-weight:bold;">إجمالي الإنفاق</span>
					</div>
					<div class='value' style="font-size:2.2em;color:#e74c3c;font-weight:bold;">25,000 ريال</div>
					<div style="color:#888;font-size:0.98em;margin-bottom:8px;">إجمالي المصروفات لهذا الشهر</div>
					<div style="display:flex;align-items:center;gap:6px;margin-bottom:8px;">
						<span class='trend' style="color:#e74c3c;font-weight:bold;font-size:1em;"><i class="fa-solid fa-arrow-down"></i> -2%</span>
						<span style="color:#888;font-size:0.95em;">مقارنة بالشهر الماضي</span>
					</div>
					<div style="background:#e3f2fd;height:8px;border-radius:6px;overflow:hidden;margin-bottom:10px;"><div style="width:40%;height:100%;background:#e74c3c;"></div></div>
					<button style="background:#e74c3c;color:#fff;padding:7px 18px;border:none;border-radius:8px;font-size:0.98em;cursor:pointer;">تفاصيل</button>
				</div>
			</div>
			<!-- نهاية الكروت -->
			<div style="margin-top:40px;text-align:center;color:#aaa;font-size:1.1em;">يمكنك الضغط على زر التفاصيل لأي خانة لمزيد من المعلومات والإحصائيات الدقيقة.</div>
			`,
				assets: `
				<div style='margin-bottom:32px;'>
					<h2 style='color:#2c3e50;font-size:1.5em;margin-bottom:8px;display:flex;align-items:center;gap:10px;'><i class='fa-solid fa-layer-group'></i> إدارة الأصول</h2>
					<p style='color:#888;margin-bottom:18px;font-size:1.08em;'>تابع كل تفاصيل الأصول، حالتها، توزيعها، وأضف أصول جديدة بسهولة.</p>
				</div>
				<div style='display:flex;flex-wrap:wrap;gap:32px;margin-bottom:32px;'>
					<div style='flex:1 1 320px;min-width:260px;background:#fff;border-radius:12px;box-shadow:0 2px 8px #3498db22;padding:24px;'>
						<h3 style='color:#2c3e50;font-size:1.1em;margin-bottom:12px;'><i class='fa-solid fa-chart-pie'></i> توزيع الأصول حسب النوع</h3>
						<div style='width:100%;height:180px;display:flex;align-items:center;justify-content:center;'>
							<img src="https://quickchart.io/chart?c={type:'doughnut',data:{labels:['إلكترونيات','كهربائيات','أثاث'],datasets:[{data:[12,8,5],backgroundColor:['#3498db','#27ae60','#e67e22']}]} }" alt="pie chart" style="max-width:100%;max-height:160px;">
						</div>
					</div>
					<div style='flex:2 1 480px;min-width:320px;background:#fff;border-radius:12px;box-shadow:0 2px 8px #3498db22;padding:24px;'>
						<h3 style='color:#2c3e50;font-size:1.1em;margin-bottom:12px;'><i class='fa-solid fa-chart-column'></i> تطور الأصول خلال السنة</h3>
						<div style='width:100%;height:180px;display:flex;align-items:center;justify-content:center;'>
							<img src="https://quickchart.io/chart?c={type:'bar',data:{labels:['يناير','فبراير','مارس','ابريل','مايو','يونيو'],datasets:[{label:'أصول جديدة',data:[2,3,4,2,5,3],backgroundColor:'#3498db'}]},options:{scales:{y:{beginAtZero:true}}}}" alt="bar chart" style="max-width:100%;max-height:160px;">
						</div>
					</div>
				</div>
				<div style='background:#fff;border-radius:12px;box-shadow:0 2px 8px #3498db22;overflow:hidden;margin-bottom:32px;padding:24px;'>
					<div style='display:flex;flex-wrap:wrap;gap:16px 24px;align-items:center;margin-bottom:18px;'>
						<input type='text' placeholder='بحث عن أصل...' style='flex:1 1 200px;padding:8px 16px;border:1px solid #e3f2fd;border-radius:8px;font-size:1em;'>
						<select style='padding:8px 16px;border:1px solid #e3f2fd;border-radius:8px;font-size:1em;'>
							<option>الكل</option>
							<option>إلكترونيات</option>
							<option>كهربائيات</option>
							<option>أثاث</option>
						</select>
						<button style='background:#3498db;color:#fff;padding:10px 24px;border:none;border-radius:8px;font-size:1em;cursor:pointer;'><i class='fa-solid fa-plus'></i> إضافة أصل جديد</button>
					</div>
					<div style='overflow-x:auto;'>
						<table style='width:100%;min-width:700px;'>
							<thead style='background:#e3f2fd;'><tr><th>#</th><th>اسم الأصل</th><th>النوع</th><th>الحالة</th><th>الموقع</th><th>الوصف</th><th>إجراءات</th></tr></thead>
							<tbody>
								<tr>
									<td>1</td>
									<td>حاسوب مكتبي</td>
									<td>إلكترونيات</td>
									<td><span style='color:#27ae60;font-weight:bold;'><i class='fa-solid fa-circle'></i> فعال</span></td>
									<td>المكتب الرئيسي</td>
									<td>حاسوب مخصص للأعمال المكتبية مزود بمعالج i7 وذاكرة 16GB.</td>
									<td><button style='background:#e3f2fd;color:#3498db;border:none;padding:6px 16px;border-radius:6px;cursor:pointer;'><i class='fa-solid fa-eye'></i> تفاصيل</button></td>
								</tr>
								<tr>
									<td>2</td>
									<td>طابعة ليزر</td>
									<td>إلكترونيات</td>
									<td><span style='color:#e67e22;font-weight:bold;'><i class='fa-solid fa-circle'></i> تحت الصيانة</span></td>
									<td>قسم الطباعة</td>
									<td>طابعة عالية السرعة تدعم الطباعة على الوجهين.</td>
									<td><button style='background:#e3f2fd;color:#3498db;border:none;padding:6px 16px;border-radius:6px;cursor:pointer;'><i class='fa-solid fa-eye'></i> تفاصيل</button></td>
								</tr>
								<tr>
									<td>3</td>
									<td>مكيف هواء</td>
									<td>كهربائيات</td>
									<td><span style='color:#27ae60;font-weight:bold;'><i class='fa-solid fa-circle'></i> فعال</span></td>
									<td>الطابق الثاني</td>
									<td>مكيف مركزي قدرة تبريد عالية مع تحكم ذكي.</td>
									<td><button style='background:#e3f2fd;color:#3498db;border:none;padding:6px 16px;border-radius:6px;cursor:pointer;'><i class='fa-solid fa-eye'></i> تفاصيل</button></td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
				<div style='margin-top:24px;text-align:center;color:#aaa;font-size:1.05em;'>يمكنك البحث أو تصفية الأصول حسب النوع أو الحالة، والاطلاع على تفاصيل كل أصل.</div>
				`,
		buildings: `<h2 style='color:#2c3e50;'><i class='fa-solid fa-building'></i> بيانات المباني</h2>
			<ul style='background:#fff;border-radius:12px;box-shadow:0 2px 8px #3498db22;padding:24px;'><li>المبنى الرئيسي - الرياض - 50 أصل</li><li>مبنى الإدارة - جدة - 30 أصل</li></ul>`,
		contracts: `<h2 style='color:#2c3e50;'><i class='fa-solid fa-file-contract'></i> بيانات العقود</h2>
			<ul style='background:#fff;border-radius:12px;box-shadow:0 2px 8px #3498db22;padding:24px;'><li>عقد صيانة سنوي - ساري</li><li>عقد توريد أجهزة - منتهي</li></ul>`,
		users: `<h2 style='color:#2c3e50;'><i class='fa-solid fa-users'></i> المستخدمون النشطون</h2>
			<table style='width:100%;background:#fff;border-radius:12px;box-shadow:0 2px 8px #3498db22;overflow:hidden;'><thead style='background:#e3f2fd;'><tr><th>#</th><th>الاسم</th><th>القسم</th><th>الدور</th><th>الحالة</th></tr></thead><tbody><tr><td>1</td><td>أحمد</td><td>الإدارة</td><td>مدير</td><td><span style='color:#27ae60;font-weight:bold;'>نشط</span></td></tr><tr><td>2</td><td>سارة</td><td>الصيانة</td><td>فني</td><td><span style='color:#e67e22;font-weight:bold;'>مؤقت</span></td></tr></tbody></table>`,
		tasks: `<h2 style='color:#2c3e50;'><i class='fa-solid fa-list-check'></i> المهام</h2><ul style='background:#fff;border-radius:12px;box-shadow:0 2px 8px #3498db22;padding:24px;'><li>صيانة طابعة - قيد التنفيذ</li><li>تركيب مكيف - مكتملة</li></ul>`,
		reports: `<h2 style='color:#2c3e50;'><i class='fa-solid fa-chart-line'></i> التقارير</h2><ul style='background:#fff;border-radius:12px;box-shadow:0 2px 8px #3498db22;padding:24px;'><li>تقرير الأصول - مكتمل</li><li>تقرير الصيانة - قيد التنفيذ</li></ul>`,
		vendors: `<h2 style='color:#2c3e50;'><i class='fa-solid fa-truck'></i> الموردين</h2><ul style='background:#fff;border-radius:12px;box-shadow:0 2px 8px #3498db22;padding:24px;'><li>شركة التقنية - توريد أجهزة - نشط</li><li>شركة الصيانة - صيانة دورية - متوقف</li></ul>`,
		warehouses: `<h2 style='color:#2c3e50;'><i class='fa-solid fa-warehouse'></i> المستودعات</h2><ul style='background:#fff;border-radius:12px;box-shadow:0 2px 8px #3498db22;padding:24px;'><li>المخزن الرئيسي - الرياض - 100 صنف</li><li>مخزن قطع الغيار - جدة - 40 صنف</li></ul>`,
		warranties: `<h2 style='color:#2c3e50;'><i class='fa-solid fa-shield'></i> الضمانات</h2><ul style='background:#fff;border-radius:12px;box-shadow:0 2px 8px #3498db22;padding:24px;'><li>حاسوب مكتبي - ساري</li><li>مكيف هواء - منتهي</li></ul>`,
		'work-orders': `<h2 style='color:#2c3e50;'><i class='fa-solid fa-clipboard-list'></i> أوامر العمل</h2><ul style='background:#fff;border-radius:12px;box-shadow:0 2px 8px #3498db22;padding:24px;'><li>إصلاح مكيف - مفتوح</li><li>استبدال طابعة - مغلق</li></ul>`
	};
	// تفعيل الروابط الجانبية
	const sidebarLinks = document.querySelectorAll('.sidebar ul li a');
	const dynamicContent = document.getElementById('dynamic-content');
	function showSection(section) {
		sidebarLinks.forEach(l => l.classList.remove('active'));
		const link = Array.from(sidebarLinks).find(l => l.getAttribute('href') === '#' + section);
		if(link) link.classList.add('active');
		dynamicContent.innerHTML = sections[section] || '<div style="text-align:center;color:#aaa;">لا توجد بيانات</div>';
	}
	sidebarLinks.forEach(link => {
		link.addEventListener('click', function(e) {
			e.preventDefault();
			const section = this.getAttribute('href').replace('#','');
			showSection(section);
		});
	});
	// عرض القسم الافتراضي
	showSection('dashboard');
	</script>
</body>
</html>
