$(document).on("submit", "#addBrandForm", function(e) {
    e.preventDefault();

    var formData = new FormData(this);

    swal({
        title: "Are you sure?",
        text: "Okay to add a  New Brand",
        type: "info",
        padding: 20,
        showCancelButton: true,
        confirmButtonText: 'Yes',
        cancelButtonText: 'No, cancel!',
        confirmButtonClass: 'btn btn-success',
        cancelButtonClass: 'btn btn-danger m-l-10',
        buttonsStyling: false
    }).then(willSave => {
        if (willSave) {
            $.ajax({
                type: "POST",
                dataType: "json",
                url: "php_action/create_brands.php?t=true",
                data: formData,
                success: function(result) {
                    //console.log(result);
                    if (result.status) {

                        swal({
                            title: 'Good job!',
                            padding: 20,
                            text: 'Good Job! A New Brand has been Created Successfully!',
                            type: 'success',

                        });

                        setTimeout(function() {
                            window.location.href = "brands.php";
                        }, 1000);
                    } else {
                        swal({
                            title: "Oops!",
                            padding: 20,
                            text: result.msg + "..please try again!",
                            type: "warning"
                        });
                    }
                },
                error: function(jqXHR) {
                    console.log(jqXHR);
                },
                cache: false,
                contentType: false,
                processData: false
            });
        }
    });
});



function deleteBrand(id) {
    var id = id;
    swal({
        title: "Are you sure?",
        text: "Okay to delete this Brand",
        type: "info",
        padding: 20,
        showCancelButton: true,
        confirmButtonText: 'Yes',
        cancelButtonText: 'No, cancel!',
        confirmButtonClass: 'btn btn-success',
        cancelButtonClass: 'btn btn-danger m-l-10',
        buttonsStyling: false
    }).then((willSave) => {
        if (willSave) {
            $.ajax({
                type: "GET",
                dataType: "json",
                url: 'php_action/create_brands.php?t=delete&id=' + id,

                success: function(result) {
                    console.log(result);
                    if (result.status) {


                        swal({
                            title: 'Good job!',
                            padding: 20,
                            text: ' While you wait a Brand has been deleted!!',
                            type: 'success',

                        });

                        setTimeout(function() {
                            window.location.reload();
                        }, 1000);
                    } else {
                        swal({
                            title: "Oops!",
                            padding: 20,
                            text: result.msg + "..please try again!",
                            type: "warning"
                        });
                    }
                },
                error: function(jqXHR) {
                    console.log(jqXHR);
                }
            })
        }
    });
};



function makeAvailable(id) {
    var id = id;
    swal({
        title: "Are you sure?",
        text: "Okay to Make this Available",
        type: "info",
        padding: 20,
        showCancelButton: true,
        confirmButtonText: 'Yes',
        cancelButtonText: 'No, cancel!',
        confirmButtonClass: 'btn btn-success',
        cancelButtonClass: 'btn btn-danger m-l-10',
        buttonsStyling: false
    }).then((willSave) => {
        if (willSave) {
            $.ajax({
                type: "GET",
                dataType: "json",
                url: 'php_action/create_brands.php?t=available&id=' + id,

                success: function(result) {
                    console.log(result);
                    if (result.status) {


                        swal({
                            title: 'Good job!',
                            padding: 20,
                            text: ' While you wait a Brand has been changed to Available!!',
                            type: 'success',

                        });

                        setTimeout(function() {
                            window.location.reload();
                        }, 1000);
                    } else {
                        swal({
                            title: "Oops!",
                            padding: 20,
                            text: result.msg + "..please try again!",
                            type: "warning"
                        });
                    }
                },
                error: function(jqXHR) {
                    console.log(jqXHR);
                }
            })
        }
    });
};



function notAvailable(id) {
    var id = id;
    swal({
        title: "Are you sure?",
        text: "Okay to Make this Unavailable",
        type: "info",
        padding: 20,
        showCancelButton: true,
        confirmButtonText: 'Yes',
        cancelButtonText: 'No, cancel!',
        confirmButtonClass: 'btn btn-success',
        cancelButtonClass: 'btn btn-danger m-l-10',
        buttonsStyling: false
    }).then((willSave) => {
        if (willSave) {
            $.ajax({
                type: "GET",
                dataType: "json",
                url: 'php_action/create_brands.php?t=notavailable&id=' + id,

                success: function(result) {
                    console.log(result);
                    if (result.status) {


                        swal({
                            title: 'Good job!',
                            padding: 20,
                            text: ' While you wait a Brand has been changed to Not Available!!',
                            type: 'success',

                        });

                        setTimeout(function() {
                            window.location.reload();
                        }, 1000);
                    } else {
                        swal({
                            title: "Oops!",
                            padding: 20,
                            text: result.msg + "..please try again!",
                            type: "warning"
                        });
                    }
                },
                error: function(jqXHR) {
                    console.log(jqXHR);
                }
            })
        }
    });
};