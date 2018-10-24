function build(mode){
$('#log').load('log.php?mode='+ mode);
}


//Javascript start
$(document).ready(function(){
 build('build');

//Refress every 30 second to make it live time lapse
setInterval(function(){

	build(build);

},30000);



//Restore mode
$('#btn-mode').on('click', function(event){
	event.preventDefault();

	var mode = $(this).data('mode');

	if(mode == 'restore'){
		build('restore');
		$(this).data('mode', 'live');
		$('#lbl-mode').html('Live');
	}else{
		build('build');
		$(this).data('mode', 'restore');
		$('#lbl-mode').html('Restore');
	}

});
 
// Submit new task
	$('#form-new').submit(function(event){
		event.preventDefault();

		var form = $(this);
		var data = form.serialize();

		$.ajax({
			url: 'log.php?mode=new',
			data: data,
			success:function(){
				build('build');

			}
		});
});

	// Stop Task
	$('#log').on('click', '.btn-stop', function(){
		//to get an id
		var id = $(this).data('id');

		$.ajax({
			url:'log.php?mode=stop&id='+id,
			success:function(){
				build('build');
			}
		});
	});

//remove task;
$('#log').on('click', '.btn-remove', function(){
  var id = $(this).data('id');

  $.ajax({
    url:'log.php?mode=remove&id='+id,
    success:function(){
      build('build');
    }
  });
});


});
