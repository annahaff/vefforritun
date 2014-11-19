$(document).ready(function(){
	$('form').submit(function(e)
	{
		// kóði til að keyra þegar form submittað
		// this er formið, $(this) býr til jQuery hlut af forminu
		var form = $(this);
		$('div.resault').empty();
		e.preventDefault();
		//náum í gögn úr gagnagrunninum
		var request = $.ajax({
			'url': 'http://apis.is/concerts',
			'type': 'GET',
			'dataType': 'json',
			'success': function(response){
				console.log(response);
				//Ef engar niðurstöður fundust
				if(response.results.length === 0){
					$('div.resault').append("Engar niðurstöður fundust");
				//Hér setjum við niðurstöðurnar í htm-ið
				}else{
					for (var i = 0; i < response.results.length; i++) {
						var title = response.results[i].eventDateName;
						var info = response.results[i].name;
						var date = response.results[i].dateOfShow;
						var location = response.results[i].eventHallName;
						var img = response.results[i].imageSource;
						$('div.resault').append('<div class="hverogeinn" id='+i+'></div>');
						$('div#'+i).append('<img class="myndtonleikar" src="'+img+'" alt="Mynd" height="400" width="450">');
						$('div#'+i).append('<label class="lysing">Hvað er að gerast?</label><p>'+title+'</p>');
						$('div#'+i).append('<label class="lysing">Meira info: </label><p>'+info+'</p>');
						$('div#'+i).append('<label class="lysing">Hvenær? </label><p>'+date+'</p>');
						$('div#'+i).append('<label class="lysing">Hvar? </label><p>'+location+'</p>');
					};
				}
			}
		});
		//Ef error
		request.fail(function( jqXHR, textStatus ) {
  			$('div.resault').append("Request failed: " + textStatus);
		});
	});
});