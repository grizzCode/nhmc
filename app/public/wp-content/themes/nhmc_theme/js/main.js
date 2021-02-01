// Contact Form Handlers 
var wpcf7Elm = document.querySelector( '.wpcf7' );
var successMsg = document.querySelector('#success-message')

wpcf7Elm.addEventListener( 'wpcf7mailsent', function( event ) {
  wpcf7Elm.style.display = "none";
  successMsg.style.display = "block";
}, false );

wpcf7Elm.addEventListener( 'wpcf7invalid', function( event ) {
  alert( "Invalid Input" );
}, false );

wpcf7Elm.addEventListener( 'wpcf7mailfailed ', function( event ) {
  alert( "Error: Message Not Sent" );
}, false );

// Navigation Mobile Handlers
var screen_size = document.documentElement.clientWidth
var desktop_nav = document.querySelector( '.nav-container' );
var mobile_nav = 
console.log(screen_size)
if(screen_size < 960) {
  desktop_nav.classList.add('hidden')
}