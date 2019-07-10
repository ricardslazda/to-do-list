<script type='text/javascript'>
$(function(){
$('.input-group.date').datepicker({
    calendarWeeks: true,
    todayHighlight: true,
    autoclose: true
});  
});
</script>
<h1 class="display-4 text-center mt-5">To Do List</h1>
<div class="container">
	<form action="<?php $_SERVER['PHP_SELF'];?>" method="post" class="form-group">
		<label class="lead">Virsraksts</label>
		<input type="text" name="title" value="<?php echo $_SESSION['task']['title'];?>" class="form-control" required>
		<label class="lead mt-2">Teksts</label>
		<textarea name="body" class="form-control" rows="10" cols="70" required><?php echo $_SESSION['task']['body'];?></textarea>
		<label class="lead mt-2">Termiņš</label>
		<div class="input-group date">
  		<input type="text" class="form-control" name="date" value="<?php echo $_SESSION['task']['date'];?>" required><span class="input-group-addon"></span>
		</div>
		<button type="submit" name="edit" class="btn btn-primary mt-4">Saglabāt</button>
		<a href="<?php echo ROOT_URL?>" class="btn btn-danger mt-4">Atcelt</a>
	</form>
</div>