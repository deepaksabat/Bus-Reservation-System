
<style type="text/css">
	.midlesp{
		padding: 20px;
	}

	.docIcon {
    background:url("../../assets/img/f2dcc1cda37a23d4dd30125ebf2ac6ae.png") no-repeat center,url("../../../assets/img/f2dcc1cda37a23d4dd30125ebf2ac6ae.png") no-repeat center;
   display: block;
   width: 60px;
   height: 60px;
   margin-left:auto;
   margin-right:auto;
   text-align:center;
   display:inline-block;
}
.altcss {
    background:url("../../../assets/img/f2dcc1cda37a23d4dd30125ebf2ac6ae.png") no-repeat center;
}
#cont{
text-align:center;  
}


</style>
<div class="col-sm-5" id="refr"">
   
    <table id="layoutimg"></table>

</div>
 




<script>

function myFunction() {


    var seat = ["A1","A2","A3","A4","B1","B2","B3","B4","C1","C2","C3","C4","D1","D2","D3","D4","E1","E2","E3","E4","F1","F2","F3","F4","G1","G2","G3","G4","H1","H2","H3","H4","I1","I2","I3","I4","J1","J2","J3","J4","K1","K2","K3","K4","L1","L2","L3","L4","M1","M2","M3","M4"];
    var seat2 = ["A1","A2","B1","B2","C1","C2","D1","D2","F1","F2","G1","G2","H1","H2","I1","I2","J1","J2","K1","K2","L1","L2","M1","M2","N1","N2","O1","O2","P1","P2","M1","M2","R1","R2","S1","S2","T1","T2","U1","U2","V1","V2","W1","W2","X1","X2","Y1","Y2","Z1","Z2"];
    var seat3 = ["A1","A2","A3","B1","B2","B3","C1","C2","C3","D1","D2","D3","E1","E2","E3","F1","F2","F3","G1","G2","G3","H1","H2","H3","I1","I2","I3","J1","J2","J3","K1","K2","K3","L1","L2","L3","M1","M2","M3","N1","N2","N3"];
     var middle = ["M","M","M"];
     var seat4 = ["A1","A2","A3","A4","A5","B1","B2","B3","B4","B5","C1","C2","C3","C4","C5","D1","D2","D3","D4","D5","E1","E2","E3","E4","E5","F1","F2","F3","F4","F5","G1","G2","G3","G4","G5","H1","H2","H3","H4","H5","I1","I2","I3","I4","I5","J1","J2","J3","J4","J5","K1","K2","K3","K4","K5"];


    var lays = ["1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16","17","18","19","20","21","22","23","25","26","27","28","29","30","31","32","33","34","35","36","37","38","39","40","41","42","43","44","45","46","47","48","49","50"];

var chkval = $('#checkbox').val();
if(chkval=='last'){
var nmber = $('#seat').val();
var num = nmber-1;
}else{
  var num = $('#seat').val();
}

var lay = $('#layout').val();
if(lay=="2-2"){
var text = "";
var i;
for (i = 0; i < num; i++) {
    text += seat[i] + " , ";   
    text += '';
console.log(text);
 $('#demo').css('color', 'green');
}
var checkval = $('#checkbox').val();
if(checkval=='last'){
var midle = "";
var i;
for (i = 1; i < 2; i++) {
    midle += middle[i] + " , "; 
    midle += '';

//console.log(text);
 $('#demo').css('color', 'green');
}
}else{
 var midle='';
}
///////////////////////////////////////////////////////
/////////////// seat modula ///////////////////////////
/////////////////////////////////////////////////////////
 var x= $('#seat').val();
    var y= 4;
    var remainder = x % y;
var setreminnder=((x - remainder) / y);
//alert(remainder);
for (i = 0; i <= remainder; i++) {
    // $("#teslayout").append("<img class='img' width='50px' height='50px' src='../../assets/img/f2dcc1cda37a23d4dd30125ebf2ac6ae.png'/>");
}



///////////////////////////////////

/////////////////////////////////////////////////
$("#layoutimg").append(function(){
a=document.getElementById("demo").innerHTML = text+midle;
var test = "";
 var seatno = $('#seat').val();
 var seat = seatno-1;

var chainm=setreminnder;

var i;
for (i = 0; i < chainm; i++) {
    test += lays[i] + " , ";
   
    test += '';
}
st=test.slice(0,-2);
  var numr=JSON.stringify(st);
  var chair = numr.split(",");
console.log(chair);
  
    options =chair;
    var $container = $('<div id="chair2"></div>');
    $.each(options, function(val) {
      for(var i = 0; i <= val; i++) {
        var char = String.fromCharCode(65+i);
        var testn2 = $('#seat').val();
        var testn =testn2-1;
       
        var num=val+1;
        var lasseat = $('#checkbox').val();
       
      if(lasseat=='last' && num==testn/4){
        	lastclass='docIcon';
      }else{
        	lastclass='midlesp';
        }

    }
console.log(val);
$container.append($("<tr/>").append(
   $("<td/>").html("<img class='img' width='50px' height='50px' src='../../assets/img/f2dcc1cda37a23d4dd30125ebf2ac6ae.png' onerror=this.src='../../../assets/img/f2dcc1cda37a23d4dd30125ebf2ac6ae.png' title='"+char+1+"' />"),
   $("<td/>").html("<img class='img' width='50px' height='50px' src='../../assets/img/f2dcc1cda37a23d4dd30125ebf2ac6ae.png' onerror=this.src='../../../assets/img/f2dcc1cda37a23d4dd30125ebf2ac6ae.png' title='"+char+2+"'/>"),
   $("<td/>").html("<div class='"+lastclass+"' title='"+char+"M'></div>"),
   $("<td/>").html("<img class='img' onerror=this.src='../../../assets/img/f2dcc1cda37a23d4dd30125ebf2ac6ae.png' width='50px' height='50px' src='../../assets/img/f2dcc1cda37a23d4dd30125ebf2ac6ae.png'  title='"+char+3+"'/>"),
   $("<td/>").html("<img class='img' onerror=this.src='../../../assets/img/f2dcc1cda37a23d4dd30125ebf2ac6ae.png' width='50px' height='50px' src='../../assets/img/f2dcc1cda37a23d4dd30125ebf2ac6ae.png'  title='"+char+4+"'/>"),
   
        ));
    });

    return $container.html();
});

}else if(lay=="1-1"){
var text = "";
var i;
for (i = 0; i < num; i++) {
    text += seat2[i] + " , ";
   
    text += '';

 $('#demo').css('color', 'green');
}
var checkval = $('#checkbox').val();
if(checkval=='last'){
var midle = "";
var i;
for (i = 1; i < 2; i++) {
    midle += middle[i] + " , "; 
    midle += '';

//console.log(text);
 $('#demo').css('color', 'green');
}
}else{
 var midle='';
}

$("#layoutimg").append(function(){
a=document.getElementById("demo").innerHTML = text+midle;
            var test = "";
var testn = $('#seat').val();
var chair11=testn-1;
var chainm=chair11/2;
var i;
for (i = 0; i < chainm; i++) {
    test += lays[i] + " , ";
   
    test += '';

}
st=test.slice(0,-2);
 var numr=JSON.stringify(st);
  var chair = numr.split(",");
console.log(chair);
    options =chair;
   var $container = $('<div id="chair1"></div>'); 
   $.each(options, function(val) {
    for(var i = 0; i <= val; i++) {
    var char = String.fromCharCode(65+i);
    var testn2 = $('#seat').val();
    var testn =testn2-1;
    var num=val+1;
    var lasseat = $('#checkbox').val();
       
      if(lasseat=='last' && num==testn/2){
          lastclass='docIcon';
      }else{
          lastclass='midlesp';
        }

    }
        console.log(val);
  $container.append($("<tr/>").append(
  $("<td/>").html("<img class='img' width='50px' height='50px' src='../../assets/img/f2dcc1cda37a23d4dd30125ebf2ac6ae.png' onerror=this.src='../../../assets/img/f2dcc1cda37a23d4dd30125ebf2ac6ae.png' title='"+char+1+"'/>"),     
  $("<td/>").html("<div class='"+lastclass+"' title='"+char+"M'></div>"),
  $("<td/>").html("<img class='img' width='50px' height='50px' src='../../assets/img/f2dcc1cda37a23d4dd30125ebf2ac6ae.png' onerror=this.src='../../../assets/img/f2dcc1cda37a23d4dd30125ebf2ac6ae.png' title='"+char+2+"'/>"),

        ));
    });

    return $container.html();
});

}else if(lay=="2-1"){
var text = "";
var i;
for (i = 0; i < num; i++) {
    text += seat3[i] + " , ";
   
    text += '';

 $('#demo').css('color', 'green');
}

var checkval = $('#checkbox').val();
if(checkval=='last'){
var midle = "";
var i;
for (i = 1; i < 2; i++) {
    midle += middle[i] + " , "; 
    midle += '';

//console.log(text);
 $('#demo').css('color', 'green');
}
}else{
 var midle='';
}
$("#layoutimg").append(function(){
a=document.getElementById("demo").innerHTML = text+midle;
            var test = "";
var testn = $('#seat').val();
var seat = testn-1;
var chainm=seat/3;
var i;
for (i = 0; i < chainm; i++) {
    test += lays[i] + " , ";
   
    test += '';

}
st=test.slice(0,-2);
 var numr=JSON.stringify(st);
  var chair = numr.split(",");
console.log(chair);
    options =chair;
  var $container = $('<div id="chair1"></div>');     
  $.each(options, function(val) {
  for(var i = 0; i <= val; i++) {
  var char = String.fromCharCode(65+i);
  var testn2 = $('#seat').val();
  var testn =testn2-1;
  var num=val+1;
  var lasseat = $('#checkbox').val();
 
if(lasseat=='last' && num==testn/3){
    lastclass='docIcon';
}else{
    lastclass='midlesp';
  }

    }
  console.log(val);
  $container.append($("<tr/>").append(
  $("<td/>").html("<img class='img' width='50px' height='50px' src='../../assets/img/f2dcc1cda37a23d4dd30125ebf2ac6ae.png' onerror=this.src='../../../assets/img/f2dcc1cda37a23d4dd30125ebf2ac6ae.png' title='"+char+1+"'/>"),
  $("<td/>").html("<img class='img' width='50px' height='50px' src='../../assets/img/f2dcc1cda37a23d4dd30125ebf2ac6ae.png' onerror=this.src='../../../assets/img/f2dcc1cda37a23d4dd30125ebf2ac6ae.png' title='"+char+2+"'/>"),
      
  $("<td/>").html("<div class='"+lastclass+"' title='"+char+"M'></div>"),
  $("<td/>").html("<img class='img' width='50px' height='50px' src='../../assets/img/f2dcc1cda37a23d4dd30125ebf2ac6ae.png' onerror=this.src='../../../assets/img/f2dcc1cda37a23d4dd30125ebf2ac6ae.png' title='"+char+3+"'/>"),
           
        ));
    });

    return $container.html();
});

}else if(lay=="1-2"){
var text = "";
var i;
for (i = 0; i < num; i++) {
    text += seat3[i] + " , ";   
    text += '';
 $('#demo').css('color', 'green');
}
var checkval = $('#checkbox').val();
if(checkval=='last'){
var midle = "";
var i;
for (i = 1; i < 2; i++) {
    midle += middle[i] + " , "; 
    midle += '';
//console.log(text);
 $('#demo').css('color', 'green');
}
}else{
 var midle='';
}

$("#layoutimg").append(function(){
a=document.getElementById("demo").innerHTML = text+midle;
            var test = "";
var testn = $('#seat').val();
var chairno=testn-1;
var chainm=chairno/3;
var i;
for (i = 0; i < chainm; i++) {
    test += lays[i] + " , ";
   
    test += '';

}
st=test.slice(0,-2);
 var numr=JSON.stringify(st);
  var chair = numr.split(",");
console.log(chair);
    options =chair;
                var $container = $('<div id="chair1"></div>');

         $.each(options, function(val) {
        for(var i = 0; i <= val; i++) {
        var char = String.fromCharCode(65+i);
        var testn2 = $('#seat').val();
        var testn =testn2-1;
        var num=val+1;
        var lasseat = $('#checkbox').val();
       
      if(lasseat=='last' && num==testn/3){
          lastclass='docIcon';
      }else{
          lastclass='midlesp';
        }

    }
    console.log(val);
    $container.append($("<tr/>").append(
    $("<td/>").html("<img class='img' width='50px' height='50px' src='../../assets/img/f2dcc1cda37a23d4dd30125ebf2ac6ae.png' onerror=this.src='../../../assets/img/f2dcc1cda37a23d4dd30125ebf2ac6ae.png' title='"+char+1+"'/>"),
    $("<td/>").html("<div class='"+lastclass+"' title='"+char+"M'></div>"),
    $("<td/>").html("<img class='img' width='50px' height='50px' src='../../assets/img/f2dcc1cda37a23d4dd30125ebf2ac6ae.png' onerror=this.src='../../../assets/img/f2dcc1cda37a23d4dd30125ebf2ac6ae.png' title='"+char+2+"'/>"),
    $("<td/>").html("<img class='img' width='50px' height='50px' src='../../assets/img/f2dcc1cda37a23d4dd30125ebf2ac6ae.png' onerror=this.src='../../../assets/img/f2dcc1cda37a23d4dd30125ebf2ac6ae.png' title='"+char+3+"'/>"),
           
        ));
    });

    return $container.html();
});

}else  if(lay=="3-2"){
var text = "";
var i;
for (i = 0; i < num; i++) {
    text += seat4[i] + " , ";
   
    text += '';

 $('#demo').css('color', 'green');
}
var checkval = $('#checkbox').val();
if(checkval=='last'){
var midle = "";
var i;
for (i = 1; i < 2; i++) {
    midle += middle[i] + " , "; 
    midle += '';

//console.log(text);
 $('#demo').css('color', 'green');
}
}else{
 var midle='';
}
$("#layoutimg").append(function(){
a=document.getElementById("demo").innerHTML = text+midle;
            var test = "";
var testn = $('#seat').val();
var chairno = testn-1;
var chainm=chairno/5;
var i;
for (i = 0; i < chainm; i++) {
    test += lays[i] + " , ";
   
    test += '';

}
st=test.slice(0,-2);
 var numr=JSON.stringify(st);
  var chair = numr.split(",");
console.log(chair);
    options =chair;
                var $container = $('<div id="chair1"></div>');

                $.each(options, function(val) {
         for(var i = 0; i <= val; i++) {
        var char = String.fromCharCode(65+i);
        var testn2 = $('#seat').val();
        var testn =testn2-1;
        var num=val+1;
        var lasseat = $('#checkbox').val();
       
      if(lasseat=='last' && num==testn/5){
          lastclass='docIcon';
      }else{
          lastclass='midlesp';
        }

    }
                    console.log(val);
                    $container.append($("<tr/>").append(
                    $("<td/>").html("<img class='img' width='50px' height='50px' src='../../assets/img/f2dcc1cda37a23d4dd30125ebf2ac6ae.png' onerror=this.src='../../../assets/img/f2dcc1cda37a23d4dd30125ebf2ac6ae.png' title='"+char+1+"'/>"),
                     $("<td/>").html("<img class='img' width='50px' height='50px' src='../../assets/img/f2dcc1cda37a23d4dd30125ebf2ac6ae.png' onerror=this.src='../../../assets/img/f2dcc1cda37a23d4dd30125ebf2ac6ae.png' title='"+char+2+"'/>"),
                      $("<td/>").html("<img class='img' width='50px' height='50px' src='../../assets/img/f2dcc1cda37a23d4dd30125ebf2ac6ae.png' onerror=this.src='../../../assets/img/f2dcc1cda37a23d4dd30125ebf2ac6ae.png' title='"+char+3+"'/>"),
                        
                    $("<td/>").html("<div class='"+lastclass+"' title='"+char+"M'></div>"),
                        
                    $("<td/>").html("<img class='img' width='50px' height='50px' src='../../assets/img/f2dcc1cda37a23d4dd30125ebf2ac6ae.png' onerror=this.src='../../../assets/img/f2dcc1cda37a23d4dd30125ebf2ac6ae.png' title='"+char+4+"'/>"),
                     $("<td/>").html("<img class='img' width='50px' height='50px' src='../../assets/img/f2dcc1cda37a23d4dd30125ebf2ac6ae.png' onerror=this.src='../../../assets/img/f2dcc1cda37a23d4dd30125ebf2ac6ae.png' title='"+char+5+"'/>"),
           
        ));
    });

    return $container.html();
});

}else if(lay=="2-3"){
var text = "";
var i;
for (i = 0; i < num; i++) {
    text += seat4[i] + " , ";
   
    text += '';

 $('#demo').css('color', 'green');
}
var checkval = $('#checkbox').val();
if(checkval=='last'){
var midle = "";
var i;
for (i = 1; i < 2; i++) {
    midle += middle[i] + " , "; 
    midle += '';

//console.log(text);
 $('#demo').css('color', 'green');
}
}else{
 var midle='';
}
$("#layoutimg").append(function(){
a=document.getElementById("demo").innerHTML = text+midle;
            var test = "";
var testn = $('#seat').val();
var charno=testn-1;
var chainm=charno/5;
var i;
for (i = 0; i < chainm; i++) {
    test += lays[i] + " , ";
   
    test += '';

}
st=test.slice(0,-2);
 var numr=JSON.stringify(st);
  var chair = numr.split(",");
console.log(chair);
    options =chair;
                var $container = $('<div id="chair1"></div>');

                $.each(options, function(val) {
          for(var i = 0; i <= val; i++) {
        var char = String.fromCharCode(65+i);
        var testn2 = $('#seat').val();
        var testn =testn2-1;
        var num=val+1;
        var lasseat = $('#checkbox').val();
       
      if(lasseat=='last' && num==testn/5){
          lastclass='docIcon';
      }else{
          lastclass='midlesp';
        }

    }
  console.log(val);
  $container.append($("<tr/>").append(
  $("<td/>").html("<img class='img' width='50px' height='50px' src='../../assets/img/f2dcc1cda37a23d4dd30125ebf2ac6ae.png' onerror=this.src='../../../assets/img/f2dcc1cda37a23d4dd30125ebf2ac6ae.png' title='"+char+1+"'/>"),
  $("<td/>").html("<img class='img' width='50px' height='50px' src='../../assets/img/f2dcc1cda37a23d4dd30125ebf2ac6ae.png' onerror=this.src='../../../assets/img/f2dcc1cda37a23d4dd30125ebf2ac6ae.png' title='"+char+2+"'/>"), 
  $("<td/>").html("<div class='"+lastclass+"' title='"+char+"M'></div>"),
  $("<td/>").html("<img class='img' width='50px' height='50px' src='../../assets/img/f2dcc1cda37a23d4dd30125ebf2ac6ae.png' onerror=this.src='../../../assets/img/f2dcc1cda37a23d4dd30125ebf2ac6ae.png' title='"+char+3+"'/>"),
  $("<td/>").html("<img class='img' width='50px' height='50px' src='../../assets/img/f2dcc1cda37a23d4dd30125ebf2ac6ae.png' onerror=this.src='../../../assets/img/f2dcc1cda37a23d4dd30125ebf2ac6ae.png' title='"+char+4+"'/>"),
  $("<td/>").html("<img class='img' width='50px' height='50px' src='../../assets/img/f2dcc1cda37a23d4dd30125ebf2ac6ae.png' onerror=this.src='../../../assets/img/f2dcc1cda37a23d4dd30125ebf2ac6ae.png' title='"+char+5+"'/>"),

        ));
    });

    return $container.html();
});

}
    var x= $('#seat').val();
    var lay = $('#layout').val();
    if(lay == '2-2'){
      var y= 4; 
    }else if(lay == '1-1'){
      var y=2;
    }else if(lay == '2-1' || lay == '1-2'){
      var y=3;
    }else{
      var y=5;
    }
   
    var remainder = x % y;
    if(checkval=='last'){
     var remain=remainder-1;
    }else{
       var remain=remainder;
    }
var setreminnder=((x - remainder) / y);
//alert(remainder);
for (i = 0; i < remain; i++) {
 $('#layoutimg').append('<tr><td class="docIcon"></td></tr>');   
}
   
}
</script>

<script type="text/javascript">
    $('#layout').change(function(event) {
    $("#layoutimg tbody tr").remove(); 
    }); 
     $('#seat').keypress(function(event) {
    $("#layoutimg tbody tr").remove(); 
    $("#teslayout tbody tr").remove();
   
    }); 
</script>
<script type="text/javascript">
    $(document).ready(function () {
    var ckbox = $('#checkbox');

    $('#checkbox').on('click',function () {
      if (ckbox.is(':checked')) {
       var a = document.getElementById("checkbox");
         a.value = "last";
            
      } else {
          var a = document.getElementById("checkbox");
            a.value = "asd";
        }
    });
});
</script>