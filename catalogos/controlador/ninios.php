
<script type="text/javascript">
    function ruloc() {
        element = document.getElementById("filtro10");
        check = document.getElementById("run");
        if (check.checked) {
            element.style.display='block';
        }
        else {
            element.style.display='none';
        }
    }
</script>
<script type="text/javascript">
function ru()
{
var xmlhttp;

var n=document.getElementById('run').value;

if(n==''){
document.getElementById("filtro10").innerHTML="";
return;
}

if (window.XMLHttpRequest)
{// code for IE7+, Firefox, Chrome, Opera, Safari
xmlhttp=new XMLHttpRequest();
}
else
{// code for IE6, IE5
xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
}
xmlhttp.onreadystatechange=function()
{
if (xmlhttp.readyState==4 && xmlhttp.status==200)
{
document.getElementById("filtro10").innerHTML=xmlhttp.responseText;
}
}
xmlhttp.open("POST","modelo/run-n.php",true);
xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
xmlhttp.send("q="+n);
}
</script>


<script type="text/javascript">
    function soccloc() {
        element = document.getElementById("filtro9");
        check = document.getElementById("socc");
        if (check.checked) {
            element.style.display='block';
        }
        else {
            element.style.display='none';
        }
    }
</script>
<script type="text/javascript">
function so()
{
var xmlhttp;

var n=document.getElementById('socc').value;

if(n==''){
document.getElementById("filtro9").innerHTML="";
return;
}

if (window.XMLHttpRequest)
{// code for IE7+, Firefox, Chrome, Opera, Safari
xmlhttp=new XMLHttpRequest();
}
else
{// code for IE6, IE5
xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
}
xmlhttp.onreadystatechange=function()
{
if (xmlhttp.readyState==4 && xmlhttp.status==200)
{
document.getElementById("filtro9").innerHTML=xmlhttp.responseText;
}
}
xmlhttp.open("POST","modelo/socc-n.php",true);
xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
xmlhttp.send("q="+n);
}
</script>





<script type="text/javascript">
    function formaloc() {
        element = document.getElementById("filtro8");
        check = document.getElementById("forma");
        if (check.checked) {
            element.style.display='block';
        }
        else {
            element.style.display='none';
        }
    }
</script>
<script type="text/javascript">
function f()
{
var xmlhttp;

var n=document.getElementById('forma').value;

if(n==''){
document.getElementById("filtro8").innerHTML="";
return;
}

if (window.XMLHttpRequest)
{// code for IE7+, Firefox, Chrome, Opera, Safari
xmlhttp=new XMLHttpRequest();
}
else
{// code for IE6, IE5
xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
}
xmlhttp.onreadystatechange=function()
{
if (xmlhttp.readyState==4 && xmlhttp.status==200)
{
document.getElementById("filtro8").innerHTML=xmlhttp.responseText;
}
}
xmlhttp.open("POST","modelo/forma-n.php",true);
xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
xmlhttp.send("q="+n);
}
</script>




<script type="text/javascript">
    function urba() {
        element = document.getElementById("filtro7");
        check = document.getElementById("ur");
        if (check.checked) {
            element.style.display='block';
        }
        else {
            element.style.display='none';
        }
    }
</script>
<script type="text/javascript">
function urb()
{
var xmlhttp;

var n=document.getElementById('ur').value;

if(n==''){
document.getElementById("filtro7").innerHTML="";
return;
}

if (window.XMLHttpRequest)
{// code for IE7+, Firefox, Chrome, Opera, Safari
xmlhttp=new XMLHttpRequest();
}
else
{// code for IE6, IE5
xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
}
xmlhttp.onreadystatechange=function()
{
if (xmlhttp.readyState==4 && xmlhttp.status==200)
{
document.getElementById("filtro7").innerHTML=xmlhttp.responseText;
}
}
xmlhttp.open("POST","modelo/ur-n.php",true);
xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
xmlhttp.send("q="+n);
}
</script>



<script type="text/javascript">
    function showContent6() {
        element = document.getElementById("filtro6");
        check = document.getElementById("casu");
        if (check.checked) {
            element.style.display='block';
        }
        else {
            element.style.display='none';
        }
    }
