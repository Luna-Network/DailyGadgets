
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
            ABOUT US
        </h2>
    </div>
   <section class="featured overwrite">
        <div class="main section1">
            <div class="short">
                <img class="image-block" src="{{asset('imgs/Picture3.png')}}">
            </div>
            <div class="long">
                <h1 class="center">Simonas Stankevicius</h1><br/>
                <p>
                    Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.
                </p>
            </div>
        </div>
   </section>
   <br><br>
   <section class="featured2 overwrite">
        <div class="main section1">
            <div class="short">
                <img class="image-block" src="{{asset('imgs/Picture4.png')}}">
            </div>
            <div class="long">
                <h1 class="center">Markas Vysniauskas</h1><br/>
                <p>
                    Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.
                </p>
            </div>
        </div>
   </section>
    <br><br>
   <section class="featured3 overwrite">
        <div class="main section1">
            <div class="short">
                <img class="image-block" src="{{asset('imgs/Picture1.png')}}">
            </div>
            <div class="long">
                <h1 class="center">Karolis Abramovicius</h1><br/>
                <p>
                    Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.
                </p>
            </div>
        </div>
   </section>
   <br><br>
   <section class="featured4 overwrite">
        <div class="main section1">
            <div class="short">
                <img class="image-block" src="{{asset('imgs/Picture2.png')}}">
            </div>
            <div class="long">
                <h1 class="center">Dovydas Pukinskis</h1><br/>
                <p>
                    Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.
                </p>
            </div>
        </div>
   </section>


@endsection()
















