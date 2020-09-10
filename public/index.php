<!DOCTYPE html>
<html>
<head>
  <title>Brainly Scraper</title>
  <style type="text/css">
    .main-cg {
      text-align: center;
      font-family: Arial;
    }
    .input-cg {
      margin: auto;
      border: 1px solid #000;
      width: 400px;
      padding: 30px;
    }
    .btn-cg {
      margin-top: 10px;
    }
    button {
      cursor: pointer;
    }
    .intx-cg {
      font-size: 22px;
    }
    #result-cg {
      margin: auto;
      margin-top: 20px;
      margin-bottom: 100px;
      border: 1px solid #000;
      width: 950px;
      height: 500px;
      overflow-y: scroll;
      display: flex;
    }
    #result-fx {
      margin-left: auto;
      margin-right: auto;
      margin-bottom: 40px;
    }
    #loading-fx {
      margin: auto;
      margin-bottom: 40px;
    }
    .ctx-dx {
      margin: auto;
      margin-top: 2px;
      border: 1px solid #000;
      text-align: justify;
      width: 90%;
      padding: 2%;
    }
    .ctx-question, .ctx-answer {
      margin-top: 10px;
      word-wrap: break-word;
    }
  </style>
</head>
<body>
  <div class="main-cg">
    <h1>Brainly Scraper</h1>
    <div class="input-cg">
      <form action="javascript:void(0);" method="post" id="form">
        <div class="intx-cg">Masukkan pertanyaan:</div>
        <textarea style="width:382px;height:129px;" id="input" required></textarea>
        <div>Ketik pertanyaan, misal: Siapa penemu lampu?</div>
        <div class="btn-cg">
          <button id="sbbtn" type="submit">Cari</button>
          <button id="clbtn" type="reset">Clear</button>
        </div>
      </form>
    </div>
    <div id="result-cg" style="display:none;">
      <div id="loading-fx"><h1>Loading...</h1></div>
      <div id="result-fx" style="display:none;">
        <h2>Hasil (ditemukan <span id="rcount"></span> hasil yang serupa)</h2>
        <div id="result-plug">
        </div>
      </div>
    </div>
    <div id="ctx_template" style="display:none;">
      <div class="ctx-dx">
        <div class="ctx-question">
          <div><b>Pertanyaan:</b></div>
          <div>:question</div>
        </div>
        <div class="ctx-answer">
          <div><b>Jawaban:</b></div>
          <div>:answer</div>
        </div>
      </div>
    </div>
  </div>
  <script type="text/javascript">
    function gi(id){return document.getElementById(id)};
    var fm = gi("form"),
        input = gi("input"),
        rp = gi("result-plug"),
        fx = gi("result-fx"),
        rcount = gi("rcount"),
        template = gi("ctx_template").innerHTML;
        cg = gi("result-cg"),
        loading_fx = gi("loading-fx"),
        sbbtn = gi("sbbtn"),
        clbtn = gi("clbtn");
    fm.addEventListener("submit", function () {
      input.disabled = clbtn.disabled = sbbtn.disabled = 1;
      loading_fx.style.display = cg.style.display = "";
      fx.style.display = "none";
      var ch = new XMLHttpRequest;
      ch.onload = function () {
        var i, j, r = "", json = JSON.parse(this.responseText);
        for (i in json.msg) {
          j = json.msg[i];
          r += template.replace(/:question/, j.content).replace(/:answer/, j.answers.join("<br/>\n"));
        }
        rp.innerHTML = r;
        rcount.innerHTML = json.msg.length;
        fx.style.display = "";
        loading_fx.style.display = "none";
        input.disabled = clbtn.disabled = sbbtn.disabled = 0;
      };
      ch.open("GET", "api.php?q="+encodeURIComponent(input.value));
      ch.send();
    });
  </script>
</body>
</html>