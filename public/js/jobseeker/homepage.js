/*Hot jobs*/
$('#show-more-content').hide();

$('#show-more').click(function(){
	$('#show-more-content').fadeIn();
	$('#show-less').show();
	$(this).hide();
});

$('#show-less').click(function(){
	$('#show-more-content').toggle(200);
	$('#show-more').show();
	$(this).hide();
});
/*Immediate jobs*/

$('#show-more-content1').hide();

$('#show-more1').click(function(){
	$('#show-more-content1').fadeIn();
	$('#show-less1').show();
	$(this).hide();
});

$('#show-less1').click(function(){
	$('#show-more-content1').toggle(200);
	$('#show-more1').show();
	$(this).hide();
});