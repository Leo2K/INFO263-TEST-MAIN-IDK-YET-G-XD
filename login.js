$( "form" ).submit(function( event ) {
    console.log( $( this ).serializeArray() );
    event.preventDefault();
});
$.post( "login.php", { username: "", password: "" } );



