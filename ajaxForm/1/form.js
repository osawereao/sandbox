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