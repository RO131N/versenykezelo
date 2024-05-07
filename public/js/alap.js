$(document).ready(function(){
    $('#addpost').on('submit',function(event)
{
    
    jQuery.ajax({
        url:"welcome",
        data:jQuery('#addpost').serialize(),
        type:post,

        success:function(result)
        {
            $('$message').css('display','block');
            jQuery('#message').html(result)
            jQuery('#addpost')[0].reset();
        }
    })
    event.preventDefault();
});
});