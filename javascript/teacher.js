let teacher_corner = document.getElementById("t_corner");

let f_login = document.getElementById("t_login");
let f_sign = document.getElementById("t_sign");
let aww = document.querySelector(".intro");
let aww1 = document.querySelector(".content");
// let logout = document.querySelector(".logout");
// document.getElementById("Users").addEventListener("click",()=>{
//     console.log("yoo");
//     if(logout.style.display==="none"){
//         logout.style.display= "block";
//     }else{
//         logout.style.display = "none";
//     }
// })

teacher_corner.addEventListener("click",()=>{
    console.log("ypp000");
    
    if(f_login.style.display==="none"){
        aww.style.opacity="0.7";
        aww1.style.opacity="0.7";
        // f_orm.style.opacity="1";
        f_login.style.display = "block";
    }else{
        aww.style.opacity="1";
        aww1.style.opacity="1";
        f_login.style.display="none";
    }

})

let nyaa_user = document.getElementById("createt_account");
nyaa_user.addEventListener("click",()=>{
    console.log("pppp");
    if(f_sign.style.display==="none"){
        f_sign.style.display = "block";
    }else{
        f_sign.style.display="none"
    }
})
document.getElementById("closet").addEventListener("click",()=>{
    f_sign.style.display="none";
        aww.style.opacity="1";
        aww1.style.opacity="1";
    f_login.style.display = "none";
})