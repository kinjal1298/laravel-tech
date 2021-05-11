$(document).ready(function(){
	$('#registration').validate({
		rules: {
                firstname: "required",
                lastname: "required",
                email: {
                    required: true,
                    email: true,
					async: false,
                    remote: {
                    url: base_url+"/techrudite/email_verification",
                    type: "POST",
                    data: {
                         "_token": $('input[name="_token"]').val(),
                        email: function() {
                            return $( "#email" ).val();
                        },
                    }
                }
                },
                pwd: {required: true,minlength:8},
            },
            messages: {
                firstname: "Please enter first name",
                lastname: "Please enter last name",
                email: {
                    required: "Please enter email",
                    email: "Please enter proper email",
                    remote:"Email has been registered."
                },
                pwd: {
                    required: "Please enter password",
                    minlength:"At least 8 characters are required"
                },
            }
	})
    $('#login').validate({
        rules: {
                email: {
                    required: true,
                    email: true,
                    async: false,
                },
                password: {required: true,minlength:8},
            },
            messages: {
                email: {
                    required: "Please enter email",
                    email: "Please enter proper email",
                },
                password: {
                    required: "Please enter password",
                    minlength:"At least 8 characters are required"
                },
            }
    })
    $('#product_form').validate({
        rules: {
                category: {required: true},
                product_name: {required: true},
                price: {required: true},
            },
            messages: {
                category: {
                    required: "Please select category",
                },
                product_name: {
                    required: "Please enter product name",
                },
                price: {
                    required: "Please enter price",
                },
            }
    })
})
