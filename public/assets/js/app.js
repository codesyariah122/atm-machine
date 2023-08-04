$(document).ready(function() {
	
	$('#atm-starting').on('click', '.start-atm', function(e) {
		e.preventDefault()
		loadingSetup()
		setTimeout(() => {
			$('#atm-starting').hide('slow').fadeOut(1000)
			$('#atm-showing').show('slow').fadeIn(1000)
		}, 1500)

	})
})