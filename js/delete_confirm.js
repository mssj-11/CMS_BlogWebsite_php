function delete_alert(e) {
    Swal.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
      }).then((result) => {
        if (result.isConfirmed) {
            send_php(e);
        }
      })
}


function send_php(e){
    params = { id:e };
    $.ajax({
        data: params,
        url : "delete.php", // URL for the PHP script
        type : "POST", // Type of request to be send, called as method in PHP
        beforeSend: function() {},
        success: function() {
            Swal.fire("Deleted!", "Your POST has been deleted", "success").then((result) => {
                window.location.href = "posts.php";
            });
        },
    });
}