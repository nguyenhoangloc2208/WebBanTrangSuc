function dktvForm(event) {
    event.preventDefault();
  
    var msvInput = document.getElementById("msv");
    var hoTenInput = document.getElementById("hoTen");
    var emailInput = document.getElementById("email");
    var genderRadios = document.getElementsByName("gender");
    var soThichCheckboxes = document.getElementsByName("soThich");
    var quocTichSelect = document.getElementById("quocTich");
    var textareaElements = document.querySelectorAll("textarea")
  
    if (msvInput.value === "") {
        msvInput.style.backgroundColor = "yellow";
    } else {
        msvInput.style.backgroundColor = "";
    }
    if (hoTenInput.value === "") {
        hoTenInput.style.backgroundColor = "yellow";
    } else {
        hoTenInput.style.backgroundColor = "";
    }
    var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (emailInput.value === "" || !emailPattern.test(emailInput.value)) {
        emailInput.style.backgroundColor = "yellow";
    } else {
        emailInput.style.backgroundColor = "";
    }
    var genderSelected = false;
    for (var i = 0; i < genderRadios.length; i++) {
        if (genderRadios[i].checked) {
        genderSelected = true;
        break;
        }
    }

    if (!genderSelected) {
        var genderContainer = document.querySelector(".gender.gioiTinh");
        genderContainer.style.backgroundColor = "yellow";
    } else {
        var genderContainer = document.querySelector(".gender.gioiTinh");
        genderContainer.style.backgroundColor = "";
    }

    var soThichSelected = false;
    for (var i = 0; i < soThichCheckboxes.length; i++) {
        if (soThichCheckboxes[i].checked) {
        soThichSelected = true;
        break;
        }
    }

    if (!soThichSelected) {
        var soThichContainer = document.querySelector(".soThich");
        soThichContainer.style.backgroundColor = "yellow";
    } else {
        var soThichContainer = document.querySelector(".soThich");
        soThichContainer.style.backgroundColor = "";
    }

    if (quocTichSelect.value === "") {
        quocTichSelect.style.backgroundColor = "yellow";
    } else {
        quocTichSelect.style.backgroundColor = "";
    }

    textareaElements.forEach(function(textarea) {
    if (textarea.id === "chuThich" || textarea.value.length > 200) {
        textarea.style.backgroundColor = "yellow";
    } else {
        textarea.style.backgroundColor = "";
    }
    });
  }
  
  var form = document.querySelector("form");
  form.addEventListener("submit", dktvForm);
  