document.addEventListener('DOMContentLoaded', function() {

    // Open Advanced Search Section
    // -------------------------
    $(function() {
        // Open Advanced Search Section
        $('#btn-view-advanced-search').on('click', function() {
            //Display section
            $('#advanced-serach-section').show('slow');
            //Move scroll to teh section
            $('#advanced-serach-section').animatescroll();
        });	
        // Close Advanced Search Section
        $('#btn-close-advanced-search').on('click', function() {
            //Remove submenu on mobile
            $('.sidebar-mobile-detached').removeClass();
            //Close section
            $('#advanced-serach-section').hide('slow');
            //Move scroll to the top
            $('body').animatescroll();
        });	
    });

    // Display submenu
    // -------------------------
    $(function() {
        // Display submenu when click button action from a table
        $('.btn-action-submenu').on('click', function() {
            var $menuItem = $(this),
                $submenuWrapper = $(this).parent('.btn-action').find('.action-submenu', $menuItem);
            
            // grab the menu item's position relative to its positioned parent
            var menuItemPos = $menuItem.position();
            
            // place the submenu in the correct position relevant to the action submenu item
            $submenuWrapper.css({
            top: menuItemPos.top + 30,
            left: menuItemPos.left -100
            });
        });
        // Quit submenu
        $('.btn-action').on('mouseleave', function() {
            $(this).removeClass('open');
        });									
    });


    // Delete row of the tables
    // -------------------------
    $(function() {
        $('.btn-delete-tr').on('click', function() {
            $(this).parents('tr').hide("fast", function(){ $(this).remove(); })
        });								
    });

    // Delete row of the content
    // -------------------------
    $('.btn-delete-row').on('click', function() {
        $(this).parents('.row').hide("fast", function(){ $(this).remove(); });
    });	

    // Numpad 
    // -------------------------
    $(document).ready(function(){

        $('.key').click(function(){
            var numBox = document.getElementById('numBox');
            if(this.innerHTML == '0'){
                if (numBox.value.length > 0)
                    numBox.value = numBox.value + this.innerHTML;
            }
            else
                numBox.value = numBox.value + this.innerHTML;
            
            event.stopPropagation();
        });
        
        $('.btn-op').click(function(){
            if(this.innerHTML == 'DEL'){
                var numBox = document.getElementById('numBox');
                if(numBox.value.length > 0){
                    numBox.value = numBox.value.substring(0, numBox.value.length - 1);
                }
            }
            else{
                document.getElementById('numBox').value = '.';
            }
            
            event.stopPropagation();
        });
    });
    
});
