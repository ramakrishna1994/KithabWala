$(document).ready(function() {
    $('#list').click(function(event){event.preventDefault();$('#products .item').addClass('list-group-item');});
    $('#grid').click(function(event){event.preventDefault();$('#products .item').removeClass('list-group-item');
	$('#products.item').addClass('grid-group-item');});
	$('#list1').click(function(event){event.preventDefault();$('#products .item').addClass('list-group-item');});
    $('#grid1').click(function(event){event.preventDefault();$('#products .item').removeClass('list-group-item');
	$('#products.item').addClass('grid-group-item');});

    


})


$(document).ready(function(){
   $('div img').on('click',function(){
        var src = $(this).attr('src');
        var img = '<img src="' + src + '" class="img-responsive"/>';
        $('#myModal').modal();
        $('#myModal').on('shown.bs.modal', function(){
            $('#myModal .modal-body').html(img);
        });
        $('#myModal').on('hidden.bs.modal', function(){
            $('#myModal .modal-body').html('');
        });
   });
})