define(function(require, exports, module) {

    var Widget = require('widget');

    exports.run = function() {
        $('#sure').addClass('disabled');

        // $('.courses-list').on('click', '.pagination li', function() {
        //     var id =
        //     var url = $(this).data('url');
        //     if (typeof(url) !== 'undefined') {
        //         $.post(url, $('.form-search').serialize(),function(data){
        //             $('.courses-list').html(data);
        //         });
        //     }
        // });

        $('.row').on('click',".user-select-item",function(){

            var id = $(this).find("div").data('id');

            var url = $(this).find("div").data('url');
            alert(url);
            // alert(id+"====");
            var alreadySelect = $(this).parent().find(".select");
            if (alreadySelect.length == 0) {

                if ($(this).hasClass('select')) {

                    $(this).removeClass('select');
                    $('.user-metas-' + id).hide();
                    $('#sure').button('submiting').addClass('disabled');

                } else {
                    $('#sure').removeClass('disabled');
                    $('#sure').addClass('enabled');
                    $('#sure').data('url',url);
                    // $('#sure').data('url',)
                    $(this).addClass('select');

                    $('.user-metas-' + id).show();

                }
            } else {

                alreadySelect.removeClass('select');
                alreadySelect.find('.glyphicon-ok').hide();
                $('#sure').removeClass('enabled');
                $('#sure').addClass('disabled');
                if(alreadySelect.find('div').data('id') != id) {
                    $(this).addClass('select');
                    $('.user-metas-' + id).show();
                    $('#sure').removeClass('disabled');
                    $('#sure').addClass('enabled');
                    $('#sure').data('url',url);
                }
            }

            $('#sure').click(function () {
                $.ajax({
                    type : "post",
                    url : url,
                    async : false,
                    success : function(data){
                        $('.modal').modal('hide');
                        window.location.reload();
                    },
                    error:function () {
                        alert("error");
                    }

                });
            });



        });
/*

        var ids=[];

        $('#sure').on('click',function(){
            $('#sure').button('submiting').addClass('disabled');

            alert("ids="+ids);
            $.ajax({
                type : "post",
                url : $('#sure').data('url'),
                data : "ids="+ids,
                async : false,
                success : function(data){
                    
                    $('.modal').modal('hide');
                    window.location.reload();
                }

             });

        });

        $('#search').on('click',function(){

            if($('[name=key]').val() != "" ){

                $.post($(this).data('url'),$('.form-search').serialize(),function(data){

                    $('.courses-list').html(data);
                });
            }

        });

        $('.courses-list').on('click', '.pagination li', function() {
            var url = $(this).data('url');
            if (typeof(url) !== 'undefined') {
                $.post(url, $('.form-search').serialize(),function(data){
                    $('.courses-list').html(data);
                });
            }
        });

        $('#enterSearch').keydown(function(event){

            if(event.keyCode==13){

                $.post($(this).data('url'),$('.form-search').serialize(),function(data){

                    $('.courses-list').html(data);
                
                });
                return false;
            }
        });

        $('#all-courses').on('click',function(){

            $.post($(this).data('url'),$('.form-search').serialize(),function(data){

                $('#modal').html(data);
            });

            
        });

        $('.row').on('click',".course-item ",function(){

            var id=$(this).data('id');

            if($(this).hasClass('enabled')){
                return;
            }

            if($(this).hasClass('select')){

                $(this).removeClass('select');
                $('.course-metas-'+id).hide();

                ids = $.grep(ids, function(val, key) {

                    if(val != id )
                        return true;
                }, false);

            }else{
                $(this).addClass('select');
                
                $('.course-metas-'+id).show();

                ids.push(id);

            }

        });
*/


    };

    
});