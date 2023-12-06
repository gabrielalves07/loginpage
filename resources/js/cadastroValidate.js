$("#formcadastro").validate({
    rules: {
        name: {
            required: true,
            minlength: 2,
        },

        email: {
            required: true,
            email: true,
        },

        password: {
            required: true,
            minlength: 8,
        }
    },

    messages: {
        name: {
            required: "Preencha este campo.",
            minlength: jQuery.validator.format("este campo deve ter 2 ou mais caracteres."),
        },

        email:{
            required: "Preencha este campo.",
            email: "Preencha com um email válido."
        },

        password: {
            required: "Preencha este campo.",
            minlength: jQuery.validator.format("este campo deve ter 8 ou mais caracteres."),
        },
    },

    errorPlacement: (error, element) => {
        if (element.hasClass('form-control')) {
            error.insertAfter(element.parent());
        } else {
            error.insertAfter(element);
        }
    },

    submitHandler: function(form) {
        form.submit();
    }
});
