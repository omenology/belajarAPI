tampilPewds()
tampilT()

function tampilPewds(){
	aja('PewDiePie','#pewds');
	setInterval(function(){
		subCount('PewDiePie','#pewds');
	},300)
}

function tampilT(){
	aja('tseries','#ts');
	setInterval(function(){
		subCount('tseries','#ts');
	},300)
}

function aja(forUsername,id){
	$.ajax({
		url : 'https://www.googleapis.com/youtube/v3/channels',
		type : 'get',
		dataType : 'json',
		data : {
			'key' : 'AIzaSyDabr1JkafbREUyo2DQvNpXHsnN6F0iDAA',
			'part' : 'snippet',
			'forUsername' : forUsername
		},
		success : function (result){
			$(id+' img').attr('src',result.items[0].snippet.thumbnails.high.url)
			$(id+' .card-body .card-title').html(result.items[0].snippet.title)
		}
	})
}

function subCount(forUsername,id){
	$.ajax({
		url : 'https://www.googleapis.com/youtube/v3/channels',
		type : 'get',
		dataType : 'json',
		data : {
			'key' : 'AIzaSyDabr1JkafbREUyo2DQvNpXHsnN6F0iDAA',
			'part' : 'statistics',
			'forUsername' : forUsername
		},
		success : function (result){
			console.log(result)
			console.log(result.items[0].statistics.subscriberCount)
			
			$(id+' .card-body .card-text').html('subscriberCount : '+result.items[0].statistics.subscriberCount)
		}
	})
}