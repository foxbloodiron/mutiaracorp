<!-- Reference block for JS -->
<div class="ref" id="ref">
    <div class="color-primary"></div>
    <div class="awalUrl">
    	<input type="hidden" id="awalUrl" value="{{url('/')}}">
    </div>
    <div class="chart">
        <div class="color-primary"></div>
        <div class="color-secondary"></div>
    </div>
</div>
<script src="{{asset('assets/js/vendor.js')}}"></script>
<script src="{{asset('assets/js/app.js')}}"></script>
{{-- <script type="text/javascript" src="{{asset('assets/jquery-ui/jquery-ui.js')}}"></script> --}}
<script src="{{asset('assets/datatables/datatables.min.js')}}"></script>
<script src="{{asset('assets/datepicker/js/bootstrap-datepicker.min.js')}}"></script>
<script src="{{asset('assets/select2/select2.js')}}"></script>
<script src="{{asset('assets/js/jquery.maskMoney.min.js')}}"></script>
<script src="{{asset('assets/jquery-confirm/jquery-confirm.js')}}"></script>
<script src="{{asset('assets/jquery-toast/jquery.toast.js')}}"></script>
<script src="{{asset('assets/bootstrap-datetimepicker/js/moment.js')}}"></script>
<script src="{{asset('assets/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js')}}"></script>
<script src="{{asset('assets/js/vue.js')}}"></script>
<script type="text/javascript">
    var baseUrl = "{{url('/')}}";

	$(document).ready(function(){
		$("input[type='number']").keydown(function (e) {
	        // Allow: backspace, delete, tab, escape, enter and .
	        if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1 ||
	             // Allow: Ctrl/cmd+A
	            (e.keyCode == 65 && (e.ctrlKey === true || e.metaKey === true)) ||
	             // Allow: Ctrl/cmd+C
	            (e.keyCode == 67 && (e.ctrlKey === true || e.metaKey === true)) ||
	             // Allow: Ctrl/cmd+X
	            (e.keyCode == 88 && (e.ctrlKey === true || e.metaKey === true)) ||
	             // Allow: home, end, left, right
	            (e.keyCode >= 35 && e.keyCode <= 39)) {
	                 // let it happen, don't do anything
	                 return;
	        }
	        // Ensure that it is a number and stop the keypress
	        if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
	            e.preventDefault();
	        }
    	});
        $.extend( $.fn.dataTable.defaults, {
          "responsive":true,

          "pageLength": 10,
        "lengthMenu": [[10, 20, 50, - 1], [10, 20, 50, "All"]],
        "language": {
            "searchPlaceholder": "Cari Data",
            "emptyTable": "Tidak ada data",
            "sInfo": "Menampilkan _START_ - _END_ Dari _TOTAL_ Data",
            "sSearch": '<i class="fa fa-search"></i>',
            "sLengthMenu": "Menampilkan &nbsp; _MENU_ &nbsp; Data",
            "infoEmpty": "",
            "zeroRecords":    "Tidak Dapat Menemukan Data",
            "paginate": {
                    "previous": "Sebelumnya",
                    "next": "Selanjutnya",
                 }
          }

        } );
		$('.data-table').dataTable();

		$('.datepicker').datepicker({
			format:"dd-mm-yyyy",
      enableOnReadonly:false

		});

    $('#search-mobile').click(function(){

      $('#search-container').toggle('display');

    });

    $(document).click(function(eve){
      if (!$(eve.target).closest('header').length && $(window).width() <= 768) {
        $('#search-container').hide('slow');
      }
    });

    $(window).on('resize', function(){

      if ($(window).width() > 768) {
        $('#search-container').css('display', 'block');
      } 
      

    });

        $('.input-daterange').datepicker({
            format:'dd-mm-yyyy',
            enableOnReadonly:false

        });
        
        $('.datetimepicker').datetimepicker({
            format:"D-M-Y HH:mm:ss",
            disabledTimeIntervals: false
        });
        // $('.modal.fade').on('scroll', function(){
        //     if($(this).hasClass('show')=== true){
        //         $('.datepicker').datepicker('hide');
        //         // console.log('b');
        //     }
        // });

        $('.select2').select2({
            theme:"bootstrap",
            dropdownAutoWidth: true,
            width:'100%'
        });

        $('.input-rupiah').maskMoney({
            thousands:".",
            decimal:",",
            prefix:"Rp. "
        });
	});
