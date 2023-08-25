<footer class="footer">
      <div class="container">
        <div class="text-center">
          Copyright © 2020 Sarna Agencies | Designed & Developed By <a href="https://www.hedkeyindia.com/"> Hedkey India Pvt. Ltd.</a>
        </div>
      </div>
</footer> 
<!-- Bootstrap core JavaScript-->
<script>
$(document).ready(function() {
$('#category-dropdown').on('change', function() {
var category_id = this.value;

// alert(category_id);

$.ajax({
url: "subcategory-by-category.php",
type: "POST",
data: {
category_id: category_id
},
cache: false,
success: function(result){
$("#sub-category-dropdown").html(result);
// alert(result);
}
});
});
});

</script>
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/popper.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
	
 <!-- simplebar js -->
  
  <!-- sidebar-menu js -->
  <script src="assets/js/sidebar-menu.js"></script>
  <!-- loader scripts -->
  
  <!-- Custom scripts -->
  <script src="assets/js/app-script.js"></script>
  <!-- Chart js -->
  
  <!--data table-->
  <!--<script type="text/javascript" src="https://cdn.datatables.net/v/bs5/dt-1.13.2/r-2.4.0/sc-2.1.0/sp-2.1.1/datatables.min.js"></script>-->
  
  <!--//cdn.datatables.net/1.13.2/js/jquery.dataTables.min.js-->

<script>
//     $(document).ready( function () {
//     $('#myTable').DataTable();
// } );
</script>
  <!-- Vector map JavaScript -->
  
  <!-- Easy Pie Chart JS -->
 
  <!-- Sparkline JS -->
  
  
	  
	 <!-- <script src="assets/plugins/bootstrap-datatable/js/jquery.dataTables.min.js"></script>-->
  <!--<script src="assets/plugins/bootstrap-datatable/js/dataTables.bootstrap4.min.js"></script>-->
  <!--<script src="assets/plugins/bootstrap-datatable/js/dataTables.buttons.min.js"></script>-->
  <!--<script src="assets/plugins/bootstrap-datatable/js/buttons.bootstrap4.min.js"></script>-->
 
 

  <!--<script src="assets/plugins/bootstrap-datatable/js/buttons.html5.min.js"></script>-->
  
    <!--<script>-->
    <!-- $(document).ready(function() {-->
      <!--//Default data table-->
    <!--   $('#default-datatable').DataTable();-->


    <!--   var table = $('#example').DataTable( {-->
    <!--    lengthChange: false,-->
    <!--    buttons: [ 'copy', 'excel', 'pdf', 'print', 'colvis' ]-->
    <!--  } );-->
 
    <!-- table.buttons().container()-->
    <!--    .appendTo( '#example_wrapper .col-md-6:eq(0)' );-->
      
    <!--  } );-->

    <!--</script>-->
  <!-- Index js -->
  <script src="assets/js/index.js"></script>
<script src="assets/plugins/summernote/dist/summernote-bs4.min.js"></script>
<script src="assets/js/summernote-ext-browser.JS
"></script>
 <script>
        $(function() {
            $(".knob").knob();
        });
    </script>
  <script>
   $('#summernoteEditor').summernote({
            height: 400,
            tabsize: 2,
            toolbar: [
                    ['style', ['style']],
                    ['style', ['bold', 'italic', 'underline', 'clear']],
                    ['font', ['strikethrough', 'superscript', 'subscript']],
                    ['color', ['color']],
                    ['insert', ['picture', 'link', 'video', 'table','filebrowser', 'hr']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    ['undo', ['undo', 'redo']],
                    ['codeview', ['codeview']],
                ]
        });
  </script>
  <script>
   $('#summernoteEditor1').summernote({
            height: 400,
            tabsize: 2
        });
   $('#summernoteEditor2').summernote({
            height: 400,
            tabsize: 2
        });
    $('#summernoteEditor3').summernote({
            height: 400,
            tabsize: 2
        });
    $('#summernoteEditor4').summernote({
            height: 400,
            tabsize: 2
        });
    $('#summernoteEditor5').summernote({
            height: 400,
            tabsize: 2
        });
  </script>
  
  

  
</body>
</html>