$(document).ready(function() {
    $('#addform').on('submit', function(e) {
        e.preventDefault();
        //Ellenőrzés hogy létezik e az adott forduló dátum
        var hozzadva = false;
        $.ajax({
            type: 'GET',
            url: '/fetch-fordulok',
            dataType: 'json',
            success: function(response){
                $.each(response.fordulok, function(key,item){
                    if(item.datum == document.getElementById("forddatum").value)
                        {
                             //létezik szóval mehet hozzá versenyző
                            $.ajax({
                                type: 'POST',
                                url: '/versenyzo',
                                data: $('#addform').serialize(),
                                
                            })
                            fetchversenyzok(); //újratöltjük a kiíratást
                            document.getElementById("nev").value = "";
                            document.getElementById("forddatum").value = ""
                            hozzadva = true;
                        }
                   
                })
                if(!hozzadva)
                    {
                        //Nem létezik úgyhogy nem adjuk hozzá
                        alert("Nincs ilyen dátumú forduló!");
                        document.getElementById("nev").value = "";
                        document.getElementById("forddatum").value = ""
                    }
            }
        })

    });
    //Feltöltés az adatokkal az oldalt
    fetchversenyzok();

    function fetchversenyzok()
    {
        $.ajax({
            type: 'GET',
            url: '/fetch-versenyzok',
            dataType: 'json',
            success: function(response){
                $('tbody').html("");
                $.each(response.versenyzok, function(key,item){
                    $('tbody').append('<tr>\
                    <td>'+item.id+'</td>\
                    <td>'+item.nev+'</td>\
                    <td>'+item.forddatum+'</td>\
                    <td><button type="button" value="'+item.id+'"class="delete_versenyzo btn btn-danger btn-sm">Törlés</button></td>\
                    </tr>')
                })
            }
        })
    }
    //Töröljük az adott felhasználót
    $(document).on('click','.delete_versenyzo',function (e){
        e.preventDefault();
        var ver_id = $(this).val();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            type: "DELETE",
            url: "/delete-versenyzo/"+ver_id,
            success: function(response){
                fetchversenyzok();
            }
            
        });


    })
});

