/**
 * Created by Family on 15.02.14.
 */
$(document).ready(function(){
    var $text = $("#text");
    var $updateButton = $("#update");
    var $container = $(".mdl-menu__container");
    $updateButton.on('click', send);
    $( "body,#update,#text" ).keypress(function( event ) {
        if ( event.which == 13 ) {
            send();			
        }
    });
    if($text.val()){
        send();
    }
    $text.on('change keyup', function () {
        var query = $(this).val();
        $.ajax({
            url: '/predict.php',
            data: {q: query},
            success: function (msg) {
                var words = JSON.parse(msg);
                var listElement = $(".predict-menu");
                listElement.find("li").remove();
                if($container.hasClass('is-visible')){
                    $("#demo-menu-lower-left").click();
                }
                for(var i in words){
                    if(words.hasOwnProperty(i)){
                        var word = words[i];
                        var $liElement = $("<li>").addClass('mdl-menu__item liElement').text(word);
                        listElement.append($liElement[0]);
                    }
                }
                if(!$(".mdl-menu__container").hasClass('is-visible') && words.length > 0){
                    $("#demo-menu-lower-left").click();
                }
                $(".liElement").off().on('click', function () {
                    $text.val($(this).text());
                    $updateButton.click();
                });
            }
        });
    });

    $('.table').tablesorter();
});
function send(){
    var sort = 0;
	var parsePages = 0;
    var text = $("#text").val();
    var params = '';
    if($('#lower_first').prop('checked')){
        sort = 1;
        params += "&sort=1";
    }
    if($('#parsePages').prop('checked')){
        parsePages = 1;
        params += "&parsePages=1";
    }
    history.pushState({}, 'Парсер Plati.ru', '/?q=' + text + params);
    $("#p2").show();
    $.ajax({
        url: 'update.php',
        data: {q: text, sort: sort, parsePages: parsePages},
        success: function(response){
            $('#wrapper').html(response);
            $("#table").tablesorter();
			goToByScroll("wrapper");
            $("#p2").hide();
        }
    });
    if($(".mdl-menu__container").hasClass('is-visible')){
        $("#demo-menu-lower-left").click();
    }
}
function goToByScroll(id){
      // Scroll
    $('html,body').animate({
        scrollTop: $("#"+id).offset().top},
        'slow');
}