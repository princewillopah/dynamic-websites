@extends('layouts.member')

@section('title')
Dashboard
@endsection
@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
           <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Account Overview</h1>
                </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('home')}}">Dashboard</a></li>
                   <!--      <li class="breadcrumb-item"><a href="">All Events</a></li>
                        <li class="breadcrumb-item active">Create New</li> -->
                        {{-- <li class="nav-item d-none d-sm-inline-block">
                            <a href="#" class="nav-link">
                              <div class="rate">current location: {{$location}}</div>
                            </a>
                          </li> --}}
                        </ol>
                    </div>
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
     <!-- Main content -->
     <section class="content">
        <div class="container-fluid">
          <!-- Small boxes (Stat box) -->
          <div class="row">
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-info">
                <div class="inner">
               {{-- <!-- <h3>${{$balance->balance}}</h3> --> --}}
                {{--   <h3>${{$total_balance + (!empty($active_deposit->plan)?!$active_deposit->plan: 0)}}</h3> --}}
                   <h3>${{ !empty($active_deposit->plan)?!$active_deposit->plan+$total_balance: '0.00'}}</h3>
                  <p>ACCOUNT BALANCE</p>
                </div>
                <div class="icon">
                 
                  <i class="fa fa-arrow-circle-right"></i>
                </div>
                <p class="small-box-footer"> &nbsp;&nbsp;&nbsp;</p>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-info">
                <div class="inner">
                    <h3>${{$total_balance==0?'0.00':$total_balance}}</h3> 
                    <p>TOTAL DEPOSIT</p>
                </div>
                <div class="icon">
                  {{-- <i class="ion ion-stats-bars"></i> --}}
                  <i class="fa fa-arrow-circle-right"></i>
                </div>
                <p href="#" class="small-box-footer">&nbsp;&nbsp;&nbsp;</p>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-info">
                <div class="inner">
                  <h3>${{!empty($active_deposit->deposit_amount)?$active_deposit->deposit_amount:'0.00'}}</h3>
                    <p>ACTIVE DEPOSIT</p>
                </div>
                <div class="icon">
                  {{-- <i class="ion ion-person-add"></i> --}}
                  <i class="fa fa-arrow-circle-right"></i>

                </div>
                <p href="" class="small-box-footer">
                {{--   @if($active_deposit->plan == 5)
                     Plan choosen: Diamond(5%)
                  @elseif($active_deposit->plan == 4)
                       Plan choosen: Diamond(4%)
                  @elseif($active_deposit->plan==3)
                      Plan choosen: Diamond(3%)
                  @elseif($active_deposit->plan==0)
                      Plan choosen: N/A
                  @elseif(empty($active_deposit->plan))
                      Plan choosen: N/A
                  @endif --}}
                    @if(optional($active_deposit)->plan == 5)
                     Plan choosen: Diamond(5%)
                  @elseif(optional($active_deposit)->plan == 4)
                       Plan choosen: Diamond(4%)
                  @elseif(optional($active_deposit)->plan==3)
                      Plan choosen: Diamond(3%)
                  @elseif(optional($active_deposit)->plan==0)
                      Plan choosen: N/A
                  @elseif(optional($active_deposit)->plan))
                      Plan choosen: N/A
                  @endif
                </p>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-info">
                <div class="inner">
                    <h3>
                      ${{!empty($active_deposit->returns)?$active_deposit->returns:'0.00'}}
                    </h3>
                    <p>RETURNS</p>
                </div>
                <div class="icon">
                  {{-- <i class="ion ion-pie-graph"></i> --}}
                  <i class="fa fa-arrow-circle-right"></i>
                </div>
                <p href="" class="small-box-footer">
                   {{-- Rate{{$active_deposit->plan==0?': N/A':' based on '.$active_deposit->plan.'%'}} --}}
                  Rate{{(!empty($active_deposit->plan)?$active_deposit->plan: 0)==0?': N/A':' based on '.(!empty($active_deposit->plan)?$active_deposit->plan: 0).'%'}}
                </p>
              </div>
            </div>
            <!-- ./col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </section>
      <!-- /.content -->

        <!-- ==================================================== -->
    <!-- COUR PLANS -->
    <!-- ==================================================== -->
    <section id="investment-plans" class="sections-white">
        <div class="container">
            <div class="row">
            <div class="col-md-12">
                <div class="head">
                    <h2>See our investment plans</h2>
                    
                </div>
            </div>
                <div class="col-md-12">
                    <div class="investment_plan_tab">
                            <div class="tabs">
                                    <input type="radio" name="tabs" id="tabone" checked="checked">
                                    <label for="tabone">Silver Plan</label>
                                    <div class="tab">
                                     <div class="row">
                                         <div class="col-md-4">
                                           {{-- <h4>Silver Plan</h4> --}}
                                           <!-- <img src="img/plans/3.png" alt="" class="img-fluid"> -->
                                           <div class="contain">
                                             <h1>3%</h1>
                                           </div>
                                         </div>
                                         <div class="col-md-8">
                                            <table class="table table-hover">
                                               
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
                                                            <td>Referral Bonus:</td>
                                                            <td>5%</td>
                                                        </tr>
                                                    <tr >
                                                        <td colspan="2">All payouts are made on weekends</td> 
                                                    </tr>
                                                </tbody>
                                              </table>
                                         </div>
                                     </div>
                                    </div>
                                    
                                    <input type="radio" name="tabs" id="tabtwo">
                                    <label for="tabtwo">Gold  Plan</label>
                                    <div class="tab">
                                        <div class="row">
                                                <div class="col-md-4">
                                                    {{-- <h4>Gold Plan</h4> --}}
                                                    <!-- <img src="img/plans/4.png" alt="" class="img-fluid"> -->
                                                    <div class="contain">
                                             <h1>4%</h1>
                                           </div>
                                                </div>
                                                <div class="col-md-8">
                                                    <table class="table table-hover">
                                                        
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
                                                                    <td>Referral Bonus:</td>
                                                                    <td>5%</td>
                                                                </tr>
                                                               <tr >
                                                                <td colspan="2">All payouts are made on weekends</td> 
                                                              </tr>
                                                        </tbody>
                                                        </table>
                                                </div>
                                            </div>
                                   </div>
                                    
                                    <input type="radio" name="tabs" id="tabthree">
                                    <label for="tabthree">Diamond Plan</label>
                                    <div class="tab">
                                            <div class="row">
                                                    <div class="col-md-4">
                                                      {{-- <h4>Diamond Plan</h4> --}}
                                                      <!-- <img src="img/plans/5.png" alt="" class="img-fluid"> -->
                                                      <div class="contain">
                                                       <h1>5%</h1>
                                                     </div>
                                                    </div>
                                                    <div class="col-md-8">
                                                       <table class="table table-hover">
                                                          
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
                                                                    </tr>
                                                                   <tr>
                                                                       <td>Referral Bonus:</td>
                                                                       <td>5%</td>
                                                                   </tr>
                                                               <tr >
                                                                   <td colspan="2">All payouts are made on weekends</td> 
                                                               </tr>
                                                           </tbody>
                                                         </table>
                                                    </div>
                                                </div>
                                    </div>
                                  </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<section>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <a href="{{route('deposit')}}" class="btn">Make Deposit</a> 
      </div>
    </div>
  </div>
