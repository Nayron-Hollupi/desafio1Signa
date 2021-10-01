
function Todos() {
      
    $('#form').on('submit', function(e){
        e.preventDefault();
        
        var txt = $(this).serialize();
       console.log(txt);
        
        $.ajax({ 
            type:'GET',
            url:'ajax.php?case=1',
            data:txt,
            
            success: function(resultado){
                $('.todos').html(resultado);
            },
            error: function(){
                alert("Ocorreu um erro");
            }
        });
    });
 }



 function Maior() {
      
    $('#form').on('submit', function(e){
        e.preventDefault();
        
        var txt = $(this).serialize();
       console.log(txt);
        
        $.ajax({ 
            type:'GET',
            url:'ajax.php?case=2',
            data:txt,
            
            success: function(resultado){
                $('.maior').html( resultado);
            },
            error: function(){
                alert("Ocorreu um erro");
            }
        });
    });
 }


 function Menor() {
      
  $('#form').on('submit', function(e){
      e.preventDefault();
      
      var txt = $(this).serialize();
     console.log(txt);
      
      $.ajax({ 
          type:'GET',
          url:'ajax.php?case=3',
          data:txt,
          
          success: function(resultado){
              $('.menor').html( resultado);
          },
          error: function(){
              alert("Ocorreu um erro");
          }
      });
  });
}


function Percentual() {
      
  $('#form').on('submit', function(e){
      e.preventDefault();
      
      var txt = $(this).serialize();
     console.log(txt);
      
      $.ajax({ 
          type:'GET',
          url:'ajax.php?case=4',
          data:txt,
          
          success: function(resultado){
              $('.pares').html(resultado);
          },
          error: function(){
              alert("Ocorreu um erro");
          }
      });
  });
}


function Media() {
      
  $('#form').on('submit', function(e){
      e.preventDefault();
      
      var txt = $(this).serialize();
     console.log(txt);
      
      $.ajax({ 
          type:'GET',
          url:'ajax.php?case=5',
          data:txt,
          
          success: function(resultado){
              $('.media').html(resultado);
          },
          error: function(){
              alert("Ocorreu um erro");
          }
      });
  });
}







