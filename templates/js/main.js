
$(document).ready(function() {

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



