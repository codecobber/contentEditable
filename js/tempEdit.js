



    
      $(document).ready(function(){

        function sendData(content,id){

            //write to file
            $.ajax({
                type: 'POST',
                url: 'writePage.php',
                data: {content: content, id: id},
                    success: function(response){
                        $(id).html(response);
                        }
                }); 
        }



            


            //load data from
            $("#ps1").load("content/data_ps1.html");
            $("#ps2").load("content/data_ps2.html");
            $("#ps3").load("content/data_ps3.html");
            $("#ps4").load("content/data_ps4.html");
            var id="";
            var captured = "";

            $('.buttons').on('click',function(){ 
                
                id = "#p" + $(this).attr('id');
                captured = $(id).html();


                //add red border
                if( $(id).hasClass('borderClass') ){
                    $(id).removeClass('borderClass');
                    $(id).attr('contentEditable','false');
                    

                //send content 
                sendData(captured, id);
                

                }else{
                    $(id).addClass('borderClass');
                    $(id).attr('contentEditable','true');
                    
                }

            });

             //edit button
            $('#editme').on('click',function(){
                if($('.buttons').css('display')=="none"){
                    $('.buttons').css('display','block'); 
                      
                }
                else{
                    $('.buttons').css('display','none'); 
                    $(id).removeClass('borderClass'); 
                    captured = $(id).html();
                    sendData(captured, id);
                }
            });

        });
    
  
