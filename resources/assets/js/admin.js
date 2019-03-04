
window.onload = function() {
    let image = document.getElementById('thumnailImage');
    let changes = document.getElementById('thumnailEdit');
    let hiddenImage= document.getElementById('image');
    const token= document.querySelector('meta[name="csrf-token"]').content;
    changes.addEventListener("change",function (e) {
        //ajax запрос
        e.preventDefault();
        let data= new FormData();
       data.append('image',changes.files[0]);
        data.append('bob','fuck');
        fetch('/admin/ajax-image',{
            method: "POST",
            headers: {
                'X-CSRF-Token': token
                //"Content-type": "application/x-www-form-urlencoded; charset=UTF-8"
               // "Content-type": "multipart/form-data; boundary=something"
            },
            body: data
        })
            .then(function (response) {
                // alert(response.status); // 200
                //
                return response.json();
            })
            .then(function (data) {
                console.log(data.path);
                image.setAttribute('src','/storage/' + data.path);
                hiddenImage.setAttribute('value', data.path)
            })
            .catch(function(error){
              //  alert('no good');
            })
    })
};

