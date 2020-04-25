<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CodePen - CSS Cross-Browser Styled Select Box</title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/table.css">
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" 
  integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<style>
  
  .button {
  display: inline-block;
  padding: 15px 25px;
  font-size: 24px;
  cursor: pointer;
  text-align: center;
  text-decoration: none;
  outline: none;
  color: #fff;
  background-color: #4CAF50;
  border: none;
  border-radius: 15px;
  box-shadow: 0 9px #999;
}

.button:hover {background-color: #3e8e41}

.button:active {
  background-color: #3e8e41;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}
.req {
    position: relative;
    display: inline-block;
    box-sizing: border-box;
    border: solid 1px;
    border-color:rgb(104, 228, 3) ;
    border-radius: 4px;
    padding: 0 16px;
    min-width: 64px;
    height: 36px;
    vertical-align: middle;
    text-align: center;
    text-overflow: ellipsis;
    text-transform: uppercase;
    color: #FFFF;
    background-color:rgb(103, 233, 70);
    font-family: var(--pure-material-font, "Roboto", "Segoe UI", BlinkMacSystemFont, system-ui, -apple-system);
    font-size: 14px;
    font-weight: 500;
    line-height: 34px;
    overflow: hidden;
    outline: none;
    cursor: pointer;
  }

</style>

</head>
<body>
<!-- partial:index.partial.html -->
<center>
<h2 style="font-family:inherit;">Search Products</h2>
  <div class="field">
    <input type="text" id="search" name="search" placeholder="Search Here"style="width: 315px;height:45px" autocomplete="offXX">
</div>
  <br></br><br></br>
  <button type="button" class="button" id="btn">
  <i class="fa fa-search" aria-hidden="true"></i>&nbsp;&nbsp;Search</button>
           
</center>

<br></br>
<center><table id="tbl_pro">
 
  <thead>
         
         <tr>
             <th>Index.</th>
             <th>Category</th>
             <th>Subcategory</th>
             <th>Product</th>        
             <th colspan="2">Total quantity</th>
            
         </tr>
         
 </thead>                        
 <tbody id="tbl_tb">
                      
</tbody> 
</center>
<script   src="https://code.jquery.com/jquery-3.4.1.js"   integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="   crossorigin="anonymous"></script> 
<script>
$(document).ready(function(){
  $("#tbl_pro").hide();
  $("#btn").click(function(){
  var a=$("#search").val();
  $.ajax({
      type:"POST",
      url:"/pr/Admin/viewpr_stock/stockload.php",
      data:{id:a},
      success:function(result)
      {
        $("#tbl_pro").show();
      $("#tbl_tb").html(result);
        
      }

    });
  });
  
});

</script>
</body>
</html>
