function _logOut() {
	sessionStorage.setItem("loginUserSession", JSON.stringify(''));
	window.parent.location.href = website_url + "/account/login/";
}


///// Right Click Disabled Function ////////
function _disabledInspect() {
	// Disable right-click on the entire document
	document.addEventListener('contextmenu', function (e) {
		e.preventDefault();
	});

	// Disable Ctrl+S
	document.addEventListener('keydown', function (e) {
		if ((e.ctrlKey || e.metaKey) && e.key === 's') {
			e.preventDefault();
		}
	});
}



function _showPasswordVisibility(ids, toggle_pass) {
	var password = $('#' + ids).val();
	if (password != '') {
		$('#' + toggle_pass).show();
	} else {
		$('#' + toggle_pass).hide();
	}
}



function _togglePasswordVisibility(ids, toggle_pass) {
	const passwordInput = document.getElementById(ids);
	const togglePasswordIcon = document.getElementById(toggle_pass);

	if (passwordInput.type === 'password') {
		passwordInput.type = 'text';
		togglePasswordIcon.innerHTML = '<i class="bi-eye password-toggle"></i>';
	} else {
		passwordInput.type = 'password';
		togglePasswordIcon.innerHTML = '<i class="bi-eye-slash password-toggle"></i>';
	}
}

function _capitalizeFirstLetterOfEachWord(inputText) {
	// Split the input text into an array of words
	var words = inputText.toLowerCase().split(' ');
	// Capitalize the first letter of each word
	for (var i = 0; i < words.length; i++) {
		words[i] = words[i].charAt(0).toUpperCase() + words[i].slice(1);
	}
	// Join the words back into a sentence
	var result = words.join(' ');
	return result;
}


function _toggleProfilePixDiv() {
	$('.toggle-profile-div').toggle('slow');
}

function select_search() {
	$(".srch-select").show();
}

function close_search() {
	$("#srch-select").slideToggle("fast");
	$('#mobile-datepicker-from').val('');
	$('#mobile-datepicker-to').val('');
}
function _openMenu() {
	$('.sidenavdiv, .sidenavdiv-in').animate({ 'margin-left': '0' }, 200);
	$('#menu-list-div').animate({ 'margin-left': '0' }, 300);
	$('#live-chat-div').animate({ 'margin-left': '-100%' }, 400);
}

function _closeSideNav() {
	$('#menu-list-div,#live-chat-div').animate({ 'margin-left': '-100%' }, 300);
	$('.sidenavdiv, .sidenavdiv-in').animate({ 'margin-left': '-100%' }, 200);
}


function _nextPage(next_id, icon, divid) {
	$('#account_settings_id,#account_detail,#channge_password').hide();
	$('#' + next_id).fadeIn(1000);
	$('#panel-title').html($('#' + icon).html() + $('#' + divid).html());
}
function _prevPage(next_id) {
	$('#account_settings_id,#account_detail,#channge_password').hide();
	$('#' + next_id).fadeIn(1000);
	$('#panel-title').html('<i class="bi-gear"></i> </span id="app_text"> APP SETTINGS')
}

function _alertClose() {
	$('#get-more-div').fadeOut(300);
}



function _placeHolder(search_txt, search_content) {
	superplaceholder({
		el: search_txt,
		sentences: search_content,
		options: {
			letterDelay: 80,
			loop: true,
			startOnFocus: false
		}
	});
}

function numberWithComma(amount) {
	return amount.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
}



function PauseVideo() {
	var videoDisplay = document.getElementById('videoDisplay');
	videoDisplay.src = '';  // Set the source to an empty string to stop the video
	videoDisplay.muted = true;  // Mute the audio
}

function _copyText() {
	var textToCopy = $("#textToCopy").text(); // Get the text to copy
	navigator.clipboard.writeText(textToCopy); // Copy text to clipboard
	// Change icon to check mark for feedback
	$("#copyText").html('<span style="font-size: 11px">copied</span> <i class="bi bi-check"></i>');
	// Revert back to clipboard icon after 4 seconds
	setTimeout(function () {
		$("#copyText").html('<i class="bi bi-clipboard"></i>');
	}, 3000);
}



