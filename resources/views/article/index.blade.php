@include('layout.header')
<body>
<div class="container-md justify-content-center align-content-center align-items-center my-5" >
    <h2 class="news-head">Artikel
        <hr style="width:12%;text-align:left;margin-left:0; height: 8px; opacity: 1 !important;border-radius: 10px"></h2>


    <div class="card p-2" style="width: 90% !important; ">
        @foreach($article as $articles)
            <a href="/{{$articles->id}}" style="text-decoration: none !important; color: black !important;">

                <div class="news-card card w-100 mb-3" style="" >
                    <div class="news-row row g-0" style="">
                        <div class="col-md-8">
                            <div class="card-body" style="padding-top: 0 !important;">
                                <h5 class="news-title card-title">{{$articles->title}}</h5>
                                {{--                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>--}}
                                <p class="card-text" style="padding-left: 5px"><small class="text-muted"><i class="bi bi-calendar4-week"></i>&emsp;{{$articles->created_at}}</small></p>
                            </div>
                            <div class="m-grid">
                                <div class=" d-grid py-4 gap-2 d-md-flex justify-content-md-end" style="width: 95%">
                                    <button class="news-button btn btn-primary me-md-2" type="button">Lihat artikel</button>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </a>

        @endforeach

    </div>

</div>
<div class="d-flex justify-content-center align-items-center ">
    {{ $article->links() }}
</div>

</div>

</body>
</html>
