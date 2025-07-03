//add back on 20/3/2018 by James
function validateEmail(emailValue){
	var reg = /^[A-Z0-9_'%=+!`#~$*?^{}&|-]+([\.][A-Z0-9_'%=+!`#~$*?^{}&|-]+)*@[A-Z0-9-]+(\.[A-Z0-9-]+)+$/i;

	if (reg.test(emailValue) == false) {
		//alert('Please Enter a Valid Email Address');
		jQuery("#towsafeEmailCheck").show();
		//document.getElementById("towsafeSubmit").disabled = true;
		return false;
	}
	
	jQuery("#towsafeEmailCheck").hide();
	
	//document.getElementById("towsafeSubmit").disabled = false;
	return true;
}
function validateReg(){	
	console.log("reg check "+jQuery("#VRMinput").val() +" "+ jQuery("#VRMinput").val() );
	if( jQuery("#VRMinput").val() < 1 || jQuery("#VRMinput").val() == "ENT3R R3G NUMB3R" ){
		jQuery("#towsafeRegCheck").show();
		return false;
	}
	jQuery("#towsafeRegCheck").hide();
	return true;
}

function validateTowsafeForm(){
	
	if( validateEmail( jQuery("#emailTow").val() )
		&& validateReg(  ) 
		){
		console.log("towsafe submit pass");
		return true;
	}	
	event.preventDefault();
	return false;
}


jQuery('body').on('click','#btn_towsafe_gdpr', function(){
	
	var stance = jQuery('#towsafe_gdpr').val();
	
	if(stance==0){
		jQuery('#btn_towsafe_gdpr').addClass("active");
		jQuery('#towsafe_gdpr').val(1);
	}else if(stance==1){
		jQuery('#btn_towsafe_gdpr').removeClass("active");
		jQuery('#towsafe_gdpr').val(0);
	}
});





jQuery(document).ready(function() {
	console.log("towsafe init");
	
    jQuery("#MakeddlOne").change(getModel);
    jQuery("#MakeddlOne").change(getBody);
    jQuery("#MakeddlOne").change(getDerivative);

    jQuery("#Yearddltwo").change(getModel);
    jQuery("#Yearddltwo").change(getBody);
    jQuery("#Yearddltwo").change(getDerivative);
	
    jQuery("#Modelddlthree").change(getBody);
    jQuery("#Modelddlthree").change(getDerivative);

    jQuery("#Bodyddlfour").change(getDerivative);

    jQuery("#Fuelddlfive").change(getDerivative);
	
	jQuery("#Derivativeddlsix").change(showSelectedDerivative);
	
	jQuery(".edit-link").remove();
});

var endPointAjax = "cf-support/towsafe/dropDownSubmit.php";

function getModel() {
	console.log("getModel");
    var ddlmake = (jQuery("#MakeddlOne").val());
    var ddlyear = jQuery("#Yearddltwo").val();
    var ddlmodel = jQuery("#Modelddlthree").val();
    if (ddlmake !== '0' && ddlyear !== '0' && ddlmake !== '' && ddlyear !== '') {
        jQuery.ajax({
            type: "POST",
            url: endPointAjax,
            data: "Action=GetDropdowns&ddlmake=" + encodeURIComponent(ddlmake) + "&ddlyear=" + encodeURIComponent(ddlyear)+"&uip="+requesterI,
            async: false,
            success: function(msg) {
                var obj = msg;
                obj = jQuery.parseJSON('[' + obj + ']');
                var jQueryselect = jQuery('#Modelddlthree');
                var listitems;
                jQuery.each(obj, function(i) {
                    listitems += '<option value=0>--Please select your model--</option>';
                    jQuery.each(this.DropDowns.Model, function() {
                        listitems += '<option value="' + this.ModelID + '">' + this.ModelID + '</option>';
                    });
                    jQueryselect.empty();
                    jQueryselect.append(listitems);
                });
            }
        });
    }
}

function getBody() {
	console.log("getBody");
    var ddlmake = (jQuery("#MakeddlOne").val());
    var ddlyear = jQuery("#Yearddltwo").val();
    var ddlmodel = jQuery("#Modelddlthree").val();
    if (ddlmake !== '0' && ddlyear !== '0' && ddlmake !== '' && ddlyear !== ''&& ddlmodel !== '0' && ddlmodel !== '') {
        jQuery.ajax({
            type: "POST",
            url: endPointAjax,
            data: "Action=GetDropdowns&ddlmake=" + encodeURIComponent(ddlmake) + "&ddlyear=" + encodeURIComponent(ddlyear) + "&ddlmodel=" + encodeURIComponent(ddlmodel)+"&uip="+requesterI,
            async: false,
            success: function(msg) {
                var obj = msg;
                obj = jQuery.parseJSON('[' + obj + ']');
                var jQueryselect = jQuery('#Bodyddlfour');
                var listitems;
                var jQueryselectF = jQuery('#Fuelddlfive');
                var listitemsF;
                jQuery.each(obj, function(i) {
                   listitems += '<option value=0>--Body type?--</option>';
                    jQuery.each(this.DropDowns.Bodytype, function() {
                      listitems += '<option value="' + this.BodyID + '">' + this.BodyID + '</option>';
                    });
                    jQueryselect.empty();
                    jQueryselect.append(listitems);
                });

                jQuery.each(obj, function(i) {
                    listitemsF += '<option value=0>--Fuel type?--</option>';
                    jQuery.each(this.DropDowns.Fuel, function() {
                       listitemsF += '<option value="' + this.FuelID + '">' + this.FuelID + '</option>';
                    });
                    jQueryselectF.empty();
                    jQueryselectF.append(listitemsF);
                });
            }
        });
    }
}

function getDerivative() {
console.log("getDerivative");
    var ddlmake = (jQuery("#MakeddlOne").val());
    var ddlyear = jQuery("#Yearddltwo").val();
    var ddlmodel = jQuery("#Modelddlthree").val();
    var ddlbody = jQuery("#Bodyddlfour").val();
    var ddlfuel = jQuery("#Fuelddlfive").val();
    if (ddlmake !== '0' && ddlyear !== '0' && ddlmake !== '' && ddlyear !== ''&& ddlmodel !== '0' && ddlmodel !== ''&& ddlbody !== '0' && ddlbody !== ''&& ddlfuel !== '0' && ddlfuel !== '') {
        jQuery.ajax({
            type: "POST",
            url: endPointAjax,
            data: "Action=GetDerivative&ddlmake=" + encodeURIComponent(ddlmake) + "&ddlyear=" + encodeURIComponent(ddlyear) + "&ddlmodel=" + encodeURIComponent(ddlmodel) + "&ddlbody=" + encodeURIComponent(ddlbody) + "&ddlfuel=" + encodeURIComponent(ddlfuel)+"&uip="+requesterI,
            async: false,
            success: function(msg) {
//console.log("getDeriavative return "+msg);            	
                var obj = msg;
                obj = jQuery.parseJSON('[' + obj + ']');
                var jQueryselect = jQuery('#Derivativeddlsix');
                var listitems;
                 jQuery.each(obj, function(i) {
                    listitems += '<option value=>--Now Select Derivative--</option>';
                    jQuery.each(this.DropDowns.Descriptions, function() {
                       listitems += '<option value="' + this.GenID + '">' + this.Derivative + '</option>';
                    });
                    jQueryselect.empty();
                    jQueryselect.append(listitems);
                });
            }
        });
    }
}

function filterDerivative() {
console.log("filterDerivative");
    var ddlmake = (jQuery("#MakeddlOne").val());
    var ddlyear = jQuery("#Yearddltwo").val();
    var ddlmodel = jQuery("#Modelddlthree").val();
    var ddlbody = jQuery("#Bodyddlfour").val();
    var ddlfuel = jQuery("#Fuelddlfive").val();
    var ddlderivativeID = jQuery("#Derivativeddlsix").val();
	var ddlderivativetext = jQuery("#Derivativeddlsix option:selected").text();
    
	if (ddlmake !== '0' && ddlyear !== '0' && ddlmake !== '' && ddlyear !== ''&& ddlmodel !== '0' && ddlmodel !== ''&& ddlbody !== '0' && ddlbody !== ''&& ddlfuel !== '0' && ddlfuel !== ''&& ddlderivativeID !== '0' && ddlderivativeID !== '') {
		/*
		jQuery.ajax({
	        type: "POST",
	        url: endPointAjax,
	        data: "Action=FilterDerivative&ddlderivativeID=" + encodeURIComponent(ddlderivativeID) + "&ddlderivativetext=" + encodeURIComponent(ddlderivativetext) + "&ddlmake=" + encodeURIComponent(ddlmake)+ "&ddlmodel=" + encodeURIComponent(ddlmodel),
	        async: false,
	        success: function(msg) {
	            alert('OK here is some JSON returned for the test caravans in the DropDownJSONhelper.php file::'+msg);
				
				//DO SOMETHING WITH RETURNED CARAVANS
	        }
	    });
		*/
		
		jQuery("#cf_vehicleSelectedT").val(ddlderivativetext);
		jQuery("#cf_vehicleSelectedI").val(ddlderivativeID);
		
		document.forms['VRMM'].submit();
	}
}


function getYearMake(previousVRMlookupFailed) {
console.log("getYearMake");
	
    var jQueryselect = jQuery('#MakeddlOne');
    var jQueryselectY = jQuery('#Yearddltwo');
    var listitems;
    var listitemsY;
    jQuery.ajax({
        type: "POST",
        url: endPointAjax,
        data: "Action=CheckGetYearMakeDisplay"+"&uip="+requesterI,
        async: false,
        success: function(msg) {
          	//document.getElementById("myDiv").innerHTML =  msg;
			var obj = msg;
            obj = jQuery.parseJSON('[' + obj + ']')
			jQuery.each(obj, function(i) {
				
console.log("Return status "+this.Return.Status);	
console.log("Return VRMLIMITReached "+this.Return.VRMLimitReached);
console.log("Return PreviousLookup "+previousVRMlookupFailed);

			  //show user limit reached reason
			  var urlUserVRMLimit = GetURLParameter('uvl');
//alert(this.Return.Status);

			  if(this.Return.Status == "UserVRMLimit" || urlUserVRMLimit=="yes"){
				  var msgLimit = "You have reached your Car Registration lookup limit";
				  msgLimit += "<br />Please use our manual lookup below";
				  document.getElementById("myDiv").innerHTML += msgLimit;
				  showDropDown(); 
			  }else{
				  if(this.Return.Status != "UserVRMLimit" && previousVRMlookupFailed){
					  var landingPageUrl = "http://www.glossopcaravans.co.uk/what-will-our-car-tow.php";
					  var msgTryAgain = "<a href='"+landingPageUrl+"'>Or please click here try our Car Registration again<a/>";
					  document.getElementById("tryVRMagain").innerHTML += msgTryAgain;
				  }
				 
	              if(this.Return.VRMLimitReached=='NO' && !previousVRMlookupFailed ){
	            	  showVRM();
				  } else {	
					  showDropDown(); 
				  }  
			  }
            });
            
             jQuery.each(obj, function(i) {
                jQuery.each(this.DropDowns.Makes, function() {
                   listitems += '<option value="' + this.MakeID + '">' + this.MakeID + '</option>';
                });
                jQueryselect.append(listitems);
            });
            jQuery.each(obj, function(i) {
                 jQuery.each(this.DropDowns.Years, function() {
                    listitemsY += '<option value=' + this.YearID + '>' + this.YearID + '</option>';
                });
                jQueryselectY.append(listitemsY);
            });
			
        }
    });
}

function showDropDown(){
console.log("showDropDown");
	document.getElementById('Dropdowns').style.display = 'block'; //shows drop downs
	document.getElementById('VRM').style.display = 'None'; //hides VRM	  	
}

function showVRM(){
	document.getElementById('Dropdowns').style.display = 'None'; //hides drop downs
	document.getElementById('VRM').style.display = 'block'; //shows VRM	
}

function showSelectedDerivative() {
    var ddlmake = (jQuery("#MakeddlOne").val());
    var ddlyear = jQuery("#Yearddltwo").val();
    var ddlmodel = jQuery("#Modelddlthree").val();
    var ddlbody = jQuery("#Bodyddlfour").val();
    var ddlfuel = jQuery("#Fuelddlfive").val();
    var ddlderivativeID = jQuery("#Derivativeddlsix").val();
	var ddlderivativetext = jQuery("#Derivativeddlsix option:selected").text();
    if (ddlmake !== '0' && ddlyear !== '0' && ddlmake !== '' && ddlyear !== ''&& ddlmodel !== '0' && ddlmodel !== ''&& ddlbody !== '0' && ddlbody !== ''&& ddlfuel !== '0' && ddlfuel !== ''&& ddlderivativeID !== '0' && ddlderivativeID !== '')
	{
	document.getElementById("Vehicleselected").innerHTML = ddlmake+' '+ddlmodel+' '+ddlderivativetext;
	}
}

function GetURLParameter(sParam){
console.log("GetURLParameter");
    var sPageURL = window.location.search.substring(1);
    var sURLVariables = sPageURL.split('&');
    for (var i = 0; i < sURLVariables.length; i++){
        var sParameterName = sURLVariables[i].split('=');
        if (sParameterName[0] == sParam){
            return sParameterName[1];
        }
    }
}

