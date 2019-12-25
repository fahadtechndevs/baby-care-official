 <script src="{{asset('assets/js/jquery.min.js')}}"></script>
 <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
 <script src="{{asset('assets/plugins/OwlCarousel/dist/owl.carousel.min.js')}}"></script>
 <script src="{{asset('assets/plugins/Isotope/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('assets/plugins/icheck/icheck.min.js')}}"></script>

 <script>
 	$(function(){
       $.ajaxSetup({
       	headers: {
       		'X-CSRF_TOKEN' :  '{{ csrf_token() }}'
       	}
       });
 	});
 </script>