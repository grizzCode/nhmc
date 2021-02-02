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
var screenSize = document.documentElement.clientWidth
var desktopNav = document.querySelector( '.nav-container' );
// var mobileNav = 
console.log(screenSize)
if(screenSize < 960) {
  desktopNav.classList.add('hidden')
}