function _getActiveLink(divid) {
	$('#dashboard, #subjects, #subscriptions, #transactions, #wallet_history, #myprofile').removeClass('active-li');
	$('#_dashboard').removeClass('active-li');
	$('#mobile-dashboard, #mobile-subjects, #mobile-subscriptions, #mobile-transactions, #mobile-wallet_history').removeClass('active-li');
	$('#' + divid).addClass('active-li');
	$('#_' + divid).addClass('active-li');
	$('#mobile-' + divid).addClass('active-li');
	$('#page-title').html($('#' + divid).html());
}



function _collapse(div_id) {
	var x = document.getElementById(div_id + "num");
	if (x.innerHTML === '&nbsp;<i class="bi-chevron-down"></i>&nbsp;') {
		x.innerHTML = '&nbsp;<i class="bi-chevron-up"></i>&nbsp;';
	} else {
		x.innerHTML = '&nbsp;<i class="bi-chevron-down"></i>&nbsp;';
	}
	$('#' + div_id + 'answer').slideToggle('slow');
}


function _getPage(page, divid) {
	if (page == '') {
		// do nothing
	} else {
		_getActiveLink(divid);
		$('#page-content').html('<div class="ajax-loader"><img src="' + website_url + '/account/all-images/images/ajax-loader.gif"/></div>').fadeIn('fast');
		var action = 'get_page';
		var dataString = 'action=' + action + '&page=' + page;
		$.ajax({
			type: "POST",
			url: user_local_portal_url,
			data: dataString,
			cache: false,
			success: function (html) {
				$('#page-content').html(html);

			}
		});
	}

}


function _getForm(page) {
	if (page == '') {
		// do nothing
	} else {
		$('#get-more-div').html('<div class="ajax-loader"><img src="' + website_url + '/account/all-images/images/ajax-loader.gif"/></div>').fadeIn('fast');
		var action = 'get_form';
		var dataString = 'action=' + action + '&page=' + page;
		$.ajax({
			type: "POST",
			url: user_local_portal_url,
			data: dataString,
			cache: false,
			success: function (html) {
				$('#get-more-div').html(html);
			}
		});
	}
}



function _getPageMobile(page, divid) {
	if (page == '') {
		// do nothing
	} else {
		_closeSideNav();
		_getActiveLink(divid);
		$('#page-content').html('<div class="ajax-loader"><img src="' + website_url + '/all-images/images/ajax-loader.gif"/></div>').fadeIn('fast');
		var action = 'get_page';
		var dataString = 'action=' + action + '&page=' + page;
		$.ajax({
			type: "POST",
			url: user_local_portal_url,
			data: dataString,
			cache: false,
			success: function (html) {
				$('#page-content').html(html);

			}
		});
	}

}




function _getFetchUserPix(login_user_profile_pix, login_user_fullname) {
	profile_login_pix =
		'<img id="passportimg1" src="' + user_picture_directory + '/' + login_user_profile_pix + '" alt="' + login_user_fullname + ' Profile pix"/>' +
		'<img id="passportimg2" src="' + user_picture_directory + '/' + login_user_profile_pix + '" alt="' + login_user_fullname + ' Profile pix" />' +
		'<img id="passportimg3" src="' + user_picture_directory + '/' + login_user_profile_pix + '" alt="' + login_user_fullname + ' Profile pix" />' +
		'<img id="passportimg4" src="' + user_picture_directory + '/' + login_user_profile_pix + '" alt="' + login_user_fullname + ' Profile pix" />'

	$('#profile_pix,#header_pix,#option_pix,#welcome_pix,#side_user_pix').html(profile_login_pix);
}






function _hideAndShowWallet() {
	var user_wallet_balance = document.getElementById("user_wallet_balance");
	var user_mobile_wallet_balance = document.getElementById("user_mobile_wallet_balance");

	if ((user_wallet_balance.style.display === 'none') || (user_mobile_wallet_balance.style.display === 'none')) {
		////////////////////////////////////////////?
		$('#user_wallet_balance,#user_mobile_wallet_balance').css("display", "inline");
		$("#text_in,#mobile_text_in").html('');
		$("#hide_show,#mobile_hide_show").html('<i class="bi-eye"></i>');
		// ////////////////////////////////////////////			
	} else {
		$("#text_in,#mobile_text_in").html('****');
		$("#hide_show,#mobile_hide_show").html('<i class="bi-eye-slash"></i>');
		$('#user_wallet_balance,#user_mobile_wallet_balance').css("display", "none");
	}
}





