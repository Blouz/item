<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<form action="">
	     	<table align="center">
				
				<tr>
						<td>姓名</td>
						<td>性别</td>
						<td>年龄</td>
				</tr>
				 @foreach($users as $v)
				<tr>
						<td>{{$v->name}}</</td>
						<td>{{$v->sex}}</td>
						<td>{{$v->age}}</td>
						<td><a href="">删除</a></td>
				</tr>
 				@endforeach
	     	</table>
	     	</form>
</body>
</html>