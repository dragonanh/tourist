@extends('layout.landing')

@section('content')
<main class="site-main" id="main">
    <div class="container">
        <div class="step-page1">
            <div class="logo clearfix"><a class="logo-blue" href="/"><img src="img/logo.png" alt=""></a></div>
            <div class="title-page">Buy sim/card number
                <div class="note">(*) Please take photos of your passport to provide information</div>
            </div>
            <div class="steps clearfix">
                <ul>
                    <li class="step active"><span class="number">1</span><span class="text">Photos</span></li>
                    <li class="step"><span class="number">2</span><span class="text">Information</span></li>
                    <li class="step"><span class="number">3</span><span class="text">Sim/card</span></li>
                    <li class="step"><span class="number">4</span><span class="text">Plan</span></li>
                </ul>
            </div>
            <div class="content-main clearfix">
                <div class="form">
                    <div class="form-box">
                        <label>Email*</label>
                        <input class="form-control" type="text">
                    </div>
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="img-form">
                                <label>Front of passport*</label>
                                <div class="img">
                                    <input type="file" name="filename" accept="image/gif, image/jpeg, image/png" onchange="readURL(this);"><img id="blah" src="#" alt="image">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="img-form">
                                <label>Back passport*</label>
                                <div class="img">
                                    <input type="file" name="filename" accept="image/gif, image/jpeg, image/png" onchange="readURL(this);"><img id="blah" src="#" alt="image">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="img-form">
                                <label>Portrait photography*</label>
                                <div class="img">
                                    <input type="file" name="filename" accept="image/gif, image/jpeg, image/png" onchange="readURL(this);"><img id="blah" src="#" alt="image">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="button-center"><a class="btn" href="#">Continue</a></div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
