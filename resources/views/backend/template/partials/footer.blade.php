    
    </div> <!-- Content -->
   </div> <!-- Content -->
    <script src="{{asset('backend/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('backend/js/jquery.sparkline.min.js')}}"></script>
    <script src="{{asset('backend/js/raphael.min.js')}}"></script>
    {{-- <script src="{{asset('backend/js/morris.min.js')}}"></script> --}}
    <script src="{{asset('backend/js/jquery.vmap.min.js')}}"></script>
    <script src="{{asset('backend/js/jquery.vmap.usa.js')}}"></script>

    <script src="{{asset('backend/js/azia.js')}}"></script>
     <script>
      $(function(){
        'use strict'

        $('.az-sidebar .with-sub').on('click', function(e){
          e.preventDefault();
          $(this).parent().toggleClass('show');
          $(this).parent().siblings().removeClass('show');
        })

        $(document).on('click touchstart', function(e){
          e.stopPropagation();

          // closing of sidebar menu when clicking outside of it
          if(!$(e.target).closest('.az-header-menu-icon').length) {
            var sidebarTarg = $(e.target).closest('.az-sidebar').length;
            if(!sidebarTarg) {
              $('body').removeClass('az-sidebar-show');
            }
          }
        });


        $('#azSidebarToggle').on('click', function(e){
          e.preventDefault();

          if(window.matchMedia('(min-width: 992px)').matches) {
            $('body').toggleClass('az-sidebar-hide');
          } else {
            $('body').toggleClass('az-sidebar-show');
          }
        })

        /* ----------------------------------- */
        /* Dashboard content */

        // $('#compositeline').sparkline('html', {
        //   lineColor: '#cecece',
        //   lineWidth: 2,
        //   spotColor: false,
        //   minSpotColor: false,
        //   maxSpotColor: false,
        //   highlightSpotColor: null,
        //   highlightLineColor: null,
        //   fillColor: '#f9f9f9',
        //   chartRangeMin: 0,
        //   chartRangeMax: 10,
        //   width: '100%',
        //   height: 20,
        //   disableTooltips: true
        // });

        // $('#compositeline2').sparkline('html', {
        //   lineColor: '#cecece',
        //   lineWidth: 2,
        //   spotColor: false,
        //   minSpotColor: false,
        //   maxSpotColor: false,
        //   highlightSpotColor: null,
        //   highlightLineColor: null,
        //   fillColor: '#f9f9f9',
        //   chartRangeMin: 0,
        //   chartRangeMax: 10,
        //   width: '100%',
        //   height: 20,
        //   disableTooltips: true
        // });

        // $('#compositeline3').sparkline('html', {
        //   lineColor: '#cecece',
        //   lineWidth: 2,
        //   spotColor: false,
        //   minSpotColor: false,
        //   maxSpotColor: false,
        //   highlightSpotColor: null,
        //   highlightLineColor: null,
        //   fillColor: '#f9f9f9',
        //   chartRangeMin: 0,
        //   chartRangeMax: 10,
        //   width: '100%',
        //   height: 20,
        //   disableTooltips: true
        // });

        // $('#compositeline4').sparkline('html', {
        //   lineColor: '#cecece',
        //   lineWidth: 2,
        //   spotColor: false,
        //   minSpotColor: false,
        //   maxSpotColor: false,
        //   highlightSpotColor: null,
        //   highlightLineColor: null,
        //   fillColor: '#f9f9f9',
        //   chartRangeMin: 0,
        //   chartRangeMax: 10,
        //   width: '100%',
        //   height: 20,
        //   disableTooltips: true
        // });


        // var morrisData = [
        //   { y: 'Oct 01', a: 95000, b: 70000 },
        //   { y: 'Oct 05', a: 75000,  b: 55000 },
        //   { y: 'Oct 10', a: 50000,  b: 40000 },
        //   { y: 'Oct 15', a: 75000,  b: 65000 },
        //   { y: 'Oct 20', a: 50000,  b: 40000 },
        //   { y: 'Oct 25', a: 80000, b: 90000 },
        //   { y: 'Oct 30', a: 75000,  b: 65000 }
        // ];

        // new Morris.Bar({
        //   element: 'morrisBar1',
        //   data: morrisData,
        //   xkey: 'y',
        //   ykeys: ['a', 'b'],
        //   labels: ['Online', 'Offline'],
        //   barColors: ['#560bd0', '#00cccc'],
        //   preUnits: '$',
        //   barSizeRatio: 0.55,
        //   gridTextSize: 11,
        //   gridTextColor: '#494c57',
        //   gridTextWeight: 'bold',
        //   gridLineColor: '#999',
        //   gridStrokeWidth: 0.25,
        //   hideHover: 'auto',
        //   resize: true,
        //   padding: 5
        // });

        // $('#vmap2').vectorMap({
        //   map: 'usa_en',
        //   showTooltip: true,
        //   backgroundColor: '#fff',
        //   color: '#60adff',
        //   colors: {
        //     mo: '#9fceff',
        //     fl: '#60adff',
        //     or: '#409cff',
        //     ca: '#005cbf',
        //     tx: '#005cbf',
        //     wy: '#005cbf',
        //     ny: '#007bff'
        //   },
        //   hoverColor: '#222',
        //   enableZoom: false,
        //   borderWidth: 1,
        //   borderColor: '#fff',
        //   hoverOpacity: .85
        // });

      });
    </script>
  </body>

</html>
