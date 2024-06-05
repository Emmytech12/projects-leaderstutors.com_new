///// Right Click Disabled Function ////////
function _disabled_inspect() {
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



function _show_password_visibility(ids,toggle_pass){
	var password = $('#'+ids).val();
	if (password!='') {
	 $('#'+toggle_pass).show();
	} else {
		$('#'+toggle_pass).hide();
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


function _toggle_profile_pix_div() {
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
function _open_menu() {
	$('.sidenavdiv, .sidenavdiv-in').animate({ 'margin-left': '0' }, 200);
	$('#menu-list-div').animate({ 'margin-left': '0' }, 300);
	$('#live-chat-div').animate({ 'margin-left': '-100%' }, 400);
}

function _close_side_nav() {
	$('#menu-list-div,#live-chat-div').animate({ 'margin-left': '-100%' }, 300);
	$('.sidenavdiv, .sidenavdiv-in').animate({ 'margin-left': '-100%' }, 200);
}
function _logOut() {
	document.getElementById('logoutform').submit();
}

function _placeholder(search_txt, search_content) {
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

function numberwithcomma(amount) {
	return amount.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
}


function _next_page(next_id, icon, divid) {
	$('#account_settings_id,#account_detail,#channge_password').hide();
	$('#' + next_id).fadeIn(1000);
	$('#panel-title').html($('#' + icon).html() + $('#' + divid).html());
}
function _prev_page(next_id) {
	$('#account_settings_id,#account_detail,#channge_password').hide();
	$('#' + next_id).fadeIn(1000);
	$('#panel-title').html('<i class="bi-gear"></i> </span id="app_text"> APP SETTINGS')
}

function _alert_close() {
	$('#get-more-div').fadeOut(300);
}

function _alert_close2() {
	$('#video_subscription_detail_page').html('');
	$('#get-more-div').fadeOut(300);
}

function PauseVideo() {
	var videoDisplay = document.getElementById('videoDisplay');
	videoDisplay.src = '';  // Set the source to an empty string to stop the video
	videoDisplay.muted = true;  // Mute the audio
}






function _get_active_link(divid) {
	$('#dashboard, #exam, #subscriptions, #transactions, #wallet_history, #myprofile').removeClass('active-li');
	$('#_dashboard').removeClass('active-li');
	$('#mobile-dashboard, #mobile-exam, #mobile-subscriptions, #mobile-transactions, #mobile-wallet_history').removeClass('active-li');
	$('#' + divid).addClass('active-li');
	$('#_' + divid).addClass('active-li');
	$('#mobile-' + divid).addClass('active-li');
	$('#page-title').html($('#' + divid).html());
}


function _collapse(div_id, ids) {
	var x = document.getElementById(div_id + "num");
	if (x.innerHTML === '&nbsp;<i class="bi-plus"></i>&nbsp;') {
		x.innerHTML = '&nbsp;<i class="bi-dash"></i>&nbsp;';
		//$('#'+div_id).addClass('active-faq');
		_get_fetch_sub_topic(div_id, ids);
	} else {
		x.innerHTML = '&nbsp;<i class="bi-plus"></i>&nbsp;';
		//  $('#'+div_id).removeClass('active-faq');
	}
	$("#" + div_id + "answer").slideToggle("slow");
}



function _get_page(page, divid) {
	if (page == '') {
		// do nothing
	} else {
		_get_active_link(divid);
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


function _get_page_mobile(page, divid) {
	if (page == '') {
		// do nothing
	} else {
		_close_side_nav();
		_get_active_link(divid);
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



function _get_page_with_id(page, ids, other_ids) {
	if (page == '') {
		// do nothing
	} else {
		$('#page-content').html('<div class="ajax-loader"><img src="' + website_url + '/all-images/images/ajax-loader.gif"/></div>').fadeIn('fast');
		var action = 'get_page_with_id';
		var dataString = 'action=' + action + '&page=' + page + '&ids=' + ids + '&other_ids=' + other_ids;
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


function _get_return_page(page, exam_id, subject_id) {
	if (page == 'no_records_found') {
		_alert_close();
		_get_page_with_id('topics', exam_id, subject_id);
	} else if (page == 'no_records_found2') {
		_alert_close();
		_get_page_with_id('subject', exam_id, subject_id);
	} else {
		// do nothing
	}
}



function _get_form(page) {
	if (page == '') {
		// do nothing
	} else {
		$('#get-more-div').html('<div class="ajax-loader"><img src="' + website_url + '/all-images/images/ajax-loader.gif"/></div>').fadeIn('fast');
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


function _get_form_with_id(page, ids1, ids2, ids, details) {
	if (page == '') {
		// do nothing
	} else {
		$('#get-more-div').html('<div class="ajax-loader"><img src="' + website_url + '/all-images/images/ajax-loader.gif"/></div>').fadeIn('fast');
		var action = 'get_form_with_id';
		var dataString = 'action=' + action + '&page=' + page + '&ids1=' + ids1 + '&ids2=' + ids2 + '&ids=' + ids;
		$.ajax({
			type: "POST",
			url: user_local_portal_url,
			data: dataString,
			cache: false,
			success: function (html) {
				$('#get-more-div').html(html);
				$('#get_subject_name,#get_subscription_name').html(details);
			}
		});
	}
}





function _get_user_login(page, user_id) {
	if ((page == 'load_user_wallet_success') || (page == 'user_subcription_success')) {
		_alert_close();
		_get_user_login_details(page, user_id);
	} else {
		_get_user_login_details(page, user_id);
	}

}



function _get_user_login_details(page, user_id) {
	var action = 'fetch_user_api';
	var dataString = 'action=' + action + '&user_id=' + user_id;
	$.ajax({
		type: "POST",
		url: user_api,
		data: dataString,
		dataType: 'json',
		cache: false,
		success: function (info) {
			var login_check = info.check;
			if (login_check > 0) {
				var fetch = info.data;
				var dashboard_fullname = info.fullname;
				var fullname = fetch.fullname;
				var email = fetch.email;
				var mobile = fetch.mobile;
				var wallet_balance = fetch.wallet_balance;
				var updated_time = fetch.updated_time;
				var passport = fetch.passport;


				if (page == 'user_profile') {
					$('#fullname').val(fullname);
					$('#email').val(email);
					$('#mobile').val(mobile);
					if (passport == '') {
						passport = 'friends.png';
					}
					$('#profile_pix').html('<img id="passportimg4" src="' + website_url + '/uploaded_files/user_pix/' + passport + '" alt="Profile pix" />');
				} else if (page == 'user_subcription') {
					$('#user_subcription_name').html(dashboard_fullname);

				} else if (page == 'load_user_wallet') {
					$('#user_wallet_name').html(dashboard_fullname);

				} else if (page == 'load_user_wallet_success') {
					$('#user_wallet_balance,#user_mobile_wallet_balance').html(numberwithcomma(wallet_balance));
					_get_fetch_all_wallet_payment('dashboard', '');
					_get_fetch_all_wallet_payment('wallet_history', '');
				} else {
					$('#login_user_fullname,#profile_name,#user_wallet_name,#side_fullname').html(dashboard_fullname);
					$('#user_id,#side_user_id').html(user_id);
					$('#user_mobile').html(mobile);
					$('#user_wallet_balance,#user_mobile_wallet_balance').html(numberwithcomma(wallet_balance));
					$('#login_user_login_time').html(updated_time);
					_get_fetch_pix(passport, dashboard_fullname);

				}
			} else {
				_get_form('access_key_validation_info');
			}

		}
	});
}


function _get_fetch_pix(passport, dashboard_fullname) {
	var profile_login_pix = '';
	if (passport == '') {
		profile_login_pix =
			'<img id="passportimg1" src="' + website_url + '/uploaded_files/user_pix/friends.png" alt="' + dashboard_fullname + ' Profile pix"/>' +
			'<img id="passportimg2" src="' + website_url + '/uploaded_files/user_pix/friends.png" alt="' + dashboard_fullname + ' Profile pix"/>' +
			'<img id="passportimg3" src="' + website_url + '/uploaded_files/user_pix/friends.png" alt="' + dashboard_fullname + ' Profile pix"/>' +
			'<img id="passportimg4" src="' + website_url + '/uploaded_files/user_pix/friends.png" alt="' + dashboard_fullname + ' Profile pix"/>'
	} else {
		profile_login_pix =
			'<img id="passportimg1" src="' + website_url + '/uploaded_files/user_pix/' + passport + ' " alt="' + dashboard_fullname + ' Profile pix"/>' +
			'<img id="passportimg2" src="' + website_url + '/uploaded_files/user_pix/' + passport + '" alt="' + dashboard_fullname + ' Profile pix" />' +
			'<img id="passportimg3" src="' + website_url + '/uploaded_files/user_pix/' + passport + '" alt="' + dashboard_fullname + ' Profile pix" />' +
			'<img id="passportimg4" src="' + website_url + '/uploaded_files/user_pix/' + passport + '" alt="' + dashboard_fullname + ' Profile pix" />'
	}
	$('#profile_pix,#header_pix,#option_pix,#welcome_pix,#side_user_pix').html(profile_login_pix);
}






function _hide_and_show_wallet() {
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




function _update_user_profile(user_id) {
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
					_get_form('access_key_validation_info');
				}
			}

		});

	}
}



///// accept number ////
function isNumber_Check() {
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




function _upload_user_pix_(user_id) {
	$(function () {
		user_profile_pix = {
			UpdatePreviewPix: function (obj) {
				// if IE < 10 doesn't support FileReader
				if (!window.FileReader) {
					// don't know how to proceed to assign src to image tag
				} else {
					_upload_profile_pix(user_id);
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



function _upload_profile_pix(user_id) {
	if (user_id == '') {
		// do nothing
	} else {
		var action = 'get_passport_api';
		var file_data = $('#passport').prop('files')[0];
		if (file_data == '') { } else {
			var form_data = new FormData();
			form_data.append('action', action);
			form_data.append('passport', file_data);
			form_data.append('user_id', user_id);

			$.ajax({
				url: user_api,
				type: "POST",
				data: form_data,
				contentType: false,
				cache: false,
				processData: false,
				success: function (data) {
					var db_passport = data.db_passport;
					_unlink_passport(user_id, db_passport);
				}
			});
		}
	}

}




function _unlink_passport(user_id, db_passport) {
	var action = 'unlink_passport';
	var passport_pix = $('#passport').prop('files')[0];

	var form_data = new FormData();
	form_data.append('action', action);
	form_data.append('db_passport', db_passport);
	form_data.append('db_passport', passport_pix);

	$.ajax({
		url: user_local_portal_url,
		type: "POST",
		data: form_data,
		contentType: false,
		cache: false,
		processData: false,
		success: function (html) {
			_upload_pix_file(user_id);
		}
	});

}



function _upload_pix_file(user_id) {

	var passport_pix = $('#passport').prop('files')[0];
	var action = 'upload_passport_api';
	var form_data = new FormData();
	form_data.append('action', action);
	form_data.append('user_id', user_id);
	form_data.append('passport', passport);
	form_data.append('passport', passport_pix);


	$.ajax({
		url: user_api,
		type: "POST",
		data: form_data,
		contentType: false,
		cache: false,
		processData: false,
		success: function (data) {
			var message1 = data.message1;
			var message2 = data.message2;
			var passport = data.passport;
			_get_pix(message1, message2, passport);
		}
	});

}


function _get_pix(message1, message2, passport) {
	var action = 'move_passport';

	var passport_pix = $('#passport').prop('files')[0];
	var form_data = new FormData();
	form_data.append('action', action);
	form_data.append('passport', passport);
	form_data.append('passport', passport_pix);

	$.ajax({
		url: user_local_portal_url,
		type: "POST",
		data: form_data,
		contentType: false,
		cache: false,
		processData: false,
		success: function (html) {
			$('#success-div').html('<div><i class="bi-check-all"></i></div>' + message1 + '<br /> <span>' + message2 + '</span>').fadeIn(500).delay(3000).fadeOut(100);
		}
	});

}
















function _load_wallet(page) {

	var amount = $('#wallet_amount').val();
	if (amount == '') {
		$('#wallet_amount').addClass('complain');
		$('#warning-div').html('<div><i class="bi-exclamation-circle"></i></div> AMOUNT ERROR! <br />  <span>Fill this field to continue.</span>').fadeIn(500).delay(3000).fadeOut(100);
	} else {
		$('#wallet_amount').removeClass('complain');
		/////////////////////////////////////////
		var btn_text = $('#load_wallet_btn').html();
		$('#load_wallet_btn').html('Loading <i class="fa fa-spinner fa-spin"></i>');
		document.getElementById('load_wallet_btn').disabled = true;
		////////////////////////////////////////////////	
		var action = 'load_wallet_api';
		var dataString = 'action=' + action + '&amount=' + amount;
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
					//var user_id =info.user_id;
					var fullname = info.fullname;
					var payment_id = info.payment_id;
					var payment_key = info.payment_key;
					var email = info.email;
					var mobile = info.mobile;
					var amount = info.amount;
					var currency_id = info.currency_id;
					if (result == true) {
						_PayWithPaystack(page, '', '', fullname, payment_id, payment_key, email, mobile, amount, currency_id);
					} else {
						$('#warning-div').html('<div><i class="bi-exclamation-circle"></i></div>' + message1 + '<br /> <span>' + message2 + '</span>').fadeIn(500).delay(3000).fadeOut(100);
						$('#wallet_amount').addClass('complain');
					}
					$('#load_wallet_btn').html(btn_text);
					document.getElementById('load_wallet_btn').disabled = false;
				} else {
					_get_form('access_key_validation_info');
				}
			}
		});
	}

}










function _get_fetch_all_wallet_payment(page, view_report, datefrom, dateto) {
	var action = 'fetch_wallet_history_api';
	var dataString = 'action=' + action + '&view_report=' + view_report + '&datefrom=' + datefrom + '&dateto=' + dateto;
	$.ajax({
		type: "POST",
		url: user_api,
		data: dataString,
		dataType: 'json',
		cache: false,
		success: function (info) {
			var login_check = info.check;
			if (login_check > 0) {
				var fetch = info.data;
				var result = info.result;
				var message = info.message;

				var no = 0;
				var text = '';

				text =
					'<tr class="tuple">' +
					'<td>SN</td>' +
					'<td>DATE</td>' +
					'<td>TRANSACTION ID</td>' +
					'<td>BALANCE BEFORE</td>' +
					'<td>AMOUNT LOADED</td>' +
					'<td>BALANCE AFTER</td>' +
					'<td>TRANSACTION TYPE</td>' +
					'<td>STATUS</td>' +
					'</tr>';

				if (result == true) {
					if (page == 'dashboard') {
						for (var i = 0; i < 5 && i < fetch.length; i++) {
							no++;

							var date = fetch[i].date;
							var payment_id = fetch[i].payment_id;
							var balance_before = fetch[i].balance_before;
							var amount = fetch[i].amount;
							var balance_after = fetch[i].balance_after;
							var transaction_type_name = fetch[i].transaction_type_name;
							var status_name = fetch[i].status_name;
							var count_all = fetch[i].count_all;

							text +=
								'<tr>' +
								'<td>' + no + '</td>' +
								'<td>' + date + '</td>' +
								'<td>' + payment_id + '</td>' +
								'<td><span>₦</span> ' + numberwithcomma(balance_before) + '</td>' +
								'<td class="amount_load"><span>₦</span> ' + numberwithcomma(amount) + '</td>' +
								'<td><span>₦</span> ' + numberwithcomma(balance_after) + '</td>' +
								'<td>' + transaction_type_name + '</td>' +
								'<td><div class="status-div ' + status_name + '">' + status_name + '</div></td>' +
								'</tr>';

						}
						$('#current_count').html(no);
						$('#total_count').html(count_all);
						$('#fetch_wallet_histotry_with_limit').html(text);
					} else if (page == 'wallet_history') {
						for (var i = 0; i < fetch.length; i++) {
							no++;
							var date = fetch[i].date;
							var payment_id = fetch[i].payment_id;
							var balance_before = fetch[i].balance_before;
							var amount = fetch[i].amount;
							var balance_after = fetch[i].balance_after;
							var transaction_type_name = fetch[i].transaction_type_name;
							var status_name = fetch[i].status_name;
							var count_all = fetch[i].count_all;

							text +=
								'<tr>' +
								'<td>' + no + '</td>' +
								'<td>' + date + '</td>' +
								'<td>' + payment_id + '</td>' +
								'<td><span>₦</span> ' + numberwithcomma(balance_before) + '</td>' +
								'<td class="amount_load"><span>₦</span> ' + numberwithcomma(amount) + '</td>' +
								'<td><span>₦</span> ' + numberwithcomma(balance_after) + '</td>' +
								'<td>' + transaction_type_name + '</td>' +
								'<td><div class="status-div ' + status_name + '">' + status_name + '</div></td>' +
								'</tr>';

						}
						$('#current_count').html(no);
						$('#total_count').html(count_all);
						$('#fetch_all_wallet_history').html(text);
					} else {
						/// do nothing
					}

				} else {
					$('#current_count,#total_count').html(no);
					text =
						'<div class="no-record-div pay-message">' +
						'<span >' + message + '</span>' +
						'</div>';
					$('#fetch_wallet_histotry_with_limit,#fetch_all_wallet_history').html(text);
				}
			} else {
				_get_form('access_key_validation_info');
			}
		}
	});
}







function _update_password() {
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
						_get_form('access_key_validation_info');
					} else {
						$('#warning-div').html('<div><i class="bi-exclamation-circle"></i></div>' + message1 + '<br /> <span>' + message2 + '</span>').fadeIn(500).delay(3000).fadeOut(100);
						$('#old_password').addClass('complain');

						$('#update_btn').html(btn_text);
						document.getElementById('update_btn').disabled = false;
					}

				} else {
					_get_form('access_key_validation_info');
				}
			}
		});
	}
}




function _check_password_match(ids, toggle_pass) {
	var password = $("#new_password").val();
	var confirmed_reset_password = $("#comfirmed_password").val();
	if ((password != confirmed_reset_password) && (confirmed_reset_password != '')) {
		$('#message').show();
	} else {
		$('#message').hide();
	}
	_show_password_visibility(ids,toggle_pass);
}




function _search_content(page, search_id, search_id1) {
	var search_txt = $("#search_txt").val();
	if (search_txt.length > 2 || search_txt == '') {
		if (page == 'exam_category') {
			_get_fetch_reg_exam(page);
		} else if (page == 'subject') {
			_get_fetch_exam_subject(search_id);
		} else if (page == 'topics') {
			_get_fetch_topic(search_id, search_id1);
		} else if (page == 'videos') {
			_get_fetch_sub_topic_video(search_id, search_id1);
		} else {
			// do nothing
		}
	}
}




function _get_fetch_reg_exam(page) {
	var search_txt = $('#search_txt').val();
	var action = 'fetch_exam_api';
	var dataString = 'action=' + action + '&search_txt=' + search_txt;
	$.ajax({
		type: "POST",
		url: user_api,
		data: dataString,
		dataType: 'json',
		cache: false,
		success: function (info) {
			var login_check = info.check;
			if (login_check > 0) {
				var fetch = info.data;
				var result = info.result;
				var message1 = info.message1;

				var text = '';
				var no = 0;
				if (result == true) {
					if (page == 'dashboard') {
						text =
							'<tr class="tuple">' +
							'<td>SN</td>' +
							'<td>EXAM</td>' +
							'<td>NO. OF SUBJECT</td>' +
							'<td>ACTION</td>' +
							'</tr>';
						for (var i = 0; i < 5 && i < fetch.length; i++) {
							no++;
							var exam_id = fetch[i].exam_id;
							var exam_passport = fetch[i].exam_passport;
							var abbreviation = fetch[i].abbreviation.toUpperCase();
							var exam_subject_count = fetch[i].exam_subject_count;
							var count_all = fetch[i].count_all;
							text +=
								'<tr>' +
								'<td>' + no + '</td>' +
								'<td class="logo-tb"><div class="logo-div"><img src="' + website_url + '/uploaded_files/exam_pix/' + exam_passport + '" alt="' + abbreviation + ' LOGO"/> </div><span id="">' + abbreviation + '</span>  </td>' +
								'<td>' + exam_subject_count + '</td>' +

								'<td><button class="btn" onclick="_get_page_with_id(' + "'subject'" + "," + "'" + exam_id + "'" + "," + "' '" + ');"><i class="bi bi-eye"></i> VIEW</button></td>' +
								'</tr>';
						}

						$('#dashboard_sub_count').html(no);
						$('#dashboard_sub_total_count').html(count_all);
						$('#fetch_exam_details_with_limit').html(text);

					} else if (page == 'exam_category') {

						for (var i = 0; i < fetch.length; i++) {
							var exam_id = fetch[i].exam_id;
							var exam_passport = fetch[i].exam_passport;
							var abbreviation = fetch[i].abbreviation.toUpperCase();
							var seo_description = fetch[i].seo_description;
							var exam_subject_count = fetch[i].exam_subject_count;

							text +=
								'<div class="record-content-div animated fadeIn">' +
								'<div class="div-in">' +
								'<div class="image-div">' +
								'<img src="' + website_url + "/uploaded_files/exam_pix/" + exam_passport + '" alt="' + abbreviation + '"/>' +
								'</div>' +

								'<div class="text-div">' +
								'<h2>' + abbreviation + '</h2>' +
								'<p>' + seo_description + '</p>' +
								'<div class="count-div">' +
								'<div class="count-in"><i class="bi-book"></i> SUBJECT: <span >' + exam_subject_count + '</span> </div>' +
								'<button class="btn"  title="VIEW SUBJECT" onClick="_get_page_with_id(' + "'subject'" + "," + "'" + exam_id + "'" + "," + "' '" + ');"><i class="bi-pencil-square"></i> VIEW SUBJECT</button>' +
								'</div>' +
								'</div>' +
								'</div>' +
								'</div>';

						}

						$('#fetch_exam_details').html(text);
					} else {
						// do nothing

					}



				} else {
					text =
						'<div class="no-record-div pay-message">' +
						'<span >' + message1 + '</span>' +
						'</div>';
					$('#fetch_exam_details,#fetch_exam_details_with_limit').html(text);
				}

			} else {
				_get_form('access_key_validation_info');
			}
		}

	});
}


























function _get_fetch_all_exam() {
	var action = 'fetch_user_exam_api';
	var dataString = 'action=' + action;
	$.ajax({
		type: "POST",
		url: user_api,
		dataType: 'json',
		data: dataString,
		cache: false,
		success: function (info) {
			var fetch = info.data;
			var result = info.result;
			var message1 = info.message1;
			var text = '';

			if (result == true) {
				for (var i = 0; i < fetch.length; i++) {
					var exam_id = fetch[i].exam_id;
					var abbreviation = fetch[i].abbreviation.toUpperCase();
					var checked = fetch[i].checked;
					text +=
						'<label for="">' +
						'<div class="radio-in-div">' +
						'<div class="radio"><input type="checkbox" class="child" id="' + exam_id + '" name="exam_id[]" data-value="' + exam_id + '" ' + checked + ' ><div class="border"></div></div>' +
						'<span> ' + abbreviation + '</span>' +
						'</div>' +
						'</label>';
				}
			} else {
				text = '<div class="alert">' + message1 + '</div>';
			}
			$('#fetch_user_exam').html(text);
		}

	});
}








function _add_new_exam() {

	var exam_id = [];
	$(".child:checked").each(function () {
		exam_id.push($(this).data("value"));
	});
	var checked = $('input[name="exam_id[]"]:checked').length;

	if (checked < 1) {
		$('#exam_id').addClass('complain');
		$('#warning-div').html('<div><i class="bi-exclamation-circle"></i></div> ERROR! <br /> <span> Select atleast one Exam </span>').fadeIn(500).delay(3000).fadeOut(100);
	} else {

		//////////////// get btn text ////////////////
		var btn_text = $('#submit_btn').html();
		$('#submit_btn').html('PROCESSING <i class="fa fa-spinner fa-spin"></i>');
		document.getElementById('submit_btn').disabled = true;
		////////////////////////////////////////////////	
		var action = 'add_new_exam';
		var dataString = 'action=' + action + '&exam_id=' + exam_id;

		$.ajax({
			type: "POST",
			url: user_api,
			data: dataString,
			cache: false,
			dataType: 'json',
			cache: false,
			success: function (info) {
				var result = info.result;
				var message1 = info.message1;
				var message2 = info.message2;
				if (result == true) {
					_get_page('exam_category', 'exam');
					$('#success-div').html('<div><i class="bi-check-all"></div>' + message1 + '<br /> <span>' + message2 + '</span>').fadeIn(500).delay(3000).fadeOut(100);
					_alert_close();
				} else {
					$('#warning-div').html('<div><i class="bi-exclamation-circle"></i></div>' + message1 + '<br /> <span>' + message2 + '</span>').fadeIn(500).delay(3000).fadeOut(100);
				}
				$('#submit_btn').html(btn_text);
				document.getElementById('submit_btn').disabled = false;
			}
		});
	}
}




















function _get_fetch_exam_subject(exam_id) {
	var search_txt = $('#search_txt').val();
	var action = 'fetch_exam_subject_api';
	var dataString = 'action=' + action + '&exam_id=' + exam_id + '&search_txt=' + search_txt;
	$.ajax({
		type: "POST",
		url: user_api,
		data: dataString,
		dataType: 'json',
		cache: false,
		success: function (info) {
			var login_check = info.check;
			if (login_check > 0) {
				var fetch = info.data;
				var result = info.result;
				var message = info.message;
				var abbreviation = info.abbreviation.toUpperCase();
				var text = '';
				$('#exam_abbreviation').html(abbreviation);
				if (result == true) {
					for (var i = 0; i < fetch.length; i++) {
						var exam_id = fetch[i].exam_id;
						var subject_id = fetch[i].subject_id;
						var subject_name = fetch[i].subject_name.toUpperCase();
						var subject_passport = fetch[i].subject_passport;
						var subject_topic_count = fetch[i].subject_topic_count;

						text +=
							'<div class="grid-div animated fadeIn">' +
							'<div class="div-in">' +
							'<div class="image-div">' +
							'<img src="' + website_url + "/uploaded_files/subject_pix/" + subject_passport + '" alt="' + subject_name + ' picture"/>' +
							'</div>' +
							'<div class="status-div">SUBJECT</div>' +
							'<div class="info-div">' +
							'<h2>' + subject_name + '</h2>' +
							'<hr></hr>' +
							'<div class="count-div"><i class="bi-book"></i> TOPICS: <span>' + subject_topic_count + '</span> </div>' +
							'<button class="btn btn2" title="VIEW TOPICS"  onClick="_get_page_with_id(' + "'topics'" + "," + "'" + exam_id + "'" + "," + "'" + subject_id + "'" + ');"><i class="bi-book"></i> VIEW TOPICS</button>' +
							'</div>' +
							'</div>' +
							'</div>';

					}


				} else {
					text =
						'<div class="false-notification-div">' +
						'<p> ' + message + ' </p>' +
						'</div>';
				}

				$('#fetch_subject_details').html(text);
			} else {
				_get_form('access_key_validation_info');
			}
		}
	});
}













function _get_fetch_topic(exam_id, subject_id) {
	var search_txt = $('#search_txt').val();
	var action = 'fetch_topic_api';
	var dataString = 'action=' + action + '&exam_id=' + exam_id + '&subject_id=' + subject_id + '&search_txt=' + search_txt;
	$.ajax({
		type: "POST",
		url: user_api,
		data: dataString,
		dataType: "json",
		cache: false,
		success: function (info) {
			var login_check = info.check;
			if (login_check > 0) {
				var fetch = info.data;
				var result = info.result;
				var message = info.message;
				var abbreviation = info.abbreviation.toUpperCase();
				var subject_name = info.subject_name.toUpperCase();
				var no = 0;
				var text = "";
				$('#exam_abbreviation').html(abbreviation);
				$('#subject_name').html(subject_name);
				if (result == true) {
					for (var i = 0; i < fetch.length; i++) {
						no++;
						var topic_id = fetch[i].topic_id;
						var topic_name = fetch[i].topic_name.toUpperCase();
						var sub_topic_count = fetch[i].sub_topic_count;

						text +=
							'<div class="quest-faq-div animated fadeIn">' +
							'<div class="faq-title-text">' +
							'<h3>' + topic_name + '</h3>' +
							'</div>' +

							'<div class="faq-answer-div" onclick="_collapse(' + "'" + 'view' + no + "'" + "," + "'" + topic_id + "'" + ')">' +
							'<span>Sub Topics: </span>&nbsp;&nbsp;<span class="count-div">' + sub_topic_count + '</span> &nbsp;&nbsp;' +
							'<div class="expand-div" id="' + "view" + no + "num" + '" onClick="_get_fetch_sub_topic(' + "'" + ' ' + "'" + "," + "'" + 'view' + no + "'" + "," + "'" + topic_id + "'" + ');">&nbsp;<i class="bi-plus"></i>&nbsp;</div>' +
							'</div>' +

							'<div class="faq-answer-div" id="' + "view" + no + "answer" + '" style="display: none;">' +
							'<div class="" id="sub_topic_view' + no + '">' +

							//// fetch all sub topic under each topic

							'</div>' +
							'</div>' +
							'</div>';
						$('#fetch_topic').html(text);

					}

				} else {
					text =
						'<div class="false-notification-div">' +
						'<p> ' + message + ' </p>' +
						'</div>';
					_get_form_with_id('no_records_found2', exam_id, subject_id, '', subject_name);
				}
				$('#fetch_topic').html(text);

			} else {
				_get_form('access_key_validation_info');
			}
		},
	});

}




function _get_fetch_sub_topic(div_id, topic_id) {
	$('#' + "sub_topic_" + div_id).html('<span class="loading">LOADING <i class="fa fa-spinner fa-spin"></i></span>');
	var action = "fetch_sub_topic_api";
	var dataString = "action=" + action + "&topic_id=" + topic_id;
	$.ajax({
		type: "POST",
		url: user_api,
		data: dataString,
		dataType: "json",
		cache: false,
		success: function (info) {
			var login_check = info.check;
			if (login_check > 0) {
				var fetch = info.data;
				var result = info.result;
				var message = info.message;
				var no = 0;
				var text = '';

				if (result == true) {
					for (var i = 0; i < fetch.length; i++) {
						no++;
						var sub_topic_id = fetch[i].sub_topic_id;
						var sub_topic_name = fetch[i].sub_topic_name;
						var seo_description = fetch[i].seo_description;
						var sub_topic_passport = fetch[i].sub_topic_passport;
						var subscription_price = fetch[i].subscription_price;
						var subscribed = fetch[i].subscribed;
						var subscription_duration_id = fetch[i].subscription_duration_id;
						var due_date = fetch[i].due_date;
						var nums_of_videos = fetch[i].nums_of_videos;
						if (sub_topic_passport == '') {
							sub_topic_passport = "default_pix.jpg";
						}
						if (subscribed == 'yes') {

							text +=
								'<div class="topics-content-div">' +
								'<div class="image-div">' +
								'<img src="' + website_url + "/uploaded_files/sub_topic_pix/" + sub_topic_passport + '" alt="' + sub_topic_name + ' Picture"/>' +
								'</div>' +
								'<div class="text">' +
								'<h4>' + sub_topic_name + '</h4>' +
								'<p>' + seo_description + '</p>' +
								'<button class="btn btn2" title="VIEW VIDEOS" onClick="_get_page_with_id(' + "'videos'" + "," + "'" + sub_topic_id + "'" + "," + "' '" + ');">VIEW VIDEOS <i class="bi-eye"></i></button>' +
								'<button class="btn count_btn" title="NO OF VIDEOS" onClick="_get_page_with_id(' + "'videos'" + "," + "'" + sub_topic_id + "'" + "," + "' '" + ');">NO OF VIDEOS: <span>' + nums_of_videos + '</span></button>' +
								'<br/>' +
								'<div class="amount-div">Subcription Fee:&nbsp; ₦ <span id="">' + numberwithcomma(subscription_price) + '</span> </div>' +
								'<div class="amount-div">Duration: <span class="due-date"> ' + subscription_duration_id + ' Days</span> </div>' +
								'<div class="amount-div">Due Date: <span class="due-date"> ' + due_date + '</span> </div>' +
								'</div>' +
								'</div>';

						} else {

							text +=
								'<div class="topics-content-div">' +
								'<div class="image-div">' +
								'<img src="' + website_url + "/uploaded_files/sub_topic_pix/" + sub_topic_passport + '" alt="' + sub_topic_name + ' Picture"/>' +
								'</div>' +
								'<div class="text">' +
								'<h4>' + sub_topic_name + '</h4>' +
								'<p>' + seo_description + '</p>' +
								'<button class="btn" title="SUBCRIBE" onclick="_get_form_with_id(' + "'user_subcription'" + "," + "' '" + "," + "' '" + "," + "'" + sub_topic_id + "'" + "," + "' '" + ');">SUBCRIBE <i class="bi-box-arrow-in-up-right"></i></button>' +
								'<button class="btn count_btn" title="NO OF VIDEOS" onClick="_get_page_with_id(' + "'videos'" + "," + "'" + sub_topic_id + "'" + "," + "' '" + ');">NO OF VIDEOS: <span>' + nums_of_videos + '</span></button>' +
								'<br/>' +
								'<div class="amount-div">Subcription Fee:&nbsp; ₦ <span id="">' + numberwithcomma(subscription_price) + '</span> </div>' +
								'<div class="amount-div">Duration: <span class="due-date"> ' + subscription_duration_id + ' Days</span> </div>' +
								'</div>' +
								'</div>';

						}


					}
				} else {
					text +=
						'<div class="false-notification-div">' +
						'<p> ' + message + ' </p>' +
						'</div>';
				}
				$('#' + "sub_topic_" + div_id).html(text);
			} else {
				_get_form('access_key_validation_info');
			}
		}
	});

}







function _get_fetch_sub_topic_video(sub_topic_id) {
	var action = "fetch_sub_topic_video_api";
	var search_txt = $("#search_txt").val();

	var dataString = "action=" + action + "&sub_topic_id=" + sub_topic_id + "&search_txt=" + search_txt;

	$.ajax({
		type: "POST",
		url: user_api,
		data: dataString,
		dataType: "json",
		cache: false,
		success: function (info) {
			var login_check = info.check;
			if (login_check > 0) {
				var subscription_check = info.subscription_check;
				var result = info.result;
				var message = info.message;
				var exam_id = info.exam_id;
				var subject_id = info.subject_id;
				var abbreviation = info.abbreviation.toUpperCase();
				var subject_name = info.subject_name.toUpperCase();
				var topic_name = info.topic_name.toUpperCase();
				var sub_topic_name = info.sub_topic_name.toUpperCase();
				var fetch = info.data;

				$('#exam_abbreviation').html(abbreviation);
				$('#subject_name').html(subject_name);
				$('#topic_name').html(topic_name);
				$('#sub_topic_name').html(sub_topic_name);

				if (result == true) {
					var text = '';

					for (var i = 0; i < fetch.length; i++) {

						var video_id = fetch[i].video_id;
						var video_title = fetch[i].video_title.toUpperCase();
						var video_objective = fetch[i].video_objective.substr(0, 130);
						var video_duration = fetch[i].video_duration;
						var video_passport = fetch[i].video_passport;
						var video_volume_name = fetch[i].video_volume_name;
						var subscription_pricing_id = fetch[i].subscription_pricing_id;
						var subscription_pricing_name = fetch[i].subscription_pricing_name;

						if (subscription_check == 1) {
							text +=

								'<div class="faq-answer-div animated fadeIn" id="faq1answer">' +
								'<div class="topics-content-div">' +
								'<div class="image-div video-img">' +
								'<img src="' + website_url + '/uploaded_files/sub_topic_video_pix/' + video_passport + '" alt="' + video_title + '"/>' +
								'</div>' +

								'<div class="text video-text">' +
								'<h4>' + video_title + '</h4>' +
								'<p>' + video_objective + '</p>' +

								'<button class="btn btn2" title="PLAY VIDEO" onClick="_get_form_with_id(' + "'subscription_video'" + "," + "' '" + "," + "' '" + "," + "'" + video_id + "'" + "," + "' '" + ');">PLAY VIDEO <i class="bi-play"></i></button>' +
								'<div class="details">' + video_volume_name + '</div>' +
								'<div class="details">' + subscription_pricing_name + '</div>' +
								'<div class="details">' + video_duration + '</div>' +
								'</div>' +
								'</div>' +
								'</div>';
						} else {

							if (subscription_pricing_id == 1) {
								text +=

									'<div class="faq-answer-div animated fadeIn" id="faq1answer">' +
									'<div class="topics-content-div">' +
									'<div class="image-div video-img">' +
									'<img src="' + website_url + '/uploaded_files/sub_topic_video_pix/' + video_passport + '" alt="' + video_title + '"/>' +
									'</div>' +

									'<div class="text video-text">' +
									'<h4>' + video_title + '</h4>' +
									'<p>' + video_objective + '</p>' +

									'<button class="btn btn2" title="PLAY VIDEO" onClick="_get_form_with_id(' + "'subscription_video'" + "," + "' '" + "," + "' '" + "," + "'" + video_id + "'" + "," + "' '" + ');">PLAY VIDEO <i class="bi-play"></i></button>' +
									'<div class="details">' + video_volume_name + '</div>' +
									'<div class="details">' + subscription_pricing_name + '</div>' +
									'<div class="details">' + video_duration + '</div>' +
									'</div>' +
									'</div>' +
									'</div>';
							} else {
								text +=

									'<div class="faq-answer-div animated fadeIn" id="faq1answer">' +
									'<div class="topics-content-div">' +
									'<div class="image-div video-img">' +
									'<img src="' + website_url + '/uploaded_files/sub_topic_video_pix/' + video_passport + '" alt="' + video_title + '"/>' +
									'</div>' +

									'<div class="text video-text">' +
									'<h4>' + video_title + '</h4>' +
									'<p>' + video_objective + '</p>' +

									'<button class="btn" title="SUBCRIBE" onclick="_get_form_with_id(' + "'user_subcription'" + "," + "' '" + "," + "' '" + "," + "'" + sub_topic_id + "'" + "," + "' '" + ');">SUBCRIBE <i class="bi-box-arrow-in-up-right"></i></button>' +
									'<div class="details">' + video_volume_name + '</div>' +
									'<div class="details">' + subscription_pricing_name + '</div>' +
									'<div class="details">' + video_duration + '</div>' +
									'</div>' +
									'</div>' +
									'</div>';

							}

						}

					}

				} else {
					text =
						'<div class="false-notification-div">' +
						'<p> ' + message + ' </p>' +
						'</div>';
					_get_form_with_id('no_records_found', exam_id, subject_id, '', sub_topic_name);
				}
				$('#fetch_sub_topic_videos').html(text);


			} else {
				_get_form('access_key_validation_info');
			}

		}
	})

}








function _get_subcription_payment_details(sub_topic_id) {
	var action = 'subscription_payment_detail_api';
	var dataString = "action=" + action + "&sub_topic_id=" + sub_topic_id;
	$.ajax({
		type: "POST",
		url: user_api,
		data: dataString,
		dataType: "json",
		cache: false,
		success: function (info) {
			var login_check = info.check;
			if (login_check > 0) {
				var result = info.result;
				var message1 = info.message1;
				var message2 = info.message2;

				var sub_topic_name = info.sub_topic_name;
				var subscription_price = info.subscription_price;
				var subscription_duration_id = info.subscription_duration_id;

				if (result == true) {
					$('#subscription_name').html(sub_topic_name);
					$('#subscription_duration_id').html(subscription_duration_id);
					$('#subscription_price').html(numberwithcomma(subscription_price));
				} else {
					$('#subscription_name').html(message1);
					$('#subscription_price').html(message2);
				}
			} else {
				_get_form('access_key_validation_info');
			}
		}

	});

}




function _get_fund_method() {
	text = '<option value="selected" selected="selected">LOADING... </option>';
	$('#fund_method_id').html(text);
	var action = 'fund_method_api';
	var dataString = "action=" + action;
	$.ajax({
		type: "POST",
		url: user_api,
		data: dataString,
		dataType: 'json',
		cache: false,
		success: function (info) {
			var login_check = info.check;
			if (login_check > 0) {
				var fetch = info.data;
				var text = '<option value="" selected="selected">SELECT PAYMENT METHOD</option>';
				for (var i = 0; i < fetch.length; i++) {
					var fund_method_id = fetch[i].fund_method_id;
					var fund_method_name = fetch[i].fund_method_name;

					text += '<option value="' + fund_method_id + '" >' + fund_method_name.toUpperCase() + '</option>';
				}
				$('#fund_method_id').html(text);
			} else {
				_get_form('access_key_validation_info');
			}
		}
	});
}





function _payment_subcription(page, sub_topic_id) {
	var fund_method_id = $('#fund_method_id').val();
	if (fund_method_id == '') {
		$('#fund_method_id').addClass('complain');
		$('#warning-div').html('<div><i class="bi-exclamation-circle"></i></div> PAYEMENT METHOD ERROR! <br />  <span>Select payment method to continue.</span>').fadeIn(500).delay(3000).fadeOut(100);
	} else {
		$('#fund_method_id').removeClass('complain');
		/////////////////////////////////////////
		var btn_text = $('#payment_btn').html();
		$('#payment_btn').html('LOADING <i class="fa fa-spinner fa-spin"></i>');
		document.getElementById('payment_btn').disabled = true;
		////////////////////////////////////////////////	
		var action = 'payment_subscription_api';
		var dataString = 'action=' + action + '&sub_topic_id=' + sub_topic_id + '&fund_method_id=' + fund_method_id;
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
					var subscription_name = info.subscription_name;
					var exam_id = info.exam_id;
					var subject_id = info.subject_id;
					var video_check = info.video_check;
					if (video_check == 1) {

						var pay_with_card_id = info.pay_with_card_id;
						var pay_with_wallet_id = info.pay_with_wallet_id;
						var fullname = info.fullname;
						var payment_id = info.payment_id;
						var payment_key = info.payment_key;
						var email = info.email;
						var mobile = info.mobile;
						var amount = info.amount;
						var currency_id = info.currency_id;
						if (result == true) {

							if (fund_method_id == pay_with_card_id) {

								_PayWithPaystack(page, sub_topic_id, subscription_name, fullname, payment_id, payment_key, email, mobile, amount, currency_id);
							} else if (fund_method_id == pay_with_wallet_id) {
								_pay_with_wallet_subcription(payment_id, sub_topic_id, subscription_name);
							} else {
								/// do nothing
								$('#payment_btn').html(btn_text);
								document.getElementById('payment_btn').disabled = false;
							}
						} else {
							$('#warning-div').html('<div><i class="bi-exclamation-circle"></i></div>' + message1 + '<br /> <span>' + message2 + '</span>').fadeIn(500).delay(3000).fadeOut(100);
							$('#wallet_amount').addClass('complain');
						}
						$('#payment_btn').html(btn_text);
						document.getElementById('payment_btn').disabled = false;
					} else {
						_get_form_with_id('no_records_found', exam_id, subject_id, '', subscription_name);
					}

				} else {
					_get_form('access_key_validation_info');
				}
			}

		});
	}
}









////// CALL PAYSTACK /////////////////////

function _PayWithPaystack(page, sub_topic_id, subscription_name, fullname, payment_id, payment_key, email, mobile, amount, currency_id) {
	if (page == 'load_user_wallet') {
		var action = 'wallet_payment_success_api';
	} else if (page == 'user_subcription') {
		var action = 'pay_with_card_success_api';
	} else {
		_get_form('access_key_validation_info');
	}
	var handler = PaystackPop.setup({
		key: payment_key,
		email: email,
		amount: amount * 100, //amt in kobo
		ref: payment_id,
		currency: currency_id, // Use GHS for Ghana Cedis or USD for US Dollars
		metadata: {
			custom_fields: [
				{
					display_name: fullname,
					variable_name: "mobile_number",
					value: mobile
				}
			]
		},
		callback: function (response) { //success
			var stack_pay_ref = $.trim(response.reference);
			_call_payment_success(page, action, sub_topic_id, subscription_name, payment_id, stack_pay_ref, amount);
		},
		onClose: function () { //update to cancelled.
			_call_payment_cancelled(page, payment_id);
			return false;
		}
	});
	handler.openIframe();
}


function _call_payment_success(page, action, sub_topic_id, subscription_name, payment_id, stack_pay_ref, amount) {
	var dataString = 'action=' + action + '&payment_id=' + payment_id + '&stack_pay_ref=' + stack_pay_ref + '&amount=' + amount;
	$.ajax({
		type: "POST",
		url: user_api,
		data: dataString,
		cache: false,
		success: function (info) {
			if (page == 'load_user_wallet') {
				_get_form_with_id('load_user_wallet_success', '', '', '', '');
			} else if (page == 'user_subcription') {
				_get_page_with_id('videos', sub_topic_id, '');
				_get_form_with_id('user_subcription_success', '', '', sub_topic_id, subscription_name);
			} else {
				// do nothing
			}

		}
	});
}



function _pay_with_wallet_subcription(payment_id, sub_topic_id, subscription_name) {
	var action = 'payment_with_wallet_subscription_api';
	$('#get-more-div').html('<div class="ajax-loader"><img src="' + website_url + '/all-images/images/ajax-loader.gif"/></div>').fadeIn('fast');
	var dataString = 'action=' + action + '&payment_id=' + payment_id;
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
					_get_page_with_id('videos', sub_topic_id, '');
					_get_form_with_id('user_subcription_success', '', '', sub_topic_id, subscription_name);
				} else {
					_get_form_with_id('load_user_wallet', '', '', '', '');
					$('#warning-div').html('<div><i class="fa fa-warning (alias)"></i></div> ' + message1 + '<br /><span>' + message2 + '</span>').fadeIn(500).delay(5000).fadeOut(100);
					$('#payment-btn').html('<i class="fa fa-long-arrow-right"></i> MAKE PAYMENT');
					document.getElementById('payment-btn').disabled = false;
				}
			} else {
				_get_form('access_key_validation_info');
			}
		}
	});
}


