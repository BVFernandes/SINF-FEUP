jQuery.ajax({
    type: "POST",
    url: '../getTotalSales.php',
    dataType: 'json',
    data: {},
    success: function (obj, textstatus) {
                  if( !('error' in obj) ) {
                      yourVariable = obj.result;
                  }
                  else {
                      console.log(obj.error);
                  }
            }
});