<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Corona</title>
    <link rel="stylesheet" href="{{asset('vendors/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('vendors/bootstrap/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('vendors/bootstrap/font-awsome/fontawesome.min.css')}}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js" type="text/javascript"></script>
<link href="{{asset('js/jquery.carousel/stylesheets/jquery.carousel.css')}}" rel="stylesheet" type="text/css"/>
</head>
<body>
<header>
<nav class="navbar navbar-expand-md bg-dark navbar-dark">
  <!-- Brand -->
  <a class="navbar-brand" href="#"><img src="img/images.jpeg" class="img-fluid rounded-circle img-thumbnail image"></a>

  <!-- Toggler/collapsibe Button -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>

  <!-- Navbar links -->
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="#origin">Origin Of Corona</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#about">About Corona</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Corona Testing</a>

    </li>
    <li class="nav-item">
        <a class="nav-link text-warning" href="#" data-toggle="modal" data-target="#reginput">Register</a>

    </li>
    <li class="nav-item">
        <a class="nav-link text-warning" href="#">Log in</a>

    </li>
    </ul>
  </div>
<!-- Navbar links -->
<!--Search bar-->
      <div class="d-flex justify-content-end">

      <form class="form-inline" action="/action_page.php">
    <input class="form-control mr-sm-2" type="text" placeholder="Search">
    <button class="btn btn-success" type="submit">Search</button>
  </form>
      </div>
      <!--Search bar-->
</nav> 
</header>
<section>

<!--slide-->
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100 img" src="img/img1.webp" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100 img" src="https://cdn.pixabay.com/photo/2020/03/08/15/50/corona-4912807__340.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100 img" src="img/img3.webp" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<!--slide-->
<!--Origin of corona-->
<div class="container container-fluid text-center mt-5" id="origin">
<h1>Origin Of Corona</h1>
<hr class="border">
<hr class="border">
<div class="row pt-3">
<div class="col-lg-6 col-md-6 col-sm-6 jumbotron shadow">
<p class="firstpara">In the public mind, the origin story of coronavirus seems well fixed: in late 2019 someone at the now world-famous Huanan seafood market in Wuhan was infected with a virus from an animal.

The rest is part of an awful history still in the making, with Covid-19 spreading from that first cluster in the capital of China’s Hubei province to a pandemic that has killed about 80,000 people so far.

Stock footage of pangolins – a scaly mammal that looks like an anteater – have made it on to news bulletins, suggesting this animal was the staging post for the virus before it spread to humans.
'Liberation' as Wuhan's coronavirus lockdown ends after 76 days</p>
<button class="btn btn-primary btn1">Read more</button>

<p class="Toggle">But there is uncertainty about several aspects of the Covid-19 origin story that scientists are trying hard to unravel, including which species passed it to a human. They’re trying hard because knowing how a pandemic starts is a key to stopping the next one.

Prof Stephen Turner, head of the department of microbiology at Melbourne’s Monash University, says what’s most likely is that virus originated in bats.

But that’s where his certainty ends, he says.

On the hypothesis that the virus emerged at the Wuhan live animal market from an interaction between an animal and a human, Turner says: “I don’t think it’s conclusive by any means.”

“Part of the problem is that the information is only as good as the surveillance,” he says, adding that viruses of this type are circulating all the time in the animal kingdom.

The fact that the virus has infected a tiger in a New York zoo shows how viruses can move around between species, he says. “Understanding the breadth of species this virus can infect is important as it helps us narrow down down where it might have come from.”

Scientists say it is highly likely that the virus came from bats but first passed through an intermediary animal in the same way that another coronavirus – the 2002 Sars outbreak – moved from horseshoe bats to cat-like civets before infecting humans.
</p>
<marquee behavior="" direction="left">**This article is copywrite from <a href="https://www.theguardian.com/world/2020/apr/15/how-did-the-coronavirus-start-where-did-it-come-from-how-did-it-spread-humans-was-it-really-bats-pangolins-wuhan-animal-market">The gurdian</a>**</marquee>
</div>
<div class="col-lg-6 col-md-6 col-sm-6">
<iframe width="560" height="315" src="https://www.youtube.com/embed/mNB8zN5CQGc" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>
</div>

