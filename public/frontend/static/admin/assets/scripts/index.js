$(document).ready(function(){
    $.validator.addMethod("greaterThanZero", function(value, element) {
    // Check if the value is empty or zero
    console.log("Value: " + value);
    if (value === "" || parseFloat(value) <= 0) {
        return false; // Value is empty or zero, validation fails
    } else {
        return true; // Value is greater than zero, validation passes
    }
}, "Value must be greater than 0");
    // Initialize Swal
    const swalInit = Swal.mixin({
        buttonsStyling: false,
        confirmButtonClass: 'btn btn-success',
        cancelButtonClass: 'btn btn-danger',
    });
    
    $('body').on('click', '.delete-index', function () {
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
                    url:'/admin/index/delete/'+id,
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

    
    if ($(".addIndexForm").length > 0) {
        $(".addIndexForm").validate({
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
    
    
    
    if ($(".editindexform").length > 0) {
        $(".editindexform").validate({
            rules: {
                exterior: {
                    required: true,
                    greaterThanZero: true
                },
                interior: {
                    required: true,
                    greaterThanZero: true
                },
                energy_efficiency: {
                    required: true,
                    greaterThanZero: true
                },
                environmental_impact: {
                    required: true,
                    greaterThanZero: true
                },
                riverside: {
                    required: true,
                    greaterThanZero: true
                },
                seaside: {
                    required: true,
                    greaterThanZero: true
                },
                bar: {
                    required: true,
                    greaterThanZero: true
                },
                convenience_store: {
                    required: true,
                    greaterThanZero: true
                },
                fire_station: {
                    required: true,
                    greaterThanZero: true
                },
                gym: {
                    required: true,
                    greaterThanZero: true
                },
                hospital: {
                    required: true,
                    greaterThanZero: true
                },
                nursery: {
                    required: true,
                    greaterThanZero: true
                },
                park: {
                    required: true,
                    greaterThanZero: true
                },
                petrol_station: {
                    required: true,
                    greaterThanZero: true
                },
                police_station: {
                    required: true,
                    greaterThanZero: true
                },
                restaurant: {
                    required: true,
                    greaterThanZero: true
                },
                school: {
                    required: true,
                    greaterThanZero: true
                },
                super_market: {
                    required: true,
                    greaterThanZero: true
                },
                sort: {
                    required: true,
                    greaterThanZero: true
                },
                floor_area: {
                    required: true,
                    greaterThanZero: true
                },
                site_area: {
                    required: true,
                    greaterThanZero: true
                },
                kitchen: {
                    required: true,
                    greaterThanZero: true
                },
                living_room: {
                    required: true,
                    greaterThanZero: true
                },
                bedroom1: {
                    required: true,
                    greaterThanZero: true
                },
                bedroom2: {
                    required: true,
                    greaterThanZero: true
                },
                bedroom3: {
                    required: true,
                    greaterThanZero: true
                },
                airport: {
                    required: true,
                    greaterThanZero: true
                },
                bus_stop: {
                    required: true,
                    greaterThanZero: true
                },
                train_station: {
                    required: true,
                    greaterThanZero: true
                },
                underground_station: {
                    required: true,
                    greaterThanZero: true
                },
            },
            messages: {
                exterior: {
                    required: "Please enter a exterior",
                },
                interior: {
                    required: "Please enter a interior",
                },
                energy_efficiency: {
                    required: "Please enter a energy efficiency",
                },
                environmental_impact: {
                    required: "Please enter a environmental impact",
                },
                riverside: {
                    required: "Please enter a riverside",
                },
                seaside: {
                    required: "Please enter a seaside",
                },
                bar: {
                    required: "Please enter a bar",
                },
                convenience_store: {
                    required: "Please enter a convenience store",
                },
                fire_station: {
                    required: "Please enter a fire station",
                },
                gym: {
                    required: "Please enter a gym",
                },
                hospital: {
                    required: "Please enter a hospital",
                },
                nursery: {
                    required: "Please enter a nursery",
                },
                park: {
                    required: "Please enter a park",
                },
                petrol_station: {
                    required: "Please enter a petrol station",
                },
                police_station: {
                    required: "Please enter a petrol station    ",
                },
                restaurant: {
                    required: "Please enter a restaurant",
                },
                school: {
                    required: "Please enter a school",
                },
                super_market: {
                    required: "Please enter a super market",
                },
                sort: {
                    required: "Please enter a sort",
                },
                floor_area: {
                    required: "Please enter a floor area",
                },
                site_area: {
                    required: "Please enter a site area",
                },
                kitchen: {
                    required: "Please enter a kitchen",
                },
                living_room: {
                    required: "Please enter a living room",
                },
                bedroom1: {
                    required: "Please enter a bedroom1",
                },
                bedroom2: {
                    required: "Please enter a bedroom2",
                },
                bedroom3: {
                    required: "Please enter a bedroom3",
                },
                airport: {
                    required: "Please enter a airport",
                },
                bus_stop: {
                    required: "Please enter a bus stop",
                },
                train_station: {
                    required: "Please enter a train station",
                },
                underground_station: {
                    required: "Please enter a underground station",
                },

            },
            submitHandler: function (form) {
                console.log("Validation successful!"),
                form.submit();
            }
        });
    }
});