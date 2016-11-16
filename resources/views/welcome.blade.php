@extends('layouts.app')

@section('content')
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
    jQuery(document).ready(function($) {
        $(".scroll").click(function(event){     
            event.preventDefault();
            $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
        });
    });
</script>
<!-- start-smoth-scrolling -->
<style type="text/css">

    h1,h2,h3,h4,h5,h6{
        font-family: 'Volkhov', serif;
        margin:0;
    }
    ul,label{
        margin:0;
        padding:0;
    }
    body a:hover{
        text-decoration:none;
    }
    /*-- banner --*/
    input[type="submit"],.tab-grid-left .nav-tabs li a,.agileits_services_grid h4,.faq li a,.footer ul.footer-nav li a,.copy-right p a,.mail-foot a{
        transition: .5s ease-in;
        -webkit-transition: .5s ease-in;
        -moz-transition: .5s ease-in;
        -o-transition: .5s ease-in;
        -ms-transition: .5s ease-in;
    }
    .banner{
        background:url(../images/banner.jpg) no-repeat 0px 0px;
        background-size:cover;
        -webkit-background-size:cover;
        -moz-background-size:cover;
        -o-background-size:cover;
        -ms-background-size:cover;
    }
    .banner,.banner-Info{
        min-height:700px;
    }
    .banner-Info{
        background:url(https://i.ytimg.com/vi/9olaKOI_1gI/maxresdefault.jpg)  no-repeat center center fixed; 
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
    }
    .w3l_banner_info{
        text-align:center;
        padding:14em 0 0;
    }
    .w3l_banner_info p{
        color:#fff;
        text-transform:uppercase;
        position:relative;
        padding-bottom:4em;
    }
    .w3l_banner_info p:before{
        content: '';
        position: absolute;
        bottom: 0%;
        width: 20%;
        height: 1px;
        background: #fff;
        left: 40%;
    }
    .w3l_banner_info p:after{
        content: '';
        position: absolute;
        bottom: -40%;
        right:47%;
        background: url(../images/img-sp.png) no-repeat 0px 0px;
        display: block;
        width: 64px;
        height: 64px;
    }
    /*Wrapper*/
    .wrapper{
        position: relative;
    }
    .wrapper h2 {
        font-size: 3em;
        color: #fff;
        margin:1.5em 0 .5em;
        text-transform:capitalize;
    }
    .wrapper .sentence {
        font-size: 2em;
        color: #fff;
        text-transform:capitalize;
        font-family: 'Volkhov', serif;
    }

    /*Pop Effect*/
    .popEffect{
        display: inline;
        text-indent: 8px;
    }
    .popEffect span{
        animation: pop 10.5s linear infinite 0s;
        -ms-animation: pop 10.5s linear infinite 0s;
        -webkit-animation: pop 10.5s linear infinite 0s;
        color:#36DD7F;
        opacity: 0;
        overflow: hidden;
        position: absolute;
    }
    .popEffect span:nth-child(2){
        animation-delay: 2.5s;
        -ms-animation-delay: 2.5s;
        -webkit-animation-delay: 2.5s;
    }
    .popEffect span:nth-child(3){
        animation-delay: 5s;
        -ms-animation-delay: 5s;
        -webkit-animation-delay: 5s;
    }
    .popEffect span:nth-child(4){
        animation-delay: 7.5s;
        -ms-animation-delay: 7.5s;
        -webkit-animation-delay: 7.5s;
    }
    .popEffect span:nth-child(5){
        animation-delay: 10s;
        -ms-animation-delay: 10s;
        -webkit-animation-delay: 10s;
    }

    /*Pop Effect Animation*/
    @-moz-keyframes pop{
        0% { opacity: 0; }
        5% { opacity: 0; -moz-transform: rotate(0deg) scale(0.10) skew(0deg) translate(0px); }
        10% { opacity: 1; -moz-transform: translateY(0px); }
        25% { opacity: 1; -moz-transform: translateY(0px); }
        30% { opacity: 0; -moz-transform: translateY(0px); }
        80% { opacity: 0; }
        100% { opacity: 0;}
    }
    @-webkit-keyframes pop{
        0% { opacity: 0; }
        5% { opacity: 0; -webkit-transform: rotate(0deg) scale(0.10) skew(0deg) translate(0px);}
        10% { opacity: 1; -webkit-transform: translateY(0px); }
        25% { opacity: 1; -webkit-transform: translateY(0px); }
        30% { opacity: 0; -webkit-transform: translateY(0px); }
        80% { opacity: 0; }
        100% { opacity: 0; }
    }
    @-ms-keyframes pop{
        0% { opacity: 0; }
        5% { opacity: 0; -ms-transform: rotate(0deg) scale(0.10) skew(0deg) translate(0px); }
        10% { opacity: 1; -ms-transform: translateY(0px); }
        25% { opacity: 1; -ms-transform: translateY(0px); }
        30% { opacity: 0; -ms-transform: translateY(0px); }
        80% { opacity: 0; }
        100% { opacity: 0; }
    }
    /*-- //banner --*/
    /*-- navigation --*/
    .top-nav {
        padding-bottom: 1em;
        border-bottom: 1px solid #ECECEC;
    }
    .navbar-default {
        background: none;
        border: none;
    }
    .navbar-default .navbar-brand {
        color:#EC5611;
    }
    .navbar-brand {
        padding:30px 0 0;
        font-size: 1.2em;
        height: 80px;
    }
    .navbar-default .navbar-brand:hover, .navbar-default .navbar-brand:focus {
        color:#EC5611;
    }
    .navbar-brand span{
        display: block;
        font-size: .3em;
        color: #212121;
        text-align: right;
        line-height: 2.5;
    }
    .navbar {
        margin-bottom: 0;
    }
    .navbar-default .navbar-nav > li > a {
        color:#999;
    }
    .navbar-nav > li > a {
        font-size: 14px;
        padding:35px 0px 10px;
        /*-- w3layouts --*/
    }
    .navbar-default .navbar-nav > li > a:hover{
        color: #212121;
    }
    .navbar-default .navbar-nav > li > a:focus {
        color:#999;
    }
    /* Shylock (by @benhanks040888) */
    .menu--shylock .menu__link {
        position: relative;
        margin: 0 2em;
        padding-right: 0;
        padding-left: 0;
        -webkit-transition: color 0.4s;
        transition: color 0.4s;
    }

    .menu--shylock .menu__item--current .menu__link,
    .menu--shylock .menu__item--current .menu__link:hover{
        color: #212121;
    }

    .menu--shylock .menu__item--current .menu__link::after,
    .menu--shylock .menu__item--current .menu__link::before {
        -webkit-transform: scale3d(1, 1, 1);
        transform: scale3d(1, 1, 1);
    }

    .menu--shylock .menu__item--current .menu__link::before {
        -webkit-transition-delay: 0s;
        transition-delay: 0s;
    }

    .menu--shylock .menu__link:hover{
        color: #b5b5b5;
    }

    .menu--shylock .menu__link:hover::before {
        -webkit-transform: scale3d(1, 1, 1);
        transform: scale3d(1, 1, 1);
        -webkit-transition-delay: 0s;
        transition-delay: 0s;
    }

    .menu--shylock .menu__link::before,
    .menu--shylock .menu__link::after {
        content: '';
        position: absolute;
        bottom: 0;
        /*-- agileits --*/
        left: 0;
        width: 100%;
        height: 2px;
        -webkit-transform: scale3d(0, 1, 1);
        transform: scale3d(0, 1, 1);
        -webkit-transform-origin: center left;
        transform-origin: center left;
        -webkit-transition: transform 0.4s cubic-bezier(0.22, 0.61, 0.36, 1);
        transition: transform 0.4s cubic-bezier(0.22, 0.61, 0.36, 1);
    }

    .menu--shylock .menu__link::before {
        background:#36DD7F;
        -webkit-transition-delay: 0.4s;
        transition-delay: 0.4s;
    }

    .menu--shylock .menu__link::after {
        background:#36DD7F;
    }
    /*-- //navigation --*/
    /*-- nav-bottom --*/
    .nav-bottom,.team,.about,.services,.gallery,.reservation,.mail{
        padding:5em 0;
    }
    .nav-bottom h3,.wthree_about_right h3,.team h3,.services h3,.gallery h3,.reservation h3,.mail h3{
        text-align: center;
        color: #36DD7F;
        font-size: 1em;
    }
    .nav-bottom h3 span,.wthree_about_right h3 span,.team h3 span,.services  h3 span,.gallery h3 span,.reservation h3 span,.mail h3 span{
        display: block;
        color: #212121;
        font-size: 2.5em;
        position: relative;
        padding-bottom:.5em;
    }
    .nav-bottom h3 span:before,.nav-bottom h3 span:after,.team h3 span:before,.team h3 span:after,.services h3 span:before,.services h3 span:after,.gallery h3 span:before,.gallery h3 span:after,.reservation h3 span:before,.reservation h3 span:after,.mail h3 span:before,.mail h3 span:after{
        content: '';
        position: absolute;
        bottom: 0%;
    }
    .nav-bottom h3 span:before,.team h3 span:before,.services h3 span:before,.services h3 span:before,.gallery h3 span:before,.reservation h3 span:before,.mail h3 span:before{
        left: 43%;
        width: 15%;
        height: 1px;
        background: #212121;
    }
    .nav-bottom h3 span:after,.team h3 span:after,.services span:after,.gallery h3 span:after,.reservation h3 span:after,.mail h3 span:after{
        /*-- w3layouts --*/
        right: 48.5%;
        width: 2%;
        background: #EE692D;
        height: 4px;
    }
    p.iure{
        color:#999;
        line-height:1.8em;
        margin:2em auto 4em;
        width:80%;
        font-style:italic;
        text-align: center;
    }
    .tab-grid-left .nav-tabs {
        float: none;
        border-bottom: 0;
    }
    .tab-grid-left .nav-tabs li {
        float: none;
        margin: 1px 0 0;
    }
    .tab-grid-left .nav-tabs li a {
        margin-right: 0;
        border: 0;
        background-color: #EBEBEB;
        color: #212121;
        padding: 1em 4em;
        font-size: 1em;
        text-transform: uppercase;
        border-radius: 0;
    }
    .tab-grid-left .nav-tabs li a:hover {
        background-color: #EC5611;
        color: #fff;
    }
    .tab-grid-left .nav-tabs .active .glyphicon {
      color: #333;
  }
  .tab-grid-left .nav-tabs > li.active > a, .tab-grid-left .nav-tabs > li.active > a:hover, .tab-grid-left .nav-tabs > li.active > a:focus {
    border: 0;
    background-color:#EC5611;
    color: #fff;
}
.tab-grid-left .tab-content .tab-pane {
    display: none;
}
.tab-grid-left .tab-content .active {
    display: block;
}
/*-- agileits --*/
.tab-grid-left {
    text-align: center;
}
.tab-content{
    padding: 2em 3em;
    box-shadow:0px 0px 3px #DDD;
    -webkit-box-shadow:0px 0px 3px #DDD;
    -moz-box-shadow:0px 0px 3px #DDD;
    -o-box-shadow:0px 0px 3px #DDD;
    -ms-box-shadow:0px 0px 3px #DDD;
}
.w3ls_nav_bottom_left h4 {
    font-size: 1.5em;
    color: #212121;
}
.w3ls_nav_bottom_left p{
    color:#999;
    line-height:1.8em;
    margin: 1em 0;
}
.w3ls_nav_bottom_left {
    margin: 2.5em 0 0;
}
/*-- //nav-bottom --*/
/*-- about --*/
.wthree_about_left,.wthree_about_right{
    padding:0;
}
.wthree_about_right{
    background:#f5f5f5;
    padding:3.27em 8em;
}
.wthree_about_right h3{
    text-align:left;
}
.wthree_about_right h3 span:before,.wthree_about_right h3 span:after{
    content: '';
    position: absolute;
    bottom: 0%;
}
.wthree_about_right h3 span:before{
    left:0%;
    width:30%;
    height: 1px;
    background: #212121;
}
.wthree_about_right h3 span:after{
    right:85.5%;
    width: 2%;
    background: #EE692D;
    height: 4px;
}
.wthree_about_right p{
    margin:2em 0 3em;
    color:#999;
    line-height:1.8em;
}
.wthree_about_right p i{
    display:block;
    margin:1em 0 0;
}
.wthree_about_right_grid_left{
    padding: 0;
}
.wthree_about_right_grid_left span{
    font-size:1.5em;
    color:#EC5611;
    top:.8em;
}
.wthree_about_right_grid:hover .wthree_about_right_grid_left span{
    color:#fff;
}
.wthree_about_right_grid_right h4{
    text-transform:capitalize;
    font-size:1.2em;
    color:#212121;
}
.wthree_about_right_grid_right p{
    margin:1em 0 0;
    color:#999;
    line-height:1.8em;
}
.wthree_about_right_grid_right {
    padding-right: 0;
}
.wthree_about_right_grid:nth-child(2) {
    margin-bottom: 2em;
}
/* Rectangle In */
.hvr-rectangle-in {
  display: inline-block;
  vertical-align: middle;
  -webkit-transform: translateZ(0);
  transform: translateZ(0);
  box-shadow: 0 0 1px rgba(0, 0, 0, 0);
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
  -moz-osx-font-smoothing: grayscale;
  position: relative;
  background:#36DD7F;
  -webkit-transition-property: color;
  transition-property: color;
  -webkit-transition-duration: 0.3s;
  transition-duration: 0.3s;
  width: 70px;
  height: 70px;
  text-align: center;
}
.hvr-rectangle-in:before {
  content: "";
  position: absolute;
  z-index: -1;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background:#F5F5F5;
  -webkit-transform: scale(1);
  transform: scale(1);
  -webkit-transition-property: transform;
  transition-property: transform;
  -webkit-transition-duration: 0.3s;
  transition-duration: 0.3s;
  -webkit-transition-timing-function: ease-out;
  transition-timing-function: ease-out;
}
.hvr-rectangle-in:hover, .hvr-rectangle-in:focus, .hvr-rectangle-in:active {
  color: white;
}
.hvr-rectangle-in:hover:before, .hvr-rectangle-in:focus:before, .hvr-rectangle-in:active:before,.wthree_about_right_grid:hover .hvr-rectangle-in:before,.agileits_services_grid:hover .hvr-rectangle-in:before{
  -webkit-transform: scale(0);
  transform: scale(0);
}
/*-- //about --*/
/*-- team --*/
.agile_team_grids{
    margin:3em 0 0;
}
.agile_team_grid{
    text-align:center;
}
.agile_team_grid h4{
    font-size:1em;
    color:#EC5611;
    margin:1em 0;
}
.agile_team_grid h4 span{
    display:block;
    font-size:.8em;
    margin:.5em 0 0;
    color:#212121;
    font-family: 'Open Sans', sans-serif;
    font-weight: 500;
}
.agile_team_grid p{
    width: 65%;
    margin: 3em auto 0;
    text-align: center;
    line-height: 1.8em;
    color: #999;
}
/*-- //team --*/
/*-- social-icons --*/
.social-nav {
    padding: 0;
    list-style: none;
    display: inline-block;
    margin: 10px auto;
}
.social-nav li {
    display: inline-block;
}
.model-8 a {
    background: #999;
}
.model-8 a{
    color:#C28F44;
}
.social-nav a {
    display: inline-block;
    float: left;
    width: 30px;
    height: 30px;
    font-size: 20px;
    color:#0D0D0D;
    text-decoration: none;
    cursor: pointer;
    text-align: center;
    line-height: 30px;
    background:#E7E7E7;
    position: relative;
    -webkit-transition: 0.5s ease-in;
    -moz-transition: 0.5s ease-in;
    -o-transition: 0.5s ease-in;
    transition: 0.5s ease-in;
    -ms-transition: 0.5s ease-in;
}
.model-8 a:hover {
    color:#0D0D0D;
}
.model-8 a:hover {
    -webkit-box-shadow: 0 30px 0 inset;
    -o-box-shadow: 0 30px 0 inset;
    -ms-box-shadow: 0 30px 0 inset;
    -moz-box-shadow: 0 30px 0 inset;
    box-shadow: 0 30px 0 inset;
}
a.facebook i{
    background:url(../images/img-sp.png) no-repeat -4px -69px;
    display: block;
    width: 30px;
    height: 30px;
    -webkit-transition: 0.5s ease-in;
    -moz-transition: 0.5s ease-in;
    -o-transition: 0.5s ease-in;
    transition: 0.5s ease-in;
    -ms-transition: 0.5s ease-in;
}
a.facebook:hover i{
    background:url(../images/img-sp.png) no-repeat -4px -94px;
    display: block;
}
a.twitter i{
    background:url(../images/img-sp.png) no-repeat -35px -69px;
    display: block;
    width: 30px;
    height: 30px;
    -webkit-transition: 0.5s ease-in;
    -moz-transition: 0.5s ease-in;
    -o-transition: 0.5s ease-in;
    transition: 0.5s ease-in;
    -ms-transition: 0.5s ease-in;
}
a.twitter:hover i{
    background:url(../images/img-sp.png) no-repeat -35px -95px;
    display: block;
}
a.g i{
    background:url(../images/img-sp.png) no-repeat -76px -69px;
    display: block;
    width: 30px;
    height: 30px;
    -webkit-transition: 0.5s ease-in;
    -moz-transition: 0.5s ease-in;
    -o-transition: 0.5s ease-in;
    transition: 0.5s ease-in;
    -ms-transition: 0.5s ease-in;
}
a.g:hover i{
    background:url(../images/img-sp.png) no-repeat -76px -95px;
    display: block;
}
a.p i{
    background:url(../images/img-sp.png) no-repeat -119px -69px;
    display: block;
    width: 30px;
    height: 30px;
    -webkit-transition: 0.5s ease-in;
    -moz-transition: 0.5s ease-in;
    -o-transition: 0.5s ease-in;
    transition: 0.5s ease-in;
    -ms-transition: 0.5s ease-in;
}
a.p:hover i{
    background:url(../images/img-sp.png) no-repeat -119px -96px;
    display: block;
}
.ih-item {
  position: relative;
  -webkit-transition: all 0.35s ease-in-out;
  -moz-transition: all 0.35s ease-in-out;
  transition: all 0.35s ease-in-out;
}
.ih-item,
.ih-item * {
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}
.ih-item img {
  width: 100%;
  height: 100%;
}

.ih-item.circle,.ih-item.circle .img {
    position: relative;
    border-radius: 50%;
    -webkit-border-radius: 50%;
    -moz-border-radius: 50%;
    -o-border-radius: 50%;
    -ms-border-radius: 50%;
}
.ih-item.circle,.ih-item.circle .img,.ih-item.circle.effect1 .spinner {
    width: 150px;
    height: 150px;
    margin: 0 auto;
}
.ih-item.circle .img:before {
  position: absolute;
  display: block;
  content: '';
  width: 100%;
  height: 100%;
  border-radius: 50%;
  box-shadow: inset 0 0 0 16px rgba(255, 255, 255, 0.6), 0 1px 2px rgba(0, 0, 0, 0.3);
  -webkit-transition: all 0.35s ease-in-out;
  -moz-transition: all 0.35s ease-in-out;
  transition: all 0.35s ease-in-out;
}
.ih-item.circle .img img {
  border-radius: 50%;
}
.ih-item.circle .info {
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  text-align: center;
  border-radius: 50%;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
}
.ih-item.circle.effect1 .spinner {
    border: 2px solid #36DD7F;
    border-right-color: #DFDFDF;
    border-bottom-color: #DFDFDF;
    border-radius: 50%;
    -webkit-transition: all 0.8s ease-in-out;
    -moz-transition: all 0.8s ease-in-out;
    transition: all 0.8s ease-in-out;
}
.ih-item.circle.effect1 .img {
    position: absolute;
    top: 10px;
    bottom: 10px;
    left: 10px;
    right: 10px;
    width: auto;
    height: auto;   
}
.ih-item.circle.effect1 .img:before {
  display: none;
}
.ih-item.circle.effect1.colored .info {
  background: #1a4a72;
  background: rgba(26, 74, 114, 0.6);
}
.ih-item.circle.effect1 .info {
    top: 10px;
    bottom: 10px;
    left: 10px;
    right: 10px;
    background: #333333;
    background: rgba(0, 0, 0, 0.6);
    opacity: 0;
    -webkit-transition: all 0.8s ease-in-out;
    -moz-transition: all 0.8s ease-in-out;
    transition: all 0.8s ease-in-out;
}
.ih-item.circle.effect1 .info h4 {
    color: #fff;
    position: relative;
    font-size: 1.2em;
    margin: 0 18px;
    padding: 1.6em 0 .5em;
}
.ih-item.circle.effect1 .info p {
    color: #fff;
    padding: 10px 5px;
    font-style: italic;
    margin: 0 10px;
    font-size: 13px;
    border-top: 1px solid #fff;
    width: 85% !important;
}
.ih-item.circle.effect1:hover .spinner,.agile_team_grid:hover .ih-item.circle.effect1 .spinner{
  -webkit-transform: rotate(180deg);
  -moz-transform: rotate(180deg);
  -ms-transform: rotate(180deg);
  -o-transform: rotate(180deg);
  transform: rotate(180deg);
}
.ih-item.circle.effect1:hover .info,.agile_team_grid:hover .ih-item.circle.effect1 .info{
  opacity: 1;
}
p.eum{
    width: 65%;
    position: relative;
    color: #999;
    line-height: 1.8em;
    margin: 3em auto 0;
    text-align: center;
    padding-left: 2em;
    padding: 1em 0 0 3em;
}
p.eum:before{
    position:absolute;
    top:0%;
    left:0%;
    background:url(../images/img-sp.png) no-repeat -4px -140px;
    display:block;
    width:32px;
    height:32px;
    content:'';
}
/*-- //social-icons --*/
/*-- services --*/
.services{
    background:url(../images/5.jpg) no-repeat 0px 0px;
    background-size:cover;
    -webkit-background-size:cover;
    -moz-background-size:cover;
    -o-background-size:cover;
    -ms-background-size:cover;
    min-height:500px;
}
.services h3 span,.mail h3 span{
    color:#fff;
}
.services h3 span:before,.mail h3 span:before{
    background:#fff;
}
.agileits_services_grid{
    text-align:center;
}
.agileits_services_grid1 span{
    font-size:1.3em;
    color:#fff;
}
.agileits_services_grid h4{
    font-size: 1.5em;
    color: #EE692D;
    margin: 1.5em 0 1em;
    text-transform: capitalize;
}
.agileits_services_grid:hover h4{
    color: #fff;
}
.agileits_services_grid p{
    color:#fff;
    line-height:1.8em;
}
.agileits_services_grids {
    margin: 3em 0 0;
}
.agileits_services_grid1.hvr-rectangle-in:before {
    background: #A0A0A0;
}
.agileits_services_grid1 span{
    top:1.1em;
}
/*-- //services --*/
/*-- gallery --*/
.agile_gallery_grids{
    margin:3em 0 0;
}
.demo { margin: 30px auto;}
.demo > li {float:left;list-style-type: none;margin: 10px;}
.demo > li img { width:265px; cursor:pointer;}
/*jquery.picEyes*/

.picshade {
  position: fixed;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  background-color: #000;
  opacity: 0.91;
  filter: alpha(opacity=91);
  z-index: 99;
  display: none;
}

.pictures_eyes_close {
  position: fixed;
  top: 30px;
  right: 30px;
  display: inline-block;
  width: 26px;
  height: 26px;
  background: url(../images/close.png) no-repeat;
  z-index: 100;
  display: none;
}

.pictures_eyes {
  position: fixed;
  width: 100%;
  left: 0;
  top: 0;
  z-index: 199;
  display: none;
}

.pictures_eyes_in {
  position: relative;
  text-align: center;
}

.pictures_eyes_in img { max-height: 500px; }

.pictures_eyes_in .prev, .pictures_eyes_in .next {
  position: absolute;
  top: 50%;
  width: 51px;
  height: 51px;
  cursor: pointer;
}

.pictures_eyes_in .prev {
  left: 35px;
  background: url(../images/left.png) no-repeat;
}

.pictures_eyes_in .next {
  right: 35px;
  background: url(../images/right.png) no-repeat;
}

.pictures_eyes_indicators {
  position: fixed;
  left: 0;
  bottom: 15px;
  width: 100%;
  text-align: center;
  z-index: 299;
}

.pictures_eyes_indicators a {
  display: inline-block;
  width: 50px;
  height: 50px;
  margin: 6px 3px 0 3px;
  border: 1px solid #ddd;
  border-radius: 10px;
  box-shadow: 0 0 2px #000;
  filter: alpha(opacity=50);
  opacity: 0.5;
  overflow: hidden;
}

.pictures_eyes_indicators img { height: 50px; }

.pictures_eyes_indicators .current {
  filter: alpha(opacity=100);
  opacity: 1;
}
.gallery-grid1{
    position:relative;
    overflow:hidden;
    cursor:pointer;
}
.gallery-grid1 .p-mask, .row .product .vm-product-media-container .p-mask {
    opacity: 0;
    visibility: hidden;
    background:rgba(75, 75, 75, 0.74);
    bottom: 0%;
    position: absolute;
    padding:1.5em 1.5em;
    width: 100%;
    -webkit-transform: translate3d( 0px, 100%, 0px );
    -moz-transform: translate3d( 0px, 100%, 0px );
    -ms-transform: translate3d( 0px, 100%, 0px );
    -o-transform: translate3d( 0px, 100%, 0px );
    transform: translate3d( 0px, 100%, 0px );
    -webkit-transition: all .5s ease 0s;
    -moz-transition: all .5s ease 0s;
    transition: all .5s ease 0s;
    text-align: left;
}
.gallery-grid1 .p-mask .p-desc{
    color: #a3a3a3;
    position: relative;
    display: block;
    margin-bottom: 10px;
    padding-bottom: 10px;
    font-size: 1em;
}
.gallery-grid1:hover .p-mask, .row .product:hover .p-mask {
    opacity: 1;
    visibility: visible;
    -webkit-transform: translate3d( 0px, 0px, 0px );
    -moz-transform: translate3d( 0px, 0px, 0px );
    -ms-transform: translate3d( 0px, 0px, 0px );
    -o-transform: translate3d( 0px, 0px, 0px );
    transform: translate3d( 0px, 0px, 0px );
}
.p-mask h4{
    color:#36DD7F;
    font-size:1.5em;
    text-decoration:none;
    line-height:1.8em;
}
.p-mask p{
    margin: 0;
    color: #f5f5f5;
    line-height: 1.8em;
}
/*-- //gallery --*/
/*-- count-down --*/
.count-down{
    background:url(../images/16.jpg) no-repeat 0px 0px;
    background-size:cover;
    -webkit-background-size:cover;
    -moz-background-size:cover;
    -o-background-size:cover;
    -ms-background-size:cover;
    min-height:400px;
    padding:3.5em 0;
}
.count-down h3{
    text-align: center;
    font-size: 1.5em;
    color: #fff;
    line-height: 1.8em;
    margin: 0 auto 2em;
    text-transform: capitalize;
    width: 70%;
    position:relative;
    padding-left:2em;
}
.count-down h3:before{
    position:absolute;
    top:0%;
    left:0%;
    background:url(../images/img-sp.png) no-repeat -7px -197px;
    display:block;
    width:32px;
    height:32px;
    content:'';
}
.w3_updates_bottom_grid p{
    font-size: 3em;
    color:#fff;
    margin: 0;
    font-weight: 700;
}
.w3_updates_bottom_grid h4{
    font-size:1em;
    color:#36DD7F;
}
.w3_updates_bottom_grid1{
    padding: 1em 1em 2em;
    text-align: center;
    border: 4px double #fff;
}
/*-- //count-down --*/
/*-- reservation --*/
.agileits_reservation {
    margin: 3em auto 0;
    width: 70%;
}
.cuisine input[type="text"],.book_date input[type="text"],select#country,select#country1,.phone_email input[type="text"],.phone_email1 input[type="email"]{
    width: 100%;
    color: #9F9F9F;
    font-size: 14px;
    padding: 10px 10px 10px 50px;
    outline: none;
    background: #F8F8F8;
    border: 1px solid #ECECEC;
}
.phone_email1{
    float:right;
}
.phone_email{
    float:left;
}
.phone_email,.phone_email1{
    width:48.5%;
}
.cuisine {
    margin-bottom: 2em;
}
.cuisine,.book_date,.section_room,.phone_email,.phone_email1 {
    position: relative;
}
.span1_of_1{
    float: left;
    list-style:none;
    width:31.99%;
}
.span1_of_1:nth-child(2) {
    margin: 0 1em;
}
.cuisine span,.book_date span,.section_room span,.phone_email span,.phone_email1 span {
    position: absolute;
    color: #212121;
    font-size: 1em;
    top: .8em;
    left: 1em;
}
.date_btn{
    margin:2em 0 0;
}
.date_btn form input[type="submit"] {
    text-transform: capitalize;
    width: 100%;
    background: #36DD7F;
    color: #212121;
    padding: 10px 0;
    border: none;
    font-size: 1em;
    outline: none;
    font-weight:600;
}
.date_btn form input[type="submit"]:hover{
    background: #212121;
    color:#fff;
}
.span1_of_1:nth-child(4) {
    margin-left: 17em;
}
.agileits_reservation_grid{
    padding: 2em 0 0;
}
/*-- //reservation --*/
/*-- mail --*/
.mail{
    background:url(../images/17.jpg) no-repeat 0px 0px;
    background-size:cover;
    -webkit-background-size:cover;
    -moz-background-size:cover;
    -o-background-size:cover;
    -ms-background-size:cover;
    min-height:600px;
}
.w3agile_mail_grids{
    margin:3em 0 0;
}
.w3agile_mail_grid input[type="text"],.w3agile_mail_grid input[type="email"],.w3agile_mail_grids textarea{
    outline:none;
    border:1px solid #B8B8B8;
    font-size:14px;
    color:#fff;
    padding:10px;
    width:100%;
    background:rgba(153, 153, 153, 0.53);
}
.w3agile_mail_grid input[type="email"],.w3agile_mail_grid input[type="text"]:nth-child(2){
    margin:1em 0;
}
.w3agile_mail_grids textarea{
    resize:none;
    min-height:200px;
    margin: 0 0 0 1em;
    width: 97.5% !important;
}
.w3agile_mail_grids input[type="submit"]{
    outline: none;
    border: none;
    font-size: 1em;
    color: #fff;
    padding: 10px 0;
    width: 30%;
    background:#EE692D;
    margin: 2em 0 0 24em;
    text-transform: uppercase;
}
.w3agile_mail_grids input[type="submit"]:hover{
    background:#fff;
    color: #212121;
}
.faq li {
    margin-top: 0.5em;
}
.faq li:nth-child(1) {
    margin: 0;
}
.faq li a {
    padding: 1em;
    width: 100%;
    display: block;
    position: relative;
    color: #212121;
    font-size: 1.1em;
    text-decoration: none;
    background: #E2E2E2;
    text-align: center;
}
.faq li a:hover,.faq li a.active{
    color: #fff;
    background:#212121;
}
.faq span.glyphicon {
    margin-left: 1em;
    vertical-align: middle;
    font-size: 1.1em;
    top: 0;
}
.faq li a.active span.glyphicon {
    -webkit-transform: rotatex(180deg);
    transform: rotatex(180deg);
    -moz-transform: rotatex(180deg);
    -o-transform: rotatex(180deg);
    -ms-transform: rotatex(180deg);
}
.faq iframe {
    width: 100%;
    min-height: 25em;
    border: none;
    margin:0 0 -6px;
}
/*-- //mail --*/
/*-- footer --*/
.footer{
    padding:4em 0;
    text-align:center;
}
.footer ul.footer-nav li{
    display:inline-block;
    margin:0 1em;
}
.footer ul.footer-nav li a{
    font-size: 14px;
    text-decoration: none;
    color: #212121;
    text-transform: uppercase;
}
.footer ul.footer-nav li a:hover{
    color:#36DD7F;
}
.footer-social li{
    margin:0 1em;
}
.footer h3{
    margin: 2em 0 0;
    color: #999;
}
.footer h3,.mail-foot a{
    line-height: 1.5em;
    font-size: 14px;
}
.footer h3 span{
    display: block;
    margin:1em 0;
}
.mail-foot a{
    color:#212121;
    text-decoration:none;
    font-family: 'Volkhov', serif;
}
.mail-foot a:hover{
    color:#36DD7F;
}
.copy-right{
    margin: 3em 0 0;
    padding: 3em 0 0;
    border-top: 4px double #DDD;
    text-align: center;
}
.copy-right p{
    color:#999;
    line-height:1.8em;
}
.copy-right p a{
    color:#EE692D;
    text-decoration:none;
}
.copy-right p a:hover{
    color:#999;
}
.footer h3 i, .mail-foot i {
    padding-right:1.5em;
}
ul.footer-nav {
    padding-bottom: 1em;
}
/*-- //footer --*/
/*-- to-top --*/
#toTop {
    display: none;
    text-decoration: none;
    position: fixed;
    bottom: 20px;
    right: 2%;
    overflow: hidden;
    z-index: 999; 
    width: 32px;
    height: 32px;
    border: none;
    text-indent: 100%;
    background: url(../images/arrow.png) no-repeat 0px 0px;
}
#toTopHover {
    width: 32px;
    height: 32px;
    display: block;
    overflow: hidden;
    float: right;
    opacity: 0;
    -moz-opacity: 0;
    filter: alpha(opacity=0);
}
/*-- //to-top --*/
/*-----start-responsive-design------*/
@media (max-width:1440px){
    .wthree_about_right {
        padding:1.9em 3em 1em;
    }
    .wthree_about_right p {
        margin: 1em 0 2em;
    }
    .wthree_about_right_grid:nth-child(2) {
        margin-bottom: 0em;
    }
    .agileits_reservation {
        width: 85%;
    }
    .span1_of_1 {
        width: 32.2%;
    }
}
@media (max-width:1366px){
    .banner, .banner-Info {
        min-height: 590px;
    }
    .w3l_banner_info {
        padding: 9em 0 0;
    }
    .w3ls_nav_bottom_left {
        margin: 1.5em 0 0;
    }
    .wthree_about_right p {
        margin:1em 0 1.45em;
    }
    .wthree_about_right p i {
        margin: .5em 0 1em;
    }
}
@media (max-width:1280px){
    .wthree_about_right_grid_right p{
        margin: 1em 0 1em !important;
    }
    .wthree_about_right_grid_right h4 {
        font-size: 1.1em;
    }
    .wthree_about_right_grid_right {
        padding: 0;
    }
    .wthree_about_right {
        padding: 1em 3em .89em;
    }
    .pictures_eyes_indicators {
        bottom: 105px;
    }
    .span1_of_1:nth-child(4) {
        margin-left: 20em;
    }
}
@media (max-width: 1080px){
    .banner, .banner-Info {
        min-height: 510px;
    }
    .wrapper h2 {
        font-size: 2.7em;
    }
    .w3l_banner_info {
        padding: 8em 0 0;
    }
    .nav-bottom, .team, .about, .services, .gallery, .reservation, .mail {
        padding: 4em 0;
    }
    p.iure {
        width: 100%;
    }
    .nav-bottom h3 span:before, .team h3 span:before, .services h3 span:before, .services h3 span:before, .gallery h3 span:before, .reservation h3 span:before, .mail h3 span:before {
        left: 38%;
        width: 25%;
    }
    .w3ls_nav_bottom_left {
        margin: 0;
    }
    .wthree_about_right_grid {
        padding: 0;
    }
    .wthree_about_left {
        width:100%;
        float:none;
    }
    .wthree_about_left img{
        margin:0 auto;
        width: 50%;
    }
    .wthree_about_right {
        padding: 3em;
        float: none;
        width: 100%;
    }
    .wthree_about_right_grid:nth-child(2) {
        margin-bottom: 2em;
    }
    .services {
        background-position:-215px 0px;
    }
    .demo > li img {
        width: 293px;
    }
    .gallery {
        padding: 4em 0 2em !important;
    }
    .count-down h3 {
        width: 90%;
    }
    .span1_of_1 {
        width: 31.99%;
    }
    .span1_of_1:nth-child(4) {
        margin-left: 17em;
    }
    .faq iframe {
        min-height: 18em;
    }
    .w3agile_mail_grids input[type="submit"] {
        margin: 2em 0 0 22em;
    }
}
@media (max-width: 1024px){
    .wrapper .sentence {
        font-size: 1.8em;
    }
}
@media (max-width:991px){
    .banner, .banner-Info {
        min-height: 480px;
    }
    .banner{
        background-position: -75px 0px;
    }
    .w3l_banner_info {
        padding: 7em 0 0;
    }
    .wrapper h2 {
        font-size: 2.5em;
    }
    .menu--shylock .menu__link {
        margin: 0 1.1em;
    }
    .nav-bottom h3 span, .wthree_about_right h3 span, .team h3 span, .services h3 span, .gallery h3 span, .reservation h3 span, .mail h3 span {
        font-size: 2.1em;
    }
    .nav-bottom h3 span:before, .team h3 span:before, .services h3 span:before, .services h3 span:before, .gallery h3 span:before, .reservation h3 span:before, .mail h3 span:before {
        left: 34%;
        width: 33%;
    }
    .w3ls_nav_bottom_left {
        margin: 0 0 2em;
        padding: 0;
    }
    .w3ls_nav_bottom_right img {
        margin: 0 auto;
        width: 60%;
    }
    .wthree_about_right_grid {
        padding:0 1em;
        float: left;
        width: 50%;
    }
    .wthree_about_right p i {
        margin: .5em 0 0em;
    }
    .wthree_about_right p {
        margin: 2em 0;
    }
    .agile_team_grid {
        float: left;
        width: 25%;
    }
    p.eum {
        width: 90%;
    }
    .agileits_services_grid {
        float: left;
        width: 50%;
    }
    .agileits_services_grid:nth-child(2) {
        margin-bottom:2em;
    }
    .demo > li img {
        width: 220px;
    }
    .gallery-grid1 .p-mask, .row .product .vm-product-media-container .p-mask {
        padding: 1em;
    }
    .count-down h3 {
        width: 100%;
        font-size: 1.4em;
    }
    .w3_updates_bottom_grid {
        float: left;
        width: 25%;
    }
    .w3_updates_bottom_grid p {
        font-size: 2.5em;
    }
    .w3_updates_bottom_grid1 {
        padding: 1em .5em 2em;
    }
    .count-down {
        min-height: 365px;
    }
    .agileits_reservation {
        width: 100%;
    }
    .span1_of_1 {
        width: 31.8%;
    }
    .span1_of_1:nth-child(4) {
        margin-left: 15.5em;
    }
    .w3agile_mail_grids textarea {
        width: 95.7% !important;
    }
    .w3agile_mail_grids input[type="submit"] {
        margin: 2em 0 0 17em;
    }
    .footer {
        padding: 3em 0;
    }
    .copy-right {
        margin: 2.5em 0 0;
        padding: 2.5em 0 0;
    }
}
@media (max-width:800px){
    .wthree_about_left img {
        width: 60%;
    }
    .w3agile_mail_grids input[type="submit"] {
        margin: 2em 0 0 16em;
    }
}
@media (max-width:768px){
    .banner, .banner-Info {
        min-height: 450px;
    }
    .w3l_banner_info p:after {
        right: 44%;
    }
    .w3l_banner_info p:before {
        width: 30%;
        left: 36%;
    }
    .wrapper h2 {
        font-size: 2.2em;
    }
    .wrapper .sentence {
        font-size: 1.7em;
    }
    .nav-bottom, .team, .about, .services, .gallery, .reservation, .mail {
        padding: 3em 0;
    }
    .navbar-brand {
        font-size: 1em;
    }
    .nav-bottom h3 span, .wthree_about_right h3 span, .team h3 span, .services h3 span, .gallery h3 span, .reservation h3 span, .mail h3 span {
        font-size: 2em;
    }
    .nav-bottom h3 span:after, .team h3 span:after, .services span:after, .gallery h3 span:after, .reservation h3 span:after, .mail h3 span:after {
        right: 47.5%;
        width: 4%;
    }
    p.eum {
        margin: 2em auto 0;
    }
}
@media (max-width:767px){
    .navbar-toggle {
        margin: 2em 0 0;
    }
    .navbar-default .navbar-toggle {
        border-color: #212121;
    }
    .navbar-default .navbar-toggle .icon-bar {
        background-color: #212121;
    }
    .navbar-default .navbar-toggle:hover, .navbar-default .navbar-toggle:focus {
        background-color: transparent;
    }
    .navbar-nav {
        margin: 0;
        background: #ECECEC;
        padding:0 0 1em;
    }
    .navbar-default .navbar-collapse, .navbar-default .navbar-form {
        border: none;
    }
    .navbar-collapse {
        padding: 0;
    }
    .navbar-nav > li > a {
        padding: 25px 0 10px;
        text-align: center;
    }
}
@media (max-width:736px){
    .demo > li img {
        width: 209px;
    }
    .span1_of_1 {
        width: 31.7%;
    }
}
@media (max-width:667px){
    .w3l_banner_info {
        padding: 5em 0 0;
    }
    .wrapper h2 {
        font-size: 2em;
    }
    .wrapper .sentence {
        font-size: 1.5em;
    }
    .banner, .banner-Info {
        min-height: 370px;
    }
    .agile_team_grid {
        float: left;
        width: 50%;
    }
    .agile_team_grid:nth-child(2) {
        margin-bottom:2em;
    }
    .demo > li img {
        width: 186px;
    }
    .p-mask h4 {
        font-size: 1.3em;
    }
    .span1_of_1 {
        width: 31.6%;
    }
    .w3_updates_bottom_grid h4 {
        font-size: .9em;
    }
    .w3_updates_bottom_grid1 {
        padding: 1em .3em 2em;
    }
}
@media (max-width:640px){
    .nav-bottom h3, .wthree_about_right h3, .team h3, .services h3, .gallery h3, .reservation h3, .mail h3 {
        font-size: 14px;
    }
    .tab-content {
        padding: 2em 2em;
    }
    .wthree_about_right {
        padding:3em 2em 2em;
    }
    .wthree_about_right_grid {
        padding:0 1em 0 0;
    }
    .agile_team_grid {
        width: 50%;
    }
    .agile_team_grid:nth-child(2) {
        margin-bottom:2em;
    }
    .agileits_services_grid h4 {
        font-size: 1.3em;
    }
    .demo > li img {
        width: 276px;
    }
    .pictures_eyes_indicators a {
        width: 45px;
        height: 45px;
    }
    .pictures_eyes_indicators {
        bottom:120px;
    }
    .pictures_eyes {
        width: 85%;
        left: 8% !important;
    }
    .pictures_eyes_in img {
        width: 100%;
    }
    .pictures_eyes_in .next {
        right: 0px;
    }
    .pictures_eyes_in .prev {
        left: 0;
    }
    .w3_updates_bottom_grid {
        width: 50%;
    }
    .w3_updates_bottom_grid:nth-child(2) {
        margin-bottom:2em;
    }
    .count-down {
        background-position:-540px 0px;
    }
    .span1_of_1 {
        width: 31.5%;
    }
    .span1_of_1:nth-child(4) {
        margin-left: 12.5em;
    }
    .faq iframe {
        min-height: 13em;
    }
    .w3agile_mail_grids input[type="submit"] {
        margin: 2em 0 0 12em;
        width: 40%;
    }
}
@media (max-width: 600px){
    .demo > li img {
        width: 256px;
    }
    .span1_of_1 {
        width: 31.4%;
    }
}
@media (max-width:568px){
    .w3l_banner_info {
        padding: 3em 0 0;
    }
    .w3l_banner_info p:before {
        width: 45%;
        left: 28%;
    }
    .wrapper h2 {
        font-size: 1.8em;
    }
    .wrapper .sentence {
        font-size: 1.3em;
    }
    .banner, .banner-Info {
        min-height: 300px;
    }
    .tab-grid-left .nav-tabs li a {
        padding: 1em 2em;
    }
    .demo > li img {
        width: 240px;
    }
    .span1_of_1 {
        width: 31.2%;
    }
}
@media (max-width:480px){
    .wrapper h2 {
        font-size: 1.6em;
    }
    .wrapper .sentence {
        font-size: 1.1em;
    }
    .banner, .banner-Info {
        min-height: 260px;
    }
    .w3l_banner_info p:after {
        bottom:-29%;
        right:45%;
        background: url(../images/img-sp.png) no-repeat 0px 0px;
        background-size: 785%;
        width: 40px;
        height: 37px;
    }
    .w3l_banner_info p {
        padding-bottom: 3em;
        font-size: 13px;
    }
    .navbar-brand {
        font-size: .9em;
        padding: 20px 0 0;
        height: 58px;
    }
    .navbar-toggle {
        margin: 1.3em 0 0;
    }
    .nav-bottom, .team, .about, .services, .gallery, .reservation, .mail {
        padding: 2em 0;
    }
    .nav-bottom h3 span, .wthree_about_right h3 span, .team h3 span, .services h3 span, .gallery h3 span, .reservation h3 span, .mail h3 span {
        font-size: 1.8em;
    }
    .nav-bottom h3 span:before, .team h3 span:before, .services h3 span:before, .services h3 span:before, .gallery h3 span:before, .reservation h3 span:before, .mail h3 span:before {
        left: 28%;
        width: 45%;
    }
    .tab-grid-left {
        float: none;
        width: 100%;
    }
    p.iure {
        margin: 2em 0;
    }
    .tab-grid-left .nav-tabs li a {
        padding: .8em 0;
        font-size: 14px;
    }
    .w3ls_nav_bottom_left h4 {
        font-size: 1.3em;
    }
    .tab-content {
        padding: 1.5em;
    }
    .tab-grid-right {
        float: none;
        width: 100%;
    }
    .wthree_about_left img {
        width: 80%;
    }
    .wthree_about_right {
        padding: 2em;
    }
    .wthree_about_right_grid {
        float: none;
        width: 100%;
    }
    .wthree_about_right_grid:nth-child(2) {
        margin:1em 0;
    }
    .wthree_about_right_grid:nth-child(4) {
        margin:1em 0 0;
    }
    .agileits_services_grid h4 {
        font-size: 1.2em;
    }
    .agileits_services_grid {
        float: none;
        width: 100%;
    }
    .agileits_services_grid:nth-child(2) {
        margin: 2em 0;
    }
    .agileits_services_grid:nth-child(3) {
        margin-bottom: 2em;
    }
    .services {
        background-position: -900px 0px;
    }
    .demo > li img {
        width: 415px;
    }
    .gallery {
        padding: 2em 0 2em !important;
    }
    .demo {
        margin: 0;
    }
    .agile_gallery_grids {
        margin: 2em 0 0;
    }
    .count-down {
        padding: 2em 0;
    }
    .phone_email, .phone_email1 {
        width: 100%;
        float: none;
    }
    .cuisine {
        margin-bottom: 1em;
    }
    .phone_email1 {
        margin: 1em 0 0;
    }
    .agileits_reservation_grid {
        padding: 1em 0 0;
    }
    .span1_of_1 {
        width: 100%;
        float: none;
    }
    .span1_of_1:nth-child(2) {
        margin: 1em 0;
    }
    .span1_of_1:nth-child(4) {
        margin-left: 0;
    }
    .w3agile_mail_grids textarea {
        width: 93% !important;
        min-height: 150px;
    }
    .w3agile_mail_grids input[type="submit"] {
        margin: 2em 0 0 1em;
        width: 92%;
    }
    .mail {
        background-position:-260px 0px;
    }
    .footer {
        padding: 2em 0;
    }
    .footer h3 {
        margin: 1em 0 0;
    }
    .copy-right {
        margin: 1.5em 0 0;
        padding: 1.5em 0 0;
    }
    .pictures_eyes_indicators {
        bottom: 35px;
    }
}
@media (max-width: 414px){
    .wrapper h2 {
        font-size: 1.4em;
    }
    .wrapper .sentence {
        font-size: .91em;
    }
    .banner, .banner-Info {
        min-height: 235px;
    }
    .w3ls_nav_bottom_left p {
        margin: 1em 0 0;
    }
    .w3ls_nav_bottom_left {
        margin: 0 0 1em;
    }
    .wthree_about_right {
        padding: 2em 1em;
    }
    .wthree_about_right_grid_right h4 {
        font-size: 1em;
    }
    .wthree_about_right_grid_right p {
        margin: 1em 0 0em !important;
    }
    .wthree_about_right_grid:nth-child(2) {
        margin: 2em 0;
    }
    .wthree_about_right_grid:nth-child(4) {
        margin: 2em 0 0;
    }
    .agile_team_grids {
        margin: 2em 0 0;
    }
    .agile_team_grid {
        width: 100%;
        float: none;
    }
    .agile_team_grid:nth-child(2) {
        margin-bottom: 2em;
        margin: 2em 0;
    }
    .agile_team_grid:nth-child(3) {
        margin-bottom: 2em;
    }
    .pictures_eyes_indicators {
        bottom: 70px;
    }
    .count-down h3 {
        font-size: 1em;
    }
    .w3_updates_bottom_grid {
        float: none;
        margin: 0 auto;
    }
    .w3_updates_bottom_grid p {
        font-size: 2em;
    }
    .w3_updates_bottom_grid:nth-child(2) {
        margin-bottom: 2em;
        margin: 2em auto;
    }
    .w3_updates_bottom_grid:nth-child(3) {
        margin-bottom: 2em;
    }
    .count-down {
        background-position: -1035px 0px;
    }
    .faq li a {
        font-size: 1em;
    }
    .w3agile_mail_grids {
        margin: 2em 0 0;
    }
    .w3agile_mail_grid {
        padding: 0;
    }
    .w3agile_mail_grids textarea {
        width: 100% !important;
        margin: 0;
    }
    .w3agile_mail_grids input[type="submit"] {
        margin: 1em 0 0 0em;
        width: 100%;
        font-size: 14px;
    }
    .mail {
        min-height: 575px;
    }
    .footer ul.footer-nav li {
        margin: 0 0.7em;
    }
    .copy-right p {
        padding: 0 1em;
    }
}
@media (max-width:384px){
    .w3l_banner_info p {
        font-size: 12px;
    }
    .wrapper h2 {
        font-size: 1.3em;
    }
    .wrapper .sentence {
        font-size: .85em;
    }
    .nav-bottom h3 span:before, .team h3 span:before, .services h3 span:before, .services h3 span:before, .gallery h3 span:before, .reservation h3 span:before, .mail h3 span:before {
        left: 24%;
        width: 55%;
    }
    .wthree_about_left img {
        width: 90%;
    }
    .agileits_services_grids {
        margin: 2em 0 0;
    }
}
@media (max-width:375px){
    .wrapper h2 {
        font-size: 1.2em;
    }
    .wrapper .sentence {
        font-size: .8em;
    }
    .banner, .banner-Info {
        min-height: 220px;
    }
    .w3ls_nav_bottom_right img {
        width: 90%;
    }
    p.eum {
        width: 100%;
        padding: 0 0 0 2.5em;
    }
}
@media (max-width:320px){
    .wrapper h2 {
        font-size: 1.06em;
    }
    .wrapper .sentence {
        font-size: 1em;
        text-align: left;
    }
    .w3l_banner_info {
        padding: 2.5em 0 0;
    }
    .banner, .banner-Info {
        min-height: 195px;
    }
    .navbar-brand {
        font-size: .8em;
    }
    .nav-bottom h3 span, .wthree_about_right h3 span, .team h3 span, .services h3 span, .gallery h3 span, .reservation h3 span, .mail h3 span {
        font-size: 1.6em;
    }
    p.iure {
        margin: 1em 0;
    }
    p,.cuisine input[type="text"],.footer h3, .mail-foot a,.footer ul.footer-nav li a,.w3agile_mail_grid input[type="text"], .w3agile_mail_grid input[type="email"], .w3agile_mail_grids textarea, .book_date input[type="text"], select#country, select#country1, .phone_email input[type="text"], .phone_email1 input[type="email"]{
        font-size:13px;
    }
    .footer ul.footer-nav li {
        margin: 0 0.5em;
    }
    .agileits_reservation {
        margin: 2em auto 0;
    }
    .tab-grid-left,.tab-grid-right {
        padding: 0;
    }
    .wthree_about_right h3 span:before {
        width: 40%;
    }
    .wthree_about_right h3 span:after {
        right: 79.5%;
        width: 5%;
    }
    .menu--shylock .menu__link {
        margin: 0 1em;
    }
    .navbar-nav > li > a {
        padding: 20px 0 10px;
        font-size: 13px;
    }
    .wthree_about_right_grid_left span {
        font-size: 1.3em;
    }
    .hvr-rectangle-in {
        width: 50px;
        height: 50px;
    }
    .wthree_about_right_grid_left span {
        top: .7em;
    }
    p.eum:before {
        top: -27%;
    }
    .agileits_services_grid1 span {
        top: .7em;
    }
    .p-mask h4 {
        font-size: 1.3em;
    }
    .pictures_eyes_indicators a {
        width: 30px;
        height: 30px;
        border-radius: 5px;
    }
    .pictures_eyes_in .prev, .pictures_eyes_in .next {
        top: 35%;
    }
    .count-down h3 {
        font-size: 14px;
        padding-left: 3em;
    }
    .w3_updates_bottom_grid {
        width: 65%;
    }
    .w3_updates_bottom_grid h4,.date_btn form input[type="submit"] {
        font-size: 14px;
    }
    .date_btn {
        margin: 1em 0 0;
    }
    .faq iframe {
        min-height: 10em;
    }
}
</style>

<body id="app-layout">
    <!-- banner -->
    <div class="banner">
        <div class="banner-Info">
            <div class="container">
                <div class="w3l_banner_info">
                    <p>PIZZAAPP</p>
                    <section class="wrapper">
                        <h2>Um software completo.</h2>
                        <div class="sentence">Oferecemos para você
                            <div class="popEffect">
                                <span>o melhor dos softwares.</span>
                                <span>Simples e fácil.</span>
                                <span>Qualidade.</span>
                                <span>Otimização.</span>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
    <!-- //banner -->
    <!--navigation-->
    <div class="top-nav">
        <div class="container">
            <nav class="navbar navbar-default">
                <div class="navbar-header navbar-left">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <h1><a class="navbar-brand" href="/">PizzaApp<span> ® </span></a></h1>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
                    <nav class="menu menu--shylock">
                        <ul class="nav navbar-nav navbar-left menu__list">
                            <li class="menu__item menu__item--current"><a href="/login" class="menu__link">Login</a></li>
                            <li class="menu__item"><a href="/register" class="scroll menu__link">Registro</a></li>
                            
                        </ul>   
                    </nav>
                </div>
            </nav>  
        </div>  
    </div>  
    <!--navigation-->


    @endsection
