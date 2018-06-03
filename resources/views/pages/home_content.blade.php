
@extends('master')
@section('main_content')

    <div class="article">
        <h2>Lorem Ipsum Dolor Sit</h2>
        <p>March 15, 2015 | Posted by <a href="#">Owner</a> | Filed under <a href="#">templates</a>, <a href="#">internet</a></p>
        <img src="{{asset('public/front_end_asset/images/img2.jpg')}}" width="605" height="146" alt="" />
        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec libero. Suspendisse bibendum. Cras id urna. <a href="#">Morbi tincidunt, orci ac convallis aliquam, lectus turpis varius lorem, eu posuere nunc justo tempus leo.</a> Donec mattis, purus nec placerat bibendum, dui pede condimentum odio, ac blandit ante orci ut diam. Cras fringilla magna. Phasellus suscipit, leo a pharetra condimentum, lorem tellus eleifend magna, eget fringilla velit magna id neque. Curabitur vel urna. In tristique orci porttitor ipsum. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec libero. Suspendisse bibendum. Cras id urna. Morbi tincidunt, orci ac convallis aliquam.</p>
        <p><a href="{{URL::to('/blog_read_more')}}" class="btn">Read more</a> <a href="#" class="btn">Comments (7)</a></p>
        <div class="clr"></div>
    </div>

    @endsection