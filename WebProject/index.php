<?php include 'header.php' ?>

<main>
    <div class="searchSection">

        <div class="searchcontent">
            <h2>Search about any Book you need</h2>
            <form action="">
                <input type="text" class="form-control">
                <button id="searchbtn"><i class="fa-solid fa-magnifying-glass" style="color: #1e1e1f;"></i></button>
            </form>
        </div>


        <div class="searchIcons">
            <div class="Sicon" id="B">
                <i class="fa-solid fa-book" style="color: #111212;"></i>
                <p>3</p>
                <p>Books</p>
            </div>

            <div class="Sicon" id="A">
                <i class="fa-solid fa-users" style="color: #0a0a0a;"></i>
                <p>2</p>
                <p>Authors</p>
            </div>

            <div class="Sicon" id="C">
                <i class="fa-solid fa-tags" style="color: #050505;"></i>
                <p>3</p>
                <p>Categories</p>
            </div>
        </div>
    </div>

    <div class="aboutus">
        <dl>
            <dt> About Our Library </dt>
            <dd> Our library allows you to buy pdf books for a good price with a spical serves, which is an aditinal bonus page from the authors to their readers that is only available in our pdf books.</dd>
        </dl>
    </div>

    <div class="cate">
        <h2>Explore Our Latest Categories</h2>
        <div class="genras">
            <a href="#">Action</a>
            <a href="#">Drama</a>
            <a href="#">Romance</a>
        </div>
    </div>

    <div class="row justify-content-center">

        <h2 id="explore">Explore Our Latest Books</h2>

        <div class="col-md-3">
            <div class="card">
                <img src="assets/images/b4.jpg" title="أنت لي">
                <div class="car-body">
                    <h5> أنت لي</h5>
                    <p>author: Mona </p>
                    <a href="bookdetails.php?id=3" class="btn btn-dark w-100"> Read More</a>
                    <!-- <a href="bookdetails.php" class="btn btn-dark w-100"> Read More</a> -->
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card">
                <img src="assets/images/HP1.jpg" title="Harry Potter and the Philosopher's Stone">
                <div class="car-body">
                    <h5>Harry Potter and the Philosopher's Stone </h5>
                    <p>author: J.K Rowlen</p>
                    <a href="bookdetails.php?id=5" class="btn btn-dark w-100"> Read More</a>
                    <!-- <a href="bookdetails.php" class="btn btn-dark w-100"> Read More</a> -->
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card">
                <img src="assets/images/T2T.jpg" title="The Two Towers">
                <div class="car-body">
                    <h5>The Two Towers</h5>
                    <p>author: Khlode </p>
                    <a href="bookdetails.php?id=9" class="btn btn-dark w-100"> Read More</a>
                    <!-- <a href="bookdetails.php" class="btn btn-dark w-100"> Read More</a> -->
                </div>
            </div>
        </div>

    </div>


    <!--قبل ما استعمل البوتستراب الي انت استعملته يا دكتور 😅
         <div class="explore">

        <h2>Explore Our Latest Books</h2>

        <div class="booksSec">
            <div class="book">
                <img src="assets/images/b4.jpg" title="أنت لي">
                <div class="Bcontent">
                <h3> أنت لي</h3>
                <p>author: Mona </p>
                <a href="bookdetails.php"> Read More</a>
                </div>
            </div>
    
            <div class="book">
                <img src="assets/images/b2.jpg" title= "دع القلق وابدأ الحياة">
                <div class="Bcontent">
                <h3> دع القلق وابدأ الحياة </h3> 
                <p>author: Dell C.</p>
                <a href="bookdetails.php"> Read More</a>
                </div>
            </div>
    
            <div class="book">
                <img src="assets/images/b3.jpg" title= "في قلبي أنثى عربية">
                <div class="Bcontent">
                <h3>استمتع بحياتك </h3> 
                <p>author: Khlode </p> 
                <a href="bookdetails.php"> Read More</a>
                </div>    
            </div>
        </div>

    </div> -->
</main>

<?php include 'fotter.php' ?>