function submitForm() {
    // Lấy giá trị từ các input
    var fullName = document.getElementById("fullName").value;
    var birthDate = document.getElementById("birthDate").value;
    var idCard = document.getElementById("idCard").value;
    var gender = document.querySelector('input[name="gender"]:checked');
    var address = document.getElementById("address").value;
    var phone = document.getElementById("phone").value;

    // Kiểm tra các ô input trống
    if(fullName === "" || birthDate === "" || idCard === "" || address === "" || phone === ""){
        alert('Vui lòng điền đầy đủ thông tin trước khi gửi');
        return false;
    }

    var radioInputs = document.getElementsByName("gender");
    var radioChecked = false;
    for (var i = 0; i < radioInputs.length; i++) {
    if (radioInputs[i].checked) {
        radioChecked = true;
        break;
    }
    }
    if (!radioChecked) {
        alert("Vui lòng điền đầy đủ thông tin trước khi gửi");
        return;
    }

    // Kiểm tra họ tên
    var fullNamePattern = /^[\p{L}\s]+$/u;
    if(!fullName.match(fullNamePattern)){
        alert("Họ và tên không hợp lệ");
        return false;
    }

    // Kiểm tra số căn cước công dân(12 số)
    var idCardPattern = /^00\d{10}$/;
    if(!idCard.match(idCardPattern)){
        alert("Số căn cước không hợp lệ");
        return false;
    }

    // kiểm tra địa chỉ
    var addressPattern = /^[\p{L}\s]+$/u;
    if(!address.match(addressPattern)){
        alert("Địa chỉ không hợp lệ");
        return false;
    }

    // Kiểm tra số điện thoại
    var phonePattern = /^03\d{8}$/;
    if(!phone.match(phonePattern)){
        alert("Số điện thoại không hợp lệ");
        return false;
    }

    else{
        // Hiển thị thông báo
        var message = "Họ Tên: " + fullName + "\n";
        message += "Ngày Sinh: " + birthDate + "\n";
        message += "Số Căn Cước Công Dân: " + idCard + "\n";
        message += "Giới Tính: " + (gender ? gender.value : "") + "\n";
        message += "Địa Chỉ: " + address + "\n";
        message += "Số Điện Thoại: " + phone;

        alert("Dữ liệu đã được gửi:\n\n" + message);

        // reset dữ liệu trong các ô sau khi submit
        document.getElementById("fullName").value = "";
        document.getElementById("birthDate").value = "";
        document.getElementById("idCard").value = "";
        document.querySelector('input[name="gender"]:checked').checked = false;
        document.getElementById("address").value = "";
        document.getElementById("phone").value = "";
        }  
}