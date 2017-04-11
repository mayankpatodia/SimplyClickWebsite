var area2;
var id2;
var time;
var isModalDisplayed = false;
// $.ajax({
//     url: "simply/myModal.html",
//     success: function (data) { $('body').prepend(data); },
//     dataType: 'html'
// });
/*-----------------------BASIC-----------------*/
$("span, h1, h2, h3, h4, h5, h6, p").click(function(){
    if(isModalDisplayed == false){
        $("#myModal").modal();
        isModalDisplayed = true;
        var dt = new Date();
        var time = dt.getDate() +""+ dt.getMonth() + dt.getFullYear() + dt.getHours() + dt.getMinutes() + dt.getSeconds() + dt.getMilliseconds();
        id2 = "simply"+time;
        $(this).attr('id',id2);
        var text = $(this).html();
        $("#ctext").html(text);
    }
});

$("#myModal").on("hidden.bs.modal", function () {
  isModalDisplayed = false;
});

$("#save").click(function(){
    var text2 = $("#ctext").html();
    $('#'+id2).html(text2);
    $("#myModal").modal("hide");
});

function addArea2() {
    area2 = new nicEditor({iconsPath : 'nicEditorIcons.gif',fullPanel: true}).panelInstance('myArea2');
}
function removeArea2() {
    area2.removeInstance('myArea2');
}

$("#clickme").click(function(){
    if (confirm('Are you sure you want to save the changes?')) {
        $("#myModal").remove();
        $("#clickme").remove();
        $("LINK[href*='simply/css/myEdit.css']").remove();
        var html = document.documentElement.innerHTML;
        $.post( "simply/php/save_file.php", { data: html },function(data,status){
              console.log(data);
              window.location = "../../file_created.php";
        });
    } else {
        // Do nothing!
    }
});

/*--------------------EDITOR FUNCTIONS-----------------------*/


$('#b').click(function () {
    document.execCommand('bold');
    setText();
});
$('#l').click(function () {
    document.execCommand("CreateLink", false, prompt("Enter URL: ","http://"));
    setText();
});

$('#uli').click(function () {
    document.execCommand("unlink", false, false);
    setText();
});
$('#i').click(function () {
    document.execCommand('italic');
    setText();
});
$('#st').click(function () {
    document.execCommand('strikeThrough');
    setText();
});
$('#la').click(function () {
    document.execCommand('justifyleft');
    setText();
});
$('#ra').click(function () {
    document.execCommand('justifyright');
    setText();
});
$('#ca').click(function () {
    document.execCommand('justifycenter');
    setText();
});
$('#j').click(function () {
    document.execCommand('justifyfull');
    setText();
});
$('#u').click(function () {
    document.execCommand('underline');
    setText();
});
$('#bc').click(function () {
    document.execCommand("hiliteColor", false, prompt("Enter Color(Name or HexCode): "));
    setText();
});
$('#fc').click(function () {
    document.execCommand('styleWithCSS', false, true);
    document.execCommand('foreColor', false, prompt("Enter Color(Name or HexCode): "));
    setText();
});
var fontSize = 3;
$('#tsd').click(function () {
    if (fontSize > 1)
        fontSize--;
    document.execCommand("fontSize", false, fontSize);
    setText();
});

$('#tsi').click(function () {
    if (fontSize < 7)
        fontSize++;
    document.execCommand("fontSize", false, fontSize);
    setText();
});

$('#in').click(function () {
    document.execCommand('indent', false, false);
    setText();
});

function fontEditor(fontName) {
    document.execCommand("fontName", false, fontName);
}

function setText() {
    var htmlString = $('#ctext').html();
}