function _getUserLoginDetails(page) {
	//----------- USER LOGIN SESSION DETAILS -------------- //
	var login_user_fullname = loginUserInfoSession.user[0].fullname;
	var login_user_email = loginUserInfoSession.user[0].email;
	var login_user_mobile_no = loginUserInfoSession.user[0].mobile_no;
	var login_user_wallet_balance = loginUserInfoSession.user[0].wallet_balance;
	var login_user_profile_pix = loginUserInfoSession.user[0].profile_pix;
	var user_last_login_time = loginUserInfoSession.user[0].last_login_time;

	 if (loginUserInfoSession.subscription.length > 0) {
		//----------- USER LOGIN SUBCRIPTIONS SESSION DETAILS -------------- //
		var department_name = loginUserInfoSession.subscription[0].department_name;
		var class_name = loginUserInfoSession.subscription[0].class_name;

		// get current date and time
		var todays_date = loginUserInfoSession.subscription[0].todays_date;
		var current_date = new Date(todays_date);
		// get subcription start date
		var subscription_start_date = loginUserInfoSession.subscription[0].subscription_start_date;
		// get subcription end date
		var subscription_end_date = loginUserInfoSession.subscription[0].subscription_end_date;
		var endDate = new Date(subscription_end_date);
		//var days = endDate.getTime() - startDate.getTime();
		var days = endDate.getTime() - current_date.getTime();
		var getRemainingDays = Math.ceil(days / (1000 * 60 * 60 * 24));
	}


	if (page == 'dashboard') {
		$('#login_user_fullname,#profile_name,#user_wallet_name,#side_fullname').html(_capitalizeFirstLetterOfEachWord(login_user_fullname));
		$('#user_id,#side_user_id').html(login_user_id);
		$('#user_mobile').html(login_user_mobile_no);
		$('#user_wallet_balance').html(login_user_wallet_balance);
		_getFetchUserPix(login_user_profile_pix, login_user_fullname);
		$('#login_user_login_time').html(user_last_login_time);
		$('#get_user_remaining_expires_days').html(getRemainingDays);


	} else if (page == 'user_profile') {
		$('#user_department_name').html(department_name);
		$('#user_class_name').html(class_name);
		$('#user_subscription_start_date').html(subscription_start_date);
		$('#user_subscription_end_date').html(subscription_end_date);

		$('#fullname').val(login_user_fullname);
		$('#email').val(login_user_email);
		$('#mobile').val(login_user_mobile_no);
		_getFetchUserPix(login_user_profile_pix, login_user_fullname);
	} else {
		// do nothing
	}

}




// function _getUserLoginDetails(page) {
// 	//----------- USER LOGIN SESSION DETAILS -------------- //
// 	var login_user_fullname = loginUserSession.fullname;
// 	var login_user_email = loginUserSession.email;
// 	var login_user_mobile_no = loginUserSession.mobile_no;
// 	var login_user_wallet_balance = loginUserSession.wallet_balance;
// 	var login_user_profile_pix = loginUserSession.profile_pix;
// 	var user_last_login_time = loginUserSession.last_login_time;


// 	if (loginInfo.subscription.length > 0) {
// 		//----------- USER LOGIN SUBCRIPTIONS SESSION DETAILS -------------- //
// 		var department_name = userSubscriptionSession.department_name;
// 		var class_name = userSubscriptionSession.class_name;

// 		// get current date and time
// 		var todays_date = userSubscriptionSession.todays_date;
// 		var current_date = new Date(todays_date);
// 		// get subcription start date
// 		var subscription_start_date = userSubscriptionSession.subscription_start_date;
// 		var startDate = new Date(subscription_start_date);
// 		// get subcription end date
// 		var subscription_end_date = userSubscriptionSession.subscription_end_date;
// 		var endDate = new Date(subscription_end_date);
// 		//var days = endDate.getTime() - startDate.getTime();
// 		var days = endDate.getTime() - current_date.getTime();
// 		var getRemainingDays = Math.ceil(days / (1000 * 60 * 60 * 24));
// 	}


