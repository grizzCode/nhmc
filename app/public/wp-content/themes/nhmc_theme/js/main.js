var wpcf7Elm = document.querySelector( '.wpcf7' );
var successMsg = document.querySelector('#success-message')

wpcf7Elm.addEventListener( 'wpcf7mailsent', function( event ) {
  wpcf7Elm.style.display = "none";
  successMsg.style.display = "block";

}, false );

wpcf7Elm.addEventListener( 'wpcf7invalid', function( event ) {
  alert( "Invalid" );
}, false );


// wpcf7invalid — Fires when an Ajax form submission has completed successfully, but mail hasn’t been sent because there are fields with invalid input.
// wpcf7spam — Fires when an Ajax form submission has completed successfully, but mail hasn’t been sent because a possible spam activity has been detected.
// wpcf7mailsent — Fires when an Ajax form submission has completed successfully, and mail has been sent.
// wpcf7mailfailed — Fires when an Ajax form submission has completed successfully, but it has failed in sending mail.