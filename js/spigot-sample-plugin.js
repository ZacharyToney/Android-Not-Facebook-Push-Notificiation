jQuery( document ).ready(function() {
	setTimeout(promptUser, 5000);
});

function promptUser(){
	 if( jQuery('#article').length )
		{
			const urlParams = new URLSearchParams(window.location.search);
			const sourceParam = urlParams.get('source');

		  jQuery( "#article" ).after( '<div id="casestudy"><b>'+sourceParam+'</b></div>' );
		}
}