//// note this
function _call_payment_cancelled(page, payment_id) {

	if (page == 'load_user_wallet') {
		var action = 'wallet_payment_cancelled_api';
	} else if (page == 'user_subcription') {
		var action = 'payment_subscription_cancelled_api';
	} else {
		// do nothing
	}
	var dataString = 'action=' + action + '&payment_id=' + payment_id;
	$.ajax({
		type: "POST",
		url: user_api,
		data: dataString,
		cache: false,
		success: function (info) {
			var result = info.result;
			var message1 = info.message1;
			var message2 = info.message2;
			if (result == true) {
				_get_fetch_all_wallet_payment('dashboard', '');
				_get_fetch_all_wallet_payment('wallet_history', '');
				$('#not-success-div').html('<div><i class="bi-x-circle"></i></div>' + message1 + '<br /> <span>' + message2 + '</span>').fadeIn(500).delay(5000).fadeOut(100);
			} else {
				$('#warning-div').html('<div><i class="bi-exclamation-circle"></i></div>' + message1 + '<br /> <span>' + message2 + '</span>').fadeIn(500).delay(3000).fadeOut(100);
			}

		}
	});
}





function _fetch_custom_report(page, view_report, sub_topic_id) {
	var datefrom = $('#datepicker-from').val();
	var dateto = $('#datepicker-to').val();

	if ((datefrom == '') || (dateto == '')) {
		$('#datepicker-from,#datepicker-to').addClass('complain');
		$('#warning-div').html('<div><i class="bi-exclamation-circle"></i></div>DATE ERROR<br /> <span>Select date to continue</span>').fadeIn(500).delay(3000).fadeOut(100);
	} else {

		$('#datepicker-from,#datepicker-to').removeClass('complain');
		if (page == 'subscription') {
			$('#fetch_all_subscription_history').html('<div class="ajax-loader loader2"><img src="' + website_url + '/all-images/images/ajax-loader.gif"/></div>').fadeIn('fast');
			_get_fetch_all_user_subscription(page, view_report, sub_topic_id, datefrom, dateto);

		} else if (page == 'transactions') {
			$('#fetch_all_transaction_history').html('<div class="ajax-loader loader2"><img src="' + website_url + '/all-images/images/ajax-loader.gif"/></div>').fadeIn('fast');
			_get_fetch_all_transaction(page, view_report, '', datefrom, dateto);

		} else if (page == 'wallet_history') {
			$('#fetch_all_wallet_history').html('<div class="ajax-loader loader2"><img src="' + website_url + '/all-images/images/ajax-loader.gif"/></div>').fadeIn('fast');
			_get_fetch_all_wallet_payment(page, view_report, datefrom, dateto);

		} else {
			/// do nothing
		}
	}

}



