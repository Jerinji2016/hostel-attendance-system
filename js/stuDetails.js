$(function()
{
	$(".klub_togl_main").click(function()
	{
		var a = this;
		$(this).parent("shan").children(".kstud_det").slideToggle(300,function()
		{
			$(this).is(":hidden")?$(a).children(".klub_tog_ico").rotate(0):$(a).children(".klub_tog_ico").rotate(90)
		})
	});

	$(".sh_detault").each(function()
	{
		$(this).parent("shan").children(".kstud_det").slideToggle(300);
		$(this).children(".klub_tog_ico").rotate(90)
	});

	$(".ktogl_sub").click(function()
	{
		$(this).parent("shan").children(".kstdet_sub_hldr").slideToggle(300);
		"+"==$(this).children(".ktog_ico_hd").html()?$(this).children(".ktog_ico_hd").html("-"):$(this).children(".ktog_ico_hd").html("+")
	});

	$(".sh_detault_sub").each(function()
	{
		$(this).parent(".kstdet_sub_container").children(".kstdet_sub_hldr").slideToggle(300);
		$(this).children(".ktog_ico_hd").html("-")
	})
});