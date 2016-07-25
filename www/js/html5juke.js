

 $('#playlist').DataTable({
    "iDisplayLength": 10000,
    deferRender:    true,
    scrollY:        600,
    scrollCollapse: true,
    scroller:       true
  });

//play a song
$('body').on('click', '.track', function() {

	console.log('track');

		//play audio
        var audio = document.getElementById('audio');
        var source = document.getElementById('mp3Source');
        source.src = '/Shared/' + $(this).closest('tr').attr('data-url');
        audio.load(); //call this to just preload the audio without playing
        audio.play(); //call this to play the song right away
    
        //update UI
         $('.track').each(function(i, obj) {
   			 $(obj).removeClass('active');

		});
        $(this).closest('tr').addClass('active');

        $('#track-title').html($(this).closest('tr').attr('data-title'));



});