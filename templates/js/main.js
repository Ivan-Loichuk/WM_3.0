
$(document).ready(function() {
    // Gallery
    $('i.glyphicon-thumbs-up, i.glyphicon-thumbs-down').click(function(){
        var $this = $(this),
        c = $this.data('count');
        if (!c) c = 0;
        c++;
        $this.data('count',c);
        $('#'+this.id+'-bs3').html(c);
    });
    $(document).delegate('*[data-toggle="lightbox"]', 'click', function(event) {
        event.preventDefault();
        $(this).ekkoLightbox();
    });


    // navigation on click
	$("#menu, .image-contact").on("click","a", function (event) {
		//We cancel the standard processing of the goods by reference
		event.preventDefault();

		//Take the side identifier from the href attribute
		var id  = $(this).attr('href'),

		//We find out the height of the top-up unit which is referred to anchor
			top = $(id).offset().top - 50;

		//Animate the transition to the distance - top for 1500 ms
		$('body, html').animate({scrollTop: top}, 600);
	});


       // slider 'carousel'
        $('#myCarousel').carousel({
                interval: 5000
        });

        //Handles the carousel thumbnails
        $('[id^=carousel-selector-]').click(function () {
        var id_selector = $(this).attr("id");
        try {
            var id = /-(\d+)$/.exec(id_selector)[1];
            console.log(id_selector, id);
            jQuery('#myCarousel').carousel(parseInt(id));
        } catch (e) {
            console.log('Regex failed!', e);
        }
    });
        // When the carousel slides, auto update the text
        $('#myCarousel').on('slid.bs.carousel', function (e) {
                 var id = $('.item.active').data('slide-number');
                $('#carousel-text').html($('#slide-content-'+id).html());
        });

/* add image modal window */
    $(".modal-trigger").click(function(e){
        e.preventDefault();
        dataModal = $(this).attr("data-modal");
        $("#" + dataModal).css({"display":"block"});
    });

    $(".close-modal, .modal-sandbox").click(function(){
        $(".modal").css({"display":"none"});
    });

/* add image form - save value  */
    var selCategory = sessionStorage.getItem("SelItem");
    if(selCategory != null){
       $('#img_category').val(selCategory);
    }
    var nameInput = sessionStorage.getItem("name");
    var altInput = sessionStorage.getItem("alt");
    var hover_box_info_input = sessionStorage.getItem("hover_box_info");

    $('#img_name').val(nameInput);
    $('#img_alt').val(altInput);
    $('#img_hover_box_info').val(hover_box_info_input);

    $('#img_category').change(function() {
        var selVal = $(this).val();
        sessionStorage.setItem("SelItem", selVal);
    });
    $('#img_name').change(function () {
        var selVal = $(this).val();
        sessionStorage.setItem("name", selVal);
    });
    $('#img_alt').change(function () {
        var selVal = $(this).val();
        sessionStorage.setItem("alt", selVal);
    });
    $('#img_hover_box_info').change(function () {
        var selVal = $(this).val();
        sessionStorage.setItem("hover_box_info", selVal);
    });

//Callback form
    /*
    klient validation
     */
   var valid = false;
    $('#name').on('input',function () {   /* name validation */
        if($('#name').val() == ""){
            $('#name').css ("border-color", "#f70515");
            valid = false;
        }
        else {
            $('#name').css ("border-color", "#6BB343");
            $('#err_name').html("");
            valid = true;
        }
    });
    $('#number').on('input', function () {  /* number validation */
        if(!($('#number').val().match('[0-9]{9,13}'))){
            $('#number').css ("border-color", "#f70515");
            valid = false;
        }
        else {
            $('#number').css ("border-color", "#6BB343");
            $('#err_number').html("");
            valid = true;
        }
    });
    $('#email').on('input', function () {   /* email validation */
        var regex = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        if(!($('#email').val().match(regex))){
            $('#email').css ("border-color", "#f70515");
            valid = false;
        }
        else {
            $('#email').css ("border-color", "#6BB343");
            $('#err_email').html("");
            valid = true;
        }
    });
    $('#message').on('input', function () {   /* message validation */
        if($('#message').val() == ""){
            $('#message').css ("border-color", "#f70515");
            valid = false;

        }
        else {
            $('#message').css ("border-color", "#6BB343");
            $('#err_message').html("");
            valid = true;

        }
        if(valid){
            $('#send_btn').removeAttr ("disabled");
        }
        else{
            $('#send_btn').attr ("disabled", "disabled");
        }

    });
    /*
    send to server
     */
    $('#send_btn').click(function () {
        var email = $('#email').val ();
        var name = $('#name').val ();
        var number = $('#number').val ();
        var message = $('#message').val ();
        $.ajax({
            url:    	'../actions/send_mail.php',
            type:		'POST',
            cache: 		false,
            data: {
                'name':name,
                'email':email,
                'number': number ,
                'message':message
            },
            dataType:	'html',
            beforeSend: function () {
                $('#send_btn').attr ("disabled", "disabled");
            },
            success: function(data) {
                if (data == "Повідомлення надіслано)<br>Ми з вами зв'жемося") {
                    $('#name').val ("");
                    $('#email').val ("");
                    $('#number').val("");
                    $('#message').val ("");
                    $('#success_msg').html(data);
                    $('#err_number, #err_message, #err_email').html("");
                    $('#email').css ("border-color", "#A5B3B1");
                    $('#number').css ("border-color", "#A5B3B1");
                    $('#name').css ("border-color", "#A5B3B1");
                    $('#message').css ("border-color", "#A5B3B1");
                    $('#send_btn').attr ("disabled", "disabled");
                } else {
                    if (data == false)
                        $('#err_message').html(data);
                    else {
                        switch (data) {
                            case "Ім'я не вказано":
                                $('#name').css ("border-color", "#f70515");
                                $('#err_name').html(data);
                                $('#err_number, #err_email, #err_message').html("");
                                break;
                            case "Не вказано номер телефону":
                                $('#number').css("border-color", "#f70515");
                                $('#err_number').html(data);
                                $('#err_name, #err_message,#err_email').html("");
                                break;
                            case "Не вірний номер телефону":
                                $('#number').css("border-color", "#f70515");
                                $('#err_number').html(data);
                                $('#err_name, #err_message,#err_email').html("");
                                break;
                            case "Введіть своє повідомлення":
                                $('#message').css ("border-color", "#f70515");
                                $('#err_message').html(data);
                                $('#err_name, #err_number,#err_email').html("");
                                break;
                            case "Не правильний емайл адрес":
                                $('#email').css ("border-color", "#f70515");
                                $('#err_email').html(data);
                                $('#err_name, #err_number,#err_message').html("");
                                break;
                            default:
                                $('#email').css ("border-color", "#f70515");
                                $('#number').css ("border-color", "#f70515");
                                $('#message').css ("border-color", "#f70515");
                                $('#name').css ("border-color", "#f70515");
                        }
                    }
                }
            }
        });
    });


    $("#login").click(function () {
        var login = $('#log_in').val ();
        var password = $('#password').val();
        $.ajax({
            url:    	'../actions/login.php',
            type:		'POST',
            cache: 		false,
            data: {
                'login' :login,
                'password':password
            },
            dataType:	'html',
            success: function(data) {
                if(data == 1){
                    $("#log").css('color', '#1DB30A');
                    $( "#log" ).html("Ви увійшли)");
                    window.location.href='../korpusni-mebli-na-zamowlenia/katalog';
                }
                else{
                    $("#log").css('color', '#f70515');
                    $( "#log" ).html(data);
                }
            }
        });
    });


    /** navbar active link */
    var pathname = window.location.pathname;
    $('.nav > li > a[href="..'+pathname+'"]').addClass('active');

});

