  $(document) .ready( function(){
      $('#state1').load('load_colors.php');
      $('#state2').load('load_colors.php');
      $('#state3').load('load_colors.php');
      $('#state4').load('load_colors.php');
      $('#state5').load('load_colors.php');
      $('#state6').load('load_colors.php');
      $('#state7').load('load_colors.php');
      $('#state8').load('load_colors.php');
      $('#state9').load('load_colors.php');
      $('#state10').load('load_colors.php');


    refresh();
  });

    function refresh(){

      setTimeout( function() {
          $('#state1').load('load_colors.php');
          $('#state2').load('load_colors.php');
          $('#state3').load('load_colors.php');
          $('#state4').load('load_colors.php');
          $('#state5').load('load_colors.php');
          $('#state6').load('load_colors.php');
          $('#state7').load('load_colors.php');
          $('#state8').load('load_colors.php');
          $('#state9').load('load_colors.php');
          $('#state10').load('load_colors.php');
        refresh();
      },2000);

    }
