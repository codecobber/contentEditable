

    
      $(document).ready(function(){

           

            //load data from files
            $("#ps1").load("content/data_ps1.html");
            $("#ps2").load("content/data_ps2.html");
            $("#ps3").load("content/data_ps3.html");
            $("#ps4").load("content/data_ps4.html");
            


            //set event handler
            $('#ec1 *').on('click',function(){ 
              event.stopPropagation();
              var id = "#" + $(this).attr('id');
              console.log(id);

                //add red border
                if( $(id).hasClass('borderClass') ){
                    $(id).removeClass('borderClass');
                    $(id).removeAttr('contentEditable','false');
                    

                //get content 
                var captured = $(id).html();

                //write to file
                $.ajax({
                    type: 'POST',
                        url: 'writePage.php',
                        data: {content: captured, id: id},
                        success: function(response){
                            $(id).html(response);
                            
                        }
                }); 

                }else{
                    $(id).addClass('borderClass');
                    $(id).attr('contentEditable','true');
                    
                }


            });
      });
  