// 	if (page == 'dashboard') {
// 		$('#login_user_fullname,#profile_name,#user_wallet_name,#side_fullname').html(_capitalizeFirstLetterOfEachWord(login_user_fullname));
// 		$('#user_id,#side_user_id').html(login_user_id);
// 		$('#user_mobile').html(login_user_mobile_no);
// 		$('#user_mobile').html(login_user_wallet_balance);
// 		_getFetchUserPix(login_user_profile_pix, login_user_fullname);
// 		$('#login_user_login_time').html(user_last_login_time);
// 		$('#get_user_remaining_expires_days').html(getRemainingDays);


// 	} else if (page == 'user_profile') {
// 		$('#user_department_name').html(department_name);
// 		$('#user_class_name').html(class_name);
// 		$('#user_subscription_start_date').html(subscription_start_date);
// 		$('#user_subscription_end_date').html(subscription_end_date);

// 		$('#fullname').val(login_user_fullname);
// 		$('#email').val(login_user_email);
// 		$('#mobile').val(login_user_mobile_no);
// 		_getFetchUserPix(login_user_profile_pix, login_user_fullname);
// 	} else {
// 		// do nothing
// 	}

// }




function _getFetchDepartmentClassSubject() {
	$('#fetch_department_class_subject_details').html('<div class="ajax-loader2">Loading... <br clear="all"/><img src="all-images/images/ajax-loader2.gif"/></div>').fadeIn('fast');
	var action = 'fetch-deparment-class-subjects';
	$.ajax({
		type: "POST",
		url: endPoint + '/user/tutorials/' + action,
		dataType: "json",
		cache: false,
		headers: {
			'apiKey': apiKey,
			'Authorization': 'Bearer ' + login_access_key
		},
		success: function (info) {
			var response = info.response;
			if (response < 100) {
				_logOut();
			} else {
				var getAllData = info.subjects;
				var success = info.success;
				var message = info.message;
				var department_name = info.department_name;
				var class_name = info.class_name;

				var no = 0;
				var text = '';
				if (success == true) {
					for (var i = 0; i < getAllData.length; i++) {
						no++;
						var subject_id = getAllData[i].subject_id;
						var subject_name = getAllData[i].subject_name.toUpperCase();
						var terms = getAllData[i].terms;

						text +=
							'<div class="quest-faq-div animated fadeIn">' +
							'<div class="faq-title-text">' +
							'<h3>' + subject_name + ' </h3>' +
							'<div class="expand-div" id="' + "view" + no + "num" + '" title="Click to View Terms" onclick="_collapse(' + "'" + 'view' + no + "'" + ')">&nbsp;<i class="bi-chevron-down"></i>&nbsp;</div>' +
							'</div>';

						text += '<div class="faq-answer-div" id="' + "view" + no + "answer" + '" style="display:none;">';

						for (var j = 0; j < terms.length; j++) {
							var term_id = terms[j].term_id;
							var term_name = terms[j].term_name;
							var total_number_of_videos = terms[j].total_number_of_videos;
							text += '<button class="btn" title="' + term_name + '" onClick="_getPage(' + "'video_page'" + "," + "'" + subject_id + "'" + "," + "'" + term_id + "'" + ')"><i class="bi-pencil-square"></i> ' + term_name + ' &nbsp; <span>' + total_number_of_videos + '</span>&nbsp;<i class="bi-play-btn-fill"></i></button>';
						}

						text += '</div>' +
							'</div>';
					}
				} else {
					if (loginUserInfoSession.subscription.length == 0) {
						text = '<div class="false-notification-div">' +
									"<p> " + message + " </p>" +
									'<button class="btn"> Subscribe Now <i class="bi bi-send-check-fill"></i></button>'
								'</div>';
					} else {
						text =	'<div class="false-notification-div">' +
									"<p> " + message + " </p>" +
								'</div>';
					}
				}
			}
			$('#fetch_department_class_subject_details').html(text);
		},
	});
}












