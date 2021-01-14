$(function() {
	'use strict'
	
	$('#wizard1').steps({
		headerTag: 'h3',
		bodyTag: 'section',
		autoFocus: true,
		titleTemplate: '<span class="number">#index#<\/span> <span class="title">#title#<\/span>',
		autoButtonsNextClass: 'btn btn-outline-primary float-right d-none',
		autoButtonsPrevClass: 'btn btn-secondary d-none',
		options:{
			autoButtonsNextClass: 'btn btn-primary float-right d-none',
		    autoButtonsPrevClass: 'btn btn-secondary d-none',
		}
	});
	
	$('#wizard3').steps({
		headerTag: 'h3',
		bodyTag: 'section',
		autoFocus: true,
		titleTemplate: '<span class="number">#index#<\/span> <span class="title">#title#<\/span>',
		stepsOrientation: 1
	});
	
	//accordion-wizard
	var options = {
		mode: 'wizard',
		autoButtonsNextClass: 'btn btn-primary float-right d-none',
		autoButtonsPrevClass: 'btn btn-secondary d-none',
		stepNumberClass: 'badge badge-primary mr-1',
		onSubmit: function() {
		  alert('Form submitted!');
		  return true;
		}
	}
	$( "#form" ).accWizard(options);
});