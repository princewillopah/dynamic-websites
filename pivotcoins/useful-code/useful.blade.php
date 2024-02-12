
========================our plan==========================
              <div class="col-md-12">
                    <div class="head">
                        <h2>Our Plans</h2>

                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card">
                        <div class="card-inner">
                            <h3 class="title">Silver</h3>
                            <div class="bar">
                                <div class="emptybar"></div>
                                <div class="filledbar"></div>
                            </div>

                            <h2 class="percent">3%</h2>

                            <table class="table">
                                <tbody>
                                  <tr>
                                    <td>Weekly interest: </td>
                                    <td>3%</td>
                                  </tr>
                                  <tr>
                                    <td>Minimal investment:</td>
                                    <td>$1000</td>
                                  </tr>
                                  <tr>
                                    <td>Maximal investment:</td>
                                    <td>$5000</td>
                                  </tr>
                                  <tr>
                                    <td>Investment term:</td>
                                    <td>Forever</td>
                                  </tr>
                                  <tr>
                                    <td>Payment Days:</td>
                                    <td>Weekends</td>
                                  </tr>
                                </tbody>
                              </table>
                        </div>
                        <hr>
                        <div class="card-footer">
                        <a href="{{route('register')}}">Sign Up</a>
                        </div>

                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-inner">
                            <h3 class="title">Gold</h3>
                            <div class="bar">
                                <div class="emptybar"></div>
                                <div class="filledbar"></div>
                            </div>
                            <h2 class="percent">4%</h2>

                            <table class="table">
                                <tbody>
                                  <tr>
                                    <td>Weekly interest: </td>
                                    <td>4%</td>
                                  </tr>
                                  <tr>
                                    <td>Minimal investment:</td>
                                    <td>$6000</td>
                                  </tr>
                                  <tr>
                                    <td>Maximal investment:</td>
                                    <td>$19000</td>
                                  </tr>
                                  <tr>
                                    <td>Investment term:</td>
                                    <td>Forever</td>
                                  </tr>
                                  <tr>
                                    <td>Payment Days:</td>
                                    <td>Weekends</td>
                                  </tr>
                                </tbody>
                              </table>
                        </div>
                        <hr>
                        <div class="card-footer">
                            <a href="{{route('register')}}">Sign Up</a>
                        </div>

                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-inner">
                            <h3 class="title">Diamond</h3>
                            <div class="bar">
                                <div class="emptybar"></div>
                                <div class="filledbar"></div>
                            </div>
                            <h2 class="percent">5%</h2>

                            <table class="table">
                                <tbody>
                                  <tr>
                                    <td>Weekly interest: </td>
                                    <td>5%</td>
                                  </tr>
                                  <tr>
                                    <td>Minimal investment:</td>
                                    <td>$20,000</td>
                                  </tr>
                                  <tr>
                                    <td>Maximal investment:</td>
                                    <td>No Limit</td>
                                  </tr>
                                  <tr>
                                    <td>Investment term:</td>
                                    <td>Forever</td>
                                  </tr>
                                  <tr>
                                    <td>Payment Days:</td>
                                    <td>Weekends</td>
                                  </tr>
                                </tbody>
                              </table>
                        </div>
                        <hr>
                        <div class="card-footer">
                            <a href="{{route('register')}}">Sign Up</a>
                        </div>

                    </div>
                </div>
========================our plan css ==========================
<style media="screen">

// background: $color-2;
// .head{
//   h1{color: rgba(170, 170, 170, 0.5);}
// }

//   .card {
//     width: 85%;
//     margin: auto;
//     background-color: $color-1;
//     border-radius: 10px;
//
//     transition: 0.4s ease-out;
//     .card-inner{
//       padding: 20px 15px 0 15PX;//mine
//       .title {
//         text-align: center;
//         color: rgba(170, 170, 170, .5);
//         font-weight: 800;
//         line-height: 21px;
//         font-size: 30px;
//         margin-bottom: 4px;
//         transition: 0.6s ease-out;
//       }
//       .percent{font-size: 100px;color: $color-6;text-align: center;margin-top: 30px;margin-bottom: 30px;transition: 0.6s ease-out;}
//       .percent-limit{color: #aaa; text-align: center}
//       .invest{font-size: 25px;color: rgba(255,255,255,.5);font-weight: 700;padding-top: 20px;transition: 0.6s ease-out; text-align: center}
//       .table{ margin-bottom:0;
//          td{
//           padding: 0.40rem;
//           border-top: 1px solid rgba(255,255,255,.1);
//           color:#aaa;
//           &:last-child{text-align:right;}
//         }
//       }
//     }//card-inner
//     hr{width: 80%; background:#2e3033; height: 1px; border-radius: 50%; margin: 0 auto;transition: 0.6s ease-out;  }
//     .card-footer{
//       padding: 10px 20px;
//       text-align: center;
//       background: $color-1;
//       transition: 0.6s ease-out;
//       //border-top: 1px solid #2e3033;
//
//       a{color: #aaa; text-decoration: none;font-weight: 600; font-size: 20px;}
//     }
//     .bar {
//       position: absolute;
//       top: 60px;
//       left: 15px;
//       height: 5px;
//       width: 90%;
//       .emptybar {
//         background-color: #2e3033;
//         width: 100%;
//         height: 100%;
//       }
//       .filledbar {
//         position: absolute;
//         top: 0px;
//         z-index: 3;
//         width: 0px;
//         height: 100%;
//         background: rgb(0,154,217);
//         background: linear-gradient(90deg, rgba(255,255,255,1) 0%, rgba(255,255,255,.5) 65%, rgb(85, 85, 85) 85% ,rgb(46, 48, 51) 100%);
//         transition: 0.6s ease-out;
//       }
//     }
//     &:hover {
//       transform: translateY(-2px);
//       transition: 0.4s ease-out;
//       .title {color: rgba(170, 170, 170, 1);transition: 0.6s ease-out;}
//       .invest{color: rgba(255,255,255,.7);transition: 0.6s ease-out;}
//       .percent{color: $color-7;transition: 0.6s ease-out;}
//       hr{width: 100%; background:rgba(170, 170, 170, .7); transition: 0.6s ease-out; border-radius: 0  }
//       .filledbar {
//         width: 90%;
//         transition: 0.4s ease-out;
//       }//.card:hover .filledbar
//       .card-footer{background: $color-2;transition: 0.6s ease-out;
//         a{color:$color-6; transition: 0.6s ease-out; }
//       }
//     }
//   // }//.card
// }

</style>
