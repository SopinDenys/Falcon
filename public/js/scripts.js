$(document).ready(function() {
    $('.popup').magnificPopup({
        items: {
            src: $('#form_login'),
            type:'inline',
        },
    });
});

$("#form_login").submit(function (e){
    $.ajax({
        type: "POST",
        url : "{{ route('login') }}",
        data: $(this).serialize()
    }).done(function (){
        alert('удачный вход в учетку')
        setTimeout(function (){
            $.magnificPopup.close();
        },500);
    });
    return false;
});



