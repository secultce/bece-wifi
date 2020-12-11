function showPassword() {

    var key_attr = $('#key').attr('type');

    if(key_attr != 'text') {

        $('.checkbox').addClass('show');
        $('#key').attr('type', 'text');

    } else {

        $('.checkbox').removeClass('show');
        $('#key').attr('type', 'password');

    }

<<<<<<< HEAD
}
=======
}
>>>>>>> 4606fe4d4b1392a8b19bec3b35dad0604c56596e
