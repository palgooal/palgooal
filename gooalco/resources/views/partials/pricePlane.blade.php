<section id="pricing-table">
    <div class="container ptb80">
    <div class="section-title">
    <h2>Pricing Plan</h2>
    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
    </div>

    <div class="pricing-table1">
        @foreach ($prices as $price)




    <div class="col-sm-3 pricing-plan" id="starter">

    <div class="row price">
    <div>
    <span class="currency">$</span>
    <span class="amount">{{$price->price}}</span>
    <span class="month">per year</span>
    </div>
    </div>






    <div class="plan-type">
    <span>{{$price->name}}</span>
    </div>

    <ul class="nav">
    <li>{{$price->num_email}} Email Account</li>
    <li>{{$price->num_website}} Website Layout</li>
    <li>{{$price->storge}}GB Space</li>
    <li>Number of Database : {{$price->num_database}}</li>
    <li>Avarage of Data Transfer : {{$price->data_transfare}}</li>
    <li>Backup  :{{$price->backup}}</li>
    <li>{{$price->description}}</li>
    </ul>
    <a href="#" class="btn btn-border btn-blue">purchase</a>

    </div>






    @endforeach

    </div>

    </div>
    </section>
