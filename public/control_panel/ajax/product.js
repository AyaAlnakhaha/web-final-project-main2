function addNew(url,obj) {
    // dd(999);
    $(obj).append('<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>');
    $(obj).attr('disabled',true);
    $.get(url,function (data) {
        $(obj).empty().text('add');
        $(obj).attr('disabled',false);
        Swal.fire({
            title: 'add new product',
            footer: '<button type="submit" form="form" class="btn btn-success" style="margin-left: auto;">Save</a>',
            html:data['view'],
            width:'80%',
            showCancelButton: false,
            showConfirmButton: false,
            // confirmButtonText: 'Add',
            showLoaderOnConfirm: false,
            didRender:function () {

            }
        }).then(
            function () {

            }
        );
    });
}
function update(url,obj) {
    $(obj).append('<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>');
    $(obj).attr('disabled',true);
    $.get(url,function (data) {
        $(obj).empty().append('Edit');
        $(obj).attr('disabled',false);
        console.log(data);
        Swal.fire({
            title: 'update lab',
            footer: '<button type="submit" form="form" class="btn btn-success" style="margin-left: auto;">Save</a>',
            html:data['view'],
            width:'80%',
            showCancelButton: false,
            showConfirmButton: false,
            // confirmButtonText: 'Add',
            showLoaderOnConfirm: false
        }).then(
            function () {

            }
        );
    });
}
function deleteItem(url) {

    Swal.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
    }).then(
        function(result){
            console.log(result);
            if (result.value){
                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                    },
                    url: url,
                    type: 'post',
                    data: {_method:'delete'},
                    success: function (result) {
                        Toast.fire({
                            icon: result.type,
                            title: result.msg
                        });
                        $('#dataTable').DataTable().ajax.reload();
                        // return result;
                    },
                    error: function (errors) {
                        Toast.fire({
                            icon: result.type,
                            title: 'some thing went wrong'
                        });
                    }

                });
            }
        });
}

function submitForm(event,obj){

    $('input').removeClass('is-invalid');
    $('.invalid-feedback').remove();
    // console.log($(obj).serializeArray());
    event.preventDefault(); // avoid to execute the actual submit of the form.
    $.ajax({
        url:$(obj).attr('action'),
        type:$(obj).attr('method'),
        data:$(obj).serialize(),
        success:function(result){
            Toast.fire({
                icon: result.type,
                title: result.msg
            });
            $('#dataTable').DataTable().ajax.reload();
        },
        error:function (errors) {
            const entries = Object.entries(errors.responseJSON.errors);
            console.log(entries);
            var errors_message = document.createElement('div');
            for(let x of entries){
                if(x[0].includes('.')){
                    var key = x[0].split('.');
                    errors_message = document.createElement('div');
                    errors_message.classList.add('invalid-feedback');
                    errors_message.classList.add('show');
                    document.querySelectorAll('input[name="' + key[0] + '[]"]')[key[1]].classList.add('is-invalid');
                    errors_message.innerHTML = x[1][0];
                    document.querySelectorAll('input[name="' + key[0] + '[]"]')[key[1]].parentElement.appendChild(errors_message);
                }else {
                    // console.log(document.querySelector('input[name="' + x[0] + '"]'));
                    if (document.querySelector('input[name="' + x[0] + '"]')) {
                        errors_message = document.createElement('div');
                        errors_message.classList.add('invalid-feedback');
                        errors_message.classList.add('show');
                        document.querySelector('input[name="' + x[0] + '"]').classList.add('is-invalid');
                        errors_message.innerHTML = x[1][0];
                        document.querySelector('input[name="' + x[0] + '"]').parentElement.appendChild(errors_message);
                    }
                }
            }
        }

    });
    return false;
}
