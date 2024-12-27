// let nameUserInput = document.getElementById("name");
// let emailInput = document.getElementById("email");
// let passwordInput = document.getElementById("password");
// let confirmpasswordInput = document.getElementById("confirm-password");
// let buttonRegister = document.getElementById("buttonRegister");



    function toggleForm() {
        const loginForm = document.getElementById("login-form");
        const registerForm = document.getElementById("register-form");
        const toggleLink = document.getElementById("toggle-link");
    
        if (loginForm.classList.contains("hidden")) {
        loginForm.classList.remove("hidden");
        registerForm.classList.add("hidden");
        toggleLink.textContent = "Don't have an account? Sign Up";
        } else {
        loginForm.classList.add("hidden");
        registerForm.classList.remove("hidden");
        toggleLink.textContent = "Already have an account? Sign In";
        }
    }
  
//   function validation()
//   {
//     username = nameUserInput.value
//     useremail = emailInput.value
//     userpassword = passwordInput.value
//     userConfermationPassword = confirmpasswordInput.value

//     let resault = 1;

//     if(username == "" || useremail == "" ||  userpassword == "" || userConfermationPassword == "")
//     {
//         resault = 0;
//     }
//     if(username >= 0 || useremail >= 0)
//     {
//         resault = 0;
//     }
//     return resault;
//   }

// function registerationInformations()
// {
//     window.addEventListener("DOMContentLoaded",()=>{
//         buttonRegister.addEventListener("click",(e)=>{
//             e.preventDefault;
//             validation();
//             if (resault == 0) {
//                 return
//             }
//             if(resault == 1)
//             {
//                 let username = nameUserInput.value
//                 let useremail = emailInput.value
//                 let userpassword = passwordInput.value
//                 let userConfermationPassword = confirmpasswordInput.value
//                 let objUserInfos = {
//                     fullname : username,
//                     email : useremail,
//                     userpassword : userpassword,
//                     userConfermationPassword : userConfermationPassword
//                 }
//                 fetch("../src/server/register.php",
//                {
//                      method: "POST",
//                     headers: {
//                         "Content-Type": "application/json; charset=utf-8",
//                     },
//                     body: JSON.stringify(objUserInfos),
//                }
//                 ).then(response=> response.json())
//                 .then(data => console.log(data))
//             }
//         })
//     })

// }