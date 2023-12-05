const btnParaCadastro = document.querySelector('.paracadastro');
const btnParaLogin = document.querySelector('.paralogin');

const campoLogin = document.querySelector('.campologin');
const campoCadastro = document.querySelector('.campocadastro');

btnParaCadastro.addEventListener('click', (e) => {
    e.preventDefault();
    campoLogin.style.display = 'none';
    campoCadastro.style.display = 'flex';
    $('#formlogin').validate().resetForm();
    const imputs = document.querySelectorAll('.form-control');
    imputs.forEach((element) => {
        element.value = '';
    });
});

btnParaLogin.addEventListener('click', (e) => {
    e.preventDefault();
    campoCadastro.style.display = 'none';
    campoLogin.style.display = 'flex';
    $('#formcadastro').validate().resetForm();
});


// validação da página de login

$("#formlogin").validate({
    rules: {
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

// validação da página de cadastro

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
