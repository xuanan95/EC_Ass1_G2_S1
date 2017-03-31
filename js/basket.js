function plus(number) {
    var num = document.getElementById('number_pr'+number).value;
    document.getElementById('number_pr'+number).setAttribute('value',Number(num) + 1);
}
function minus(number) {
    var num = document.getElementById('number_pr'+number).value;
    if(num > 0) document.getElementById('number_pr'+number).setAttribute('value',Number(num) - 1);
}