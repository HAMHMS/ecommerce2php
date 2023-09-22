
$('.modalbtn').click(function(){

	$(this).parent().prev().text('read');

	// read id

	let id = $(this).attr('data-id');

	// update view in the database
	let url = "functions/updateMessage.php";

	let data = { id }

	$.post(url , data , function(res){
		console.log(res);
	})

})

$("#addForm").submit(function(e) {

  e.preventDefault();

var formData = new formData(this);

  $.ajax({
    type: "POST",
    url: "functions/insert_message.php",
    data: formData,
    contentType: false,
    processData: false,
    success: (res) {
      console.log(res);
      $('#addModal').modal('hide');
}
error(err){

}      
});
});  