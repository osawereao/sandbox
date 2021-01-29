// ajax snippet
$(document).ready(function() {
	$('form.edit-offer-form').ajaxForm({
		url: Wo_Ajax_Requests_File() + '?f=offer&s=edit_offer',
		beforeSend: function() {
			$('.edit-offer-form').find('.disable_btn').attr('disabled','disabled');
		},
		success: function(data) {
			if (data.status == 200) {
				$('.edit-offer-form').find('.app-general-alert').html("<div class='alert alert-success'><?php echo($wo['lang']['offer_successfully_edited']) ?></div>");
				$('.edit-offer-form').find('.alert-success').fadeIn(300);
				setTimeout(function (argument) {
					$('.edit-offer-form').find('.alert-success').fadeOut(300);
					window.location.reload(true);

				},3000);
			} else {
				$('.edit-offer-form').animate({
              scrollTop: $('html, body').offset().top //#DIV_ID is an example. Use the id of your destination on the page
            });
				$('.edit-offer-form').find('.app-general-alert').html('<div class="alert alert-danger">' + data.error + '</div>');
				$('.edit-offer-form').find('.alert-danger').fadeIn(300);
				setTimeout(function (argument) {
					$('.edit-offer-form').find('.alert-danger').fadeOut(300);

				},3000);
			}
			$('.edit-offer-form').find('.disable_btn').removeAttr("disabled");
		}
	});

});








































/* UTILITY FUNCTIONS */
function jsDelayAO(ms) {
	var timer = 0;
	return function(callback) {
		clearTimeout(timer);
		timer = setTimeout(callback, ms);
	};
};


function jsDisplayFormAO(formID, resultID) {
	var formID = '#' + formID;
	var resultID = '#' + resultID;
	var str = $(formID).serialize();
	$(resultID).text(str);
}



/* CUSTOM FUNCTIONS */
function jsShowReligionAO(religion) {
	jsHideReligionAO();
	if (religion == 'other') {
		$('#OtherReligionDiv').show();
	} else if (religion == 'muslim') {
		$('#MuslimReligionDiv').show();
	}
}


function jsHideReligionAO() {
	$('#OtherReligionDiv').hide();
	$('#MuslimReligionDiv').hide();
}


function jsUpdateReligionAO(formID, religionType) {
	// Attach a submit handler to the form
	$('#'+formID).submit(function(e) {

		// Prevent default (form submission)
		e.preventDefault();

		// Serialize the form data.
		var formData = $('#'+formID).serialize();


		//FOR OTHER RELIGION
		if (religionType == 'other') {

			// Submit the form using AJAX.
			$.ajax({
				type: 'POST',
				// url: $(form).attr('action'),
				url: 'ajax.php?update=religion&type=other',
				data: formData
			})

			.done(function(response) {
		    // Make sure that the formMessages div has the 'success' class.
		    // $(formMessages).removeClass('error');
		    // $(formMessages).addClass('success');

		    // Set the message text.
		    // $('#results').text(response);
		    // $('#results').append(response);
		    $('#results').html(response);

		    // Clear the form.
		    // $('#other_religion').val('');
		  })



			.fail(function(data) {
		    // Make sure that the formMessages div has the 'error' class.
		    // $(formMessages).removeClass('success');
		    // $(formMessages).addClass('error');

		    // Set the message text.
		    if (data.responseText !== '') {
		    	$('#results').text(data.responseText);
		    } else {
		    	$('#results').text('Oops! An error occured and your message could not be sent.');
		    }
		  });







        // jsDisplayFormAO(formID, 'results');
      }


    });
}