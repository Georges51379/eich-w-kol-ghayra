<style>
.loader_bg{
  position: fixed;
  z-index: 1;
  background: url('img/icons/bg.png') no-repeat center center fixed;
  background-size: cover;
  width: 100%;
  height: 100vh;
}
    </style>

<div class="loader_bg"></div>

    <script>
        setTimeout(function(){
    $('.loader_bg').fadeToggle();
}, 3500);
    </script>