</script>
<script type="text/javascript">
function casual()
{
var xmlhttp;

var n=document.getElementById('casu').value;

if(n==''){
document.getElementById("filtro6").innerHTML="";
return;
}

if (window.XMLHttpRequest)
{// code for IE7+, Firefox, Chrome, Opera, Safari
xmlhttp=new XMLHttpRequest();
}
else
{// code for IE6, IE5
xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
}
xmlhttp.onreadystatechange=function()
{
if (xmlhttp.readyState==4 && xmlhttp.status==200)
{
document.getElementById("filtro6").innerHTML=xmlhttp.responseText;
}
}
xmlhttp.open("POST","modelo/casual-n.php",true);
xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
xmlhttp.send("q="+n);
}
</script>




<script type="text/javascript">
    function showContent1() {
        element = document.getElementById("filtro");
        check = document.getElementById("cater");
        if (check.checked) {
            element.style.display='block';
        }
        else {
            element.style.display='none';
        }
    }
</script>

<script type="text/javascript">
    function showContent2() {
        element = document.getElementById("filtro2");
        check = document.getElementById("con");
        if (check.checked) {
            element.style.display='block';
        }
        else {
            element.style.display='none';
        }
    }
</script>
<script type="text/javascript">
    function showContent3() {
        element = document.getElementById("filtro3");
        check = document.getElementById("hus");
        if (check.checked) {
            element.style.display='block';
        }
        else {
            element.style.display='none';
        }
    }
</script>
<script type="text/javascript">
    function showContent4() {
        element = document.getElementById("filtro4");
        check = document.getElementById("nike");
        if (check.checked) {
            element.style.display='block';
        }
        else {
            element.style.display='none';
        }
    }
</script>
<script type="text/javascript">
    function showContent5() {
        element = document.getElementById("filtro5");
        check = document.getElementById("pirma");
        if (check.checked) {
            element.style.display='block';
        }
        else {
            element.style.display='none';
        }
    }
</script>
<script type="text/javascript">

function pir()
{
var xmlhttp;

var n=document.getElementById('pirma').value;

if(n==''){
document.getElementById("filtro5").innerHTML="";
return;
}

if (window.XMLHttpRequest)
{// code for IE7+, Firefox, Chrome, Opera, Safari
xmlhttp=new XMLHttpRequest();
}
else
{// code for IE6, IE5
xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
}
xmlhttp.onreadystatechange=function()
{
if (xmlhttp.readyState==4 && xmlhttp.status==200)
{
document.getElementById("filtro5").innerHTML=xmlhttp.responseText;
}
}
xmlhttp.open("POST","modelo/pir-n.php",true);
xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
xmlhttp.send("cn="+n);
}



function nik()
{
var xmlhttp;

var n=document.getElementById('nike').value;

if(n==''){
document.getElementById("filtro4").innerHTML="";
return;
}

if (window.XMLHttpRequest)
{// code for IE7+, Firefox, Chrome, Opera, Safari
xmlhttp=new XMLHttpRequest();
}
else
{// code for IE6, IE5
xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
}
xmlhttp.onreadystatechange=function()
{
if (xmlhttp.readyState==4 && xmlhttp.status==200)
{
document.getElementById("filtro4").innerHTML=xmlhttp.responseText;
}
}
xmlhttp.open("POST","modelo/nik-n.php",true);
xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
xmlhttp.send("cn="+n);
}



function hus()
{
var xmlhttp;

var n=document.getElementById('hus').value;

if(n==''){
document.getElementById("filtro3").innerHTML="";
return;
}

if (window.XMLHttpRequest)
{// code for IE7+, Firefox, Chrome, Opera, Safari
xmlhttp=new XMLHttpRequest();
}
else
{// code for IE6, IE5
xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
}
xmlhttp.onreadystatechange=function()
{
if (xmlhttp.readyState==4 && xmlhttp.status==200)
{
document.getElementById("filtro3").innerHTML=xmlhttp.responseText;
}
}
xmlhttp.open("POST","modelo/hus-n.php",true);
xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
xmlhttp.send("cn="+n);
}


