@extends('master')
@section('main_content')

<div class="mainbar">
    <div class="article">
        <h2>Contact</h2>
        <p>You can find more of my free template designs at my website. For premium commercial designs, you can check out DreamTemplate.com.</p>
    </div>
    <div class="article">
        <h2>Send us mail</h2>
        <form action="#" method="post" id="sendemail">
            <ol>
                <li>
                    <label for="name">Name (required)</label>
                    <input id="name" name="name" class="text" />
                </li>
                <li>
                    <label for="email">Email Address (required)</label>
                    <input id="email" name="email" class="text" />
                </li>
                <li>
                    <label for="website">Website</label>
                    <input id="website" name="website" class="text" />
                </li>
                <li>
                    <label for="message">Your Message</label>
                    <textarea id="message" name="message" rows="8" cols="50"></textarea>
                </li>
                <li>
                    <input type="image" name="imageField" id="imageField" src="{{asset('public/front_end_asset/images/submit.gif')}}" class="send" />
                    <div class="clr"></div>
                </li>
            </ol>
        </form>
    </div>
</div>
    @endsection