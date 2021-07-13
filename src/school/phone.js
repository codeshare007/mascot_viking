var cur_index;
$(document).ready(()=>{
    $.get("server.php", {operation : 'getActivatedList'}, (res)=>{
        res = JSON.parse(res);
        for(let one of res){
            $(`#video_${one.index}`).attr('src', "assets/images/active-video.png")
                                   .parent()
                                   .attr('href', `resource/hintVideo.php?id=${one.id}&title=${one.title}`);
        }
    })

    $("#password_dlg").dialog({
        title : "Password",
        autoOpen : false,
        modal : true,
        width : 300,
        height : 250,
        closeOnEscape : true
    });
});

var selectVideo = (index) => {
    if($(`#video_${index}`).parent().attr('href'))
        return;
    cur_index = index;

    $("#password").val("");
    $(".error-text").text('');
    $("#password_dlg").dialog('open');
}
var submit = () => {
    let password =  $("#password").val();
    if(!password){
        alert("Enter the password..");
        return;
    }
    $.post("server.php", {operation : 'cmpPassword', index : cur_index, password : password}, (res)=>{
        res = JSON.parse(res);
        if(res.status===1){
            $("#password_dlg").dialog("close");
            $(`#video_${cur_index}`).attr('src', 'assets/images/active-video.png')
                                    .parent()
                                    .attr('href', `resource/hintVideo.php?id=${res.id}&title=${res.title}`)
                                    .click();
        }
        else{
            $("#error-text").text("Failed");
        }
    })
}