<hr class="border">
<hr class="border">
</div>
<div class="container text-center mt-4" id="about">
  <h1>About Corona</h1>
  <div class="row">
  <div class="col-lg-6 col-md-6 col-sm-6">
    <h3 class="mt-3">Overview</h3>
    <p class="secndpara">Coronavirus disease (COVID-19) is an infectious disease caused by a newly discovered coronavirus.

Most people infected with the COVID-19 virus will experience mild to moderate respiratory illness and recover without requiring special treatment.  Older people, and those with underlying medical problems like cardiovascular disease, diabetes, chronic respiratory disease, and cancer are more likely to develop serious illness.

The best way to prevent and slow down transmission is be well informed about the COVID-19 virus, the disease it causes and how it spreads. Protect yourself and others from infection by washing your hands or using an alcohol based rub frequently and not touching your face. 

The COVID-19 virus spreads primarily through droplets of saliva or discharge from the nose when an infected person coughs or sneezes, so it’s important that you also practice respiratory etiquette (for example, by coughing into a flexed elbow).

At this time, there are no specific vaccines or treatments for COVID-19. However, there are many ongoing clinical trials evaluating potential treatments. WHO will continue to provide updated information as soon as clinical findings become available.

</p>
  </div>
  <hr>
  <div class="col-lg-6 col-md-6 col-sm-6">
    <div class="jumbotron symptoms text-center mt-5 shadow-lg">Symptoms</div>
    <blockquote class="block1">
    The COVID-19 virus affects different people in different ways.  COVID-19 is a respiratory disease and most infected people will develop mild to moderate symptoms and recover without requiring special treatment.  People who have underlying medical conditions and those over 60 years old have a higher risk of developing severe disease and death.

Common symptoms include:
  
  <li>fever</li>  
    <li>tiredness</li> 
    <li>dry cough.</li> 

Other symptoms include:

    <li>shortness of breath</li> 
    <li>aches and pains</li>
    <li>sore throat</li>
    and very few people will report diarrhoea, nausea or a runny nose.

People with mild symptoms who are otherwise healthy should self-isolate and contact their medical provider or a COVID-19 information line for advice on testing and referral.

People with fever, cough or difficulty breathing should call their doctor and seek medical attention.


    </blockquote>
    <hr class="border">
      <div class="jumbotron prevention mt-3 shadow-lg">Prevention</div>
      <blockquote class="block2">

      To prevent infection and to slow transmission of COVID-19, do the following:

   <li> Wash your hands regularly with soap and water, or clean them with alcohol-based hand rub.</li>
    <li>Maintain at least 1 metre distance between you and people coughing or sneezing.</li>
    <li>Avoid touching your face.</li>
    <li>Cover your mouth and nose when coughing or sneezing.</li>
    <li>Stay home if you feel unwell.</li>
    <li>Refrain from smoking and other activities that weaken the lungs.</li>
    <li>Practice physical distancing by avoiding unnecessary travel and staying away from large groups of people.</li>

    </blockquote>
  </div>
  </div>

<hr class="border">
<hr class="border">
</div>

</section>


<!-- Modal -->
<div class="modal fade" id="reginput" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="container">
          <form action="">
            <div class="form-group">
              <input type="text" name="name" class="form-control">
            </div>

            <div class="form-group">
              <input type="text" name="emsil" class="form-control">
            </div>

            <div class="form-group">
              <input type="text" name="name" class="form-control">
            </div>
          </form>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save</button>
      </div>
    </div>
  </div>
</div>   

    </script>
    
    
<script src="{{asset('js/jquery.js')}}"></script>
<script src="{{asset('js/jequerycode.js')}}"></script>
<script src="{{asset('js/jquery.carousel/javascripts/jquery.carousel.js')}}" type="text/javascript"></script>
<script src="{{asset('js/bootstrap.js')}}"></script>
<script>
$document.ready(function(){
$('.btn1').click(function(){
    $('.Toggle').show();
});
});

</script>
</body>




</html>