// section <how to order>, mouse event
var thumbnail_mouse_over = function (atribute_name) {
        document.getElementById(atribute_name).style.backgroundColor = "#fff";
};
var thumbnail_mouse_out = function (atribute_name) {
    document.getElementById(atribute_name).style.backgroundColor = "rgba(255,255,255,0.5)";
};


$(document).on('click', '[data-toggle="lightbox"]', function(event) {
    event.preventDefault();
    $(this).ekkoLightbox();
});

/*
    get image from server to gallery
 */
function getContent(id){
    var tab_content = document.getElementById('tab-content');
    tab_content.innerHTML = '<div class="loading_gif"><img src="img/loading.gif" /> </div>';

    $.ajax({
        url: "../actions/get_img_gallery.php",
        data:'id='+id,
        type: "POST",
        success:function(data){

            if(data == 0){
                tab_content.innerHTML = "Галерея пуста!!  Вибачте за тимчасові незручності =)";
            }
            else {
                tab_content.innerHTML = data;
                initBoxModal();
            }
        }
    });
}
/*
     delete image from galery
 */
function delete_request(id){
    $.ajax({
        url: "?p=delete_image",
        data: 'id='+id,
        type: "POST",
        success: function (data) {
            if(data == 0){
                alert('Error SQL');
            }
            else{
                $('#img_'+data).remove();
                $('#del_'+data).remove();
                $('#openModal_'+data).remove();
            }
        }
    });
}
initBoxModal();

function initBoxModal(){
    /*
     * hover images box
     * */
    $(".img_link").each(function( index ) {
        var id = $(this)[0].id;
        $(this).hover(function () {
                openModalPopupWindow(id);
            },
            function() {
                closeModalPopupWindow(id);
            });
    });

    function openModalPopupWindow(id) {
        $( "#modal_box_"+id ).each(function( index ) {
            $(this).stop().hide().slideToggle( 500 );
        });
    }

    function closeModalPopupWindow(id) {
        $( "#modal_box_"+id ).each(function( index ) {
            $(this).stop().show().slideToggle( 500 );
        });     // Make the modal popup stuff invisible:
    }

}



