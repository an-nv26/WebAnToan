function validateInputs(){
    var fullName = document.getElementById("fullName").value;
    var studentId = document.getElementById("studentId").value;
    var studentClass = document.getElementById("studentClass").value;
    var course = document.getElementById("course").value;

    //Kiểm tra các ô input trống
    if(studentId === "" || fullName === "" || studentClass === "" || course === ""){
        alert('Vui lòng nhập đầy đủ thông tin');
        return false;
    }

    // Form mã sinh viên có dạng AT170000
    var studentIDPattern = /^AT\d{6}$/;

    // Form họ tên
    var fullNamePattern = /^[\p{L}\s]+$/u;

    // Form tên lớp có dạng L00
    var studentClassPattern = /^L\d{2}$/;

    // Form tên môn học
    var coursePattern = /^[\p{L}\s]+$/u;

    // Kiểm tra mã sinh viên
    if (!studentId.match(studentIDPattern)) {
        alert("Mã sinh viên không hợp lệ.");
        return false;
    }

    // Kiểm tra họ tên
    if(!fullName.match(fullNamePattern)){
        alert("Họ và tên không hợp lệ");
        return false;
    }

    // Kiểm tra tên lớp
    if(!studentClass.match(studentClassPattern)){
        alert("Tên lớp không hợp lệ");
        return false;
    }

    // Kiểm tra tên môn học
    if(!course.match(coursePattern)){
        alert("Tên môn học không hợp lệ");
        return false;
    }

    // Nếu thỏa mãn điều kiện thông báo cho người dùng
    alert("Gửi biểu mẫu thành công");
    return true;
}