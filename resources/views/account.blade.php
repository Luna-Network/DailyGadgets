@extends('layouts.app')

@section('content')

<!-- Settings section  START -->
<section class="settings main">
<br><br>
            <div class="section-header">
                    <h2 style="color:#242143;">
                        ACCOUNT SETTINGS
                    </h2>
                </div>
            <!-- NAME -->
            <div class="block-title" onclick="expand_name()">Manage Your Name</div>  

            <form type="submit" action="#" class="block-defaults name-h block-visible" id="block-name">
                <div class="inblock-row1">
                    Your currently stored name:
                    <br> <b>Example</b>
                </div>
                <div class="inblock-rowX">
                    <div class="row-title">New name:</div>
                    <input type="text" name="new-name" class="row-input" required>
                </div>
                <div class="inblock-rowZ">
                    <input type="submit" value="Save" class="acc-save-btn">
                </div>
            </form>  

            <!-- EMAIL --> 
            <div class="block-title" onclick="expand_email()">Manage Your Email Address</div>

            <form type="submit" action="#" class="block-defaults email-h block-visible" id="block-email">
                <div class="inblock-row1">
                    Your currently stored email address:
                    <br> <b>Example</b>
                </div>
                <div class="inblock-rowX">
                    <div class="row-title">New email address:</div>
                    <input type="email" name="new-email" class="row-input" required>
                </div>
                <div class="inblock-rowX">
                    <div class="row-title">Confirm new email address:</div>
                    <input type="email" name="new-email2" class="row-input" required>
                </div>
                <div class="inblock-rowZ">
                    <input type="submit" value="Save" class="acc-save-btn">
                </div>
            </form> 

            <!-- PASSWORD -->
            <div class="block-title" onclick="expand_password()">Manage Your Password</div>

            <form type="submit" action="#" class="block-defaults password-h block-visible" id="block-password">
                <div class="inblock-row1">
                    To change, please enter old password, then new password:
                </div>
                <div class="inblock-rowX">
                    <div class="row-title">Old password:</div>
                    <input type="email" name="old-password" class="row-input" required>
                </div>
                <div class="inblock-rowX">
                    <div class="row-title">New password:</div>
                    <input type="password" name="new-password" class="row-input" required>
                </div>
                <div class="inblock-rowX">
                    <div class="row-title">Confirm new password:</div>
                    <input type="password" name="new-password2" class="row-input" required>
                </div>
                <div class="inblock-rowZ">
                    <input type="submit" value="Save" class="acc-save-btn">
                </div>
            </form> 

            <!-- ADDRESS -->
            <div class="block-title" onclick="expand_address()">Manage Your Shipping Address</div>

            <form type="submit" action="#" class="block-defaults address-h block-visible" id="block-address">
                <div class="inblock-row1">
                    Address must be in the UK:
                </div>
                <div class="inblock-rowX">
                    <div class="row-title">Name:</div>
                    <input type="text" name="address-name" class="row-input" required>
                </div>
                <div class="inblock-rowX">
                    <div class="row-title">Address line 1:</div>
                    <input type="text" name="address-line1" class="row-input" required>
                </div>
                <div class="inblock-rowX">
                    <div class="row-title">Address line 2:</div>
                    <input type="text" name="address-line2" class="row-input">
                </div>
                <div class="inblock-rowX">
                    <div class="row-title">Town/City:</div>
                    <input type="text" name="city" class="row-input" required>
                </div>
                <div class="inblock-rowX">
                    <div class="row-title">Postcode:</div>
                    <input type="text" name="postcode" class="row-input" required>
                </div>
                <div class="inblock-rowZ">
                    <input type="submit" value="Save" class="acc-save-btn">
                </div>
            </form> 

            

            <!-- CONTACT -->
            <div class="block-title" onclick="expand_contact()">Manage Your Contact Preferences</div>

            <form type="submit" action="#" class="block-defaults contact-h block-visible" id="block-contact">
                <div class="inblock-row1">
                    While storing a phone number is not compulsory, 
                    we strongly recommend you do so in the event we need to contact you with regard to your order.
                </div>
                <div class="inblock-rowX">
                    <div class="row-title">Contact Number:</div>
                    <input type="text" name="phone" class="row-input">
                </div>
                <div class="inblock-rowX box">
                    <div class="row-title cb-title">Inform of updates by SMS?</div>
                    <input type="checkbox" name="by-sms" class="row-input cb">
                </div>
                <div class="inblock-rowX box">
                    <div class="row-title cb-title">Inform of updates by e-mail?</div>
                    <input type="checkbox" name="by-email" class="row-input cb">
                </div>
                <div class="inblock-rowZ">
                    <input type="submit" value="Save" class="acc-save-btn">
                </div>
            </form> 

            <div style="height: 20px;"></div>
        </section>
        <!-- Settings section  END -->


@endsection