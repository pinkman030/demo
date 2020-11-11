



$("#xeroxmen-form").on("submit",function(event){

alert("in");



$( "<div class='alert alert-success alert-dismissible fade d-none show' id='s-alert' role='alert'><strong></strong> <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button></>")
  .insertAfter( "h1" );

event.preventDefault();

if($("#email").val() !='' && $("#contact").val() !='')
{


alert("in");

var form_data=$(this).serialize();

$.ajax({
url:"insertXeroxmen.php",
method:"POST",
data:form_data,
success:function(data){

    $("#xeroxmen-form")[0].reset();
    $("#s-alert").removeClass("d-none");
    $("#s-alert > strong").html(data);







}


});

}
else
{
    alert("Both fields are required");
}

});


