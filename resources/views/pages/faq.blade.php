@extends('layouts.app')

@section('content')

<!-- Page Content -->
<section class="py-5">
    <div class="container">
        <h1 class="display-3 eRed">FAQ,s</h1>
        <div id="accordion">
            <div class="card">
                <div class="card-header" id="headingOne">
                    <h5 class="mb-0">
                        <button class="btn text-dark btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Can Excel Holdings help me with a commercial real estate investment?
                        </button>
                    </h5>
                </div>

                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                    <div class="card-body">
                        Yes, Excel Holdings Investment Network can help. These professionals can help you find a commercial property that suits your needs.
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingTwo">
                    <h5 class="mb-0">
                        <button class="btn text-dark btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Can Excel Holdings Real Estate help with timeshare properties?
                        </button>
                    </h5>
                </div>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                    <div class="card-body">
                        Depending on their level of expertise and preferences, and in accordance with state real estate licensing laws, an Excel Holdings broker or sales associate may be able to assist you in buying or selling a timeshare. For information about a specific location of the property, contact the Excel Holdings office directly, which will provide you with assistance or recommendations.
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingThree">
                    <h5 class="mb-0">
                        <button class="btn text-dark btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            What if no properties appear in my search results?
                        </button>
                    </h5>
                </div>
                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                    <div class="card-body">
                        Please expand the search parameters in the real estate search form. Check your search parameters again and select fewer restriction options. For example, instead of entering the city, state, and zip code, select just the city and state. You can also adjust your property search by increasing the radius. This will allow our search engine to find available properties that surround the city, county or zip code you select. If you revise your search and still do not find any properties, please contact the Excel Holdings office for information on real estate listings not offered on the Internet.
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header" id="headingFour">
                    <h5 class="mb-0">
                        <button class="btn text-dark btn-link collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                            Is the commission negotiable?
                        </button>
                    </h5>
                </div>
                <div id="collapseFour" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                    <div class="card-body">
                        Yes. There is no standard commission. They are not set by law and vary depending on services, customer needs, and company policies.


                    </div>
                </div>
            </div>
        </div>
    </div>
</section>







@endsection