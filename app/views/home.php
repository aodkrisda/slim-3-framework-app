{% extends 'templates/layout.php' %}

{% block title %}Home{% endblock %}

{% block header %}
	<div class="jumbotron" id="home">
        <img src="images/936765_549398778444348_190649848_n.jpg" id="home_me" class="img-rounded img-responsive" alt="Responsive image">
    </div>
{% endblock %}

{% block content %}
	<div class="row marketing">

        <div class="col-lg-12 text-center">
          <h1>Welcome to my presentation</h1>
          <p>Hi! I am Vladimir and this is my personal demo web page.
          It surely isn't fully fledged web site but it's pretty neat and minimalist.
          Just the way I love it. And i hope it will serve the nobel purpose! :)</p></br>

          <p>Actually, I found out for call for a Rookie PHP Developer just two days ago from a friend and I thought it
          	would be maybe better to make a simple web presentation and not a pretentious compilation of bits and pieces of
          	code that I wasn't able to properly structure into meaningful whole. There's a lot of project dependencies inside the app
          	because I am working on authentication system that it's meant to house, and in this form it is not a representative application,
          	but I will give it a try.</p>

          <p>I wouldn't want to bother you further more, so if you are ready let's go to the About page where
           I have presented bits and pieces - or highlights If you wish - of mine personal development,
            and how I got into programming and web development.</p></br>
        </div>

      </div>
{% endblock %}