function cate()
{
var xmlhttp;

var n=document.getElementById('cater').value;

if(n==''){
document.getElementById("filtro").innerHTML="";
return;
}

if (window.XMLHttpRequest)
{// code for IE7+, Firefox, Chrome, Opera, Safari
xmlhttp=new XMLHttpRequest();
}
else
{// code for IE6, IE5
xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
}
xmlhttp.onreadystatechange=function()
{
if (xmlhttp.readyState==4 && xmlhttp.status==200)
{
document.getElementById("filtro").innerHTML=xmlhttp.responseText;
}
}
xmlhttp.open("POST","modelo/cater-n.php",true);
xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
xmlhttp.send("cn="+n);
}

function c()
{
var xmlhttp;

var n=document.getElementById('con').value;

if(n==''){
document.getElementById("filtro2").innerHTML="";
return;
}

if (window.XMLHttpRequest)
{// code for IE7+, Firefox, Chrome, Opera, Safari
xmlhttp=new XMLHttpRequest();
}
else
{// code for IE6, IE5
xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
}
xmlhttp.onreadystatechange=function()
{
if (xmlhttp.readyState==4 && xmlhttp.status==200)
{
document.getElementById("filtro2").innerHTML=xmlhttp.responseText;
}
}
xmlhttp.open("POST","modelo/conve-n.php",true);
xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
xmlhttp.send("qa="+n);
}

function talla()
{
var xmlhttp;

var n=document.getElementById('test5').value;

if(n==''){
document.getElementById("filtro").innerHTML="";
return;
}

if (window.XMLHttpRequest)
{// code for IE7+, Firefox, Chrome, Opera, Safari
xmlhttp=new XMLHttpRequest();
}
else
{// code for IE6, IE5
xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
}
xmlhttp.onreadystatechange=function()
{
if (xmlhttp.readyState==4 && xmlhttp.status==200)
{
document.getElementById("filtro").innerHTML=xmlhttp.responseText;
}
}
xmlhttp.open("POST","modelo/cat-n.php",true);
xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
xmlhttp.send("t="+n);
}
</script>
<script type="text/javascript">
function loadXMLDocm()
{
var xmlhttp;

var n=document.getElementById('test1').value;

if(n==''){
document.getElementById("filtro").innerHTML="";
return;
}

if (window.XMLHttpRequest)
{// code for IE7+, Firefox, Chrome, Opera, Safari
xmlhttp=new XMLHttpRequest();
}
else
{// code for IE6, IE5
xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
}
xmlhttp.onreadystatechange=function()
{
if (xmlhttp.readyState==4 && xmlhttp.status==200)
{
document.getElementById("filtro").innerHTML=xmlhttp.responseText;
}
}
xmlhttp.open("POST","modelo/cat-n.php",true);
xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
xmlhttp.send("q="+n);
}

  function loadXMLDocmm()
{
var xmlhttp;

var n=document.getElementById('test2').value;

if(n==''){
document.getElementById("filtro").innerHTML="";
return;
}

if (window.XMLHttpRequest)
{// code for IE7+, Firefox, Chrome, Opera, Safari
xmlhttp=new XMLHttpRequest();
}
else
{// code for IE6, IE5
xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
}
xmlhttp.onreadystatechange=function()
{
if (xmlhttp.readyState==4 && xmlhttp.status==200)
{
document.getElementById("filtro").innerHTML=xmlhttp.responseText;
}
}
xmlhttp.open("POST","modelo/cat-n.php",true);
xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
xmlhttp.send("m="+n);
}
</script>
<script type="text/javascript">


  function loadXMLDocm()
{
var xmlhttp;

var n=document.getElementById('test1').value;

if(n==''){
document.getElementById("filtro").innerHTML="";
return;
}

if (window.XMLHttpRequest)
{// code for IE7+, Firefox, Chrome, Opera, Safari
xmlhttp=new XMLHttpRequest();
}
else
{// code for IE6, IE5
xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
}
xmlhttp.onreadystatechange=function()
{
if (xmlhttp.readyState==4 && xmlhttp.status==200)
{
document.getElementById("filtro").innerHTML=xmlhttp.responseText;
}
}
xmlhttp.open("POST","modelo/cat-n.php",true);
xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
xmlhttp.send("q="+n);
}
</script>
