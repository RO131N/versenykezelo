$(document).ready(function() {
    $('#addform').on('submit', function(e) {
        e.preventDefault();
        $.ajax({
            type: 'POST',
            url: '/fordulo',
            data: $('#addform').serialize(),
            
           
        })
        fetchfordulok();
    });
    fetchfordulok();
    function fetchfordulok()
    {
        $.ajax({
            type: 'GET',
            url: '/fetch-fordulok',
            dataType: 'json',
            success: function(response){
                $('tbody').html("");
                $.each(response.fordulok, function(key,item){
                    $('tbody').append('<tr>\
                    <td>'+item.id+'</td>\
                    <td>'+item.versenynev+'</td>\
                    <td>'+item.datum+'</td>\
                    </tr>')
                })
            }
        })
    }
        
});