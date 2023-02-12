function test(e) {
  d = document.getElementById("outpatient-treatment-type").value;
  
  $.ajax({
    type: "POST",
    url: "test.php",
    data : {
      selected : d
    }
  })
    .done(function( data ) {
      alert( "Fetched: " + data );
  });
}