function _fetch_custom_report2(page, view_report, sub_topic_id) {
	var datefrom = $('#mobile-datepicker-from').val();
	var dateto = $('#mobile-datepicker-to').val();
	if ((datefrom == '') || (dateto == '')) {
		$('#mobile-datepicker-from,#mobile-datepicker-to').addClass('complain');
		$('#warning-div').html('<div><i class="bi-exclamation-circle"></i></div>DATE ERROR<br /> <span>Select date to continue</span>').fadeIn(500).delay(3000).fadeOut(100);
	} else {
		close_search();

		$('#mobile-datepicker-from,#mobile-datepicker-to').removeClass('complain');
		if (page == 'subscription') {
			$('#fetch_all_subscription_history').html('<div class="ajax-loader loader2"><img src="' + website_url + '/all-images/images/ajax-loader.gif"/></div>').fadeIn('fast');
			_get_fetch_all_user_subscription(page, view_report, sub_topic_id, datefrom, dateto);

		} else if (page == 'transactions') {
			$('#fetch_all_transaction_history').html('<div class="ajax-loader loader2"><img src="' + website_url + '/all-images/images/ajax-loader.gif"/></div>').fadeIn('fast');
			_get_fetch_all_transaction(page, view_report, '', datefrom, dateto);

		} else if (page == 'wallet_history') {
			$('#fetch_all_wallet_history').html('<div class="ajax-loader loader2"><img src="' + website_url + '/all-images/images/ajax-loader.gif"/></div>').fadeIn('fast');
			_get_fetch_all_wallet_payment(page, view_report, datefrom, dateto);

		} else {
			/// do nothing
		}
	}

}



