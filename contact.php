 <!-- header -->
 <?php include_once('header.php');
 
 if(isset($_GET['notification'])){
    $notify = $_GET['notification'];
 }else{
    $notify = "";
 }
 

 ?>

 <section class="contact_section">
    <div class="section_title"><h2>Contact Us</h2></div>
    <div class="contact_container">
        <div class="form-body">
            <div class="notification" style="display:flex; justify-content:end; ">
                <span style="color:green; font-weight:bold; text-align:right; padding:10px; margin:10px; font-size:20px;"><?=$notify?></span>
            </div>
            <form action="process.php" method="POST">
                <label for="name">Name</label><br><br>
                <input type="text" name="name" id="name"placeholder="Enter Your Name" required><br><br>
                <label for="email" >Email</label><br><br>
                <input type="email" name="email" id="email" placeholder="Enter Your Email" required><br><br>
                <label for="subject">Subject</label><br><br>
                <input type="text" id="subject" name="subject" placeholder="Enter Subject" required><br><br>
                <label for="message">Message</label><br><br>
                <textarea id="message" name="message" rows="6" cols="55" required placeholder="Enter your message here"></textarea><br><br>
                <input type="submit" value="submit" class="btn2">
            </form>
        </div>
    </div>

 </section>

 <br>
 <!-- Footer -->

 <?php include_once('footer.php');?>