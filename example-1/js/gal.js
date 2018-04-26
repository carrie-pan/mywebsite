$(document).ready(function(){

	$('#btn_next').click(function(){
		var li_pos = $('ul#gal_list li').index($('.selected'));
		var total_pos = $('ul#gal_list li').size();
					
		if((total_pos - 1) != li_pos)
		{
			$('.selected').removeClass('selected').next().attr('class','selected');
		}
		if((total_pos - 1) == li_pos)
		{
			$('.selected').removeClass('selected').parent().find('li:first').attr('class','selected');
		}

console.log('total_pos ' + total_pos);
console.log('li_pos ' + li_pos);
					
	});
	$('#btn_pre').click(function(){
		var li_pos = $('ul#gal_list li').index($('.selected'));
		var first_pos = 0;
					
		if(first_pos != li_pos)
		{
			$('.selected').removeClass('selected').prev().attr('class','selected');
		}
		if(first_pos == li_pos)
		{
			$('.selected').removeClass('selected').parent().find('li:last').attr('class','selected');
		}

console.log('first_pos ' + first_pos);
console.log('li_pos ' + li_pos);
	});
});