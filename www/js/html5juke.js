$(document).ready(function(){
///init

    var current_track;

    $("#jquery_jplayer_1").jPlayer({
        ready: function () {
            $(this).jPlayer("setMedia", {
                title: "Welcome to the Pirate Box Player",
                m4a: "http://www.jplayer.org/audio/m4a/Miaow-07-Bubble.m4a",
                oga: "http://www.jplayer.org/audio/ogg/Miaow-07-Bubble.ogg"
            });
        },

        cssSelectorAncestor: "#jp_container_1",
        swfPath: "/js",
        supplied: "m4a, oga",
        useStateClassSkin: true,
        autoBlur: false,
        smoothPlayBar: true,
        keyEnabled: true,
        remainingDuration: true,
        toggleDuration: true,

    });

    $('#playlist').DataTable({
        "iDisplayLength": 10000,
        deferRender:    true,
        scrollY:        600,
        scrollCollapse: true,
        scroller:       true
    });

    $.each($(".track_row"), function(index, value){
        var num = index + 1;
        $(value).attr("id", num);
    });


    //////events

    $("#jquery_jplayer_1").bind($.jPlayer.event.ended + ".jPlayer", function() {

        var next_track = +current_track + 1;
        var track_element = $('#' + next_track);
        var filename = '/Shared/' + track_element.attr('data-url');

        var title = $('#' + next_track).attr('data-title');

        playTrack(filename, title, next_track);
    });

    $('body').on('click', '.track', function() {

        var filename = '/Shared/' + $(this).closest('tr').attr('data-url');
        var title = $(this).closest('tr').attr('data-title');
        var key = $(this).closest('tr').attr('id');

        playTrack(filename, title, key);

    });


    ////////functions

    function playTrack(filename, title, key) {
        $("#jquery_jplayer_1").jPlayer("setMedia", {
            title: title,
            m4a: filename
        }).jPlayer("play");;
        current_track = key;
        $.each($(".track_row"), function(index, value){
            $(value).css('color','black');
        });
        $('#' + key).css('color','#ad000b');
    }
});