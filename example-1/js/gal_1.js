$(document).ready(function(){

	function display_large_pic(pic_link)
	{
		$('#large_img').attr('src',pic_link);
	}
    
	$('ul#gal_list li img').click(function(){
		var link = $(this).attr('src');
		$('.selected').removeClass('selected');
		$(this).parent().find('img').attr('class', 's_img selected');
		$('#large_img').attr('src',link);
	});
    
	$('#btn_next').click(function(){
		var li_pos = $('ul#gal_list li img').index($('.selected'));
		var total_pos = $('ul#gal_list li').size();

		if((total_pos - 1) != li_pos)
		{
			$('.selected').removeClass('selected').parent().next().find('img').attr('class','s_img selected');
		}
		if((total_pos - 1) == li_pos)
		{
			$('.selected').removeClass('selected').parents().find('li:first img').attr('class','s_img selected');
		}
		/* 取得最後得到的pic */
		var pic = $('.selected').attr('src');
		//var pic = $('.selected').find('img').attr('src');
		display_large_pic(pic);
	});
    
	$('#btn_pre').click(function(){
		var li_pos = $('ul#gal_list li img').index($('.selected'));
		var first_pos = 0;
		
		if(first_pos != li_pos)
		{
			$('.selected').removeClass('selected').parent().prev().find('img').attr('class','s_img selected');
		}
		if(first_pos == li_pos)
		{
			$('.selected').removeClass('selected').parents().find('li:last img').attr('class','s_img selected');
		}
		/* 取得最後得到的pic */
		var pic = $('.selected').attr('src');
        
		display_large_pic(pic);
	});
	
});