function _updateUserProfile(user_id) {
	var fullname = $('#fullname').val();
	var email = $('#email').val();
	var mobile = $('#mobile').val();

	$('#fullname,#email,#mobile').removeClass('complain');
	if ((fullname == '') && (email == '') && (email == '')) {
		$('#fullname,#email,#mobile').addClass('complain');
		$('#warning-div').html('<div><i class="bi-exclamation-circle"></i></div> ERROR!<br /> <span>Fill this field to continue.</span>').fadeIn(500).delay(3000).fadeOut(100);
	} else if (fullname == '') {
		$('#fullname').addClass('complain');
		$('#warning-div').html('<div><i class="bi-exclamation-circle"></i></div>FULLNAME ERROR!<br /> <span>Fill this field to continue.</span>').fadeIn(500).delay(3000).fadeOut(100);

	} else if (email == '' || $("#email").val().indexOf("@") <= 0) {
		$('#email').addClass('complain');
		$('#warning-div').html('<div><i class="bi-exclamation-circle"></i></div>EMAIL ERROR!<br /> <span>Fill this field to continue.</span>').fadeIn(500).delay(3000).fadeOut(100);

	} else if (mobile == '') {
		$('#mobile').addClass('complain');
		$('#warning-div').html('<div><i class="bi-exclamation-circle"></i></div>PHONE NUMBER ERROR!<br /> <span>Fill this field to continue.</span>').fadeIn(500).delay(3000).fadeOut(100);
	} else {
		$('#fullname,#email,#mobile').removeClass('complain');
		$('#login_user_fullname,#profile_name,#side_fullname').html('Xxxx Xxxx');
		//////////////// get btn text ////////////////
		var btn_text = $('#update_btn').html();
		$('#update_btn').html('UPDATING <i class="fa fa-spinner fa-spin"></i>');
		document.getElementById('update_btn').disabled = true;
		////////////////////////////////////////////////	
		var action = 'update_user_api';

		var dataString = 'action=' + action + '&user_id=' + user_id + '&fullname=' + fullname + '&email=' + email + '&mobile=' + mobile;
		$.ajax({
			type: "POST",
			url: user_api,
			data: dataString,
			cache: false,
			dataType: 'json',
			cache: false,
			success: function (info) {
				var login_check = info.check;
				if (login_check > 0) {
					var result = info.result;
					var message1 = info.message1;
					var message2 = info.message2;
					var fullname = info.fullname;
					if (result == true) {
						$('#login_user_fullname,#profile_name,#side_fullname').html(fullname);
						$('#success-div').html('<div><i class="bi-check-all"></i></div>' + message1 + '<br /> <span>' + message2 + '</span>').fadeIn(500).delay(3000).fadeOut(100);
					} else {
						$('#warning-div').html('<div><i class="bi-exclamation-circle"></i></div>' + message1 + '<br /> <span>' + message2 + '</span>').fadeIn(500).delay(3000).fadeOut(100);
						///	  $('#email').addClass('complain');
					}
					$('#update_btn').html(btn_text);
					document.getElementById('update_btn').disabled = false;
				} else {
					_getForm('access_key_validation_info');
				}
			}

		});

	}
}



///// accept number ////
function _isNumberCheck() {
	var e = window.event;
	var key = e.keyCode && e.which;

	//// noit accpet zero(0) as first input ////
	$("#wallet_amount").on("input", function () {
		var val = $(this).val()
		var reg = /^0/gi;
		if (val.match(reg)) {
			$(this).val(val.replace(reg, ''));
			$('#amount_text').fadeIn(300);
			document.getElementById('wallet_amount').style.border = '#F00 1px solid';
		}
	});
	//// accept number only
	if (!((key >= 48) && (key <= 57) || (key == 43) || (key == 45))) {
		if (e.preventDefault) {
			e.preventDefault();
			$('#amount_info,#verify_mobile_info').fadeIn(300);
			document.getElementById('wallet_amount').style.border = '#F00 1px solid';
			document.getElementById('mobile').style.border = '#F00 1px solid';
		} else {
			e.returnValue = false;
		}
	} else {
		//// amount with comma
		$('#wallet_amount').on("input", function (event) {
			// skip for arrow keys
			if (event.which >= 37 && event.which <= 40) return;
			// format number
			$(this).val(function (index, value) {
				return value
					.replace(/\D/g, "")
					.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
			});
		});
		$('#amount_info,#verify_mobile_info').hide();

		document.getElementById('wallet_amount').style.border = '#CCC 1px solid';
		document.getElementById('mobile').style.border = '#CCC 1px solid';

	}
}




