/**
 * Created by Family on 15.02.14.
 */
$(document).ready(function(){
    $('#update').on('click',function(){
        send();
    });
    $( "body,#update,#text" ).keypress(function( event ) {
        if ( event.which == 13 ) {
            send();			
        }
    });
    if($("#text").val()){
        send();
    }

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
    console.log('/update.php?q=' + text + params);
    $.ajax({
        url: 'update.php',
        data: {q: text, sort: sort, parsePages: parsePages},
        success: function(response){
            $('#wrapper').html(response);
            $("#table").tablesorter();
			goToByScroll("wrapper");
        }
    });	
}
function goToByScroll(id){
      // Scroll
    $('html,body').animate({
        scrollTop: $("#"+id).offset().top},
        'slow');
}