</script>
<script type="text/javascript">
    $(document).ready(function(){
        jconfirm.defaults = {
            theme: 'light',
            animation: 'fadeIn',
            closeAnimation: 'fadeOut'
        };

        $.toast.options = {
            showHideTransition: 'fade', // fade, slide or plain
            allowToastClose: true, // Boolean value true or false
            hideAfter: 3000, // false to make it sticky or number representing the miliseconds as time after which toast needs to be hidden
            stack: 8, // false if there should be only one toast at a time or a number representing the maximum number of toasts to be shown at a time
            position: 'top-right', // bottom-left or bottom-right or bottom-center or top-left or top-right or top-center or mid-center or an object representing the left, right, top, bottom values
            
            // bgColor: '#444444',  // Background color of the toast
            // textColor: '#eeeeee',  // Text color of the toast
            textAlign: 'left',  // Text alignment i.e. left, right or center
            loader: true,  // Whether to show loader or not. True by default
            loaderBg: '#9EC600',  // Background color of the toast loader
            beforeShow: function () {}, // will be triggered before the toast is shown
            afterShown: function () {}, // will be triggered after the toat has been shown
            beforeHide: function () {}, // will be triggered before the toast gets hidden
            afterHidden: function () {}  // will be triggered after the toast has been hidden
        };

        var coeg = ['Good Day, Sir', 'Haii', 'Welcome Back', 'Aye', 'Bash Besh Bosh', 'Boooom!! did I surprise you?', '...', 'High Five'];

        var random = Math.floor(Math.random() * coeg.length);

        // $.toast(coeg[random]);
    });
</script>

<script type="text/javascript">
    $(document).ready(function(){
        // custom function .ignore()
        $.fn.ignore = function(sel){
          return this.clone().find(sel||">*").remove().end();
        };
        // end custom function

        $cancel_search = $('#btn-reset');
        $btn_search_menu = $('#btn-search-menu');
        $search_fld = $('#filterInput');
        $filter = $search_fld.val().toUpperCase();
        $ul = $('#sidebar-menu');
        $li = $ul.children('li');

        // $('#wid-id-0 .widget-body').html($('#sidebar ul > li').parents('li').text() + '<br>')
        $('#sidebar ul > li > a').each(function(){
          $(this).prepend('<span class="d-none"> '+ $(this).parents('li').ignore('span').ignore('ul').text() +'</span>');
        });
        $('#sidebar ul > li:has(ul) > a').each(function(){
          $(this).prepend('<span class="d-none d-sm-none"> '+ $(this).parent('li').children().ignore('span').text() +'</span>');
        });
        $('#sidebar ul > li > ul > li > a').each(function(){
          $(this).prepend('<span class="d-none d-xs-none"> '+ $(this).parent().parent().parent().ignore('span').ignore('ul').text() +'</span>');
        });

        $search_fld.on('keyup focus blur resize', function(){

          if($(this).val().length != 0){
            // alert('a');
            $('#btn-reset').removeClass('d-none');
          } else {
            $('#btn-reset').addClass('d-none');
          }

          var input, filter, ul, li, a, i;
              input = document.getElementById("filterInput");
              filter = input.value.toUpperCase();
              ul = document.getElementById("sidebar-menu");
              li = ul.getElementsByTagName("li");
              for (i = 0; i < li.length; i++) {
                  a = li[i].getElementsByTagName("a")[0];
                  if (a.innerHTML.toUpperCase().indexOf(filter) > -1) {
                      li[i].style.display = "";
                  } else {
                      li[i].style.display = "none";

                  }
              
              }
        });

        $cancel_search.on('click', function(){
          $search_fld.val(null);
          $search_fld.focus();
        });


        $btn_search_menu.on('click', function(){
          $search_fld.focus();
        });




    });
</script>