

 $('#playlist').DataTable();

//play a song
$('body').on('click', '.track', function() {

	console.log('track');

		//play audio
        var audio = document.getElementById('audio');
        var source = document.getElementById('mp3Source');
        source.src = '/Shared/' + $(this).attr('data-url');
        audio.load(); //call this to just preload the audio without playing
        audio.play(); //call this to play the song right away
    
        //update UI
         $('.track').each(function(i, obj) {
   			 $(obj).removeClass('active');

		});
        $(this).addClass('active');

        $('#track-title').html($(this).attr('data-title'));



});