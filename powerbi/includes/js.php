<script type = "text/javascript">
    
    // check to see if jquery is installed.
   /* if(typeof jQuery == "undefined"){
        alert('jQuery is not installed');
    }
    else {
        alert("jQuery is installed");
    }
    */
    
    

$(document).ready(function(){
    // Collapse the Left Navigation Bar Menus on small screen size
    var width = $(window).width();
    if(  width < 1200 ) {
        $("#collapse11").attr("class","collapse");
        $("#collapse2").attr("class","collapse");
        $("#collapse3").attr("class","collapse");
        $("#collapse4").attr("class","collapse");
        $("#collapse5").attr("class","collapse");
            
    }    
    
    $(window).resize(function(){
        // Collapse or expand the Left Navigation Bar Menus based on screen size
        var width = $(window).width();
        if(  width < 1200 ) {
            $("#collapse11").attr("class","collapse");
            $("#collapse2").attr("class","collapse");
            $("#collapse3").attr("class","collapse");
            $("#collapse4").attr("class","collapse");
            $("#collapse5").attr("class","collapse");  
        }
        else {
            $("#collapse11").attr("class","collapse.show collapse show");
            $("#collapse2").attr("class","collapse.show collapse show");
            $("#collapse3").attr("class","collapse.show collapse show");
            $("#collapse4").attr("class","collapse.show collapse show");
            $("#collapse5").attr("class","collapse.show collapse show"); 
        }
    });
    
    
});

    // google custom search
    (function() {
            var cx = '014512838652984683833:4htk1ddi8f0';
            var gcse = document.createElement('script');
            gcse.type = 'text/javascript';
            gcse.async = true;
            gcse.src = 'https://cse.google.com/cse.js?cx=' + cx;
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(gcse, s);
        })();
    
        
    
    
</script>