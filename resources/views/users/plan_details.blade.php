@extends('users/layout')
@section('container')
<section>
        <div class="plans-ban">
            <div class="container">
                <div class="row">
                    <span class="pri">Pricing</span>
                    <h1>Get Started <br> Pick your Plan Now</h1>
                    @foreach($userdetail as $list)
                    <a href="{{url('user/about_self/'.$list->rand_id)}}" class="cta">SKIP</a>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="plans-main">
            <div class="container">
                <div class="row">
                    <ul>
                        <li>
                            <div class="pri-box">
                                <h2>Smart 6</h2>
                                <p>Valid for 6 Months </p>
                                <a href="JavaScript:void(0)" class="cta">Get Started</a>
                                <span class="pri-cou"><b>₹1000</b></span>
                                <ol>
                                    <li><i class="fa fa-check" aria-hidden="true"></i> Send unlimited messages and chat, view 15 verified mobile numbers
                                    </li>
                                    <li><i class="fa fa-check" aria-hidden="true"></i>Check compatibility with matches by viewing unlimited horoscopes</li>
                                    <li><i class="fa fa-close close" aria-hidden="true"></i>View and contact ID verified 30 matches with photos from exclusive
                                    prime section</li>
                                    <li><i class="fa fa-close close" aria-hidden="true"></i>Priority customers service helpline</li>
                                    <li><i class="fa fa-close close" aria-hidden="true"></i>Get better visibility and responses from matches with one month profile highlighter</li>
                                </ol>
                            </div>
                        </li>
                        <li>
                            <div class="pri-box pri-box-pop">
                                <span class="pop-pln">Most popular plan</span>
                                <h2>Personalized Scheme</h2>
                                <p>Valid for 6 Months</p>
                                <a href="JavaScript:void(0)" class="cta">Get Started</a>
                                <span class="pri-cou"><b>₹10000</b></span>
                                <ol>
                                    <li><i class="fa fa-check" aria-hidden="true"></i> Send unlimited messages and chat, view 15 verified mobile numbers</li>
                                    <li><i class="fa fa-check" aria-hidden="true"></i>Check compatibility with matches by viewing unlimited horoscopes</li>
                                    <li><i class="fa fa-check" aria-hidden="true"></i>View and contact ID verified 30 matches with photos from exclusive prime section</li>
                                    <li><i class="fa fa-check" aria-hidden="true"></i>Priority customers service helpline</li>
                                    <li><i class="fa fa-check" aria-hidden="true"></i>Get better visibility and responses from matches with one month profile highlighter</li>
                                </ol>
                            </div>
                        </li>
                        <li>
                            <div class="pri-box">
                                <h2>Smart 9</h2>
                                <p>Valid for 9 Months</p>
                                <a href="JavaScript:void(0)" class="cta">Get Started</a>
                                <span class="pri-cou"><b>₹3000</b></span>
                                <ol>
                                     <li><i class="fa fa-check" aria-hidden="true"></i> Send unlimited messages and chat, view 15 verified mobile numbers</li>
                                    <li><i class="fa fa-check" aria-hidden="true"></i>Check compatibility with matches by viewing unlimited horoscopes</li>
                                    <li><i class="fa fa-check" aria-hidden="true"></i>View and contact ID verified 30 matches with photos from exclusive prime section</li>
                                    <li><i class="fa fa-check" aria-hidden="true"></i>Priority customers service helpline</li>
                                    <li><i class="fa fa-close close" aria-hidden="true"></i>Get better visibility and responses from matches with one month profile highlighter</li>
                                </ol>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
</section>

@endsection