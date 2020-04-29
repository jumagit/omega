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


//clients  


$(document).on("submit", "#addClientForm", function(e) {
    e.preventDefault();

    var formData = new FormData(this);

    swal({
        title: "Are you sure?",
        text: "Okay to add a  New Client",
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
                url: "php_action/create_clients.php?t=true",
                data: formData,
                success: function(result) {
                    //console.log(result);
                    if (result.status) {

                        swal({
                            title: 'Good job!',
                            padding: 20,
                            text: 'Good Job! A New client has been Created Successfully!',
                            type: 'success',

                        });

                        setTimeout(function() {
                            window.location.href = "clients.php";
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


function deleteClient(id) {
    var id = id;
    swal({
        title: "Are you sure?",
        text: "Okay to delete this Client",
        type: "info",
        padding: 20,
        showCancelButton: true,
        confirmButtonText: 'Yes',
        cancelButtonText: 'No',
        confirmButtonClass: 'btn btn-success',
        cancelButtonClass: 'btn btn-danger m-l-10',
        buttonsStyling: false
    }).then((willSave) => {
        if (willSave) {
            $.ajax({
                type: "GET",
                dataType: "json",
                url: 'php_action/create_clients.php?t=delete&id=' + id,

                success: function(result) {
                    console.log(result);
                    if (result.status) {


                        swal({
                            title: 'Good job!',
                            padding: 20,
                            text: ' While you wait a Client has been deleted!!',
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




$(document).on("submit", "#submitProductForm", function(e) {
    e.preventDefault();

    var formData = new FormData(this);

    swal({
        title: "Are you sure?",
        text: "Okay to add a  New Product",
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
                url: "php_action/create_products.php?t=true",
                data: formData,
                success: function(result) {
                    //console.log(result);
                    if (result.status) {

                        swal({
                            title: 'Good job!',
                            padding: 20,
                            text: 'Good Job! A New Product has been Created Successfully!',
                            type: 'success',

                        });

                        setTimeout(function() {
                            window.location.href = "products.php";
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


function deleteProduct(id) {
    var id = id;
    swal({
        title: "Are you sure?",
        text: "Okay to delete this Product",
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
                url: 'php_action/create_products.php?t=delete&id=' + id,

                success: function(result) {
                    console.log(result);
                    if (result.status) {


                        swal({
                            title: 'Good job!',
                            padding: 20,
                            text: ' While you wait a Product has been deleted!!',
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



function pMakeAvailable(id) {
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
                url: 'php_action/create_products.php?t=available&id=' + id,

                success: function(result) {
                    console.log(result);
                    if (result.status) {


                        swal({
                            title: 'Good job!',
                            padding: 20,
                            text: ' While you wait a Product has been changed to Available!!',
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



function pNotAvailable(id) {
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
                url: 'php_action/create_products.php?t=notavailable&id=' + id,

                success: function(result) {
                    console.log(result);
                    if (result.status) {


                        swal({
                            title: 'Good job!',
                            padding: 20,
                            text: ' While you wait a Product has been changed to Not Available!!',
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

//user section


//changing username


$(document).on("submit", "#changeUsername", function(e) {
    e.preventDefault();

    var formData = new FormData(this);

    swal({
        title: "Are you sure?",
        text: "Okay to change Username",
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
                url: "php_action/change_username.php?t=true",
                data: formData,
                success: function(result) {
                    //console.log(result);
                    if (result.status) {

                        swal({
                            title: 'Good job!',
                            padding: 20,
                            text: 'Good Job! Username Changed Successfully!',
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
                },
                cache: false,
                contentType: false,
                processData: false
            });
        }
    });
});

//change password


$(document).on("submit", "#changePassword", function(e) {
    e.preventDefault();

    var formData = new FormData(this);

    swal({
        title: "Are you sure?",
        text: "Okay to change Your Password",
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
                url: "php_action/change_password.php?t=true",
                data: formData,
                success: function(result) {
                    //console.log(result);
                    if (result.status) {

                        swal({
                            title: 'Good job!',
                            padding: 20,
                            text: 'Good Job! Password Changed Successfully!',
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
                },
                cache: false,
                contentType: false,
                processData: false
            });
        }
    });
});