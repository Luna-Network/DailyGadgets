

function menu_toggle() {
    document.getElementById("account-menu").classList.remove("active");

    var menu = document.getElementsByClassName("hamburger");
    menu[0].classList.toggle("active");
    menu[1].classList.toggle("active");
    menu[2].classList.toggle("active");

    document.getElementById("mobile-nav").classList.toggle("active");
}


function header_menu() {
    //Close all other active navigations
    document.getElementById("account-menu").classList.remove("active");

    //Toggle the desired one
    document.getElementById("header-menu").classList.toggle("active");
}

function account_menu() {
    //Close all other active navigations
    if(document.getElementById("header-menu") !== null ){
        document.getElementById("header-menu").classList.remove("active");
    }

    var menu = document.getElementsByClassName("hamburger");
    menu[0].classList.remove("active");
    menu[1].classList.remove("active");
    menu[2].classList.remove("active");
    document.getElementById("mobile-nav").classList.remove("active");

    //Toggle the desired one
    document.getElementById("account-menu").classList.toggle("active");
}

// Account side bar functions START
function show_login(){
    document.getElementById("reg-form").classList.remove("active");

    document.getElementById("login-form").classList.toggle("active");
}

function show_reg(){
    document.getElementById("login-form").classList.remove("active");

    document.getElementById("reg-form").classList.toggle("active");
}

/* function login(){
    document.getElementById("reg-form").classList.remove("active");
    document.getElementById("login-form").classList.remove("active");

} */
// Account side bar functions END

// functions for Account Settings page START
function expand_name(){
    document.getElementById("block-name").classList.toggle("active");
    document.getElementById("block-email").classList.remove("active");
    document.getElementById("block-password").classList.remove("active");
    document.getElementById("block-address").classList.remove("active");
    document.getElementById("block-bank").classList.remove("active");
    document.getElementById("block-contact").classList.remove("active");
}
function expand_email(){
    document.getElementById("block-name").classList.remove("active");
    document.getElementById("block-email").classList.toggle("active");
    document.getElementById("block-password").classList.remove("active");
    document.getElementById("block-address").classList.remove("active");
    document.getElementById("block-bank").classList.remove("active");
    document.getElementById("block-contact").classList.remove("active");
}
function expand_password(){
    document.getElementById("block-name").classList.remove("active");
    document.getElementById("block-email").classList.remove("active");
    document.getElementById("block-password").classList.toggle("active");
    document.getElementById("block-address").classList.remove("active");
    document.getElementById("block-bank").classList.remove("active");
    document.getElementById("block-contact").classList.remove("active");
}
function expand_address(){
    document.getElementById("block-name").classList.remove("active");
    document.getElementById("block-email").classList.remove("active");
    document.getElementById("block-password").classList.remove("active");
    document.getElementById("block-address").classList.toggle("active");
    document.getElementById("block-bank").classList.remove("active");
    document.getElementById("block-contact").classList.remove("active");
}
function expand_bank(){
    document.getElementById("block-name").classList.remove("active");
    document.getElementById("block-email").classList.remove("active");
    document.getElementById("block-password").classList.remove("active");
    document.getElementById("block-address").classList.remove("active");
    document.getElementById("block-bank").classList.toggle("active");
    document.getElementById("block-contact").classList.remove("active");
}
function expand_contact(){
    document.getElementById("block-name").classList.remove("active");
    document.getElementById("block-email").classList.remove("active");
    document.getElementById("block-password").classList.remove("active");
    document.getElementById("block-address").classList.remove("active");
    document.getElementById("block-bank").classList.remove("active");
    document.getElementById("block-contact").classList.toggle("active");
}
// functions for Account Settings page END

