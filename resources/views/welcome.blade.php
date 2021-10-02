@extends('layout.master-layout')
@section('body')

<div class="story-section">

    <div class="story create">
        <div class="dp-image">
            <img src="{{asset('public/master/images/dp.jpg')}}" alt="Profile pic">
        </div>
        <span class="dp-container">
            <i class="fa fa-plus"></i>
        </span>
        <span class="name">Create Story</span>
    </div>


    <div class="story">
        <img src="{{asset('public/master/images/model.jpg')}}" alt="Anuska's story">
        <div class="dp-container">
            <img src="{{asset('public/master/images/girl.jpg')}}" alt="">
        </div>
        <p class="name">Anuska Sharma</p>
    </div>

    <div class="story">
        <img src="{{asset('public/master/images/boy.jpg')}}" alt="Story image">
        <span class="dp-container">
            <img src="{{asset('public/master/images/dp.jpg')}}" alt="Profile pic">
        </span>
        <span class="name">Gaurav Gall</span>
    </div>

    <div class="story">
        <img src="{{asset('public/master/images/mountains.jpg')}}" alt="Story image">
        <span class="dp-container">
            <img src="{{asset('public/master/images/boy.jpg')}}" alt="Profile pic">
        </span>
        <span class="name">Priyank Saksena</span>
    </div>

    <div class="story">
        <img src="{{asset('public/master/images/shoes.jpg')}}" alt="Story image">
        <span class="dp-container">
            <img src="{{asset('public/master/images/model.jpg')}}" alt="Profile pic">
        </span>
        <span class="name">Pragati Adhikari</span>
    </div>
</div>

<div class="post create">
    <div class="post-top">
        <div class="dp">
            <img src="{{asset('public/master/images/girl.jpg')}}" alt="">
        </div>
        <input type="text" placeholder="What's on your mind, Aashish ?" />
    </div>

    <div class="post-bottom">
        <div class="action">
            <i class="fa fa-video"></i>
            <span>Live video</span>
        </div>
        <div class="action">
            <i class="fa fa-image"></i>
            <span>Photo/Video</span>
        </div>
        <div class="action">
            <i class="fa fa-smile"></i>
            <span>Feeling/Activity</span>
        </div>
    </div>
</div>

<div class="post">
    <div class="post-top">
        <div class="dp">
            <img src="{{asset('public/master/images/girl.jpg')}}" alt="">
        </div>
        <div class="post-info">
            <p class="name">Anuska Sharma</p>
            <span class="time">12 hrs ago</span>
        </div>
       <i class="fas fa-sign-out"></i> 
    </div>

    <div class="post-content">
        Roses are red <br>
        Violets are blue <br>
        I'm ugly & you are too😏
    </div>

    <div class="post-bottom">
        <div class="action">
            <i class="far fa-thumbs-up"></i>
            <span>Like</span>
        </div>
        <div class="action">
            <i class="far fa-comment"></i>
            <span>Comment</span>
        </div>
        <div class="action">
            <i class="fa fa-share"></i>
            <span>Share</span>
        </div>
    </div>
</div>

<div class="post">
    <div class="post-top">
        <div class="dp">
            <img src="{{asset('public/master/images/dp.jpg')}}" alt="">
        </div>
        <div class="post-info">
            <p class="name">Ramesh GC</p>
            <span class="time">2 days ago</span>
        </div>
        <i class="fas fa-ellipsis-h"></i>
    </div>

    <div class="post-content">
        Mountains are so cool
        <img src="images/mountains.jpg')}}" />
    </div>

    <div class="post-bottom">
        <div class="action">
            <i class="far fa-thumbs-up"></i>
            <span>Like</span>
        </div>
        <div class="action">
            <i class="far fa-comment"></i>
            <span>Comment</span>
        </div>
        <div class="action">
            <i class="fa fa-share"></i>
            <span>Share</span>
        </div>
    </div>
</div>

<div class="post">
    <div class="post-top">
        <div class="dp">
            <img src="{{asset('public/master/images/boy.jpg')}}" alt="">
        </div>
        <div class="post-info">
            <p class="name">Priyank Saksena</p>
            <span class="time">1 week ago</span>
        </div>
        <i class="fas fa-ellipsis-h"></i>
    </div>
    <div class="post-content">
        Happy birthday dear
        <img src="{{asset('public/master/images/girl_with_light.jpg')}}" alt="Mountains">
    </div>
    <div class="post-bottom">
        <div class="action">
            <i class="far fa-thumbs-up"></i>
            <span>Like</span>
        </div>
        <div class="action">
            <i class="far fa-comment"></i>
            <span>Comment</span>
        </div>
        <div class="action">
            <i class="fa fa-share"></i>
            <span>Share</span>
        </div>
    </div>
</div>

<div class="post">
    <div class="post-top">
        <div class="dp">
            <img src="{{asset('public/master/images/model.jpg')}}" alt="">
        </div>
        <div class="post-info">
            <p class="name">Pragati Adhikari</p>
            <span class="time">5 mins ago</span>
        </div>
        <i class="fas fa-ellipsis-h"></i>
    </div>
    <div class="post-content">
        Hey, everybody! My new shoes are here
        <img src="{{asset('public/master/images/shoes.jpg')}}" alt="Shoes">
    </div>
    <div class="post-bottom">
        <div class="action">
            <i class="far fa-thumbs-up"></i>
            <span>Like</span>
        </div>
        <div class="action">
            <i class="far fa-comment"></i>
            <span>Comment</span>
        </div>
        <div class="action">
            <i class="fa fa-share"></i>
            <span>Share</span>
        </div>
    </div>
</div>

@endsection