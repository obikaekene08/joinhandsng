 <!-- Send Message -->
  <div class="my-4" style='background-color:green'>
    <div class="container text-center" style="color:white">
      <!-- <h3>Send us a Message</h3> -->
      <h3 class = "text-center mt-2 pt-3 mb-2 pb-2">Send Us a Message</h3>
      <form method = "POST" action = "sendmsgsubmit.php" id = "submitform" style = "width :80%; margin: auto; ">
        
        <p>Are you an Individual or a Company?</p>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="entityType" id="individual" value="option1">
          <label class="form-check-label" for="inlineCheckbox1">Individual</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="entityType" id="company" value="option2">
          <label class="form-check-label" for="inlineCheckbox2">Company</label>
        </div>
        
      <div class = "row">
        <div class="form-group offset-2 col-md-4 col-12">
          <input type="text" class="form-control" id="sendmsgname" aria-describedby="emailHelp" placeholder="First Name" required>
          </div>
        <div class="form-group col-md-4 col-12">
          <input type="email" class="form-control" id="sendmsgemail" placeholder="Last Name" required>
        </div>
      </div>
       <div class = "row">
        <div class="form-group offset-2 col-md-4 col-12">
          <input type="text" class="form-control" id="sendmsgname" aria-describedby="emailHelp" placeholder="Company Name" required>
          </div>
        <div class="form-group col-md-4 col-12">
          <input type="email" class="form-control" id="sendmsgemail" placeholder="Company Address" required>
        </div>
      </div>
      <p>Are you an NGO?</p>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="ngoStatus" id="yes" value="option1">
          <label class="form-check-label" for="inlineCheckbox1">Yes</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="ngoStatus" id="no" value="option2">
          <label class="form-check-label" for="inlineCheckbox2">No</label>
        </div>
      <div class = "row">
        <div class="form-group offset-md-2 col-md-4 col-12">
          <input type="text" class="form-control" id="sendmsgname" aria-describedby="emailHelp" placeholder="Email" required>
          </div>
        <div class="form-group col-md-4 col-12">
          <input type="email" class="form-control" id="sendmsgemail" placeholder="Phone" required>
        </div>
      </div>

        <div class="form-group offset-md-2 col-md-8">
          <textarea class="form-control" rows="3" id = "sendmsgmsg" placeholder = "Write Your Message Here" required></textarea>
        </div>
             
       <p style='text-align:center' class = "pb-4"><button type="submit" id = "sendMsgBtn" class='btn btn-info'>Send Message</button></p>

      </form>
    </div>
    <!-- /.container -->
  </div>



  <!-- Footer -->
  <footer class="py-4" style='background-color:green'>
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Joinhandsng.org 2020</p>
    </div>
    <!-- /.container -->
  </footer>