<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Question Paper</title>


</head>

<body style="width:90%,margin-left:10%;font-size: 12px">






<style>
    hr{
        width: 100%;
        height: 1px;
        border-top: 1px solid black;
    }
</style>

    <div style="text-align:center">
    <h3 class="text-center" style="color:black;"><?php echo"$data[institute]" ?></h3>
    <h4 class="text-center" style="color:black;"><?php echo"$data[examName]" ?> | <?php echo"$data[semester]" ?></h4>
    <h4 class="text-center" style="color:black;"><strong> Subject: <?php echo"$data[subject]" ?> , Subject Code: <?php echo"$data[subjectCode]" ?> </strong></h4>
    <p><strong> Exam Date: <?php echo"$data[date]" ?> | Exam Time: <?php echo"$data[time]" ?> | Exam Duration: 2 hours | Total marks: <?php echo"$data[marks]" ?> 
    </strong> </p>
    
        
    
    <hr>
    

        
        <table border="0px" align="center" width="100%" cellpadding="10px" style="margin-left: 25px;">
        <?php 
            $cut=1;
        ?>
            @for($i=0;$i<$data['marks']/10;$i++)
            <>
            <tr>
               <td style="width:5%"> <p style="margin-left: 25px;font-weight: bold;border: 2px solid;padding: 5px;border-radius: 0px ;"><?php 
               		
               		echo "$cut.";
               		$cut++;
               ?></p> </td>
               
            </tr>
            <tr>
               <td style="width:5%"> <p style="margin-left: 25px;font-weight: bold"> a)</p> </td>
               <td style="width: 85%">{!! $questions1[$i]->questionTitle!!}</td>
               <td > <p style="margin-left: 0px;font-weight: bold">1</p></td>
            </tr>
            <tr>
               <td style="width:5%"> <p style="margin-left: 25px;font-weight: bold"> b)</p> </td>
               <td style="width: 85%">{!! $questions2[$i]->questionTitle!!}</td>
               <td > <p style="margin-left: 0px;font-weight: bold">2</p></td>
            </tr>
            <tr>
               <td style="width:5%"> <p style="margin-left: 25px;font-weight: bold"> c)</p> </td>
               <td style="width: 85%;	">{!! $questions3[$i]->questionTitle!!}</td>
               <td > <p style="margin-left: 0px;font-weight: bold">3</p></td>
            </tr>
            <tr>
               <td style="width:5%"> <p style="margin-left: 25px;font-weight: bold"> d)</p> </td>
               <td style="width: 85%">{!! $questions4[$i]->questionTitle!!}</td>
               <td > <p style="margin-left: 0px;font-weight: bold">4</p></td>
            </tr>
            
            
                @endfor
        </table>



</body>

</html>
    