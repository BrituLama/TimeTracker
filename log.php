
<?
include('function.php');

	$json = file_get_contents('data.json');
	$record = json_decode($json, 1);


	switch ($_GET['mode']) {
		
		case 'remove':
			// code...
			$id = $_GET['id'];
			$record[$id]['status'] = 2;
			save($record);
			break;

		case 'new':
			# code..
			$time = time();
			$record[$time]['id'] = $time;
			$record[$time]['name'] = $_GET['name'];
			$record[$time]['date_start'] = time();
			$record[$time]['date_end']='';
			$record[$time]['status'] = 1;

		save($record);

	break;

	case 'stop':
		// code...

		$id = $_GET['id'];
		$record[$id]['date_end'] = time();

		save($record);

	break;

	case 'build':
			# code...

		foreach ($record as $task) {
			if($task['status'] == 1){
			?>
		<tr>
			<td><?= $task['name']; ?></td>
			<td><?= date_nice($task['date_start']); ?></td>
			<td>
				<?
				if($task['date_end']== ''){
					echo "";
				}else{
					echo date_nice($task['date_end']);
				}
				?>
			</td>
			<td class="timeRefress">
				<?
				if($task['date_end']== ''){
					echo time_nice(time() - $task['date_start']);

				}else{
					echo time_nice($task['date_end'] - $task['date_start']);
				}
				?>

			</td>
			<td><button data-id="<?= $task['id']; ?>" class="btn btn-primary btn-stop" <?=($task['date_end'] !='')?'disabled':''?>><?= i('stop'); ?> </button></td>
			<td><button data-id="<?= $task['id']; ?>" class="btn btn-danger btn-remove"> <?= i('times'); ?></i> </button></td>
		</tr>

	<? } }
	break;

	case "restore":
	# code...

		foreach ($record as $task) {
			if($task['status'] == 2){
			?>
		<tr>
			<td><?= $task['name']; ?></td>
			<td><?= date_nice($task['date_start']); ?></td>
			<td>
				<?
				if($task['date_end']== ''){
					echo "";
				}else{
					echo date_nice($task['date_end']);
				}
				?>
			</td>
			<td class="timeRefress">
				<?
				if($task['date_end']== ''){
					echo time_nice(time() - $task['date_start']);

				}else{
					echo time_nice($task['date_end'] - $task['date_start']);
				}
				?>

			</td>
			<td></td>
			<td><button data-id="<?= $task['id']; ?>" class="btn btn-danger btn-remove"> <?= i('refresh'); ?></i> </button></td>
		</tr>

		<? } }
	break;


	default:
		# code...
	break;
} ?>
