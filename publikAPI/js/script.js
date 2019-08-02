$('#btn-cari').on('click',function(){
	tampilHasil();
})

$('#input-cari').on('keyup',function(e){
	if(e.which == 13){
		tampilHasil();
	}
})

$('#menu').on('click','.btn-detail',function(){
	console.log($(this).data('id'))
	let id = $(this).data('id');
	$.ajax({
		url : 'http://www.omdbapi.com',
		type : 'get',
		dataType : 'json',
		data : {
			'apikey' : '5cda3736',
			'i' : id
		},
		success : function(result){
			$('#exampleModalLabel').html(result.Title)
		}
	})
})

function tampilHasil(){
	$.ajax({
		url : 'http://www.omdbapi.com',
		type : 'get',
		dataType : 'json',
		data : {
			'apikey' : '5cda3736',
			's' : $('#input-cari').val()
		},
		success : function(result){
			console.log(result)
			$('#menu').html('')
			if(result.Response == 'True'){
				$.each(result.Search,function(i,data){
					$('#menu').append(`
						<div class="col-4">
							<div class="card mb-3">
								<img src="`+data.Poster+`" class="card-img-top">
								<div class="card-body">
									<h5 class="card-title">`+data.Title+`</h5>
									<p class="card-text">`+data.Year+`</p>
									<a href="#" class="btn btn-primary btn-detail" data-id="`+data.imdbID+`" data-toggle="modal" data-target="#exampleModal">Detail</a>
								</div>
							</div>
						</div>
					`)
				})
			}else{
				$('#menu').html(result.Error);
			}
		} 
	})
}