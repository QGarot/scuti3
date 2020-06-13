<style>
    .lds-dual-ring {
  display: inline-block;
  width: 80px;
  height: 80px;
}
.lds-dual-ring:after {
  content: " ";
  display: block;
  width: 50px;
  height: 50px;
  margin: 8px;
  border-radius: 50%;
  border: 6px solid #cef;
  border-color: #cef transparent #cef transparent;
  animation: lds-dual-ring 1.2s linear infinite;
}
@keyframes lds-dual-ring {
  0% {
    transform: rotate(0deg);
  }
  100% {
    transform: rotate(360deg);
  }
}

</style>

<div class="loader" style="width:100%;height:100%;position:fixed;z-index:9999;background-color:#453e3a;left:0;top:0">
    <div style="margin-top:270px">
        <img style="display:block;margin-left:auto;margin-right:auto" src="public/assets/img/yobba.gif">
        <div style="margin-top:20px;display:block;margin-left:auto;margin-right:auto" class="lds-dual-ring"></div>
    </div>
</div>