function _get_fetch_all_user_subscription(page, view_report, sub_topic_id, datefrom, dateto) {
	var action = 'fetch_subscription_api';
	var dataString = 'action=' + action + '&view_report=' + view_report + '&sub_topic_id=' + sub_topic_id + '&datefrom=' + datefrom + '&dateto=' + dateto;
	$.ajax({
		type: "POST",
		url: user_api,
		data: dataString,
		dataType: 'json',
		cache: false,
		success: function (info) {
			var login_check = info.check;
			if (login_check > 0) {
				var fetch = info.data;
				var result = info.result;
				var message = info.message;
				var no = 0;
				var text = '';

				text =
					'<tr class="tuple">' +
					'<td>SN</td>' +
					'<td>EXAM</td>' +
					'<td>SUBJECT</td>' +
					'<td>TOPIC</td>' +
					'<td>SUB-TOPIC</td>' +
					'<td>DATE</td>' +
					'<td>DUE DATE</td>' +
					'<td>STATUS</td>' +
					'<td>ACTION</td>' +
					'</tr>';

				if (result == true) {
					if (page == 'dashboard') {
						for (var i = 0; i < 5 && i < fetch.length; i++) {
							no++;

							var sub_topic_id = fetch[i].sub_topic_id;
							var abbreviation = fetch[i].abbreviation.toUpperCase();
							var exam_passport = fetch[i].exam_passport;
							var subject_name = fetch[i].subject_name.toUpperCase();
							var topic_name = fetch[i].topic_name.toUpperCase();
							var sub_topic_name = fetch[i].sub_topic_name.toUpperCase();
							var start_date = fetch[i].start_date;
							var due_date = fetch[i].due_date;
							var status_name = fetch[i].status_name.toUpperCase();
							var count_all = fetch[i].count_all;

							text +=
								'<tr>' +
								'<td>' + no + '</td>' +
								'<td class="logo-tb logo-tb2"><div class="logo-div"><img src="' + website_url + '/uploaded_files/exam_pix/' + exam_passport + '" alt="' + abbreviation + ' LOGO"/> </div><span id="">' + abbreviation + '</span>  </td>' +
								'<td>' + subject_name + '</td>' +
								'<td>' + topic_name + '</td>' +
								'<td>' + sub_topic_name + '</td>' +
								'<td>' + start_date + '</td>' +
								'<td>' + due_date + '</td>' +
								'<td><div class="status-div ' + status_name + '">' + status_name + '</div></td>' +
								'<td><button class="btn" onclick="_get_page_with_id(' + "'videos'" + "," + "'" + sub_topic_id + "'" + "," + "' '" + ');"><i class="bi bi-play"></i> PLAY</button></td>' +
								'</tr>';

						}
						$('#sub_count').html(no);
						$('#sub_total_count').html(count_all);
						$('#fetch_subcription_with_limit').html(text);

					} else if (page == 'subscription') {
						for (var i = 0; i < fetch.length; i++) {
							no++;
							var sub_topic_id = fetch[i].sub_topic_id;
							var abbreviation = fetch[i].abbreviation.toUpperCase();
							var exam_passport = fetch[i].exam_passport;
							var subject_name = fetch[i].subject_name.toUpperCase();
							var topic_name = fetch[i].topic_name.toUpperCase();
							var sub_topic_name = fetch[i].sub_topic_name.toUpperCase();
							var start_date = fetch[i].start_date;
							var due_date = fetch[i].due_date;
							var status_name = fetch[i].status_name.toUpperCase();
							var count_all = fetch[i].count_all;


							text +=
								'<tr>' +
								'<td>' + no + '</td>' +
								'<td class="logo-tb logo-tb2"><div class="logo-div"><img src="' + website_url + '/uploaded_files/exam_pix/' + exam_passport + '" alt="' + abbreviation + ' LOGO"/> </div><span id="">' + abbreviation + '</span>  </td>' +
								'<td>' + subject_name + '</td>' +
								'<td>' + topic_name + '</td>' +
								'<td>' + sub_topic_name + '</td>' +
								'<td>' + start_date + '</td>' +
								'<td>' + due_date + '</td>' +
								'<td><div class="status-div ' + status_name + '">' + status_name + '</div></td>' +
								'<td><button class="btn" onclick="_get_page_with_id(' + "'videos'" + "," + "'" + sub_topic_id + "'" + "," + "' '" + ');"><i class="bi bi-play"></i> PLAY</button></td>' +
								'</tr>';
						}
						$('#sub_count').html(no);
						$('#sub_total_count').html(count_all);
						$('#fetch_all_subscription_history').html(text);

					} else if (page == 'transaction_details') {
						//// EXAM SUBCRIPTION DETAILS
						var abbreviation = fetch.abbreviation.toUpperCase();
						var subject_name = fetch.subject_name.toUpperCase();
						var topic_name = fetch.topic_name.toUpperCase();
						var sub_topic_name = fetch.sub_topic_name.toUpperCase();
						var start_date = fetch.start_date;
						var due_date = fetch.due_date;
						var status_name = fetch.status_name.toUpperCase();

						$('#abbreviation').html(abbreviation);
						$('#subject_name').html(subject_name);
						$('#topic_name').html(topic_name);
						$('#sub_topic_name').html(sub_topic_name);
						$('#start_date').html(start_date);
						$('#due_date').html(due_date);
						$('#subcription_status_name').html(status_name);
						////////////////
					} else {
						/// do nothing
					}

				} else {
					$('#sub_count,#sub_total_count').html(no);
					text =
						'<div class="no-record-div pay-message">' +
						'<span >' + message + '</span>' +
						'</div>';
					$('#fetch_subcription_with_limit,#fetch_all_subscription_history').html(text);
				}
			} else {
				_get_form('access_key_validation_info');
			}
		}
	});
}





