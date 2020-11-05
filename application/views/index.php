<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>


</head>

<body>
	<div class="container mt-5 col-6 ">
		<div class="table-wrapper-scroll-y my-custom-scrollbar ">

			<table class="table table-bordered table-striped mb-0  ">
				<thead align="center">
					<tr>
						<th scope="row" rowspan="2" class="align-middle">ขบวน</th>
						<th scope="col" colspan="2">ต้นทาง</th>
						<th scope="col" colspan="2">ห้วยราช</th>
						<th scope="col" colspan="2">ปลายทาง</th>
						<th scope="row" rowspan="2" class="align-middle">หมายเหตุ</th>
					</tr>
					<tr>

						<td>สถานี</td>
						<td>เวลาออก</td>
						<td>ถึง</td>
						<td>ออก</td>
						<td>สถานี</td>
						<td>ถึงเวลา</td>

					</tr>
				</thead>

				<tbody>
					<?php foreach ($query as $se) { ?>
						<tr>

							<th scope="row"><?php echo $se['id_name'] ?> </th>
							<td><?php echo $se['station'] ?></td>
							<td><?php echo $se['time_out'] ?></td>
							<td><?php echo $se['to_time'] ?></td>
							<td><?php echo $se['time_out_h'] ?></td>
							<td><?php echo $se['station_d'] ?></td>
							<td><?php echo $se['time_end'] ?></td>
							<td><?php echo $se['report'] ?></td>

						</tr> <?php } ?>
				</tbody>

			</table>

		</div>
		<p></p>
		<!-- Default form subscription -->
		<form class="text-center border border-light p-5 " action="<?php echo site_url('welcome/insert') ?>" method="post">

			<p class="h4 mb-4">เพิ่มข้อมูล</p>


			<!-- Name -->


			<input type="text" id="defaultSubscriptionFormPassword" class="form-control mb-4" placeholder="หมายเลขขบวน" name="id_name">
			<hr>
			<label for="">ต้นทาง</label>
			<input type="text" id="defaultSubscriptionFormPassword" class="form-control mb-4" placeholder="สถานี" name="station_o">
			<input type="time" id="defaultSubscriptionFormPassword" class="form-control mb-4" placeholder="เวลาออก" name="time_out">
			<hr>
			<label for="">ห้วยราช</label>
			<input type="time" id="defaultSubscriptionFormPassword" class="form-control mb-4" placeholder="เวลาถึง" name="to_time">
			<input type="time" id="defaultSubscriptionFormPassword" class="form-control mb-4" placeholder="เวลาออก" name="time_out_h">
			<hr>
			<label for="">ปลายทาง</label>
			<input type="text" id="defaultSubscriptionFormPassword" class="form-control mb-4" placeholder="สถานี" name="station_d">
			<input type="time" id="defaultSubscriptionFormPassword" class="form-control mb-4" placeholder="เวลาออก" name="end">
			<hr>
			<input type="text" id="defaultSubscriptionFormPassword" class="form-control mb-4" placeholder="หมายเหตุ" name="report">



			<!-- Sign in button -->
			<button class="btn btn-success btn-block" type="submit">เพิ่มข้อมูล</button>


		</form>
		<!-- Default form subscription -->
	</div>

</body>

</html>