@extends('layouts.frontend-layouts')

@section('title')
  CV Writing In Lagos | Nigeria
@endsection

@push('cv-style')
{{-- <link rel="stylesheet" type="text/css" href="css/cs-select.css" />
<link rel="stylesheet" type="text/css" href="css/cs-skin-elastic.css" /> --}}

<style>
 /* #our-plans{
  background: url("http://pp.vk.me/c623124/v623124915/42806/oQsNfigr9tM.jpg");
  background-size: cover;
}
.lm-underline {
  position: relative;
}
.lm-underline:after {
  position: absolute;
  content: ' ';
  right: 5%;
  left: 5%;
  bottom: 0;
  height: 1px;
  background-image: linear-gradient(90deg, transparent, #fff, transparent);
}
.lm-tabel {
  font-family: 'Open Sans';
  max-width: 1000px;
  width: 100%;
  padding-top: 10px;
  margin: 0 auto;
}
.lm-item-1 .lm-item-bottom,
.lm-item-1 .lm-item-top {
  background-color: #341b37;
  background-image: linear-gradient(-45deg, #85468c, #241326);
}
.lm-item-2 .lm-item-bottom,
.lm-item-2 .lm-item-top {
  background-color: #e30a51;
  background-image: linear-gradient(-45deg, #f6266b, #7e052d);
}
.lm-item-3 .lm-item-bottom,
.lm-item-3 .lm-item-top {
  background-color: #286caa;
  background-image: linear-gradient(-45deg, #4d93d5, #1a466f);
}
.lm-item {
  transform: scale(0.9);
  vertical-align: top;
  width: 33%;
  float: left;
  display: inline-block;
  position: relative;
  transition: transform 0.3s ease-out, filter 0.3s;
}
.lm-item:hover {
  transform: scale(1);
}
.lm-item:not(:hover).blur {
  filter: blur(3px);
}
.lm-item:after,
.lm-item:before {
  z-index: -1;
  content: ' ';
  position: absolute;
  left: 10px;
  top: 80%;
  bottom: 18px;
  right: 10px;
  transform-origin: bottom center;
  box-shadow: 0px 25px 10px -8px rgba(0,0,0,0.4);
}
.lm-item:after {
  transform: rotate(6deg) translate3d(15px, 0, 0);
}
.lm-item:before {
  transform: rotate(-6deg) translate3d(-15px, 0, 0);
}
.lm-item-top {
  padding-top: 20px;
  text-transform: uppercase;
  border-top-left-radius: 7px;
  border-top-right-radius: 7px;
  text-align: center;
}
.lm-item-title {
  color: #e3dfe2;
  font: 100 30px/70px 'Open Sans';
}
.lm-item-price {
  background: rgba(255,255,255,0.05);
  margin-top: 20px;
  font-size: 40px;
  line-height: 50px;
  color: #fff;
}
.lm-item-price i {
  font-size: 15px;
}
.lm-item-body {
  padding: 15px;
  background: #fff;
}
.lm-item-desc {
  text-align: center;
  margin-bottom: 15px;
  text-transform: uppercase;
}
.lm-item-desc strong {
  color: #868686;
  font: 400 16px 'Open Sans';
}
.lm-item-desc p {
  color: #b4b4b4;
  margin: 0;
}
.lm-item-list {
  margin: 0;
  padding: 0;
  list-style: none;
}
.lm-item-list li {
  color: #b4b4b4;
  border-bottom: 1px dotted rgba(0,0,0,0.1);
  margin-bottom: 5px;
}
.lm-item-list li:nth-child(2n+1) {
  background-color: #fbfbfb;
}
.lm-item-list .icon-cancel,
.lm-item-list .icon-ok {
  float: right;
}
.lm-item-list .icon-ok {
  color: #75bc9a;
}
.lm-item-list .icon-cancel {
  color: #bf7375;
}
.lm-item-link {
  text-align: center;
  margin-top: 15px;
}
.lm-item-link a {
  text-decoration: none;
}
.lm-item-link display inline-block {
  height: 54px;
}
.lm-item-link display inline-block:hover {
  transition: transform 0.3s;
  transform: translate3d(0, -3px, 0);
}
.lm-item-link display inline-block:active {
  transition: transform 0.1s;
  transform: translate3d(0, 0, 0);
}
.lm-item-link text {
  font-size: 21px;
  font-weight: 700;
  -webkit-user-select: none;
     -moz-user-select: none;
      -ms-user-select: none;
          user-select: none;
}
.lm-item-bottom {
  text-align: center;
  border-bottom-left-radius: 7px;
  border-bottom-right-radius: 7px;
  padding: 15px;
  color: rgba(255,255,255,0.5);
  font-weight: 100;
  min-height: 20px;
}
.lm-item-bottom span {
  color: #fff;
  font-weight: 400;
  margin-right: 3px;
  transform: skewX(-10deg);
  display: inline-block;
}
@font-face {
  font-family: 'fontello';
  src: url("data:application/font-woff;base64,d09GRgABAAAAAAuUAA4AAAAAFCgAAQAAAAAAAAAAAAAAAAAAAAAAAAAAAABPUy8yAAABRAAAAEQAAABWPi5I32NtYXAAAAGIAAAAOgAAAUrQHxmxY3Z0IAAAAcQAAAAKAAAACgAAAABmcGdtAAAB0AAABZQAAAtwiJCQWWdhc3AAAAdkAAAACAAAAAgAAAAQZ2x5ZgAAB2wAAAGGAAAB7vzhCgVoZWFkAAAI9AAAADUAAAA2Bty3emhoZWEAAAksAAAAHgAAACQHUgNXaG10eAAACUwAAAAQAAAAEA0cAABsb2NhAAAJXAAAAAoAAAAKAYMAym1heHAAAAloAAAAIAAAACAAkQvkbmFtZQAACYgAAAF3AAACzcydGx1wb3N0AAALAAAAACwAAAA9VFunlXByZXAAAAssAAAAZQAAAHvdawOFeJxjYGR2Z5zAwMrAwVTFtIeBgaEHQjM+YDBkZGJgYGJgZWbACgLSXFMYHF6wveBgDvqfxRDFHMwwDSjMCJIDANm0C4t4nGNgYGBmgGAZBkYGEHAB8hjBfBYGDSDNBqQZGZgYGF5w/P8PUvCCDUSL/4aqBwJGNoYRDwB60ge1AAAAAAAAAAAAAAAAAAB4nK1WaXMTRxCd1WHLNj6CDxI2gVnGcox2VpjLCBDG7EoW4BzylexCjl1Ldu6LT/wG/ZpekVSRb/y0vB4d2GAnVVQoSv2m9+1M9+ueXpPQksReWI+k3HwpprY2aWTnSUg3bFqO4kPZ2QspU0z+LoiCaLXUvu04JCISgap1hSWC2PfI0iTjQ48yWrYlvWpSbulJd9kaD+qt+vbT0FGO3QklNZuhQ+uRLanCqBJFMu2RkjYtw9VfSVrh5yvMfNUMJYLoJJLGm2EMj+Rn44xWGa3GdhxFkU2WG0WKRDM8iCKPslpin1wxQUD5oBlSXvk0onyEH5EVe5TTCnHJdprf9yU/6R3OvyTieouyJQf+QHZkB3unK/ki0toK46adbEehivB0fSfEI5uT6p/sUV7TaOB2RaYnzQiWyleQWPkJZfYPyWrhfMqXPBrVkoOcCFovc2Jf8g60HkdMiWsmyILujk6IoO6XnKHYY/q4+OO9XSwXIQTIOJb1jkq4EEYpYbOaJG0EOYiSskWV1HpHTJzyOi3iLWG/Tu3oS2e0Sag7MZ6th46tnKjkeDSp00ymTu2k5tGUBlFKOhM85tcBlB/RJK+2sZrEyqNpbDNjJJFQoIVzaSqIZSeWNAXRPJrRm7thmmvXokWaPFDPPXpPb26Fmzs9p+3AP2v8Z3UqpoO9MJ2eDshKfJp2uUnRun56hn8m8UPWAiqRLTbDlMVDtn4H5eVjS47CawNs957zK+h99kTIpIH4G/AeL9UpBUyFmFVQC9201rUsy9RqVotUZOq7IU0rX9ZpAk05Dn1jX8Y4/q+ZGUtMCd/vxOnZEZeeufYlyDSH3GZdj+Z1arFdgM5sz+k0y/Z9nebYfqDTPNvzOh1ha+t0lO2HOi2w/UinY2wvaEGT7jsEchGBXMAGEoGwdRAI20sIhK1CIGwXEQjbIgJhu4RA2H6MQNguIxC2l7Wsmn4qaRw7E8sARYgDoznuyGVuKldTyaUSrotGpzbkKXKrpKJ4Vv0rA/3ikTesgbVAukTW/IpJrnxUleOPrmh508S5Ao5Vf3tzXJ8TD2W/WPhT8L/amqqkV6x5ZHIVeSPQk+NE1yYVj67p8rmqR9f/i4oOa4F+A6UQC0VZlg2+mZDwUafTUA1c5RAzGzMP1/W6Zc3P4fybGCEL6H78NxQaC9yDTllJWe1gr9XXj2W5twflsCdYkmK+zOtb4YuMzEr7RWYpez7yecAVMCqVYasNXK3gzXsS85DpTfJMELcVZYOkjceZILGBYx4wb76TICRMXbWB2imcsIG8YMwp2O+EQ1RvlOVwe6F9Ho2Uf2tX7MgZFU0Q+G32Rtjrs1DyW6yBhCe/1NdAVSFNxbipgEsj5YZq8GFcrdtGMk6gr6jYDcuyig8fR9x3So5lIPlIEatHRz+tvUKd1Ln9yihu3zv9CIJBaWL+9r6Z4qCUd7WSZVZtA1O3GpVT15rDxasO3c2j7nvH2Sdy1jTddE/c9L6mVbeDg7lZEO3bHJSlTC6o68MOG6jLzaXQ6mVckt52DzAsMKDfoRUb/1f3cfg8V6oKo+NIvZ2oH6PPYgzyDzh/R/UF6OcxTLmGlOd7lxOfbtzD2TJdxV2sn+LfwKy15mbpGnBD0w2Yh6xaHbrKDXynBjo90tyO9BDwse4K8QBgE8Bi8InuWsbzKYDxfMYcH+Bz5jBoMofBFnMYbDNnDWCHOQx2mcNgjzkMvmDOOsCXzGEQModBxBwGT5gTADxlDoOvmMPga+Yw+IY59wG+ZQ6DmDkMEuYw2Nd0ayhzixd0F6htUBXowPQTFvewONRUGbK/44Vhf28Qs38wiKk/aro9pP7EC0P92SCm/mIQU3/VdGdI/Y0Xhvq7QUz9wyCmPtMvxnKZwV9GvkuFA8ouNp/z98T7B8IaQLYAAQAB//8AD3icZZAxTsMwFIb9nMRJ3RC7UeJEoYQopCmCEqrSNgghunRAogwICViLmBiAgYkDcAYOkJ6AmVv0FCzcoGAXEAODf9t6/3vf048Aoc9bvKGdoykir/sEdrZbHjF9j2xDmpeDQm/nIziCdRCB2OsNy34Bu5C3lRbGoD8s5Qn2emINYj0QDBxVwGZKAi/GqismOH24otaJaUNrXGQc16wDzTVgdOz7O2Nw3bC1kviRv+FkomnTu0vptWhymGWE1Eihc2vNyYtwMAYrckVqr8bxfnPT428XT3xqUWpNjShsOppdnxiYQMn0boc3Xdsldo3ShhmJJNkKTh8bN3IDal3rrieoRutnNUx8yh3o5k7kccoMWnfCMMm7CCGVywee42eUyVyEvsyFAUl3wVSS90fQVjLsrUOpRMhyIPCcTXiHV5WUCVc3//szVlXsQajHbMb+G1mhDIqNkFbhF+RLdkOxwTMluw2/xKUIrWKLRPYv3n+Gwd0Sg4Xgi4QxEN/DZ3Cv1kBft79ItgAAeJxjYGRgYADiJdeUDeP5bb4ycDO/AIowXOI5zwKhl1xhYPifxbyEORjI5WBgAokCADeiCt0AAAB4nGNgZGBgDvqfxRDF/IIBCJiXMDAyoAIWAGFqA7EAAAPoAAACOwAAAxEAAAPoAAAAAAAAAIwAygD3AAAAAQAAAAQAYgABAAAAAAACAAAAEABzAAAAGAtwAAAAAHicdZHNSsNAFEa/aWvVFlQU3HpXUhHTH+hGEAqVutFNkW4ljWmSkmbKZFroa/gOPowv4bP4NZ2KtJiQzLln7ty5mQA4xzcUNleXz4YVjhhtuIRDPDgu0z86rpCfHR+gjlfHVfo3xzXcInJcxwU+WEFVjhlN8elY4UydOi7hRF05LtPfOa6QHxwf4FK9OK7SB45rGKnccR3X6quv5yuTRLGVRv9GOq12V8Yr0VRJ5qfiL2ysTS49mejMhmmqvUDPtjwMo0Xqm224HUehyROdSdtrbdVTmIXGt+H7unq+jDrWTmRi9EwGLkPmRk/DwHqxtfP7ZvPvfuhDY44VDBIeVQwLQYP2hmMHLbT5IwRjZggzN1kJMvhIaXwsuCIuZnLGPT4TRhltyIyU7CHge7bnh6SI61NWMXuzu/GItN4jKbywL4/d7WY9kbIi0y/s+2/vOZbcrUNruWrdpSm6Egx2agjPYz03pQnoveJULO09mrz/+b4f4GSETQB4nGNgYoAALgbsgIWBgZGJkZmRhS0lPycnsYgtOTEvOTWHKT+bgQEAQtQF6XicY/DewXAiKGIjI2Nf5AbGnRwMHAzJBRsZWJ02MjBoQWgOFHonAwMDJzKLmcFlowpjR2DEBoeOiI3MKS4b1UC8XRwNDIwsDh3JIREgJZFAsJGBR2sH4//WDSy9G5kYXAAH0yK4AAAA") format('woff');
  font-weight: normal;
  font-style: normal;
}
[class^="icon-"]:before,
[class*=" icon-"]:before {
  font-family: "fontello";
  font-style: normal;
  font-weight: normal;
  speak: none;
  display: inline-block;
  text-decoration: inherit;
  width: 1em;
  margin-right: 0.2em;
  text-align: center;
  font-variant: normal;
  text-transform: none;
  line-height: 1em;
  margin-left: 0.2em;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}
.icon-dollar:before {
  content: '\e806';
}
.icon-cancel:before {
  content: '\e807';
}
.icon-ok:before {
  content: '\e808';
} */