function _get_fetch_all_transaction(page, view_report, payment_id, datefrom, dateto) {
	var action = 'fetch_transaction_history_api';
	var dataString = 'action=' + action + '&view_report=' + view_report + '&payment_id=' + payment_id + '&datefrom=' + datefrom + '&dateto=' + dateto;
	$.ajax({
		type: "POST",
		url: user_api,
		data: dataString,
		dataType: 'json',
		cache: false,
		success: function (info) {
			var login_check = info.check;
			if (login_check > 0) {
				var fetch = info.data;
				var fetch2 = info.data2;
				var result = info.result;
				var message = info.message;
				var db_payment_status_id = info.db_payment_status_id;

				var no = 0;
				var text = '';

				text =
					'<tr class="tuple">' +
					'<td>SN</td>' +
					'<td>DATE</td>' +
					'<td>TRANSACTION ID</td>' +
					'<td>TRANSACTION TYPE</td>' +
					'<td>TRANSACTION METHOD</td>' +
					'<td>AMOUNT</td>' +
					'<td>STATUS</td>' +
					'<td>ACTION</td>' +
					'</tr>';

				if (result == true) {
					if (page == 'dashboard') {
						for (var i = 0; i < 5 && i < fetch.length; i++) {
							no++;

							var date = fetch[i].date;
							var payment_id = fetch[i].payment_id;

							var transaction_type_name = fetch[i].transaction_type_name;
							var fund_method_name = fetch[i].fund_method_name;
							var amount = fetch[i].amount;
							var status_name = fetch[i].status_name;
							var count_all = fetch[i].count_all;

							text +=
								'<tr>' +
								'<td>' + no + '</td>' +
								'<td>' + date + '</td>' +
								'<td>' + payment_id + '</td>' +
								'<td>' + transaction_type_name + '</td>' +
								'<td>' + fund_method_name + '</td>' +
								'<td><span>₦</span> ' + numberwithcomma(amount) + '</td>' +
								'<td><div class="status-div ' + status_name + '">' + status_name + '</div></td>' +
								'<td><button class="btn" onclick="_get_form_with_id(' + "'transaction_details'" + "," + "' '" + "," + "' '" + "," + "'" + payment_id + "'" + "," + "' '" + ');"><i class="bi bi-eye"></i> DETAILS</button></td>' +
								'</tr>';
						}
						$('#trans_count').html(no);
						$('#trans_total_count').html(count_all);
						$('#fetch_transaction_with_limit').html(text);

					} else if (page == 'transactions') {
						for (var i = 0; i < fetch.length; i++) {
							no++;

							var date = fetch[i].date;
							var payment_id = fetch[i].payment_id;
							var transaction_type_name = fetch[i].transaction_type_name;
							var fund_method_name = fetch[i].fund_method_name;
							var amount = fetch[i].amount;
							var status_name = fetch[i].status_name;
							var count_all = fetch[i].count_all;

							text +=
								'<tr>' +
								'<td>' + no + '</td>' +
								'<td>' + date + '</td>' +
								'<td>' + payment_id + '</td>' +
								'<td>' + transaction_type_name + '</td>' +
								'<td>' + fund_method_name + '</td>' +
								'<td><span>₦</span> ' + numberwithcomma(amount) + '</td>' +
								'<td><div class="status-div ' + status_name + '">' + status_name + '</div></td>' +
								'<td><button class="btn" onclick="_get_form_with_id(' + "'transaction_details'" + "," + "' '" + "," + "' '" + "," + "'" + payment_id + "'" + "," + "' '" + ');"><i class="bi bi-eye"></i> DETAILS</button></td>' +
								'</tr>';
						}

						$('#trans_count').html(no);
						$('#trans_total_count').html(count_all);
						$('#fetch_all_transaction_history').html(text);

					} else if (page == 'transaction_details') {
						//// TRANSACTION DETAILS
						var payment_id = fetch.payment_id;
						var payment_status_id = fetch.status_id;
						var transaction_type_name = fetch.transaction_type_name;
						var fund_method_name = fetch.fund_method_name;
						var amount = fetch.amount;
						var date = fetch.date;
						var payment_status_name = fetch.status_name;


						//// EXAM SUBCRIPTION DETAILS
						var abbreviation = fetch2.abbreviation.toUpperCase();
						var subject_name = fetch2.subject_name.toUpperCase();
						var topic_name = fetch2.topic_name.toUpperCase();
						var sub_topic_name = fetch2.sub_topic_name.toUpperCase();

						if (payment_status_id == db_payment_status_id) {
							var subscription = fetch2.subscription;

							if ((subscription == 'yes')) {
								var start_date = fetch2.start_date;
								var due_date = fetch2.due_date;
								var subscription_status_name = fetch2.status_name.toUpperCase();

								text = '<div class="alert alert-success">' +
									'<span>TRANSACTION DETAILS</span>' +
									'<div class="trans-statistics">Transaction ID: <div class="value" id="transaction_id">' + payment_id + '</div><br clear="all" /></div>' +
									'<div class="trans-statistics">Transaction Type: <div class="value" id="transaction_type">' + transaction_type_name + '</div><br clear="all" /></div>' +
									'<div class="trans-statistics">Transaction Method: <div class="value" id="transaction_method">' + fund_method_name + '</div><br clear="all" /></div>' +
									'<div class="trans-statistics">Amount: <div class="value" id="amount"> ' + amount + '</div><br clear="all" /></div>' +
									'<div class="trans-statistics">Date: <div class="value" id="date">' + date + '</div><br clear="all" /></div>' +
									'<div class="trans-statistics">Status: <div class="value" id="status">' + payment_status_name + '</div><br clear="all" /></div>' +
									'</div>' +



									'<div class="alert alert-success">' +
									'<span>EXAM SUBSCRIPTION DETAILS</span>' +
									'<div class="trans-statistics">Exam Name: <div class="value" id="view_abbreviation">' + abbreviation + '</div><br clear="all" /></div>' +
									'<div class="trans-statistics">Subject Name: <div class="value" id="view_subject_name">' + subject_name + '</div><br clear="all" /></div>' +
									'<div class="trans-statistics">Topic Name: <div class="value" id="view_topic_name">' + topic_name + '</div><br clear="all" /></div>' +
									'<div class="trans-statistics">Sub-Topic Name: <div class="value" id="view_sub_topic_name">' + sub_topic_name + '</div><br clear="all" /></div>' +
									'<div class="trans-statistics">Start Date: <div class="value" id="view_start_date"> ' + start_date + '</div><br clear="all" /></div>' +
									'<div class="trans-statistics">Due Date: <div class="value" id="view_due_date">' + due_date + '</div><br clear="all" /></div>' +
									'<div class="trans-statistics">Status: <div class="value" id="view_subcription_status_name">' + subscription_status_name + '</div><br clear="all" /></div>' +
									'</div>';

							} else {
								text = '<div class="alert">' +
									'<span>TRANSACTION DETAILS</span>' +
									'<div class="trans-statistics">Transaction ID: <div class="value text_details" id="transaction_id">' + payment_id + '</div><br clear="all" /></div>' +
									'<div class="trans-statistics">Transaction Type: <div class="value text_details" id="transaction_type">' + transaction_type_name + '</div><br clear="all" /></div>' +
									'<div class="trans-statistics">Transaction Method: <div class="value text_details" id="transaction_method">' + fund_method_name + '</div><br clear="all" /></div>' +
									'<div class="trans-statistics">Amount: <div class="value text_details" id="amount"> ' + amount + '</div><br clear="all" /></div>' +
									'<div class="trans-statistics">Date: <div class="value text_details" id="date">' + date + '</div><br clear="all" /></div>' +
									'<div class="trans-statistics">Status: <div class="value text_details" id="status">' + payment_status_name + '</div><br clear="all" /></div>' +
									'</div>' +

									'<div class="alert ">' +
									'<span>EXAM SUBSCRIPTION DETAILS</span>' +
									'<div class="trans-statistics">Exam Name: <div class="value text_details" id="view_abbreviation">' + abbreviation + '</div><br clear="all" /></div>' +
									'<div class="trans-statistics">Subject Name: <div class="value text_details" id="view_subject_name">' + subject_name + '</div><br clear="all" /></div>' +
									'<div class="trans-statistics">Topic Name: <div class="value text_details" id="view_topic_name">' + topic_name + '</div><br clear="all" /></div>' +
									'<div class="trans-statistics">Sub-Topic Name: <div class="value text_details" id="view_sub_topic_name">' + sub_topic_name + '</div><br clear="all" /></div>' +
									// '<div class="trans-statistics">Start Date: <div class="value" id="view_start_date"> '+start_date+'</div><br clear="all" /></div>'+
									// '<div class="trans-statistics">Due Date: <div class="value" id="view_due_date">'+due_date+'</div><br clear="all" /></div>'+
									// '<div class="trans-statistics">Status: <div class="value" id="view_subcription_status_name">'+subscription_status_name+'</div><br clear="all" /></div>'+
									'</div>';
							}
						} else {

							text = '<div class="alert">' +
								'<span>TRANSACTION DETAILS</span>' +
								'<div class="trans-statistics">Transaction ID: <div class="value text_details" id="transaction_id">' + payment_id + '</div><br clear="all" /></div>' +
								'<div class="trans-statistics">Transaction Type: <div class="value text_details" id="transaction_type">' + transaction_type_name + '</div><br clear="all" /></div>' +
								'<div class="trans-statistics">Transaction Method: <div class="value text_details" id="transaction_method">' + fund_method_name + '</div><br clear="all" /></div>' +
								'<div class="trans-statistics">Amount: <div class="value text_details" id="amount"> ' + amount + '</div><br clear="all" /></div>' +
								'<div class="trans-statistics">Date: <div class="value text_details" id="date">' + date + '</div><br clear="all" /></div>' +
								'<div class="trans-statistics">Status: <div class="value text_details" id="status">' + payment_status_name + '</div><br clear="all" /></div>' +
								'</div>' +

								'<div class="alert ">' +
								'<span>EXAM SUBSCRIPTION DETAILS</span>' +
								'<div class="trans-statistics">Exam Name: <div class="value text_details" id="view_abbreviation">' + abbreviation + '</div><br clear="all" /></div>' +
								'<div class="trans-statistics">Subject Name: <div class="value text_details" id="view_subject_name">' + subject_name + '</div><br clear="all" /></div>' +
								'<div class="trans-statistics">Topic Name: <div class="value text_details" id="view_topic_name">' + topic_name + '</div><br clear="all" /></div>' +
								'<div class="trans-statistics">Sub-Topic Name: <div class="value text_details" id="view_sub_topic_name">' + sub_topic_name + '</div><br clear="all" /></div>' +
								// '<div class="trans-statistics">Start Date: <div class="value" id="view_start_date"> '+start_date+'</div><br clear="all" /></div>'+
								// '<div class="trans-statistics">Due Date: <div class="value" id="view_due_date">'+due_date+'</div><br clear="all" /></div>'+
								// '<div class="trans-statistics">Status: <div class="value" id="view_subcription_status_name">'+subscription_status_name+'</div><br clear="all" /></div>'+
								'</div>';
						}

						$('#View_transaction_details').html(text);
						////////////////
					} else {
						/// do nothing
					}

				} else {
					$('#trans_count,#trans_total_count').html(no);
					text =
						'<div class="no-record-div pay-message">' +
						'<span >' + message + '</span>' +
						'</div>';
					$('#fetch_transaction_with_limit,#fetch_all_transaction_history').html(text);
				}
			} else {
				_get_form('access_key_validation_info');
			}
		}
	});
}