function _uploadUserPix_(user_id) {
	$(function () {
		user_profile_pix = {
			UpdatePreviewPix: function (obj) {
				// if IE < 10 doesn't support FileReader
				if (!window.FileReader) {
					// don't know how to proceed to assign src to image tag
				} else {
					//_upload_profile_pix(user_id);
					var reader = new FileReader();
					var target = null;

					reader.onload = function (e) {
						target = e.target || e.srcElement;
						$("#passportimg1,#passportimg2,#passportimg3,#passportimg4").prop("src", target.result);
					};
					reader.readAsDataURL(obj.files[0]);
				}
			}
		};
	});
}






function _updatePassword() {
	var old_password = $('#old_password').val();
	var new_password = $('#new_password').val();
	var comfirmed_password = $('#comfirmed_password').val();
	$('#old_password, #new_password, #comfirmed_password').removeClass('complain');

	if (old_password == '') {
		$('#old_password').addClass('complain');
		$('#warning-div').html('<div><i class="bi-exclamation-circle"></i></div> OLD PASSWORD ERROR! <br />  <span>Fill this field to continue.</span>').fadeIn(500).delay(3000).fadeOut(100);

	} else if (new_password == '') {
		$('#new_password').addClass('complain');
		$('#warning-div').html('<div><i class="bi-exclamation-circle"></i></div> NEW PASSWORD ERROR! <br />  <span>Fill this field to continue.</span>').fadeIn(500).delay(3000).fadeOut(100);

	} else if (comfirmed_password == '') {
		$('#comfirmed_password').addClass('complain');
		$('#warning-div').html('<div><i class="bi-exclamation-circle"></i></div> CONFIRM PASSWORD ERROR! <br />  <span>Fill this field to continue.</span>').fadeIn(500).delay(3000).fadeOut(100);

	} else if (new_password != comfirmed_password) {
		$('#new_password, #comfirmed_password').addClass('complain');
		$('#warning-div').html('<div><i class="bi-exclamation-circle"></i></div> PASSWORD ERROR! <br />  <span>Check password not match.</span>').fadeIn(500).delay(3000).fadeOut(100);

	} else {

		var btn_text = $('#update_btn').html();
		$('#update_btn').html('UPDATING <i class="fa fa-spinner fa-spin"></i>');
		document.getElementById('update_btn').disabled = true;

		var action = 'change_password_api'
		var dataString = 'action=' + action + '&old_password=' + old_password + '&new_password=' + new_password;
		$.ajax({
			type: "POST",
			url: user_api,
			data: dataString,
			dataType: 'json',
			cache: false,
			success: function (info) {
				var login_check = info.check;
				if (login_check > 0) {
					var result = info.result;
					var message1 = info.message1;
					var message2 = info.message2;
					if (result == true) {
						$('#success-div').html('<div><i class="bi-check-all"></div>' + message1 + '<br /> <span>' + message2 + '</span>').fadeIn(500).delay(3000).fadeOut(100);
						_alert_close();
						$('#login_user_fullname,#profile_name,#user_wallet_name').html('Xxxxx');
						_getForm('access_key_validation_info');
					} else {
						$('#warning-div').html('<div><i class="bi-exclamation-circle"></i></div>' + message1 + '<br /> <span>' + message2 + '</span>').fadeIn(500).delay(3000).fadeOut(100);
						$('#old_password').addClass('complain');

						$('#update_btn').html(btn_text);
						document.getElementById('update_btn').disabled = false;
					}

				} else {
					_getForm('access_key_validation_info');
				}
			}
		});
	}
}




function _checkPasswordMatch(ids, toggle_pass) {
	var password = $("#new_password").val();
	var confirmed_reset_password = $("#comfirmed_password").val();
	if ((password != confirmed_reset_password) && (confirmed_reset_password != '')) {
		$('#message').show();
	} else {
		$('#message').hide();
	}
	_showPasswordVisibility(ids, toggle_pass);
}























