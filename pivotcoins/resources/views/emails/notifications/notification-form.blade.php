{{-- @component('mail::message')
# Introduction

The body of your message.

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
 --}}
 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Titillium+Web&display=swap" rel="stylesheet">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<style>
body{background: #eee}
.head{
	background:#00756a;
	padding: 20px;
	color: #fff;
    margin-bottom: 50px
 }

.head .contact-head h2{
    font-size: 35px;
    font-weight:600;
    color:white;
    text-transform: uppercase;
    font-family: 'Titillium Web', sans-serif;
}
.section .cards{width: 80%; margin:auto;}
.section .card-head{
    background: #00756a;
    padding: 14px;
    font-weight: 700;
    color: #fff;font-size:20px;
        border-radius: 5px 5px 0 0
}
.section .card-bodys{padding: 30px;
    box-shadow: 0 2px 15px 0 rgba(0, 0, 0, 0.15);}
td{border-top:1px solid #cac8c8; padding: 10px}
tr:last-child td{border-bottom:1px solid #cac8c8;}
tr:first-child td{border-top: none}
td{ font-family: 'Titillium Web', sans-serif;}
td:first-child{font-weight: 700}

</style>

</head>
<body>
 
 <div class="head">
   <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="contact-header">
            <h2>Deposit Notification</h2>

        </div>
      </div>
    </div>
</div>
 </div>   


<div class="section">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="contact-main">

            <div class="cards">
              <div class="card-head">
                Senders Information
              </div>
               <div class="card-bodys">

                      <table class="table">
                        <tbody>
                          <tr>
                            <td>Name</td>
                            <td>{{$request->name}}</td>
                          </tr>
                          <tr>
                            <td>Email</td>
                            <td>{{$request->email}}</td>
                          </tr>
                          <tr>
                            <td>Message</td>
                            <td>
                            	{{$request->name}} just visited deposit page to make deposit.
                            	just be alert
                            </td>
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


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<!-- <script src="js/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.js"></script> -->
</body>
</html>