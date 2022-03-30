@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="data:image/jpeg;base64,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" style="height: 60%;" class="rounded-circle" alt="">
        </div>
        <div class="col-9 pt-5">
            <div>
                <h1>freeCodeCamp</h1>
            </div>
            <div class="d-flex">
                <div class="pe-5"><strong>153</strong> posts</div>
                <div class="pe-5"><strong>23k</strong> followers</div>
                <div class="pe-5"><strong>212</strong> following</div>
            </div>
            <div class="pt-4 fw-bold">
                freeCodeCamp.org
            </div>
            <div>We're a global community of millions of people learning to code together. LearnToCodeRPG: https://www.freecodecamp.org/news/learn-to-code-rpg/</div>
            <div><a href="#">www.freecodecamp.org</a></div>
        </div>
    </div>

    <div class="row pt-1">
        <div class="col-4">
            <img src="https://camo.githubusercontent.com/d56bf96d306e27c0b0ea2cca420c7dbaab03ae2caa42fe23057bbe3854e306ac/68747470733a2f2f7777772e657665726e6f74652e636f6d2f6c2f416b70647259326e477274424f3639526f78644e7138726c757269354b374233363759422f696d6167652e706e67" class="w-100">
        </div>
        <div class="col-4">
            <img src="https://imageio.forbes.com/specials-images/imageserve/5faad55af0851928cb60532b/Best-Animal-Photos-Contest--highland-cattle-in-heather-blooming-season-amid-fog-/0x0.jpg?fit=crop&format=jpg&crop=959,959,x0,y134,safe" class="w-100">
        </div>
        <div class="col-4">
            <img src="https://i.guim.co.uk/img/media/8380496406b06f865fa5ddeb3b115e71bceae73f/0_0_2700_2700/master/2700.jpg?width=465&quality=45&auto=format&fit=max&dpr=2&s=e696166f950ccf27a53ed71af9402742" class="w-100">
        </div>
    </div>

</div>
@endsection