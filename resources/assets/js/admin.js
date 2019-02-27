
/*document.getElementById('thumnailEdit').onchange(function (e) {
    //e.preventDefault();
    //alert(document.getElementById('thumnailImage').getAttribute('src'));
});
*/
window.onload = function() {
    let image = document.getElementById('thumnailImage');
    let changes = document.getElementById('thumnailEdit');
    //let input = document.querySelector('input[type="file"]')
    const token= document.querySelector('meta[name="csrf-token"]').content;
    changes.addEventListener("change",function (e) {
        //ajax запрос
        e.preventDefault();
        let data= new FormData();
       data.append('image',changes.files[0]);
        data.append('bob','fuck');
        console.log(data.get('bob'));
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
            //    alert('good');
                let data = JSON.parse(response);
                console.log(data);
                image.setAttribute('src',data.path);
                //return response.json();
            })
            .catch(function(error){
              //  alert('no good');
            })
    })
};

