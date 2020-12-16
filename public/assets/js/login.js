function showPassword() {

    var key_attr = $('#password').attr('type');

    if(key_attr != 'text') {

        $('.checkbox').addClass('show');
        $('#password').attr('type', 'text');

    } else {

        $('.checkbox').removeClass('show');
        $('#password').attr('type', 'password');

    }

<<<<<<< HEAD
}
=======
}
>>>>>>> 4606fe4d4b1392a8b19bec3b35dad0604c56596e
