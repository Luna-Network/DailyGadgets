

// function menu_toggle() {
//     document.getElementById("account-menu").classList.remove("active");
//
//     var menu = document.getElementsByClassName("hamburger");
//     menu[0].classList.toggle("active");
//     menu[1].classList.toggle("active");
//     menu[2].classList.toggle("active");
//
//     document.getElementById("mobile-nav").classList.toggle("active");
// }


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
    document.getElementById("block-contact").classList.remove("active");
}
function expand_email(){
    document.getElementById("block-name").classList.remove("active");
    document.getElementById("block-email").classList.toggle("active");
    document.getElementById("block-password").classList.remove("active");
    document.getElementById("block-address").classList.remove("active");
    document.getElementById("block-contact").classList.remove("active");
}
function expand_password(){
    document.getElementById("block-name").classList.remove("active");
    document.getElementById("block-email").classList.remove("active");
    document.getElementById("block-password").classList.toggle("active");
    document.getElementById("block-address").classList.remove("active");
    document.getElementById("block-contact").classList.remove("active");
}
function expand_address(){
    document.getElementById("block-name").classList.remove("active");
    document.getElementById("block-email").classList.remove("active");
    document.getElementById("block-password").classList.remove("active");
    document.getElementById("block-address").classList.toggle("active");
    document.getElementById("block-contact").classList.remove("active");
}
function expand_bank(){
    document.getElementById("block-name").classList.remove("active");
    document.getElementById("block-email").classList.remove("active");
    document.getElementById("block-password").classList.remove("active");
    document.getElementById("block-address").classList.remove("active");
    document.getElementById("block-contact").classList.remove("active");
}
function expand_contact(){
    document.getElementById("block-name").classList.remove("active");
    document.getElementById("block-email").classList.remove("active");
    document.getElementById("block-password").classList.remove("active");
    document.getElementById("block-address").classList.remove("active");
    document.getElementById("block-contact").classList.toggle("active");
}
// functions for Account Settings page END

var stripe = Stripe('pk_test_39ZWlPdrgvN6vzXGF8tJZPKu00Y2pqMlol');

// Create an instance of Elements.
var elements = stripe.elements();

// Custom styling can be passed to options when creating an Element.
// (Note that this demo uses a wider set of styles than the guide below.)
var style = {
    base: {
        color: '#32325d',
        fontFamily: '"Helvetica Neue", Helvetica, sans-serif',
        fontSmoothing: 'antialiased',
        fontSize: '16px',
        '::placeholder': {
            color: '#aab7c4'
        }
    },
    invalid: {
        color: '#fa755a',
        iconColor: '#fa755a'
    }
};

// Create an instance of the card Element.
var card = elements.create('card', {
    style: style,
    hidePostalCode: true
});

// Add an instance of the card Element into the `card-element` <div>.
card.mount('#card-element');

// Handle real-time validation errors from the card Element.
card.addEventListener('change', function(event) {
    var displayError = document.getElementById('card-errors');
    if (event.error) {
        displayError.textContent = event.error.message;
    } else {
        displayError.textContent = '';
    }
});

// Handle form submission.
var form = document.getElementById('payment-form');
form.addEventListener('submit', function(event) {
    event.preventDefault();

    var options = {
        name: document.getElementById('name_on_card').value,
        address_line1: document.getElementById('address').value,
        address_city: document.getElementById('city').value,
        address_state: document.getElementById('province').value,
        address_zip: document.getElementById('postcode').value,
    };

    stripe.createToken(card, options).then(function(result) {
        if (result.error) {
            // Inform the user if there was an error.
            var errorElement = document.getElementById('card-errors');
            errorElement.textContent = result.error.message;
        } else {
            // Send the token to your server.
            stripeTokenHandler(result.token);
        }
    });
});

// Submit the form with the token ID.
function stripeTokenHandler(token) {
    // Insert the token ID into the form so it gets submitted to the server
    var form = document.getElementById('payment-form');
    var hiddenInput = document.createElement('input');
    hiddenInput.setAttribute('type', 'hidden');
    hiddenInput.setAttribute('name', 'stripeToken');
    hiddenInput.setAttribute('value', token.id);
    form.appendChild(hiddenInput);

    // Submit the form
    form.submit();

}

