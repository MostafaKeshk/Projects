$('input[name="datefilter"]').daterangepicker({
      autoUpdateInput: false,
//	opens: 'center',
	linkedCalendars:true,
      locale: {
          cancelLabel: 'Clear',
		  
      }
  });
  $('input[name="datefilter"]').on('apply.daterangepicker', function(ev, picker) {
      $(this).val(picker.startDate.format('MM/DD/YYYY') + ' - ' + picker.endDate.format('MM/DD/YYYY'));
  });

//gallary

function myFunction(imgs) {
  // Get the expanded image
  var expandImg = document.getElementById("expandedImg");

  // Use the same src in the expanded image as the image being clicked on from the grid
  expandImg.src = imgs.src;

  // Show the container element (hidden with CSS)
  expandImg.parentElement.style.display = "block";
}