function _get_video_subcription_details(video_id) {

	var action = 'fetch_video_subcription';
	var dataString = "action=" + action + "&video_id=" + video_id;
	$.ajax({
		type: "POST",
		url: user_api,
		data: dataString,
		dataType: "json",
		cache: false,
		success: function (info) {
			var login_check = info.check;
			if (login_check > 0) {
				var fetch = info.data;
				var result = info.result;
				//	var message = info.message;
				//var text = '';
				if (result == true) {

					var video_title = fetch.video_title.toUpperCase();
					var video_volume_name = fetch.video_volume_name.toUpperCase();
					var subscription_pricing_name = fetch.subscription_pricing_name.toUpperCase();
					var video = fetch.video;
					var video_duration = fetch.video_duration;
					var video_objective = fetch.video_objective;
					var updated_time = fetch.updated_time;

					$("#video_title").html(video_title);
					$("title").text(video_title);
					$("#video_volume_name").html(video_volume_name);
					$("#subscription_pricing_name").html(subscription_pricing_name);
					_get_sub_video_view(video);
					$("#video_objective").html(video_objective);
					$("#video_duration").html(video_duration);
					$("#updated_time").html(updated_time);

				} else {

				}

			} else {
				_get_form('access_key_validation_info');
			}
		}

	});

}




