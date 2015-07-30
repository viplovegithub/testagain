<form>
    <input type="file" id="file" name="file">
    <input  type="submit">
</form>
<!--<script type="text/javascript" src="http://ajax.googleapis.com/
ajax/libs/jquery/1.5/jquery.min.js"></script>-->
<script type="text/javascript" src="scripts/jquery.form.js"></script>
 
<script>
//
//$( 'form' ).submit(function ( e ) {
//    var data, xhr;
//
//    data = new FormData();
//    data.append( 'file', $( '#file' )[0].files[0] );
//
//    xhr = new XMLHttpRequest();
//
//    xhr.open( 'POST', 'cool.php', true );
//    xhr.onreadystatechange = function ( response ) {};
//    xhr.send( data );
//
//    e.preventDefault();
//});


 $( 'form' ).submit(function () {
//$('#myform').on('sumbit', function(){
    var form = $(this);
    var formdata = false;
    if (window.FormData){
        formdata = new FormData(form[0]);
    }

    var formAction = form.attr('action');
    $.ajax({
        url         : 'cool.php',
        data        : formdata ? formdata : form.serialize(),
        cache       : false,
        contentType : false,
        processData : false,
        type        : 'POST',
        success     : function(data, textStatus, jqXHR){
            // Callback code
        }
    });
});

</script>

