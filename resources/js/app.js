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

    const title = document.getElementById('c_title').value;
    const author = document.getElementById('c_author').value;
    const content = document.getElementById('c_content').value;

    if (title.length > 255 || author.length > 255 || content.length > 255) {

        $('#new .modal-body').prepend(
            '<div class="alert alert-danger"><strong>Attention : Les champs ne doivent pas contenir plus de 255 caractères</strong></div>'
        );

        if (title.length > 255) {
            document.getElementById('c_title').classList.add('is-invalid')
        }

        if (author.length > 255) {
            document.getElementById('c_author').classList.add('is-invalid')
        }

        if (content.length > 255) {
            document.getElementById('c_content').classList.add('is-invalid')
        }

        return false;
    }


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
                `<td>${data.author}</td>` +
                `<td>${data.created_at}</td>` +
                '<td>' +
                    '<button class="btn btn-warning"><i class="fas fa-edit"></i></button>' +
                    '<button class="btn btn-danger"><i class="fas fa-trash"></i></button>' +

                '</td>' +
                '</tr>'
            );

            $('#c_title').val('');
            $('#c_author').val('');
            $('#c_content').val('');

            $('#newCitation').modal('hide')
        })
});

$('.witness .btn-warning').on('click', function () {
    $id = $(this).parent().parent().attr('data-id');
    $.get(`/admin/temoignage/${$id}`)
        .done(function (data) {
            $('#e_title').val(data.title);
            $('#e_author').val(data.author);
            $('#e_content').val(data.content);

            $('#editCitation').modal()
        })
});

$('#edit').submit(function(e) {
    e.preventDefault();

    const title = document.getElementById('e_title').value;
    const author = document.getElementById('e_author').value;
    const content = document.getElementById('e_content').value;

    if (title.length > 255 || author.length > 255 || content.length > 255) {

        $('#new .modal-body').prepend(
            '<div class="alert alert-danger"><strong>Attention : Les champs ne doivent pas contenir plus de 255 caractères</strong></div>'
        );

        if (title.length > 255) {
            document.getElementById('e_title').classList.add('is-invalid')
        }

        if (author.length > 255) {
            document.getElementById('e_author').classList.add('is-invalid')
        }

        if (content.length > 255) {
            document.getElementById('e_content').classList.add('is-invalid')
        }

        return false;
    }


    $.post('/admin/temoignage/edit', {
        title: document.getElementById('e_title').value,
        author: document.getElementById('e_author').value,
        content: document.getElementById('e_content').value,
        id: $id
    })
        .done(function(data) {
            $('table.witness tbody tr[data-id='+ data.id +']').empty().append(
                `<td>${data.title}</td>` +
                `<td>${data.content}</td>` +
                `<td>${data.author}</td>` +
                `<td>${data.created_at}</td>` +
                '<button class="btn btn-warning"><i class="fas fa-edit"></i></button>' +
                '<button class="btn btn-danger"><i class="fas fa-trash"></i></button>' +

                '</td>'
            );

            $('#editCitation').modal('hide')
        })
});

$('.delete').on('click', function() {
    $id = $(this).parent().parent().attr('data-id');
    $('#deleteCitation').modal();
});

$('#deleteCitation .btn-danger').on('click', function () {
    $.ajax({
        url: '/admin/temoignage',
        type: 'DELETE',
        data: {id: $id}
    })
        .done(data => {
            if (data === 'ok') {
                $('#deleteCitation').modal('hide');
                $(`tr[data-id='${$id}']`).hide()
            }
        })
});

$('.add-tarif').on('click', function () {
    const $nb = $('.grid .row').length;
    $('.grid').append(
        '<div class="row">' +
            '<div class="form-group col-md-5">' +
                '<input type="text" name="price[' + $nb +'][name]" class="form-control" placeholder="ex: Tarif normal"/>' +
            '</div>' +
            '<div class="form-group col-md-5">' +
                '<div class="input-group">' +
                    '<input type="text" name="price[' + $nb +'][price]" class="form-control" placeholder="ex: 25.00"/>' +
                    '<div class="input-group-append">' +
                        '<span class="input-group-text" id="basic-addon1">€</span>' +
                    '</div>' +
                '</div>' +
            '</div>' +
            '<div class="col-md-1 rm-row">' +
                '<button type="button" class="btn btn-danger">&times;</button>' +
            '</div>' +
        '</div>'
    )
});

