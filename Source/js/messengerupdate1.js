$(document).ready(function(){
    function updatemessage2(view = '')
  {

    $.ajax({
    url:"MessengerUpdate.php",
    method:"get",
    dataType:"json",
    success:function(data)
    {
      $('#countmas').html(data.unseen_count);
      $('#countmas2').html(data.unseen_notifications);
      

    }


   });

  }

  updatemessage2();

setInterval(function(){
  updatemessage2();
    }, 2000);


  });
