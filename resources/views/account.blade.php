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

            <form type="submit" action="/account" method="POST" class="block-defaults name-h block-visible" id="block-name">
                @csrf
                <div class="inblock-row1">
                    Your currently stored name:
                    <br> <b>{{ $user -> name }} {{ $user -> second_name }}</b>
                </div>
                <div class="inblock-rowX">
                    <div class="row-title">New Name:</div>
                    <input type="text" name="name" class="row-input" required>
                </div>
                <div class="inblock-rowX">
                    <div class="row-title">New Second Name:</div>
                    <input type="text" name="second_name" class="row-input" required>
                </div>
                <div class="inblock-rowZ">
                    <input type="submit" value="Save" class="acc-save-btn" />
                </div>
            </form>

            <!-- EMAIL -->
            <div class="block-title" onclick="expand_email()">Manage Your Email Address</div>

            <form type="submit" action="/account" method="POST" class="block-defaults email-h block-visible" id="block-email">
                @csrf
                <div class="inblock-row1">
                    Your currently stored email address:
                    <br> <b>{{ $user -> email }}</b>
                </div>
                <div class="inblock-rowX">
                    <div class="row-title">New email address:</div>
                    <input type="email" name="email" class="row-input" required>
                </div>
                <div class="inblock-rowZ">
                    <input type="submit" value="Save" class="acc-save-btn">
                </div>
            </form>

            <!-- ADDRESS -->
            <div class="block-title" onclick="expand_address()">Manage Your Shipping Address</div>

            <form type="submit" action="/account" method="POST" class="block-defaults address-h block-visible" id="block-address">
                @csrf
                <div class="inblock-row1">
                    Address must be in the UK:
                </div>
                <div class="inblock-rowX">
                    <div class="row-title">Address line 1:</div>
                    <input type="text" name="address_line_1" class="row-input" required value="{{ $user->address_line_1 }}">
                </div>
                <div class="inblock-rowX">
                    <div class="row-title">Address line 2:</div>
                    <input type="text" name="address_line_2" class="row-input" value="{{ $user->address_line_2 }}">
                </div>
                <div class="inblock-rowX">
                    <div class="row-title">Town/City:</div>
                    <input type="text" name="city" class="row-input" required value="{{ $user->city }}">
                </div>
                <div class="inblock-rowX">
                    <div class="row-title">Postcode:</div>
                    <input type="text" name="postcode" class="row-input" required value="{{ $user->postcode }}">
                </div>
                <div class="inblock-rowZ">
                    <input type="submit" value="Save" class="acc-save-btn">
                </div>
            </form>



            <!-- CONTACT -->
            <div class="block-title" onclick="expand_contact()">Manage Your Contact Preferences</div>

            <form type="submit" action="/account" method="POST" class="block-defaults contact-h block-visible" id="block-contact">
                @csrf
                <div class="inblock-row1">
                    While storing a phone number is not compulsory,
                    we strongly recommend you do so in the event we need to contact you with regard to your order.
                </div>
                <div class="inblock-rowX">
                    <div class="row-title">Contact Number:</div>
                    <input type="text" name="phone" class="row-input" value="{{ $user -> phone }}">
                </div>
                <div class="inblock-rowZ">
                    <input type="submit" value="Save" class="acc-save-btn">
                </div>
            </form>

            <div style="height: 20px;"></div>
        </section>
        <!-- Settings section  END -->


@endsection