</section>


</div>
 
@endsection

@section('style')

<style>
#investment-plans {
    background: transparent;
    padding-top: 100px;
    padding-bottom: 100px;
}
#investment-plans .head h2{color: #aaa; margin-bottom: 35px;
    text-align: center;font-size: 35px; font-weight: 700;
    text-transform: uppercase;
    font-family: 'Tittillium Web', sans-serif;
}
#investment-plans .investment_plan_tab .contain h1{
    font-size: 200px;
    font-weight: 800;
    color: #aaa;
/*     font-family: Helvetica; */
    font-family: 'Titillium Web', sans-serif;
       text-shadow: 0 1px 0 #ccc, 0 2px 0 #c9c9c9, 0 3px 0 #bbb, 0 4px 0 #b9b9b9, 0 5px 0 #aaa, 0 6px 1px rgba(0,0,0,.1), 0 0 5px rgba(0,0,0,.1), 0 1px 3px rgba(0,0,0,.3), 0 3px 5px rgba(0,0,0,.2), 0 5px 10px rgba(0,0,0,.25), 0 10px 10px rgba(0,0,0,.2), 0 20px 20px rgba(0,0,0,.15);
      
    
}
#investment-plans .investment_plan_tab .tabs {
    display: flex;
    flex-wrap: wrap;
    background: transparent;
}
#investment-plans .investment_plan_tab .tabs label {
    order: 1;
    display: block;
    padding: 1rem 3rem;
    margin-right: 0;
    border-right: 1px solid #333;
    cursor: pointer;
/*     background: #eee; */
     background:#131926 ;
    font-weight: 300;
    transition: background ease 0.2s;
    color: #aaa;
    transition: all 0.9s ease;
    font-size: 25px;
}
#investment-plans .investment_plan_tab .tabs label:hover {
    color: teal;
    transition: all 0.9s ease;
}
#investment-plans .investment_plan_tab .tabs .tab {
    order: 99;
    flex-grow: 1;
    width: 100%;
    display: none;
    padding: 0 2rem;
    background: transparent;
}
#investment-plans .investment_plan_tab .table {
    color: #555;
}
#investment-plans .investment_plan_tab .table tr:first-child td {
    border-top: none;
}
#investment-plans .investment_plan_tab .table tr:nth-child(5) td {
    border-bottom: 1px solid #dfe6ec;
}
#investment-plans .investment_plan_tab .table td {
    border-color: #757677;
    padding: 1.2rem 0;
}
#investment-plans .investment_plan_tab .table td:last-child {
    text-align: right;
}
#investment-plans .investment_plan_tab .table tr:last-child td {
    text-align: center;
    width: 100%;
    font-size: 18px;
    color: teal;
}
#investment-plans .investment_plan_tab .tabs input[type="radio"] {
    display: none;
}
#investment-plans .investment_plan_tab .tabs input[type="radio"]:checked + label {
    background: #aaa;
    color: #131926;
    transition: all 0.9s ease;
}
#investment-plans .investment_plan_tab .tabs input[type="radio"]:checked + label + .tab {
    display: block;
}
@media (max-width: 45em) {
    #investment-plans .investment_plan_tab .tabs .tab,
    #investment-plans .investment_plan_tab .tabs label {
        order: initial;
    }
    #investment-plans .investment_plan_tab .tabs label {
        width: 100%;
        margin-right: 0;
        margin-top: 0.1rem;
    }
}

.btn{
    background: teal; 
    color:#fff;
    font-weight: 600;
    padding: 10px 20px;
    border:2px solid teal;
    transition: all .9s ease;
    text-align: center;
    display: block;
    margin: auto;
     width: 20%;
}
.btn:hover{
    background: transparent;
    color: teal;
     border:2px solid #aaa;
    transition: all .9s ease;

}

</style>
  <style>
  .content-header{background: #1e1e2f; border-bottom: 1px solid #888;padding:0 8px;margin-bottom: 30px;}
   .breadcrumb.float-sm-right{margin-top: 15px;}
   .content-header h1{font-size: 50px!important;color: #636b6f!important;font-family: 'Nunito', sans-serif!important;font-weight: 200!important;}

  </style> 

@endsection
