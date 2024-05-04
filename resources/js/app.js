const inputPasswords = document.querySelectorAll(".password-inputs");
inputPasswords.forEach(element => {
    console.log(element);
    const openEye = element.querySelector("#eye-hidden");
    const openClose = element.querySelector("#eye-show");
    const input = element.querySelector("input");
    const btnPassword = element.querySelector(".btn-password");
    console.log(input.type);
    btnPassword.addEventListener("click", function(e){
        e.preventDefault();
        if(input.type === "password"){
            input.type = "text";
            openEye.classList.add("hidden");
            openClose.classList.remove("hidden");
        }else{
            input.type = "password";
            openEye.classList.remove("hidden");
            openClose.classList.add("hidden");
        }
    });
});