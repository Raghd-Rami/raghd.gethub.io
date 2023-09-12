<?php include 'header.php'?>

<main>
    <div>
        <h2 id="reg">Create new account</h2> 

        <form class="containor">

            <div class="text-field">
                <label for="name"> Name</label>  
                <input class="field" type="text" id="name" placeholder="Name"/>
            </div>

            <div class="text-field">
                <label for="email">Email</label>
                <input class="field" type="email" id="email" placeholder="Email"/>
            </div>

            <div class="text-field">
                <label for="url">URL</label>
                <input class="field" type="url" id="url" placeholder="https://example.com"/>
            </div>

            <div class="text-field">
                <label for="age">Age</label>
                <input class="field" type="number" id="age" placeholder="18"/>
            </div>

            <div class="text-field">
                <label for="phone">Phone Number</label>
                <input class="field" type="number" id="phone" placeholder="Phone Number"/>
            </div>

            <div class="text-field">
                <label for="con">Country</label>
                <input class="field" type="text" id="con" placeholder="country"/>
            </div>

            <div class="text-field">
                <label for="pass">Password</label>
                <input class="field" type="password" id="pass" placeholder="Password"/>
            </div>

            <div class="text-field">
                <label for="cpass">Confirm Password</label>
                <input class="field" type="password" id="cpass" placeholder="Confirm Password"/>
            </div>

            <input class= "button" type="submit" value="Register"/>
        </form>  
    </div> 
</main>

<?php include 'fotter.php'?>