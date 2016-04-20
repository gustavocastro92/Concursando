$(document).ready(function () {
    var menu_princ="#menu1";

    
    $('botaoMenu').click(function(){
        $(menu_princ).append('<div id="sobre" class="botaoMenu">teste</div>');
        $('botaoMenu').fadeOut("slow");
        
        
    })
    
    
 $(".botaoMenu").click(function(){
    var x = this.id;
    
    $("html").fadeOut()
    
    setTimeout(function(){redirMenu(x)}, 250);

        
 });

function redirMenu(x){

    switch (x){
            case "modo_zen":
                window.location.href = 'modo_zen.html';
                break;
            case "arcade":
                window.location.href = 'modo_arcade.html'; /*q*/
                break;
            default:
                window.location.href = 'index.html';
                break;            
    }
}

})