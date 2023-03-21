window.addEventListener('load', () => {
    const username = document.getElementById('username');
    const password = document.getElementById('password');
        $.post('../src/model/login.php', {
            idUsername: username.value,
            idPassword: password.value
        }).done((data) => {
            JSON.parse(data)((e) => {
            if (username.value == false, password.value == false) {
                    $('#exampleModal').modal('show')
                } else {
                    $('#exampleModal').modal('hide')
                }
            });
        });
    });