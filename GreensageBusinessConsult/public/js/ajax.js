$(document).ready(function(){
    /////for laravel sorting
    $("#sort").on('change',function(){//whenever ths input (having the #sort id) changes, then submit its parent form
       this.form.submit();;//submit this//it is a get method by default
    });
    ////for ajax sorting

    // $("#sort").on('change',function(){//whenever the select option input (having the #sort id) changes, then submit its parent form
    //    var sort = $(this).val();//get the option option value
    //    var url = $('#url').val();// get the url from the hidden input///  training/slug
    // //    var slug = $('#url').val()
    // //    var url = `{{route('training-route')}}`
    // // var url = `http://greensageconsult.test2/training/${slug}?sort=${sort}`
    //     //    alert(url)

    //  $.ajax({
    //      url:url,
    //     // url:url +,
    //     //  method:"get",
    //     type: 'GET',
    //      data:{sort:sort},//send the sort value and url to the resquested url in route to communicate with controller and the refresh the page
    //      success:function(data){
    //          $('.filter_products').html(data)
    //     }//if success, send result in html
    //  })

     });







});