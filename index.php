<!DOCTYPE html>
<html lang="en">
<head>
  <title>Ajax Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<div class="col-md-12">
			<h3>Insert data in form</h3>
			<form action="POST" id="insert_data_hoten">
			<label>Họ và tên</label>
			<input type="text" id="name" class="form-control" placeholder="Họ và tên">
			<label>Số điện thoại</label>
			<input type="text" id="phone" class="form-control" placeholder="Số điện thoại">
			<label>Email</label>
			<input type="text" id="email" class="form-control" placeholder="Email">
			<label>Địa chỉ</label>
			<input type="text" id="address" class="form-control" placeholder="Địa chỉ">
			<label>Ghi chú</label>
			<input type="text" id="note" class="form-control" placeholder="Ghi chú">
			<br>
			<input type="button" name="insert_data" id="btn-insert" value="Insert" class="btn btn-success">
			</form>
		</div>
	</div>
	<script type="text/javascript">
		$('#btn-insert').on('click',function(){
          var name= $("#name").val();
          var email=$("#email").val();
          var note=$("#note").val();
          var address=$("#address").val();
          var phone = $("#phone").val();
         /* alert(phone);*/
          if(name=='' || email=='' || note=='' || address==''|| phone==''){
          	alert('Không đc bỏ trống');
          }else{
          	$.ajax({
          		url: "action_ajax.php",
          		method: "POST",
          		data:{name:name,phone:phone,address:address,note:note,email:email},
          		success:function(data){
                alert(data);
          		}
          	});
          }
		});
	</script> 
</body>
</html>
