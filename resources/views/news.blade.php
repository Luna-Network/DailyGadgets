@extends('layouts.app')

@section('content')
<style>
    h1 {
        text-align:center;
    }
    p {
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
            LATEST NEWS
        </h2>
    </div>
   <section class="featured">
        <div class="main">
            <h1 class="center">Apple iPhone 11 Pro</h1><br/>
            <p>
                Review by Jonathan Bray, IT Pro<br/>
                Considering how good its rivals are, the iPhone 11 Pro is simply too expensive. But there is no getting around the fact that the 11 Pro is a brilliant phone. It looks much nicer than the photos suggest and its cameras are beyond compare. It shoots amazing video, and its battery life is a huge improvement on last year’s flagship iPhones. If you’re an Apple devotee and don’t mind splashing out, this is the phone to buy. The only thing to decide is whether to stick with the pocket-friendly iPhone 11 Pro or opt for the giant-sized iPhone 11 Pro Max. Price: £958 exc VAT (64GB).
            </p>
            <div class="button">
                <a href="http://127.0.0.1:8000/shop" class="btn btn-outline-danger btn-rounded btn-sm my-0 waves-effect waves-light">Get your iPhone 11 Pro</a>
            </div>
        </div>
   </section>
   <br><br>
   <section class="featured2">
        <div class="main">
            <h1 class="center">Samsung Galaxy S20</h1><br/>
            <p>
            Review by Adam Shepherd, IT Pro<br/>
            Samsung has earned a place as one of the top three smartphone manufacturers in the world, and its latest crop of devices looks to be its most promising yet. While not a radical departure from previous iterations, the new Galaxy S20 and S20+ are attractive and well-specced. If they prove to be as good in practice as they look upon first impression, Samsung will probably have another solid hit on its hands. Price: £799 for the S20 and £999 for the S20+.            </p>
            <div class="button">
                <a href="http://127.0.0.1:8000/shop" class="btn btn-outline-danger btn-rounded btn-sm my-0 waves-effect waves-light">Get your Samsung Galaxy S20</a>
            </div>
        </div>
   </section>
    <br><br>
   <section class="featured3">
        <div class="main">
            <h1 class="center">Huawei P40 Pro+</h1><br/>
            <p>
            Review by Bobby Hellard, IT Pro<br/>
            The Chinese firm has launched a new series of flagship phones - the P40, the P40 Pro and the P40 Pro+ - the latter of which is the biggest, and possibly the best, of the three. The P40 Pro+ looks like another knockout device from Huawei. It has a huge display, exciting AI features and superzoom cameras. Price: £1,300 (launching in June).
            <div class="button">
                <a href="http://127.0.0.1:8000/shop" class="btn btn-outline-danger btn-rounded btn-sm my-0 waves-effect waves-light">Get your Huawei P40 Pro+</a>
            </div>
        </div>
   </section>


@endsection()
