$(document).ready(function(){

    //menu bar show hide
    menustatus = 'open';
    accountstatus = 'closed';
    $('.dropdown-logo').click(function(){
        if(menustatus == 'open'){
            //close menu
            $('.original-navigation').slideUp('slow');
            menustatus = 'closed';
        }else{
            //open menu
            $('.original-navigation').slideDown('slow');
            $('.account-only-navigation').slideUp('slow');
            menustatus = 'open';
            accountstatus = 'closed';
        }
    });

    $('.accdown-logo').click(function(){
        if(accountstatus == 'open'){
            //close menu
            $('.account-only-navigation').slideUp('slow');
            accountstatus = 'closed';
        }else{
            //open menu
            $('.account-only-navigation').slideDown('slow');
            $('.original-navigation').slideUp('slow');
            accountstatus = 'open';
            menustatus = 'closed';
        }
    });

    $( window ).resize(function() {
        if($( window ).width() > 945){
            $('.original-navigation').show(1);
            $('.account-only-navigation').show(1);
            menustatus = 'open';
            accountstatus = 'open';
        }else{
            $('.original-navigation').show(1);
            $('.account-only-navigation').hide(1);
            menustatus = 'open';
            accountstatus = 'closed';
        }
    });
});
