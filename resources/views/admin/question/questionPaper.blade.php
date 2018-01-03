<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Question Paper</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{asset('/public/admin/')}}/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="{{asset('/public/admin/')}}/vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{asset('/public/admin/')}}/dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="{{asset('/public/admin/')}}/vendor/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="{{asset('/public/admin/')}}/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="icon" href="{{asset('/public/admin/images/educationIcon.png')}}">
    <script src="{{asset('/public/admin/tinymce/js/tinymce/tinymce.min.js')}}"></script>
    <script>tinymce.init({ selector:'textarea' });</script>

</head>

<body style="width:80%,margin-left:10%">
<style>
    hr{
        width: 80%;
        height: 1px;
        border-top: 2px solid black;
    }
</style>

    <div style="text-align:center">
    <h3 class="text-center" style="color:black;">{{$institute}}</h3>
    <h4 class="text-center" style="color:black;">{{$examName}} | {{$semester}}</h4>
    <h4 class="text-center" style="color:black;"><strong>Subject: {{$subject}} , Subject Code: {{$subjectCode}} </strong></h4>
    <p><strong>Exam Date: {{$date}} | Exam Time: {{$time}} | Exam Duration: 2 hours | Total marks: {{$marks}}</strong></p>
    <!-- <h4 class="text-center" style="color:black;">{{$examName}}</h4> -->
        
    
    <hr>
    <span style="margin-left: 940px; border-radius: 5px;border:2px solid black;"><strong style="padding:13px;"><i class="fa fa-arrow-down fa-fw"></i> Marks <i class="fa fa-arrow-down fa-fw"></i></strong></span><br>
    <div style="text-align: left;width: 80%;margin-left: 10%">
    <?php $flag = 0; ?>
    @for($i=0;$i<$marks/10;$i++)
    @if(!isset($questions1[$i]->questionTitle)) <?php $flag = 1; ?>
    @endif
    @if(!isset($questions2[$i]->questionTitle)) <?php $flag = 1; ?>
    @endif
    @if(!isset($questions3[$i]->questionTitle)) <?php $flag = 1; ?>
    @endif
    @if(!isset($questions4[$i]->questionTitle)) <?php $flag = 1; ?>
    @endif
    @endfor

    @if($flag)
        <h1 style="color: red">Not Enough Questions in the Question Bank with these specifications.</h1>
        <h3 style="color: orange">[Try Changing the specifications or update the Question Bank.]</h3>
    @endif

    @for($i=0,$cut=1;$i<$marks/10 && !$flag;$i++,$cut++)
        <strong style="font-size:18px"><?php echo"$cut." ?></strong><br>
        
        <table border="0px" align="center" width="100%" cellpadding="10px" style="margin-left: 25px">
            
            <tr>
               <td style="width:5%"> <p style="margin-left: 25px;font-weight: bold">a)</p> </td>
               <td style="width: 85%">{!! $questions1[$i]->questionTitle!!}</td>
               <td > <p style="margin-left: 25px;font-weight: bold">1</p></td>
            </tr>
            <tr>
               <td style="width:5%"> <p style="margin-left: 25px;font-weight: bold">b)</p> </td>
               <td style="width: 85%">{!! $questions2[$i]->questionTitle!!}</td>
               <td > <p style="margin-left: 25px;font-weight: bold">2</p></td>
            </tr>
            <tr>
               <td style="width:5%"> <p style="margin-left: 25px;font-weight: bold">c)</p> </td>
               <td style="width: 85%">{!! $questions3[$i]->questionTitle!!}</td>
               <td > <p style="margin-left: 25px;font-weight: bold">3</p></td>
            </tr>
            <tr>
               <td style="width:5%"> <p style="margin-left: 25px;font-weight: bold">d)</p> </td>
               <td style="width: 85%">{!! $questions4[$i]->questionTitle!!}</td>
               <td > <p style="margin-left: 25px;font-weight: bold">4</p></td>
            </tr>
            
            
            
        </table>

    @endfor
            
    </div>      
    @if($note!='' && !$flag)
        <div style="width:80%;height:50px;border: 0px solid black;margin-left: 10%;font-style: italic; font-weight: bold;text-align: left;">
        <p style="padding-left: 10px;padding-top: 5px;">[ Note: {!!$note!!} ]</p>
        </div>
        @endif

    <!-- <h1><a href="{{url('/generate/broad-question/')}}"> Go Back</a></h1> -->

</body>

</html>
    