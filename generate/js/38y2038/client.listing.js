jQuery(document).ready(function(){
	jQuery('.toggle-btn-used').click(function(){
		
		jQuery(".toggle-btn-used").removeClass('btn-blue');
		jQuery(".toggle-btn-used").addClass('btn-grey');
		
		jQuery(this).removeClass('btn-grey');
		jQuery(this).addClass('btn-blue');
		
		var target = jQuery(this).attr("data-target");
	
		jQuery("#parent-slider-used").addClass('hidden');
		jQuery("#parent-slider-used-pm").addClass('hidden');
		
		jQuery("#parent-slider-used").removeClass('show');
		jQuery("#parent-slider-used-pm").removeClass('show');
		
		jQuery("#"+target).addClass('show');
		jQuery("#"+target).removeClass('hidden');
		
		var method = jQuery(this).attr("data-method");
		
		if(method=="finance"){
			jQuery("#priceMethodUsed").val("1");
		}else{
			jQuery("#priceMethodUsed").val("0");
		}		
	});
	
	jQuery('.toggle-btn-new').click(function(){
		
		jQuery(".toggle-btn-new").removeClass('btn-blue');
		jQuery(".toggle-btn-new").addClass('btn-grey');
		
		jQuery(this).removeClass('btn-grey');
		jQuery(this).addClass('btn-blue');
		
		var target = jQuery(this).attr("data-target");
	
		jQuery("#parent-slider-new").addClass('hidden');
		jQuery("#parent-slider-new-pm").addClass('hidden');
		
		jQuery("#parent-slider-new").removeClass('show');
		jQuery("#parent-slider-new-pm").removeClass('show');
		
		jQuery("#"+target).addClass('show');
		jQuery("#"+target).removeClass('hidden');
		
		var method = jQuery(this).attr("data-method");
		
		if(method=="finance"){
			jQuery("#priceMethodNew").val("1");
		}else{
			jQuery("#priceMethodNew").val("0");
		}	
	});
});