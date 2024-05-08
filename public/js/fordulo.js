$(document).ready(function() {
    $('#addform').on('submit', function(e) {
        e.preventDefault();
        $.ajax({
            type: 'POST',
            url: '/fordulo',
            data: $('#addform').serialize(),
            success: function(response){
            console.log(response)
            alert('data saved');
            },
            error: function(error){
                console.log(error)
                alert('data dont saved');
            }
        })
        
    });
});