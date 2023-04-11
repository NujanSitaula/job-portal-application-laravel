	
					<!-- footer -->
					<div class="row">
						<div class="col-md-12">
							<div class="py-3">© 2022 Workplex. Designd By ThemezHub.</div>
						</div>
					</div>
		
				</div>
				
			</div>
			<!-- ======================= dashboard Detail End ======================== -->
			
			<a id="back2Top" class="top-scroll" title="Back to top" href="#"><i class="ti-arrow-up"></i></a>
			

		</div>
		<!-- ============================================================== -->
		<!-- End Wrapper -->
		<!-- ============================================================== -->

		<!-- ============================================================== -->
		<!-- All Jquery -->
		<!-- ============================================================== -->
		<script src="{{ asset('frontEndAssets/js/jquery.min.js') }}"></script>
		<script src="{{ asset('frontEndAssets/js/popper.min.js') }}"></script>
		<script src="{{ asset('frontEndAssets/js/bootstrap.min.js') }}"></script>
		<script src="{{ asset('frontEndAssets/js/slick.js') }}"></script>
		<script src="{{ asset('frontEndAssets/js/slider-bg.js') }}"></script>
		<script src="{{ asset('frontEndAssets/js/smoothproducts.js') }}"></script>
		<script src="{{ asset('frontEndAssets/js/snackbar.min.js') }}"></script>
		<script src="{{ asset('frontEndAssets/js/jQuery.style.switcher.js') }}"></script>
		<script src="{{ asset('frontEndAssets/js/custom.js') }}"></script>
		<script>
			$(function() {
  $(document).on('click', '.btn-add', function(e) {
    e.preventDefault();

    var dynaForm = $('.dynamic-wrap'),
      currentEntry = $(this).parents('.entry:first'),
      newEntry = $(currentEntry.clone()).appendTo(dynaForm);

    newEntry.find('input').val('');
    dynaForm.find('.entry:not(:last) .btn-add')
      .removeClass('btn-add').addClass('btn-remove')
      .removeClass('btn-success').addClass('btn-danger')
      .html('<span class="lni lni-minus"></span>');
  }).on('click', '.btn-remove', function(e) {
    $(this).parents('.entry:first').remove();

    e.preventDefault();
    return false;
  });
});
		</script>
		<!-- ============================================================== -->
		<!-- This page plugins -->
		<!-- ============================================================== -->	
		
	</body>
</html>