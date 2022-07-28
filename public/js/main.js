$(document).ready(function(){

    $("#input").keyup(function(e){
        e.preventDefault();
        $('#result').show();
        var form = $('#form').attr('action');
        var dataString = $('#form').serialize();
            $.ajax({
                type:'POST',
                url:form,
                data:dataString,
                success:function(Response){
                    var html = '';
                    $(Response).each(function(key, value){
                        html += '<tr><td class=\"td-formPhoto\"><img src=\"/imagenes/photo/'+value.photo+'\" width=\"35\" height=\"35\" ></td><td class=\"td-formName\"><a href=\"/Products/Detalles/'+value.id+')\" class=\"a-form\" >'+value.name+'</a></td></tr>';
                    });
                    $('#result').html(html);
                }
            });
    });
    $(document).click(function(){
        $('#result').hide();
    });

});
