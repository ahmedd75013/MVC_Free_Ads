$.ajax({
    type: 'GET',
    url: 'api.php',
    success: function(val){
        console.log(val);
        $('#top').html(val);
    }
})