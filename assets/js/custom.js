$(document).ready(function(){
    $('#admin-sid').on('change', function(){
        var scrID = $(this).val();
        console.log(scrID);
        if(scrID){
            $.ajax({
                type:'POST',
                url:'./core/ajaxdata.php',
                data:'sid='+scrID,
                success:function(html){
                    $('#admin_chapter_id').html(html);
                    $('#admin_vid').html('<option value="">Please select the Chapter first!</option>'); 
                }
            }); 
        }else{
            $('#admin_chapter_id').html('<option value="">Please select the Scripture first!</option>');
            $('#admin_vid').html('<option value="">Please select the Chapter first!</option>'); 
        }
    });
    
    $('#admin_chapter_id').on('change', function(){
        var chapterID = $(this).val();
        if(chapterID){
            $.ajax({
                type:'POST',
                url:'./core/ajaxdata.php',
                data:'chapter_id='+chapterID,
                success:function(html){
                    $('#admin_vid').html(html);
                }
            }); 
        }else{
            $('#admin_vid').html('<option value="">Please select the Chapter first!</option>'); 
        }
    });
});