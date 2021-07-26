<footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Your Website 2020</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src=<?php echo site_url('assets/jquery/jquery.min.js');?>></script>
  <script src=<?php echo site_url('assets/bootstrap/js/bootstrap.bundle.min.js');?>></script>
  <script src=<?php echo site_url("https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js");?>></script>
  <script>
            $(document).ready(function(){
            $('#myDropDown').change(function(){
                //Selected value
                var inputValue = $(this).val();
                alert("value in js "+inputValue);

                //Ajax for calling php function
                $.post('submit.php', { dropdownValue: inputValue }, function(data){
                    alert('ajax completed. Response:  '+data);
                    //do after submission operation in DOM
                });
            });
        });
        </script>
</body>

</html>