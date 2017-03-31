$(document).ready(function () {
    $("#zoom_01").elevateZoom({
        zoomWindowFadeIn: 500,
        zoomWindowFadeOut: 500,
        lensFadeIn: 500,
        lensFadeOut: 500,
        zoomWindowWidth:250,
        zoomWindowHeight:250,
        scrollZoom : true
    });
    $('#details').click(function () {
        $.ajax({
            url: "productdetail.php",
            type: "post",
            dataType: "html",
            success:function (result) {
                document.getElementById('showedarea').innerHTML = result;
                $('.li_thongso').addClass('back_color');
                $('.li_danhgia').removeClass('back_color');
                $('.li_doitra').removeClass('back_color');
            }
        });
    });
    $('#review').click(function () {
        $.ajax({
            url: "review.php",
            type: "post",
            dataType: "html",
            success:function (result) {
                document.getElementById('showedarea').innerHTML = result;
                $('.li_thongso').removeClass('back_color');
                $('.li_danhgia').addClass('back_color');
                $('.li_doitra').removeClass('back_color');
            }
        });
    });
    // $('#return').click(function () {
    //     $.ajax({
    //         url: "return.php",
    //         type: "post",
    //         dataType: "html",
    //         success:function (result) {
    //             document.getElementById('showedarea').innerHTML = result;
    //             $('.li_thongso').removeClass('back_color');
    //             $('.li_danhgia').removeClass('back_color');
    //             $('.li_doitra').addClass('back_color');
    //         }
    //     });
    // });
});
function select_sp1() {
    var ez = $('#zoom_01').data('elevateZoom');
    ez.swaptheimage("img/j7_01.png", "img/j7_01_large.png");
}
function select_sp2() {
    var ez = $('#zoom_01').data('elevateZoom');
    ez.swaptheimage("img/j7_02.png", "img/j7_02_large.png");
}
function select_sp3() {
    var ez = $('#zoom_01').data('elevateZoom');
    ez.swaptheimage("img/j7_03.png", "img/j7_03_large.png");
}
function plus() {
    var num = document.getElementById('number_pr').value;
    document.getElementById('number_pr').setAttribute('value',Number(num) + 1);
}
function minus() {
    var num = document.getElementById('number_pr').value;
    if(num > 0) document.getElementById('number_pr').setAttribute('value',Number(num) - 1);
}