function _get_sub_video_view(video) {
	var videoDisplay = document.getElementById('videoDisplay');
	// Set the source of the video element
	videoDisplay.src = website_url + "/uploaded_files/videos/" + video;
	// Show the video
	videoDisplay.style.display = 'block';
}



















// function _get_video_subcription_detailsaa(video_id) {

// 	var action = 'fetch_video_subcription';
// 	var dataString = "action=" + action + "&video_id=" + video_id;
// 	$.ajax({
// 		type: "POST",
// 		url: user_api,
// 		data: dataString,
// 		dataType: "json",
// 		cache: false,
// 		success: function (info) {
// 			var login_check = info.check;
// 			if (login_check > 0) {
// 				var fetch = info.data;
// 				var result = info.result;
// 				var message = info.message;

// 				var text = '';
// 				if (result == true) {
// 					for (var i = 0; i < fetch.length; i++) {
// 						var video_title = fetch[i].video_title.toUpperCase();
// 						var video_volume_name = fetch[i].video_volume_name.toUpperCase();
// 						var subscription_pricing_name = fetch[i].subscription_pricing_name.toUpperCase();
// 						var video = fetch[i].video;
// 						var video_duration = fetch[i].video_duration;
// 						var video_objective = fetch[i].video_objective;
// 						var updated_time = fetch[i].updated_time;

