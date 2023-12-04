$("#formlogin").validate({
    rules: {
        passLogin: {
            minlength: 8,
        }
    },

    messages: {
        required: "Preencha este campo.",
        minlength: jQuery.validator.format("este campo deve ter 8 os mais caracteres"),
    },

    submitHandler: function(form) {
      form.submit();
    }
});
