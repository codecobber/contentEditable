

    
      $(document).ready(function(){

             //edit button
            $('#editme').on('click',function(){
                if($('.buttons').css('display')=="none"){
                    $('.buttons').css('display','block');   
                }
                else{
                    $('.buttons').css('display','none');  
                }
            });


            //load data from
            $("#ps1").load("content/data_ps1.html");
            $("#ps2").load("content/data_ps2.html");
            $("#ps3").load("content/data_ps3.html");
            $("#ps4").load("content/data_ps4.html");
            

            $('.buttons').on('click',function(){ 
                
                var id = "#p" + $(this).attr('id');
                var buttID = id.replace('p','');
                 console.log(id);

                //add red border
                if( $(id).hasClass('borderClass') ){
                    $(id).removeClass('borderClass');
                    $(id).attr('contentEditable','false');
                    

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
    
  
