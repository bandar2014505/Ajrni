$(document).ready(function(){
    function updatemessage(view = '')
  {

    var idmessenger =   document.getElementById("idmessenger").value

    $.ajax({
    url:"fetch1.php",
    method:"get",
    data: 'idmessenger=' + idmessenger,
    dataType:"json",
    success:function(data)
    {
      $('#listnav_Notices').html(data.unseen_notification1);
      

    }
   });

  }

setInterval(function(){
updatemessage();
    }, 1000);


  });
