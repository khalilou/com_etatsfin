window.addEvent('domready', function() {
	document.formvalidator.setHandler('entreprise',
		function (value) {
			regex=/^[^0-9]+$/;
			return regex.test(value);
	});
});
