<? require_once('_db_connect.php') ?>

<!DOCTYPE html>
<html>
<head>
    <title></title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<!-- navbar -->
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Healthy Life</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">


            <ul class="nav navbar-nav navbar-right">
                <li><a href="home.html">Home</a></li>
                <li><a href="medical.html">Medical</a></li>
                <li><a href="lifestyle.html">Lifestyle</a></li>
                <li><a href="foodnnutrition.html">Food & Nutrition</a></li>
                <li><a href="beautynhealth.html">Beauty & Health</a></li>
                <li><a href="more.html">More</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">Contact Us</a></li>
                    </ul>
                </li>
                <li>
                    <form class="navbar-form navbar-left">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Search">
                        </div>
                        <button type="submit" class="btn btn-default">Submit</button>
                    </form>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
<!-- end navbar -->
<!-- slider -->
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
    </ol>
    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
        <div class="item active">
            <img src="http://www.medindia.net/images/common/yoga/950_400/yoga.jpg" width="1380"  alt="...">
        </div>
        <div class="item ">

			<img src="http://maranathasda.org/wp-content/uploads/2012/04/fruits-and-vegetables.jpg" width="1380"  alt="...">
        </div>
        <div class="item ">
            <img src="https://homepage-inlifepharmapvtl.netdna-ssl.com/wp-content/uploads/2014/11/Benefits-of-Drinking-Water.png" width="1260" alt="...">
        </div>

    </div>

    <!-- Controls -->
    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
