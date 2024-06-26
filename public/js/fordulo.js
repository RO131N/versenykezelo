$(document).ready(function() {
    $('#addform').on('submit', function(e) {
        e.preventDefault();
        //Ellenőrzés hogy létezik e az adott verseny
        var hozzadva = false;
        $.ajax({
            type: 'GET',
            url: '/fetch-versenyek',
            dataType: 'json',
            success: function(response){
                $.each(response.versenyek, function(key,item){
                    if(item.megnevezes == document.getElementById("versenynev").value)
                        {
                            //létezik szóval mehet hozzá forduló
                            $.ajax({
                                type: 'POST',
                                url: '/fordulo',
                                data: $('#addform').serialize(),
                                
                               
                            })
                            fetchfordulok(); //Újra töltjük a kiírást
                            document.getElementById("versenynev").value = "";
                            document.getElementById("forddat").value = ""
                            hozzadva = true;
                        
                        }
                        
                });
                if(!hozzadva)
                    {
                        //Nem létezik úgyhogy nem adjuk hozzá
                        alert("Nincs ilyen verseny meghírdetve!");
                        document.getElementById("versenynev").value = "";
                        document.getElementById("forddat").value = ""
                    }
            },
            
                
            
        })
        
    });
    //Feltöltjük az adatokkal az oldalt
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