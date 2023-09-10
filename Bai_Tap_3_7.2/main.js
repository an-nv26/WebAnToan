function validateForm(){
    let score=0;
    // Kiểm tra Text Input
      var textInput = document.getElementById("textInput");
      if (textInput.value === "") {
        alert("Hãy hoàn thành bài thi trước khi nộp bài");
        return;
      }

      var textInput = document.getElementById("textInput").value;
      if(textInput.toLowerCase() === "hyper text markup language"){
        score+=1;
      }

      // Kiểm tra Radio Input
      var radioGroup = document.querySelector('input[name="radioGroup"]:checked')
      if(radioGroup && radioGroup.value === "true"){
        score+=1;
      }

      // Kiểm tra Checkbox Input
      var checkboxInput = document.getElementById("checkboxInput");
      if (!checkboxInput.checked) {
        alert("Hãy hoàn thành bài thi trước khi nộp bài");
        return;
      }

      if(checkboxInput.value === "true"){
        score+=1;
      }

      // Tỉnh điểm và hiển thị ra màn hình
      var resultElement = document.getElementById("result");
      resultElement.innerHTML = "Điểm của bạn là: " + score
}