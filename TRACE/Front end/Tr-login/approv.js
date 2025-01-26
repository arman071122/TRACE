document.querySelector('#submit-btn').addEventListener('click', function () {
    var data = [];
    document.querySelectorAll('#app-drop').forEach(function (el) {
        var id = el.getAttribute('data-id');
        var approval = el.value;
        data.push({id: id, approval: approval});
    });
    var xhr = new XMLHttpRequest();
    xhr.open('POST', 'update.php');
    xhr.setRequestHeader('Content-Type', 'application/json');
    xhr.onload = function () {
        if (xhr.status === 200) {
            alert('Certificates updated');
        } else {
            alert('An error occurred');
        }
    };
    xhr.send(JSON.stringify(data));
});