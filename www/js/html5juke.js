// var jsmediatags = window.jsmediatags;



for (var i = songs.length - 1; i >= 0; i--) {
	$('#playlist').append('<li class="track" data-url="'+songs[i]+'">'+songs[i]+'</li>');

	// console.log(songs[i]);
	// // From remote host
	// jsmediatags.read(songs[i], {
	//   onSuccess: function(tag) {
	//     console.log(tag);
	//   },
	//   onError: function(error) {
	//     console.log(error);
	//   }
	// });
}

//play a song
$('.track').click(function(){

		//play audio
        var audio = document.getElementById('audio');
        var source = document.getElementById('mp3Source');
        source.src = $(this).attr('data-url');
        audio.load(); //call this to just preload the audio without playing
        audio.play(); //call this to play the song right away
    
        //update UI
         $('.track').each(function(i, obj) {
   			 $(obj).removeClass('active');

		});
        $(this).addClass('active');

        $('#track-title').html($(this).attr('data-url'));



});