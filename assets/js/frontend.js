/**
 * Created by mcelal on 21.04.2017.
 */

$(document).ready(function(){
    $("#search").keyup(function(){
        if($("#search").val().length>3){
            var term = $(this).val();
            $.ajax({
                type: "post",
                url: "home/ajax",
                cache: false,
                dataType: 'json',
                data: {func: 'searchHome', data: term},
                success: function(response){
                    console.log(response.status);
                    if (response.status){

                    } else {
                        $(this).val("hatalı");
                    }
                },
                error: function(){
                    alert('Error while request..');
                }
            });
        }
        return false;
    });
});