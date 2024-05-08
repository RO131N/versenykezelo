$(document).ready(function() {
    
    $('#addform').on('submit', function(e) {
        e.preventDefault();
        $.ajax({
            type: 'POST',
            url: '/welcome',
            data: $('#addform').serialize(),
            
        })
        document.getElementById("megnevezes").value = "";
        document.getElementById("datum").value = ""
        document.getElementById("nyelvek").value = "";
        document.getElementById("jopontok").value = ""
        document.getElementById("rosszpontok").value = "";
        document.getElementById("forddatum").value = ""
        fetchversenyek();
    });
    fetchversenyek();
    function fetchversenyek()
    {
        $.ajax({
            type: 'GET',
            url: '/fetch-versenyek',
            dataType: 'json',
            success: function(response){
                $('tbody').html("");
                $.each(response.versenyek, function(key,item){
                    $('tbody').append('<tr>\
                    <td>'+item.id+'</td>\
                    <td>'+item.megnevezes+'</td>\
                    <td>'+item.datum+'</td>\
                    <td>'+item.nyelvek+'</td>\
                    <td>'+item.jopontok+'</td>\
                    <td>'+item.rosszpontok+'</td>\
                    <td>'+item.urespontok+'</td>\
                    </tr>')
                })
            }
        })
    }
    
});


