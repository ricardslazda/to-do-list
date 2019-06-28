<h1 class="display-4 text-center mt-5">Darāmo lietu saraksts</h1>
<div class="container">
<?php foreach($viewmodel as $item) : ?>
	
			<div class="list-group mt-3">
  			<a class="list-group-item list-group-item-action">
    			<div class="d-flex w-100 justify-content-between">
      			<h5 class="mb-1"><?php echo $item['title']?></h5>
      			<small><?php echo $item['date']?></small>
    			</div>
    		<p class="mb-1"><?php echo $item['body']?></p>
  			</a>
			</div>
			<a href="<?php echo ROOT_URL.'actions/edit/'.$item['id'];?>" class="btn btn-info mt-3">Rediģēt</a>
			<a href="<?php echo ROOT_URL.'actions/delete/'.$item['id'];?>" class="btn btn-danger mt-3">Dzēst</a>
            <?php endforeach; ?>
		<a href="<?php echo ROOT_URL;?>actions/add" class="btn btn-warning mt-3">Jauns uzdevums</a>