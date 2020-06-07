    
     function sendMail(orderId) {

          var orderId = orderId;

          $.ajax({
               type: "POST",
               url: "php_action/send_email.php?t=true&id=" + orderId,
               data: { orderId: orderId },
               dataType: "json",
               success: function(result) {

                    if (result.status) {
                         swal({
                              title: "Good job!",
                              padding: 20,
                              text: "Good Job! Email Sent Successfully!",
                              type: "success"
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

               }
          });
     }

   
    

     


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
               confirmButtonText: "Yes",
               cancelButtonText: "No, cancel!",
               confirmButtonClass: "btn btn-success",
               cancelButtonClass: "btn btn-danger m-l-10",
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
                                        title: "Good job!",
                                        padding: 20,
                                        text: "Good Job! A New client has been Created Successfully!",
                                        type: "success"
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
               confirmButtonText: "Yes",
               cancelButtonText: "No",
               confirmButtonClass: "btn btn-success",
               cancelButtonClass: "btn btn-danger m-l-10",
               buttonsStyling: false
          }).then(willSave => {
               if (willSave) {
                    $.ajax({
                         type: "GET",
                         dataType: "json",
                         url: "php_action/create_clients.php?t=delete&id=" + id,

                         success: function(result) {
                              console.log(result);
                              if (result.status) {
                                   swal({
                                        title: "Good job!",
                                        padding: 20,
                                        text: " While you wait a Client has been deleted!!",
                                        type: "success"
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
                    });
               }
          });
     }

  

     

     
     
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
               confirmButtonText: "Yes",
               cancelButtonText: "No, cancel!",
               confirmButtonClass: "btn btn-success",
               cancelButtonClass: "btn btn-danger m-l-10",
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
                                        title: "Good job!",
                                        padding: 20,
                                        text: "Good Job! Username Changed Successfully!",
                                        type: "success"
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
               confirmButtonText: "Yes",
               cancelButtonText: "No, cancel!",
               confirmButtonClass: "btn btn-success",
               cancelButtonClass: "btn btn-danger m-l-10",
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
                                        title: "Good job!",
                                        padding: 20,
                                        text: "Good Job! Password Changed Successfully!",
                                        type: "success"
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

     //addUserForm

     $(document).on("submit", "#addUserForm", function(e) {
          e.preventDefault();

          var formData = new FormData(this);

          swal({
               title: "Are you sure?",
               text: "Okay to add a  New User",
               type: "info",
               padding: 20,
               showCancelButton: true,
               confirmButtonText: "Yes",
               cancelButtonText: "No, cancel!",
               confirmButtonClass: "btn btn-success",
               cancelButtonClass: "btn btn-danger m-l-10",
               buttonsStyling: false
          }).then(willSave => {
               if (willSave) {
                    $.ajax({
                         type: "POST",
                         dataType: "json",
                         url: "php_action/create_users.php?t=true",
                         data: formData,
                         success: function(result) {
                              //console.log(result);
                              if (result.status) {
                                   swal({
                                        title: "Good job!",
                                        padding: 20,
                                        text: "Good Job! A New User has been Created Successfully!",
                                        type: "success"
                                   });

                                   setTimeout(function() {
                                        window.location.href = "users.php";
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

     //make admin

     function makeAdmin(id) {
          var id = id;
          swal({
               title: "Are you sure?",
               text: "Okay to Make this User Admin",
               type: "info",
               padding: 20,
               showCancelButton: true,
               confirmButtonText: "Yes",
               cancelButtonText: "No, cancel!",
               confirmButtonClass: "btn btn-success",
               cancelButtonClass: "btn btn-danger m-l-10",
               buttonsStyling: false
          }).then(willSave => {
               if (willSave) {
                    $.ajax({
                         type: "GET",
                         dataType: "json",
                         url: "php_action/create_users.php?t=admin&id=" + id,

                         success: function(result) {
                              console.log(result);
                              if (result.status) {
                                   swal({
                                        title: "Good job!",
                                        padding: 20,
                                        text: " While you wait, a User has been changed to Administrator!!",
                                        type: "success"
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
                    });
               }
          });
     }

     //revoke admin

     function revokeAdmin(id) {
          var id = id;
          swal({
               title: "Are you sure?",
               text: "Okay to Revoke Administration Access!",
               type: "info",
               padding: 20,
               showCancelButton: true,
               confirmButtonText: "Yes",
               cancelButtonText: "No, cancel!",
               confirmButtonClass: "btn btn-success",
               cancelButtonClass: "btn btn-danger m-l-10",
               buttonsStyling: false
          }).then(willSave => {
               if (willSave) {
                    $.ajax({
                         type: "GET",
                         dataType: "json",
                         url: "php_action/create_users.php?t=notadmin&id=" + id,

                         success: function(result) {
                              console.log(result);
                              if (result.status) {
                                   swal({
                                        title: "Good job!",
                                        padding: 20,
                                        text: " While you wait, Administration Previlages have been removed Successifully!!",
                                        type: "success"
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
                    });
               }
          });
     }

     //deactivate account

     function deactivateAccount(id) {
          var id = id;
          swal({
               title: "Are you sure?",
               text: "Okay to Deactivate Account!",
               type: "info",
               padding: 20,
               showCancelButton: true,
               confirmButtonText: "Yes",
               cancelButtonText: "No, cancel!",
               confirmButtonClass: "btn btn-success",
               cancelButtonClass: "btn btn-danger m-l-10",
               buttonsStyling: false
          }).then(willSave => {
               if (willSave) {
                    $.ajax({
                         type: "GET",
                         dataType: "json",
                         url: "php_action/create_users.php?t=deactivateAccount&id=" + id,

                         success: function(result) {
                              console.log(result);
                              if (result.status) {
                                   swal({
                                        title: "Good job!",
                                        padding: 20,
                                        text: " While you wait, Administration Previlages have been removed Successifully!!",
                                        type: "success"
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
                    });
               }
          });
     }



   

     
     //remove order

     $("#orderDate").datepicker();
     $("#end_date").datepicker();
     $("#start_date").datepicker();

     