

{{-- <!doctype html>
<html>
<head>
    <title>Timestamp Attempt</title>

 <script>
   var time = new Date();
   function show(id) {
     if (id == 1) {
        document.getElementById('john').value=time;
     }

     if(id == 2) {
        document.getElementById('amber').value=time;
     }
   }
</script>

</head>
<body>

John: <input type='text' id="john" value="">
    <button id='1' onClick="show(this.id)">Click john</button>
        <br>
Amber: <input type='text' id="amber" value="">
    <button id='2' onClick="show(this.id)">Click Amber</button>
</body>
</html> --}}

<button onclick="sendEmail()">Send Email</button>
<p id="mailStatus"></p>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
