$(document).ready(function(){
    $('.signup-eye i').click(function(){
        if($('.signup-password').attr('type') ==="password"){
            $(this).attr('class',"glyphicon glyphicon-eye-open")
            $('.signup-password').attr('type',"text");
        }else{
            $(this).attr('class',"glyphicon glyphicon-eye-close")
            $('.signup-password').attr('type','password');
}
});
});