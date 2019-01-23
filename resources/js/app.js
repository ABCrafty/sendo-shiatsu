require('bootstrap/dist/js/bootstrap.bundle.min');
window.$ = window.jQuery = require('jquery');

$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

/* GESTION DES PREVIEWS DANS LA PAGE D'ACCUEIL */

$('#shiatsu_image').on('change', function(e) {
    $('.preview-shiatsu').empty();
    const file = e.target.files[0];
    let reader = new FileReader();
    let url = '';
    reader.onload = (e) => {
        url = e.target.result;
        $('.preview-shiatsu').append(`<img src="${url}" />`)
    };
    reader.readAsDataURL(file);
});

$('#doin_image').on('change', function(e) {
    $('.preview-doin').empty();
    const file = e.target.files[0];
    let reader = new FileReader();
    let url = '';
    reader.onload = (e) => {
        url = e.target.result;
        $('.preview-doin').append(`<img src="${url}" />`)
    };
    reader.readAsDataURL(file);
});

/* GESTION DES MESSAGES */
let $id = 0;

$('.admin .messages table tbody tr td:not(:last-child)').on('click', function() {
    $id = $(this).parent().attr('data-id');
    $.post('/admin/message', {
        data: {id: $id}
    })
        .done(data => {
            const d = new Date(data.created_at);
            $('#showMessage span.message-email').empty().append(`<b>Expéditeur :</b> ${data.email}`);
            $('#showMessage span.message-sujet').empty().append(`<b>Sujet :</b> ${data.sujet}`);
            $('#showMessage span.message-date').empty().append(`<b>Le :</b> ${d.toLocaleDateString()}`);
            $('#showMessage .message-content').empty().append(data.message.replace(/\n/g,"<br />"));

            $(`tr[data-id='${$id}']`).removeClass('pending').addClass('read');

            $('#showMessage')
                .attr('data-id', $id)
                .modal()
        })
});

$('#showMessage .btn-danger').on('click', () => {
    $('#confirmDelete').modal();
});

$('#confirmDelete .btn-danger').on('click', () => {
    console.log('click');
   $.ajax({
       url: '/admin/message',
       type: 'DELETE',
       data: {id: $id}
   })
       .done(data => {
           if (data === 'ok') {
               $('#confirmDelete').modal('hide');
               $(`tr[data-id='${$id}']`).hide()
           }
       })
});

$('tr .btn-danger').on('click', function() {
    $id = $(this).parent().parent().attr('data-id');
    $('#confirmDelete').modal();
});

/* GESTION DES CITATIONS */

$('#new').submit(function(e) {
    e.preventDefault();

    $.post('/admin/temoignage', {
        title: document.getElementById('c_title').value,
        author: document.getElementById('c_author').value,
        content: document.getElementById('c_content').value
    })
        .done(function(data) {
            $('table.witness tbody').append(
                '<tr data-id="' + data.id +'">' +
                `<td>${data.title}</td>` +
                `<td>${data.content}</td>` +
                `<td>${data.created_at}</td>` +
                `<td>${data.created_at}</td>` +
                '<td>' +
                    '<button class="btn btn-warning"><i class="fas fa-edit"></i></button>' +
                    '<button class="btn btn-danger"><i class="fas fa-trash"></i></button>' +

                '</td>' +
                '</tr>'
            );

            $('#newCitation').modal('hide')
        })
});