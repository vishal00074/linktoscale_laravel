$(document).ready(function(){
    // Initialize Swal
    const swalInit = Swal.mixin({
        buttonsStyling: false,
        confirmButtonClass: 'btn btn-success',
        cancelButtonClass: 'btn btn-danger',
    });
    
    $('body').on('click', '.delete-category', function () {
        var id = $(this).attr('data-id');
        swalInit.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            type: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Yes, delete it!',
            cancelButtonText: 'No, cancel!',
            confirmButtonClass: 'btn btn-success',
            cancelButtonClass: 'btn btn-danger',
            buttonsStyling: false
        }).then(function(result) {
            if(result.value) {
                $.ajax({
                    type:'Delete',
                    url:'/admin/category/delete/'+id,
                    headers: {'X-CSRFToken': csrfToken},
                    success: function (response) {
                        swalInit.fire(
                            'Deleted!',
                            'Your file has been deleted.',
                            'success'
                        )
                        .then((willDelete) => {
                            location.reload();
                        });
                    },
                    error: function (response) {
                        swalInit.fire(
                            'Error deleting!',
                            'Please try again!',
                            'error'
                        ).then((willDelete) => {
                            location.reload();
                        });
                    }
                });
            }
            else if (result.dismiss === swal.DismissReason.cancel) {
                swalInit.fire(
                    'Cancelled',
                    'Your imaginary file is safe.',
                    'error'
                );
            }
        });
    });
    
    
    
    
    jQuery.validator.addMethod("fileType", function(value, element, types) {
        if (element.files && element.files.length) {
            var extension = element.files[0].name.split('.').pop().toLowerCase();
            return types.split('|').indexOf(extension) !== -1;
        }
        return true;
    }, "Please upload image with a valid extension.");

    
    if ($(".addPropertyForm").length > 0) {
        $(".addPropertyForm").validate({
            rules: {
                name : "required",
                active : "required",
                image : {
                    required: true,
                    fileType: "jpg|jpeg|png|ico|bmp"
                }
            },
            messages: {
                name: "Name field is required.",
                active: "Status field is required.",
                image: {
                    required: "Please upload image."
                }
            },
            submitHandler: function(form) {
                form.submit();
            }
        });
    }
    
    if ($(".editpropertyform").length > 0) {
        $(".editpropertyform").validate({
            rules: {
                name : "required",
                active : "required",
                image : {
                    fileType: "jpg|jpeg|png|ico|bmp"
                }
            },
            messages: {
                name: "Name field is required.",
                active: "Status field is required."
            },
            submitHandler: function(form) {
                form.submit();
            }
        });
    }
});