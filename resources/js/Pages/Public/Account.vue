<template>
  <Header ></Header>
  <div class="container" style="padding-top: 20px;">
    <div class="row d-flex flex-column flex-md-row">
        <div class="col-12 col-md-7" style="/*height: 100%;*/">
            <div class="bg-body border rounded border-0 shadow" style="overflow: hidden;height: 200px;">
                <div class="bg-body-secondary" style="height: 70%;"></div>
                <div class="d-flex justify-content-between" style="height: 30%;">
                    <div class="d-flex" style="/*width: 80%;*/padding-left: 20px;">
                        <div style="width: 100px;height: 100px;margin-top: -50px;border-radius: 100%;padding: 2px;overflow: hidden;border: 1.5px dashed var(--bs-gray-500);">
                            <div style="width: 100%;height: 100%;background: var(--bs-gray-600);border-radius: 100%;"><img style="width: 100%;height: 100%;border-radius: 100%;" src="jpg/img logo.jpg" /></div>
                        </div>
                        <div class="d-flex flex-column" style="margin-left: 15px;margin-top: 10px;"><span class="fw-bold">#MPlace officiel</span><span style="font-size: 11px;">2.9k abonné(és)</span></div>
                    </div>
                    <div class="d-flex flex-column justify-content-end" style="/*width: 50%;*/margin-right: 15px;margin-bottom: 15px;"><button class="btn btn-primary btn-sm link-light border rounded-pill border-0 shadow" type="button" style="padding-right: 12px;padding-left: 12px;"><span class="d-none d-sm-block">S&#39;abonner</span><svg class="d-sm-none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="1em" height="1em" fill="currentColor">
                                <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                                <path d="M244 84L255.1 96L267.1 84.02C300.6 51.37 347 36.51 392.6 44.1C461.5 55.58 512 115.2 512 185.1V190.9C512 232.4 494.8 272.1 464.4 300.4L283.7 469.1C276.2 476.1 266.3 480 256 480C245.7 480 235.8 476.1 228.3 469.1L47.59 300.4C17.23 272.1 0 232.4 0 190.9V185.1C0 115.2 50.52 55.58 119.4 44.1C164.1 36.51 211.4 51.37 244 84C243.1 84 244 84.01 244 84L244 84zM255.1 163.9L210.1 117.1C188.4 96.28 157.6 86.4 127.3 91.44C81.55 99.07 48 138.7 48 185.1V190.9C48 219.1 59.71 246.1 80.34 265.3L256 429.3L431.7 265.3C452.3 246.1 464 219.1 464 190.9V185.1C464 138.7 430.4 99.07 384.7 91.44C354.4 86.4 323.6 96.28 301.9 117.1L255.1 163.9z"></path>
                            </svg></button></div>
                </div>
            </div>
        </div>
        <div id="col-right" class="col-12 col-md-5">
            <div style="height: 200px;">
                <div id="count-pub" class="carousel slide bg-body border rounded border-0 shadow" data-bs-ride="false" style="height: 100%;">
                    <div class="carousel-inner" style="height: 100%;border-radius: 15px;">
                        <div class="carousel-item active" style="height: 100%;border-radius: 15px;">
                            <div class="d-flex" style="height: 100%;padding: 20px;">
                                <div class="d-flex flex-column justify-content-between" style="width: 65%;">
                                    <div class="d-flex flex-column"><span class="fs-5">Welcome</span><span>Bienvenu dans notre compte, profitez de voir des articles que.</span></div>
                                    <div style="margin-bottom: -5px;"><button class="btn btn-primary btn-sm bg-transparent border rounded border-primary" type="button" style="padding-left: 15px;color: var(--bs-btn-border-color);padding-right: 15px;">Consultez</button></div>
                                </div>
                                <div class="d-flex flex-column justify-content-center align-items-center align-content-center" style="width: 35%;"><img src="images/shopping-delivery.png" style="width: 80%;height: 80%;" /></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
</div>
  </template>
  
  <script>
  import Header from '../../Components/Header/Header.vue';
  
  export default {
      components: {
          Header
      }
  }
  
  </script>