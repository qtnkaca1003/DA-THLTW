$(document).ready(function(){
    $('input[name ="cc"]').click(function(){
      var val= $(this).val();
      console.log(val);
      $.ajax({
          type: 'GET',
          url:'http://localhost/DoAn_TH-TLWeb/loai_game.php?maloai='+val,
          success: function(data){
              //alert('gưi thanh cong');

              location.href = "http://localhost/DoAn_TH-TLWeb/loai_game.php?maloai="+val;
              

          },
          error: function(e){
              console.log(e.message);
          }
      });
    });
  });