<?php  

?>
<html>
<head>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<title>CHK VTEX</title>
<style>
textarea:hover, input:hover, textarea:active, input:active, textarea:focus, input:focus {
        outline:0px !important;
    }
button:focus {outline:0;}

::-webkit-scrollbar {
    width: 5px;
}


::-webkit-scrollbar-track {
    background: black; 
}


::-webkit-scrollbar-thumb {
    background: blue; 
}


::-webkit-scrollbar-thumb:hover {
    background: blue; 
}
</style>
</head>

    <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>

<script>
        var audio = new Audio('blop.mp3');
            $(document).ready(function () {
                $('#status').html('<span id="bad" class="badge badge-danger">Parado !</span>');
                $('#start').attr('disabled', null);
                $('#clear').attr('disabled','disabled');
                $('#stop').attr('disabled','disabled');
                $('#start').click(function () {
                    audio.play();
                    var line = $('#list').val().split('\n');
                    var total = line.length;
                    var ap = 0;
                    var rp = 0;
                    var sd = 0;
                    $('#total').html(total);
                    line.forEach(function (value) {
                        var ajaxCall = $.ajax({
                            url: 'api.php',
                            type: 'GET',
                            data: 'lista=' + value,
                            beforeSend: function () {
                                $('#status').html('<span class="badge badge-success">Testando !</span>');
                                $('#stop').attr('disabled',null);
                                $('#stop').attr('disabled',null);
                                $('#start').attr('disabled','disabled');
                            },

            success: function(data){
                if(data.indexOf("Aprovada") >= 0){
                    $("#aprovadas").val(data + "\n" + $("#aprovadas").val());
                    ap = ap + 1;
                    document.getElementById("aprovadas").innerHTML += data + "<br>";
                    audio.play();
                    removelinha();
                }else{
                    $("#reprovadas").val(data + "\n" + $("#reprovadas").val());
                    rp = rp + 1;
                    document.getElementById("reprovadas").innerHTML += data + "<br>";
                    removelinha();
                }
                    var fila = parseInt(ap) + parseInt(rp);
                    $('#live').html(ap);
                    $('#die').html(rp);
                    $('#testadas').html(fila);
                    if (fila == total) {
                        $('#start').attr('disabled', null);
                        $('#stop').attr('disabled', 'disabled');
                        $('#clear').attr('disabled',null);
                        $('#status').html('<span class="badge badge-info">FINALIZADA</span>');
                        audio.play();
                    }
                }
            });
             $('#stop').click(function(){
            ajaxCall.abort();
            $('#start').attr('disabled',null);
            $('#stop').attr('disabled','disabled');
            $('#clear').attr('disabled',null);
          });
        });
        $('#stop').click(function(){
          $('#status').html('<span class="badge badge-danger">STOP!</span>');
          
        });
        
        $('#clear').click(function(){
        $('#status').html('<span class="badge badge-secondary">Lista Limpa!</span>');
                $('#list').val('');
            });
            });
        });
        function removelinha() {
            var lines = $("#list").val().split('\n');
                lines.splice(0, 1);
                $("#list").val(lines.join("\n"));
            }

        </script>
<body><br>
    <center>
      <font size="8">CHECKER</font> <br />
     <p></p>
     <br /><br />
   <textarea id="list" name="lista" rows="5" required="" cols="1" style="max-width: 50rem;" class="form-control" placeholder="Cartao|Mes|Ano|Cvv"></textarea><p></p>
    <div>
        <font color="black"><b>Status: </b><span id="status"></span><p></p>Aprovadas : <span id="live" class="badge badge-success">0</span>  Reprovadas : <span id="die" class="badge badge-danger">0</span> Testadas: <span id="testadas" class="badge badge-warning">0</span>  Total : <span id="total" class="badge badge-warning">0</span> </font><br><br>
    </div>

<div class="button-list">
    <button class="btn btn-success" type="submit" id="start">START</i></button>
    <button class="btn btn-danger" type="submit" id="stop">STOP</button>
  </div>
   <br /><br />

<center>
    <div class="card border- mb-3" style="max-width: 80rem;">
      <div class="card-header">APROVADAS ✅</i></div>
      <div id="aprovadas" class="card-body"></div>
    </div><br><br>

    <div class="card border- mb-3" style="max-width: 80rem;">
       <div class="card-header">REPROVADAS ❌</i></div>
       <div  id="reprovadas" class="card-body"></div>
     </div>
</center>
</body>
</html>
