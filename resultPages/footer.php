<!-- FOOTER -->
<footer id="indexFooter" style="position:inherit;bottom:0px">
		<a href="https://www.bookingpetz.com/blog-2">Blog</a>
		<a href="../terms_conditions.html">Terms & Conditions</a>
		<a href="../privacy_cookies.html">Privacy & Cookie Statement</a>
		<a href="../contact.html">Contact Us</a>
	</footer>



<script type="text/javascript" src="../public/js/bootstrap.min.js"></script>
<script type="text/javascript" src="../public/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript" src="../public/js/moment.min.js"></script>
</body>
</html>
<script>
      function readURL(input) {

    if (input.files && input.files[0]) {
    var reader = new FileReader();

    reader.onload = function(e) {
      $('#blah').attr('src', e.target.result);
    }

    reader.readAsDataURL(input.files[0]);
    }
    }

    $("#imgInp").change(function() {
    readURL(this);
    });


    </script>