</style>
@endpush


@section('content')

<section  class="job-hero">
  <div class="container">
   <div class="row">


       <div class="col-md-12">
           <div class="inner-wrap">
              <div class="group-wrap">
                  <div class="text-wrap">
                    <h2>Get That Job Now</h2>
                    <h4>Start Searching</h4>
                  </div>
               </div>

           </div>
       </div>
   </div>
  </div>
</section>


{{-- ////////////////end slider////////////////////////// --}}
<section id="job-intro">
  <div class="container">
      <div class="row">
        <div class="col-md-9 paginated-list-data-wrapper-for-ajax">
          <div class="row">
           hi
          </div>
        </div> 
         <div class="col-md-3">
      
           hi
        </div> 
     </div>    
  </div>
  
</section>

    <section id="our-plans">
      <div class="container">
        <div class="col-12">
          <h5 class="our-plans-title">Pick a plan that suits your needs</h5>
        </div>
        <div class="row">
           
            <div class="  col-sm-4">
              <div class="lm-item-2 lm-item">
                <div class="lm-item-top"><span class="lm-item-title lm-underline">Entry Level CV</span>
                  <div class="lm-item-price">₦8,000</div>
                </div>
                <div class="lm-item-body">
                  <div class="lm-item-desc">
                    <strong>0 - 4 Years Experience</strong>
                    {{-- <p>Air, air, air</p> --}}
                  </div>
                  {{-- <ul class="lm-item-list">
                    <li>#1 24/8 support<i class="icon-cancel"></i></li>
                    <li>#2 10 cookies<i class="icon-ok"></i></li>
                    <li>#3 2 candy<i class="icon-ok"></i></li>
                    <li>#4 air form<i class="icon-cancel"></i></li>
                    <li>#5 air filter<i class="icon-cancel"></i></li>
                    <li>#6 air analytik<i class="icon-cancel"></i></li>
                  </ul> --}}
                  <div class="lm-item-link">
                      <button type="button" id="entry" class="btn checkOrder" data-price="8000" data-title="Entry Level CV Rewrite: ₦8000" data-toggle="modal" data-target="#entryLevelModal">
                        Order Now
                      </button>
                </div>
                </div>
                <div class="lm-item-bottom"></div>
              </div>
            </div>
            
            <div class=" col-sm-4">
              <div class="lm-item-1 lm-item">
                  <div class="lm-item-top"><span class="lm-item-title lm-underline">Professional CV</span>
                    <div class="lm-item-price">₦10,000</div>
              </div>
              <div class="lm-item-body">
                <div class="lm-item-desc">
                  <strong>5 - 7 Years Experience</strong>
                </div>
                {{-- <ul class="lm-item-list">
                  <li>#1 24/8 support<i class="icon-ok"></i></li>
                  <li>#2 10 cookies<i class="icon-ok"></i></li>
                  <li>#3 2 candy<i class="icon-ok"></i></li>
                  <li>#4 air form<i class="icon-ok"></i></li>
                  <li>#5 air filter<i class="icon-cancel"></i></li>
                  <li>#6 air analytik<i class="icon-cancel"></i></li>
                </ul> --}}
                <div class="lm-item-link">
                  <div class="lm-item-link">
                    <a data-toggle="modal" id="professional" data-price="10000" data-title="Proffessional CV Writing: ₦10000" class="btn checkOrder" href="#professionalLevelModal"> Order Now</a>
                  </div>
                </div>
              </div>
              <div class="lm-item-bottom"><span class="lm-underline">Choose now </span>and we meet right away!</div>
            </div>
            </div>
           
            <div class="col-sm-4">
              <div class="lm-item-3 lm-item">
                <div class="lm-item-top"><span class="lm-item-title lm-underline">Executive CV</span>
                  <div class="lm-item-price">₦15,000</div>
                </div>
                <div class="lm-item-body">
                  <div class="lm-item-desc">
                    <strong>8 Years Experience and Above</strong>
                  </div>
                  {{-- <ul class="lm-item-list">
                    <li>#1 24/8 support<i class="icon-ok"></i></li>
                    <li>#2 10 cookies<i class="icon-ok"></i></li>
                    <li>#3 2 candy<i class="icon-ok"></i></li>
                    <li>#4 air form<i class="icon-ok"></i></li>
                    <li>#5 air filter<i class="icon-ok"></i></li>
                    <li>#6 air analytik<i class="icon-ok"></i></li>
                  </ul> --}}
                  <div class="lm-item-link">
                    <div class="lm-item-link">
                      <a data-toggle="modal" id="executive" data-price="15000" data-title="Executive CV Writing: ₦15000" class="btn checkOrder" href="#executiveLevelModal"> Order Now</a>
                    </div>
                    </div>
                </div>
                <div class="lm-item-bottom"></div>
              </div>
            </div>

        </div>
      </div>
    </section>

<!-- The entry level  Modal -->
<div class="modal fade" id="entryLevelModal">
  <div class="modal-dialog">
    <div class="modal-content">

        <form action="{{route('cv-checkout')}}" method="post" id="entryForm">
          @csrf    
          <!-- Modal Header -->
              <div class="modal-header">
                <h4 class="modal-title">Entry Level CV</h4>
                <button type="button" class="close" id="close" data-dismiss="modal">&times;</button>
              </div>

              <!-- Modal body -->
              <div class="modal-body">
                <ul class="list-group">
                  <li class="list-group-item">
                    <span class="check">  
                      <input type="checkbox" name="Entry_Level_CV_Rewrite" data-selected="Entry Level CV Rewrite: ₦8000"  class="entry-checkbox level" id="entryLevelCheckBox" value="8000"/>
                      <label for="entryLevelCheckBox"class="check-label">
                        CV Rewrite
                      </label>
                    </span>
                     <span class="price-label">₦8000</span>
                  </li>
                  <li class="list-group-item">
                    <span class="check">  
                      <input type="checkbox" name="Cover Letter Writing" data-selected="Cover Letter Writing: ₦5000" class="entry-checkbox" id="entry-cover-letter" value="5000"/><label for="entry-cover-letter"class="check-label">Cover Letter Writing</span> 
                    </span>
                    <span class="price-label">₦5000</span>
                  </li>
                  <li class="list-group-item">
                    <span class="check">  
                      <input type="checkbox" name="Linkedin Profile Writing" data-selected="Linkedin Profile Writing: ₦5000" class="entry-checkbox" id="entry-linkedin-profile" value="5000"/> <label for="entry-linkedin-profile" class="check-label"> LinkedIn Profile Writing</label>
                    </span>
                    <span class="price-label">₦5000</span>
                  </li>
                </ul>
              </div>
              <!-- Modal body -->
              <div class="modal-body total-wrap">
                <div id="entry-price" class="total-price"><p class="total-price-label">Total Price:</p>  ₦<span >8000</span></div>
                <div class="selected_checkboxes"><span ></span> </div>
              </div>

              <!-- Modal footer -->
              <div class="modal-footer">
                <button type="button" id="close" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                <button type="submit"  class="btn btn-primary" >Proceed Order</button>
              </div>
        </form>


    </div>
  </div>
</div>


<!-- The professional level  Modal -->
<div class="modal fade" id="professionalLevelModal">
  <div class="modal-dialog">
    <div class="modal-content">

        <form action="{{route('cv-checkout')}}" method="post" id="professionalForm">
          @csrf    
          <!-- Modal Header -->
              <div class="modal-header">
                <h4 class="modal-title">Professional CV</h4>
                <button type="button" class="close" id="close" data-dismiss="modal">&times;</button>
              </div>

              <!-- Modal body -->
              <div class="modal-body">
                <ul class="list-group">
                  <li class="list-group-item">
                      <span class="check">
                    <input type="checkbox" name="Professional CV Writing" data-selected="Professional CV Writing: ₦10000" class="professional-checkbox level" id="professionalLevelCheckBox" value="10000"/>
                   <label for="entryLevelCheckBox"class="check-label">
                    CV Rewrit
                   </label>
                    </span>
                    <span class="price-label">₦10000</span>
                  </li>
                  <li class="list-group-item">
                      <span class="check">
                    <input type="checkbox" name="Cover Letter Writing" data-selected="Cover Letter Writing: ₦5000" class="professional-checkbox" id="professional-cover-letter" value="5000"/>
                   <label for="entryLevelCheckBox"class="check-label">
                    Cover Letter Writin
                   </label>
                    </span>
                    <span class="price-label">₦5000</span>
                  </li>
                  <li class="list-group-item">
                      <span class="check">
                    <input type="checkbox" name="Linkedin Profile Writing" data-selected="Linkedin Profile Writing: ₦5000" class="professional-checkbox" id="professional-linkedin-profile" value="5000"/>
                   <label for="entryLevelCheckBox"class="check-label">
                    LinkedIn Profile Writing
                   </label>
                    </span>
                    <span class="price-label">₦5000</span>
                  </li>
                </ul>
                <br>
                <br>
              </div>
              <!-- Modal body -->
              <div class="modal-body total-wrap">
                <div id="professional_price"  class="total-price"><p class="total-price-label">Total Price:</p>  ₦<span >8000</span></div>
                <div class="selected_checkboxes"><span ></span> </div>
              </div>

              <!-- Modal footer -->
              <div class="modal-footer">
                <button type="button" id="close" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                <button type="submit"  class="btn btn-primary" >Proceed Order</button>
              </div>
        </form>


    </div>
  </div>
</div>

<!-- The executive level  Modal -->
<div class="modal fade" id="executiveLevelModal">
  <div class="modal-dialog">
    <div class="modal-content">

        <form action="{{route('cv-checkout')}}" method="post" id="executiveForm">
          @csrf    
          <!-- Modal Header -->
              <div class="modal-header">
                <h4 class="modal-title" >Executive CV</h4>
                <button type="button" class="close" id="close" data-dismiss="modal">&times;</button>
              </div>

              <!-- Modal body -->
              <div class="modal-body">
                <div class="modal-body">
                  <ul class="list-group">
                    <li class="list-group-item">
                        <span class="check">
                      <input type="checkbox" name="Executive CV Writing" data-selected="Executive CV Writing: ₦15000" class="executive-checkbox level" id="executiveLevelCheckBox" value="15000"/>
                     <label for="entryLevelCheckBox"class="check-label">
                      CV Rewrite
                     </label>
                      </span>
                      <span class="price-label">₦15000</span>
                    </li>
                    <li class="list-group-item">
                        <span class="check">
                      <input type="checkbox" name="Cover Letter Writing" data-selected="Cover Letter Writing: ₦5000" class="executive-checkbox" id="executive-cover-letter" value="5000"/>
                     <label for="entryLevelCheckBox"class="check-label">
                      Cover Letter Writing
                     </label>
                      </span>
                      <span class="price-label">₦5000</span>
                    </li>
                    <li class="list-group-item">
                        <span class="check">
                      <input type="checkbox" name="Linkedin Profile Writing" data-selected="Linkedin Profile Writing: ₦5000" class="executive-checkbox" id="executive-linkedin-profile" value="5000"/>
                     <label for="entryLevelCheckBox"class="check-label">
                      LinkedIn Profile Writing
                     </label>
                      </span>
                      <span class="price-label">₦5000</span>
                    </li>
                  </ul>
                <br>
                <br>
              </div>
              <!-- Modal body -->
              <div class="modal-body total-wrap">
                <div id="executive_price" class="total-price"><p class="total-price-label">Total Price:</p>  ₦<span >8000</span></div>
                <div class="selected_checkboxes"><span ></span> </div>
                </div>

              <!-- Modal footer -->
              <div class="modal-footer">
                <button type="button" id="close" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                <button type="submit"  class="btn btn-primary" >Proceed Order</button>
              </div>
        </form>


    </div>
  </div>
</div>

  @endsection

  @push('cv-js')
  <script>
(function() {
  $(document).ready(function() {
    var arrItems;
    arrItems = $('.lm-item');
    return arrItems.hover(function() {
      return arrItems.addClass('blur');
    }, function() {
      return arrItems.removeClass('blur');
    });
  });

}).call(this);

// $(document).on('click','.checkOrder',function(){
//   var title = $(this).data('title');
//     var level_price = $(this).data('price');
//       $(".modal-body #showPrice").val(level_price);
//     $(".modal-body #myCheckBox .checkbox").val(level_pric);
//   $(".modal-body .label").val(title);
//   $("#myCheckBox").prop("checked", true); 
// });


// $(document).on("click", ".checkOrder", function () {
//      var level_price = $(this).data('price');
//      $(".modal-body #showPrice").val(level_price);
// });

$(document).on('click','.checkOrder',function(){
  var plan_title = $(this).data('title');//collect attribute of data-selected
  var price = $(this).data('price');//collect attribute of data-price
  // $(".modal-body .label").val(title);
  $("#entry-price span").text(price); // load price tag for entry-price
  $("#professional_price span").text(price); // load price tag for professional_price
  $("#executive_price span").text(price); // load price tag for executive_price
  $(".selected_checkboxes span").text(plan_title);
  $(".level").prop("checked", true); //check the cv rewrite checkbox
});

// $(document).on('click','#professional',function(){
//   $("#myProfessionalCheckBox").prop("checked", true); 
// });
// $(document).on('click','#executive',function(){
//   $("#myExecutiveCheckBox").prop("checked", true); 
// });

$(document).on('click','#close',function(){
  // $("#entryLevelCheckBox").prop("checked", false); 
  // $("#executiveLevelCheckBox").prop("checked", false); 
  // $("#professionalLevelCheckBox").prop("checked", false); 
  $("#entry-cover-letter").prop("checked", false); 
  $("#entry-linkedin-profile").prop("checked", false); 
  $("#professional-cover-letter").prop("checked", false); 
  $("#professional-linkedin-profile").prop("checked", false); 
  $("#executive-cover-letter").prop("checked", false); 
  $("#executive-linkedin-profile").prop("checked", false); 
  // $(".selected_checkboxes").text('');
});


$("#entryForm").change(function() {//#form_calc could as well be the classes of the cheeckboxes .checkbox
 var entryPrice   = 0;
  var  values   = [];
  var arr = [];
// $.each($("input[name='entry']:checked"), function(){
  $('.entry-checkbox').each(function() {
    if( $(this).is(':checked') ) {
      values.push($(this).val());
      arr.push($(this).data('selected'));
      entryPrice += parseInt($(this).val());
        }
    });
  $("#entry-price span").text(entryPrice); 
  $(".selected_checkboxes span").text(arr.join(", ")); 
});

$("#professionalForm").change(function() {//#form_calc could as well be the classes of the cheeckboxes .checkbox
 var professionalPrice    = 0;
  var  values   = [];
  var arr = [];
// $.each($("input[name='professional']:checked"), function(){
  $('.professional-checkbox').each(function() {
    
    if( $(this).is(':checked') ) {
      values.push($(this).val());
      arr.push($(this).data('selected'));
      professionalPrice  += parseInt($(this).val());
        }
    });
  $("#professional_price span").text(professionalPrice ); 
  $(".selected_checkboxes span").text(arr.join(", ")); 
});


$("#executiveForm").change(function() {//#form_calc could as well be the classes of the cheeckboxes .checkbox
 var executivePrice    = 0;
  var  values   = [];
  var arr = [];
// $.each($("input[name='executive']:checked"), function(){
  $('.executive-checkbox').each(function() {
    if( $(this).is(':checked') ) {
      values.push($(this).val());
      arr.push($(this).data('selected'));
      executivePrice  += parseInt($(this).val());
        }
    });
  $("#executive_price span").text(executivePrice ); 
  $(".selected_checkboxes span").text(arr.join(", ")); 
});



// $("#entryForm").change(function() {//#form_calc could as well be the classes of the cheeckboxes .checkbox
//  var entryPrice   = 0;
//   var  values       = [];
//   $('input[type=checkbox]').each(function() {
//     if( $(this).is(':checked') ) {
//       values.push($(this).val());
//       entryPrice += parseInt($(this).val());
//         }
//     });
//   $("#price span").text(entryPrice); 
// });

// $('.entry-checkbox').on('click',function(){
//  var entryPrice   = 0;
//   var  values       = [];
//   $('.entry-checkbox:checked').each(function(){//once a checkbox(having the classname passed to it) is checked, add it to the filter array
//      value.push($(this).val());//add it
//      entryPrice += parseInt($(this).val());
//    })
//    $("#price span").text(entryPrice); 
//  });


// $("#professionalForm").change(function() {//#form_calc could as well be the classes of the cheeckboxes .checkbox
//  var professionalPrice   = 0;
//   var  values       = [];
//   $('input[type=checkbox]').each(function() {
//     if( $(this).is(':checked') ) {
//       values.push($(this).val());
//       professionalPrice += parseInt($(this).val());
//         }
//     });
//   $("#price span").text(professionalPrice); 
// });

// $("#executiveForm").change(function() {//#form_calc could as well be the classes of the cheeckboxes .checkbox
//  var executivePrice   = 0;
//   var  values     = [];
//   $('input[type=checkbox]').each(function() {
//     if( $(this).is(':checked') ) {
//       values.push($(this).val());
//       executivePrice += parseInt($(this).val());
//         }
//     });
//   $("#price span").text(executivePrice); 
// });
//# sourceMappingURL=data:application/json;base64,eyJ2ZXJzaW9uIjozLCJmaWxlIjoiIiwic291cmNlUm9vdCI6IiIsInNvdXJjZXMiOlsiPGFub255bW91cz4iXSwibmFtZXMiOltdLCJtYXBwaW5ncyI6IkFBQUE7RUFBQSxDQUFBLENBQUUsUUFBRixDQUFXLENBQUMsS0FBWixDQUFrQixRQUFBLENBQUEsQ0FBQTtBQUNsQixRQUFBO0lBQUMsUUFBQSxHQUFXLENBQUEsQ0FBRSxVQUFGO1dBQ1gsUUFBUSxDQUFDLEtBQVQsQ0FBZ0IsUUFBQSxDQUFBLENBQUE7YUFDZixRQUFRLENBQUMsUUFBVCxDQUFrQixNQUFsQjtJQURlLENBQWhCLEVBRUMsUUFBQSxDQUFBLENBQUE7YUFDQSxRQUFRLENBQUMsV0FBVCxDQUFxQixNQUFyQjtJQURBLENBRkQ7RUFGaUIsQ0FBbEI7QUFBQSIsInNvdXJjZXNDb250ZW50IjpbIiQoZG9jdW1lbnQpLnJlYWR5ICgpLT5cblx0YXJySXRlbXMgPSAkKCcubG0taXRlbScpXG5cdGFyckl0ZW1zLmhvdmVyKCAtPlxuXHRcdGFyckl0ZW1zLmFkZENsYXNzKCdibHVyJylcblx0LC0+XG5cdFx0YXJySXRlbXMucmVtb3ZlQ2xhc3MoJ2JsdXInKVxuXHQpIl19
//# sourceURL=coffeescript
  </script>

  @endpush

