function tang(x){
    let vt=x.parentElement.children[0].value;
    // alert(vt);
    //Thay đổi số lượng trực tiếp với DOM HTML
    var cha=x.parentElement;
    var slcu=cha.children[2];
    var slmoi=parseInt(slcu.innerHTML)+1;
    slcu.innerHTML=slmoi;
    // var vitri=cha.children[0];
    // alert(slcu);

    //gọi hàm cập nhật SESSION
}
function giam(x){
    //Thay đổi số lượng trực tiếp với DOM HTML
    var cha=x.parentElement;
    var slcu=cha.children[2];
    if(parseInt(slcu.innerHTML)>1){
        var slmoi=parseInt(slcu.innerHTML)-1;
        slcu.innerHTML=slmoi;
    }
    else{
        alert("Đặt hàng số lượng tối thiểu là 1")
    }
    // alert(slcu);

    //gọi hàm cập nhật SESSION
}