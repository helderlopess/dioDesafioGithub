<html>
  <Head>
    <title>Meu primeiro site em php</title>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <style type="text/css">

      .mainbloco{
        margin:auto 30% ;
      }

      .linha{
        font-weight: bold;        
        color: green;        
        padding-left: 10px;
        line-height: 50px;
      }

      .linha:hover {
        clear:both;
        background-color:coral;
        padding:15px;
        color:chartreuse;
      }

    </style>
  </Head>

  <body>
    <div class="mainbloco">
      <h1>Contador de linhas em PHP</h1>
    <?php
        for ( $i = 0; $i < 10; $i++){
          print("<span class=\"linha\">Linha número ".$i. "</span><br />");
        }
    ?>
    </div>
  </body>

  <script type="text/javascript">
    $(document).ready (function() {
      alert("Wohoo");
      
    });
    </script>
  </html>