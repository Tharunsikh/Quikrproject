<!--  Use JS to read data echoed by a PHP page !-->
<script>
function reqListener () {
      console.log(this.responseText);
    }
    var oReqGD = new XMLHttpRequest();
    oReqGD.onload = function() {
    	var responsefromGet = this.responseText;
    	document.write(responsefromGet);
    };
    oReqGD.open("get", "get-data.php", true);
    oReqGD.send();

    var oReq2 = new XMLHttpRequest();
    oReq2.onload = function(){
    	var resp = this.responseText;
    	document.write(resp);
    };
    oReq2.open("get","get-data copy.php",true);
    oReq2.send();
</script>