@extends('layouts.app')

@section('content')
<style>
    h1 {
        text-align:center;
    }
    p, h3 {
        width: 80%;
        margin: auto;
    }
    .button {
        width: 100%;
        display:flex;
        justify-content:center;
        margin-top: 1.5em;
    }
</style>

<br><br><br><br>
    <div class="section-header">
        <h2>
            Terms and conditions
        </h2>
    </div>

   <section class="featured3">
        <div class="main">
            <h1 class="center">T&C Apply</h1><br/>
            <p>
            Lorem Ipsum<br/>
            is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. 
            </p>
        </div>
   </section>
   <div class="section-header">
        <h2>
            Frequently asked questions:
        </h2>
    </div>
   <section class="featured2">
        <div class="main">
            <h3 class="center">Why this site is so cool?</h3><br/>
            <p>
                Because we made it!<br/>
                And we know what we do :)            
            </p><br/><br/><br/>

            <h3 class="center">What mark are we aiming at?</h3><br/>
            <p>
                100%+ is our minimum aim for the start, let's see how it goes!<br/>
                Project is fully working, actually takes payments and is fully customizable from admin logon.          
            </p><br/><br/><br/>


            <h3 class="center">Plans for the future?</h3><br/>
            <p>
                This website will be used as an actual e-shop for personal online business<br/>
                Should be live by the end of summer 2020! :)          
            </p>


        </div>
   </section>



@endsection()
