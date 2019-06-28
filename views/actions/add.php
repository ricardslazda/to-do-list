<script type='text/javascript'>
$(function(){
$('.input-group.date').datepicker({
    calendarWeeks: true,
    todayHighlight: true,
    autoclose: true
});  
});
</script>
<h1 class="display-4 text-center mt-5">Izveidot jaunu uzdevumu</h1>
<img src="<?php echo ROOT_URL?>images/printful.jpg" id="printful">
<div class="container">
	<form action="<?php $_SERVER['PHP_SELF'];?>" method="POST" class="form-group">
		<label class="lead">Virsraksts</label>
		<input type="text" name="title" placeholder="Ievadi virsrakstu" class="form-control" required>
		<label class="lead mt-2">Teksts</label>
		<textarea name="body" placeholder="Ievadi darāmo lietu" class="form-control" rows="10" cols="70" required></textarea>
		<label class="lead mt-2">Termiņš</label>
		<div class="input-group date">
  		<input type="text" class="form-control" name="date" required><span class="input-group-addon"></span>
		</div>
		<button type="submit" name="add" class="btn btn-primary mt-4">Izveidot</button>
		<a href="<?php echo ROOT_URL?>" class="btn btn-danger mt-4">Atcelt</a>
	</form>
</div>