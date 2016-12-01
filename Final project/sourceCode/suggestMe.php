<!DOCTYPE html>
<html>
<body>
<?php

exec('python svm.py GOOG',$var_name1);
echo "Google(GOOG) - ".$var_name1[0]."<br>";
exec('python svm.py YHOO',$var_name2);
echo "Yahoo(YHOO) - ".$var_name2[0]."<br>";
exec('python svm.py MSFT',$var_name3);
echo "Microsoft(MSFT) - ".$var_name3[0]."<br>";
exec('python svm.py INTC',$var_name4);
echo "Intel Corp.(INTC) - ".$var_name4[0]."<br>";
exec('python svm.py AAPL',$var_name5);
echo "Apple(AAPL) - ".$var_name5[0]."<br>";
exec('python svm.py FB',$var_name6);
echo "Facebook(FB) - ".$var_name6[0]."<br>";
exec('python svm.py CSCO',$var_name7);
echo "Cisco(CSCO) - ".$var_name7[0]."<br>";
exec('python svm.py ERIC',$var_name8);
echo "Ericsson(ERIC) - ".$var_name8[0]."<br>";
exec('python svm.py BAC',$var_name9);
echo "Bank of America(BAC) - ".$var_name9[0]."<br>";
exec('python svm.py C',$var_name10);
echo "Citi(C) - ".$var_name10[0]."<br>";


?>

</body>
</html>