$('#toggleCenter').on('change', function() {
    const $checked =  $('input[name="center"]:checked').length;
    if ($checked === 1) {
        $('.custom-switch label').empty().append('Prestation en centre')
    } else {
        $('.custom-switch label').empty().append('Prestation à domicile')
    }
});

$('.card button.btn-warning').on('click', function () {
    const $id = $(this).closest('.card').attr('data-id');
    $.get('/admin/tarif/' + $id)
        .done(function(data) {
            console.log(data)
            $('#eTarifModal .modal-title').empty().append('Éditer "' + data.title + '"');
            $('#eTarifModal input[name="title"]').val(data.title);
            $('#eTarifModal input[name="id"]').val(data.id);
            if (data.center) {
                $('#eTarifModal input[name="center"]').prop('checked', true);
                $('#eTarifModal label[for="toggleCenter"]').empty().append('Prestation en centre')
            } else {
                $('#eTarifModal input[name="center"]').prop('checked', false);
                $('#eTarifModal label[for="toggleCenter"]').empty().append('Prestation à domicile')
            }
            
            const prices = JSON.parse(data.prices);
            const $grid = $('#eTarifModal .modal-body .grid');
            let index = 0;
            $grid.empty();
            $.each(prices, function(i, price){
                $grid.append(
                    '<div class="row">' +
                        '<div class="form-group col-md-5">' +
                            '<input type="text" name="price[' + index + '][name]" class="form-control" value="'+ price.name +'" placeholder="ex: Tarif normal" />' +
                        '</div>' +

                        '<div class="form-group col-md-5">' +
                            '<div class="input-group">' +
                                '<input type="text" name="price[' + index + '][price]" class="form-control" value="' + price.price + '" placeholder="ex: 25.00" />' +
                                '<div class="input-group-append">' +
                                    '<span class="input-group-text" id="basic-addon1">€</span>' +
                                '</div>' +
                            '</div>' +
                        '</div>' +
                        '<div class="col-md-1 rm-row">' +
                            '<button type="button" class="btn btn-danger">&times;</button>' +
                        '</div>' +
                    '</div>'
                );
                
                index++;
            });
            $grid.append(
                '<div class="row">' +
                    '<div class="form-group col-md-5">' +
                        '<input type="text" name="price[' + index + '][name]" class="form-control" placeholder="ex: Tarif normal" />' +
                    '</div>' +

                    '<div class="form-group col-md-5">' +
                        '<div class="input-group">' +
                            '<input type="text" name="price[' + index + '][price]" class="form-control" placeholder="ex: 25.00" />' +
                            '<div class="input-group-append">' +
                                '<span class="input-group-text" id="basic-addon1">€</span>' +
                            '</div>' +
                        '</div>' +
                    '</div>' +
                    '<div class="col-md-1 rm-row">' +
                        '<button type="button" class="btn btn-danger">&times;</button>' +
                    '</div>' +
                '</div>'
            )
        });

    $('#eTarifModal').modal()
});

$('.card button.btn-danger').on('click', function () {
    $id = $(this).closest('.card').attr('data-id');
    $('#dTarifModal').modal();
});

$('#dTarifModal .btn-danger').on('click', function () {
    $.ajax({
        method: 'DELETE',
        url: '/admin/tarif',
        data: {id: $id}
    })
    .done(function(data) {
        if (data === 'ok') {
            $('.card[data-id="' + $id + '"]').hide();
            $('#dTarifModal').modal('hide');
        }
    })
});

$(document.body).on('click', '#eTarifModal .rm-row .btn-danger', function(e) {
    e.preventDefault();
    $(this).closest('.row').remove();
});

$(document.body).on('click', '#cTarifModal .rm-row .btn-danger', function(e) {
    e.preventDefault();
    $(this).closest('.row').remove();
});

let scroll = {
    scrollTo : function (e) {
        let page = $(this).attr('href');
        if ($('div.prestation-page'+page).length) {
            e.preventDefault();
            let speed = 750;
            $('html, body').animate({scrollTop: $(page).offset().top}, speed);
        }
    }
}
// scrollTo is here to make a smooth scroll when we click the link on the prestations

$('.js-scrollTo').on('click', scroll.scrollTo);