// 						text +=
// 							'<div class="video-div">' +
// 							'<video id="videoDisplay" controls="" muted="" loop="" class="video-slide">' +
// 							'<source  src="' + website_url + '/uploaded_files/videos/' + video + '" type="video/mp4" title="' + video_title + '">' +
// 							'</video>' +
// 							'</div>' +

// 							'<div class="video-details-div">' +
// 							'<div class="inner-topic-details-div">' +
// 							'<div class="icons-div">' +
// 							'<i class="bi-camera-reels"></i>' +
// 							'</div>' +

// 							'<div class="text-div">' +
// 							'Duration' +
// 							'<h3>' + video_duration + '</h3> ' +
// 							'</div> ' +
// 							'</div>' +

// 							'<div class="inner-topic-details-div">' +
// 							'<div class="icons-div">' +
// 							'<i class="bi-camera-video"></i>' +
// 							'</div>' +

// 							'<div class="text-div">' +
// 							'Volume' +
// 							'<h3>' + video_volume_name + '</h3>' +
// 							'</div>' +
// 							'</div>' +

// 							'<div class="inner-topic-details-div">' +
// 							'<div class="icons-div">' +
// 							'<i class="bi-credit-card"></i>' +
// 							'</div>' +

// 							'<div class="text-div">' +
// 							'Pricing' +
// 							'<h3>' + subscription_pricing_name + '</h3> ' +
// 							'</div>' +
// 							'</div>' +

// 							'<div class="inner-topic-details-div">' +
// 							'<div class="icons-div">' +
// 							'<i class="bi-clock-history"></i>' +
// 							'</div>' +

// 							'<div class="text-div">' +
// 							'Updated Time' +
// 							'<h3>' + updated_time + '</h3> ' +
// 							'</div>' +
// 							'</div>' +
// 							'</div>' +

// 							'<div class="detail-div">' +
// 							'<h2>' + video_title + '</h2>' +
// 							'<div>' + video_objective + '</div>' +
// 							'</div>';

// 					}

// 				} else {
// 					text =
// 						'<div class="no-record-div">' +
// 						'<span >' + message + '</span>' +
// 						'</div>';

// 				}
// 				$('#subcription_video_details').html(text);

// 			} else {
// 				_get_form('access_key_validation_info');
// 			}
// 		}

// 	});

// }