<!-- end slider -->
<!-- content -->
<div class="container">
    <div class="row">
        <div class="col-md-3">
            <h1>Allergy</h1>
            <p class="teaser">
                Allergy symptoms occur when your immune system overreacts to something that is harmless to most people but triggers a reaction in anyone sensitive to it. This substance is known as an allergen.
                Allergies can be seasonal (worsening during certain times of the year, such as pollen allergies in the spring)...
            </p>
            <span class="see-more">See more</span>
            <p class="complete">Allergy symptoms occur when your immune system overreacts to something that is harmless to most people but triggers a reaction in anyone sensitive to it. This substance is known as an allergen.
                Allergies can be seasonal (worsening during certain times of the year, such as pollen allergies in the spring) or perennial (occurring year-round). Common allergens include weed or grass pollen, dust mites, animal dander, mold, insect stings and a variety of food types, such as eggs, shellfish, nuts and grains. If you come in contact with something to which you are allergic, your immune system considers it dangerous and releases a chemical called histamine to counteract it.
                The release of histamine can cause a variety of symptoms, including a skin rash, headache, sneezing, runny nose, swelling, nausea and diarrhea. The most severe reaction, known as anaphylaxis, can be life-threatening.
                If the allergen is something you breathe in, your reaction will most likely affect your eyes, nose and lungs.

            </p>
            <span class="see-less">See less</span>
        </div>
        <div class="col-md-3">
            <h1>Asthma</h1>
            <p class="teaser">
                An asthma flare-up can come on slowly (over hours, days or even weeks) or very quickly (over minutes). A sudden or severe asthma flare-up is sometimes called an asthma attack.One in ten people in Australia has asthma. It affects people of all ages. Some people get asthma when they are young; others when they are older...
            </p>
            <span class="see-more">See more</span>
            <p class="complete">An asthma flare-up can come on slowly (over hours, days or even weeks) or very quickly (over minutes). A sudden or severe asthma flare-up is sometimes called an asthma attack.One in ten people in Australia has asthma. It affects people of all ages. Some people get asthma when they are young; others when they are older.
                Asthma cannot be cured, but for most people it can be well controlled by following a daily management plan.The causes of asthma are not fully understood, although people with asthma often have a family history of asthma, eczema and hayfever.
                Research has shown that exposure to tobacco smoke (especially as a baby or young child), obesity and some workplace chemicals can increase the risk of developing asthma.Researchers continue to try to find out more about what causes asthma and how we might prevent it.</p>
            <span class="see-less">See less</span>
        </div>
        <div class="col-md-3">
            <h1>Cancer</h1>
            <p class="teaser">
                Cancer is a class of diseases characterized by out-of-control cell growth. There are over 100 different types of cancer, and each is classified by the type of cell that is initially affected.Cancer harms the body when altered cells divide uncontrollably to form lumps or masses of tissue called tumors (except in the case of leukemia ...
            </p>
            <span class="see-more">See more</span>
            <p class="complete">Cancer is a class of diseases characterized by out-of-control cell growth. There are over 100 different types of cancer, and each is classified by the type of cell that is initially affected.Cancer harms the body when altered cells divide uncontrollably to form lumps or masses of tissue called tumors (except in the case of leukemia where cancer prohibits normal blood function by abnormal cell division in the blood stream). Tumors can grow and interfere with the digestive, nervous, and circulatory systems, and they can release hormones that alter body function. Tumors that stay in one spot and demonstrate limited growth are generally considered to be benign.
                More dangerous, or malignant, tumors form when two things occur:
                a cancerous cell manages to move throughout the body using the blood or lymphatic systems, destroying healthy tissue in a process called invasion
                that cell manages to divide and grow, making new blood vessels to feed itself in a process called angiogenesis.
                When a tumor successfully spreads to other parts of the body and grows, invading and destroying other healthy tissues, it is said to have metastasized. This process itself is called metastasis, and the result is a serious condition that is very difficult to treat. </p>
            <span class="see-less">See less</span>
        </div>
        <div class="col-md-3">
            <h1>Colds & Flue</h1>
            <p class="teaser">
                With so many similar symptoms it’s often hard to tell whether you have a cold or flu. Hopefully, we’ll be able to help you tell the difference.A cold has symptoms that often build up over 48 hours. Usually, you first get a runny nose, followed by watery eyes. Next a stuffy nose and then congestion sets in. And if you’re ...
            </p>
            <span class="see-more">See more</span>
            <p class="complete">With so many similar symptoms it’s often hard to tell whether you have a cold or flu. Hopefully, we’ll be able to help you tell the difference.A cold has symptoms that often build up over 48 hours. Usually, you first get a runny nose, followed by watery eyes. Next a stuffy nose and then congestion sets in. And if you’re really unlucky, the sneezing and coughing may start. These symptoms normally last 3-10 days. They may come in stages, peaking when you feel them all at once.
                Flu symptoms, on the other hand, can come on fast and a fever and chills may develop. Your body aches and has those ‘I’ve-got-a-flu-coming-on’ pains. A flu makes you feel weak and tired. The symptoms normally last 7-14 days, or up to 21 days if you’re hit badly. </p>
            <span class="see-less">See less</span>
        </div>
    </div>

    <div class="row">
        <div class="col-md-3">
            <h1>Cough</h1>
            <p class="teaser">
                Your bronchial tubes are responsible for delivering air to your lungs. When these tubes become inflamed, mucus can build up. The coughing and shortness of breath this causes is known as bronchitis. Acute bronchitis usually occurs due to a viral chest infection. Several types of viruses can cause it. Approximately 5 percent of adults report having acute bronchitis annually, and acute bronchitis is the ninth most common ...
            </p>
            <span class="see-more">See more</span>
            <p class="complete">Your bronchial tubes are responsible for delivering air to your lungs. When these tubes become inflamed, mucus can build up. The coughing and shortness of breath this causes is known as bronchitis. Acute bronchitis usually occurs due to a viral chest infection. Several types of viruses can cause it. Approximately 5 percent of adults report having acute bronchitis annually, and acute bronchitis is the ninth most common reason why adults visit their doctors.
                It’s important to distinguish acute bronchitis from chronic bronchitis. Acute bronchitis usually lasts less than 10 days. However, the coughing can continue for several weeks while the inflammation is clearing. Chronic bronchitis, on the other hand, can last for several weeks and usually comes back. This is more common in people with asthma or emphysema. </p>
            <span class="see-less">See less</span>
        </div>
        <div class="col-md-3">
            <h1>Headache</h1>
            <p class="teaser">
                Headaches are one of the most common ailments, with most people experiencing a headache at some point in their life.2 They can affect anyone regardless of age, race and gender.The World Health Organization (WHO) reports that around 47% of adults worldwide will have experienced a headache within the last year. As well as being symptoms of other conditions, headache disorders can lead to the development...
            </p>
            <span class="see-more">See more</span>
            <p class="complete">Headaches are one of the most common ailments, with most people experiencing a headache at some point in their life.2 They can affect anyone regardless of age, race and gender.The World Health Organization (WHO) reports that around 47% of adults worldwide will have experienced a headache within the last year. As well as being symptoms of other conditions, headache disorders can lead to the development of other illnesses. Depression is three times more common in individuals with severe headaches than in healthy people.3
            </p>
            <span class="see-less">See less</span>
        </div>
        <div class="col-md-3">
            <h1>Heart Health</h1>
            <p class="teaser">
                The food you eat can decrease your risk of heart disease and stroke. Choose foods low in saturated fat, trans fat, and sodium.  As part of a healthy diet, eat plenty of fruits and vegetables, fiber-rich whole grains, fish (preferably oily fish-at least twice per week), nuts, legumes and seeds and try eating some meals without meat.  Select lower fat dairy products and poultry (skinless).  Limit sugar-sweetened beverages...
            </p>
            <span class="see-more">See more</span>
            <p class="complete"> The food you eat can decrease your risk of heart disease and stroke. Choose foods low in saturated fat, trans fat, and sodium.  As part of a healthy diet, eat plenty of fruits and vegetables, fiber-rich whole grains, fish (preferably oily fish-at least twice per week), nuts, legumes and seeds and try eating some meals without meat.  Select lower fat dairy products and poultry (skinless).  Limit sugar-sweetened beverages and red meat. If you choose to eat meat, select the leanest cuts available.</p>
            <span class="see-less">See less</span>
        </div>
        <div class="col-md-3">
            <h1>AIDS</h1>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled </p>
        </div>
    </div>
</div>
<!-- end content -->
<!-- footer -->
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <h3>Get a daily health tip</h3>
            <form class="form-inline">
                <div class="form-group">
                    <label for="exampleInputEmail2">Email</label>
                    <input type="email" class="form-control" id="exampleInputEmail2" placeholder="jane.doe@example.com">
                </div>
                <button type="submit" class="btn btn-default">Signup</button>
            </form>
        </div>
        <div class="col-md-6">
            <h3>Stay in touch</h3>
            <button class="btn"><i class="fa fa-facebook" aria-hidden="true"></i></button>
            <button class="btn"><i class="fa fa-twitter" aria-hidden="true"></i></button>
            <button class="btn"><i class="fa fa-google-plus" aria-hidden="true"></i></button>
            <button class="btn"><i class="fa fa-youtube" aria-hidden="true"></i></button>
            <button class="btn"><i class="fa fa-linkedin" aria-hidden="true"></i></button>
        </div>
    </div>
</div>
<!-- end footer -->
<br>
<br>
<br>
<script
        src="https://code.jquery.com/jquery-3.1.1.min.js"
        integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
        crossorigin="anonymous"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src="./script.js"></script>
</body>
</html>

<?= DB_SERVER; ?>
