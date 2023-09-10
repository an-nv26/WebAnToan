function submitForm(){
    // Lấy giá trị từ các input
    var fullName = document.getElementById("fullName").value;
    var address = document.getElementById("address").value;
    var gender = document.querySelector('input[name="gender"]:checked');
    var birthDate = document.getElementById("birthDate").value;
    var email = document.getElementById("email").value;
    var phone = document.getElementById("phone").value;
    var registrationKey = document.getElementById("registrationKey").checked;
    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;
    var confirmPassword = document.getElementById("confirmPassword").value;
    var note = document.getElementById("note").value;

    // Sự kiện 'Enter'
    var inputFields = document.querySelectorAll('input[type="text"]');
    inputFields.forEach(function(input,index){
        input.addEventListener('keypress', function(event){
            if(event.keyCode === 13){
                event.preventDefault();
                var nextIndex = (index + 1) % inputFields.length;
                inputFields[nextIndex].focus();
            }
        });
    });

    // Kiểm tra trống
    if(fullName === "" || address === "" || birthDate === "" || email === "" || phone === "" || username === "" || password === ""|| confirmPassword === ""){
        alert("Vui lòng điền đầy đủ thông tin");
        return false;
    }

    // Kiểm tra trống khóa đăng ký
    function isCheckboxChecked(){
        var checkboxes = document.querySelectorAll('input[type="checkbox"]');
        for(var i=0;i<checkboxes.length;i++){
            if(checkboxes[i].checked){
            return true;
            }
        }
        return false;
    }

    if(!isCheckboxChecked()){
        alert("Vui lòng điền đầy đủ thông tin");
        return false;
    }
    
    // Kiểm tra trống Giới tính
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

    // Kiểm tra địa chỉ
    var addressPattern = /^[\p{L}\s]+$/u;
    if(!address.match(addressPattern)){
        alert("Địa chỉ không hợp lệ");
        return false;
    }

    // Kiểm tra Email
    function isGmail(email){
        var emailPattern = /@gmail\.com$/;

        return emailPattern.test(email);
    }

    var userEmail = "changtraim70@gmail.com"
    if(!isGmail(userEmail)){
        alert('Không phải là một email của Google');
    }

    // Kiểm tra số điện thoại
    var phonePattern = /^03\d{8}$/;
    if(!phone.match(phonePattern)){
        alert("Số điện thoại không hợp lệ");
        return false;
    }

    // Kiểm tra tên sử dụng
    var usernamePattern = /^(?=.*[A-Z])(?=.*\d)[A-Za-z\d]{3,}$/;
    if(!username.match(usernamePattern)){
        alert("Tên người dùng gồm tối thiểu ba chữ cái và có ít nhất một chữ cái viết hoa và một con số");
        return false;
    }

    // Kiểm tra password
    if(password!==confirmPassword){
        alert("Mật khẩu không trùng khớp");
        return false;
    }

    else{
        // Thông báo 
        var message = "Họ Tên: " + fullName + "\n";
        message += "Địa Chỉ: " + address + "\n";
        message += "Giới Tính: " + gender + "\n";
        message += "Ngày Sinh: " + birthDate + "\n";
        message += "Email: " + email + "\n";
        message += "Số Điện Thoại: " + phone + "\n";
        message += "Khóa Đăng Ký: " + (registrationKey ? "Có" : "Không") + "\n";
        message += "Tên Sử Dụng: " + username + "\n";
        message += "Ghi Chú: " + note;

        alert("Dữ liệu đã được gửi đi: \n\n") + message;

        // reset dữ liệu trong các ô sau khi submit
        document.getElementById("fullName").value = "";
        document.getElementById("birthDate").value = "";
        document.getElementById("idCard").value = "";
        document.querySelector('input[name="gender"]:checked').checked = false;
        document.getElementById("address").value = "";
        document.getElementById("phone").value = "";
    }
}

function skipForm(){
    alert("Bạn đã bỏ qua việc đăng ký.")
}