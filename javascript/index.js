let student_corner = document.getElementById("s_corner");

let f_orm = document.getElementById("f_login");

let f_orm_s = document.getElementById("f_sign");
let boo = document.querySelector(".intro");
let boo1 = document.querySelector(".content");
let logout = document.querySelector(".logout");
document.getElementById("Users").addEventListener("click",()=>{
    console.log("yoo");
    if(logout.style.display==="none"){
        logout.style.display= "block";
    }else{
        logout.style.display = "none";
    }
})

student_corner.addEventListener("click",()=>{
    console.log("ypp");
    
    if(f_orm.style.display==="none"){
        boo.style.opacity="0.7";
        boo1.style.opacity="0.7";
        // f_orm.style.opacity="1";
        f_orm.style.display = "block";
    }else{
        boo.style.opacity="1";
        boo1.style.opacity="1";
        f_orm.style.display="none";
    }

})

let new_user = document.getElementById("create_account");
new_user.addEventListener("click",()=>{
    console.log("pppp");
    if(f_orm_s.style.display==="none"){
        f_orm_s.style.display = "block";
    }else{
        f_orm_s.style.display="none"
    }
})
document.getElementById("close").addEventListener("click",()=>{
    f_orm_s.style.display="none";
        boo.style.opacity="1";
        boo1.style.opacity="1";
    f_orm.style.display = "none";
})



