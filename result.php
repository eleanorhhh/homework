<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <title>校務系統</title>
</head>
<body align="center">
    <?php
        
        if(strlen($_GET['number'])==10&&empty($_GET['username'])!=1){
			$t=0;
			$d=0;
			$year=substr($_GET['number'],1,3);
		   $a=substr($_GET['number'],0,1);
			
		   $department=substr($_GET['number'],5,2);
		   $class=substr($_GET['number'],7,1);
		   $id=substr($_GET['number'],8,2);
		   switch($a)
       {
           case 'C':
            $system="大學部";
            break;
            case 'D':
        $system="產學部";
        break;
        case 'F':
            $system="碩士部";
            break;
            case 'I':
                $system="博士部";
                break;    
                default:
                echo "學籍錯誤  ";
                $t=1;
                break;
                
            }
            
            
            if($year>112)
            {
                $t=1;
                echo "學年錯誤  ";
                
            }
            switch ($department) {
                case '51':
                    $department="資訊工程系";
                

                    break;
                case '52':
                    $department="電子工程系";
                    break;
                case '54':
                    $department="電機工程系";
                    break;
                case '41':
                    $department="土木工程系";
                    break;
                    
                
                default:
                    $t=1;
                    echo "系所錯誤  ";
                    break;
            }
            switch($class)
            {
                case '1':
                    $class="甲";
                    break;
                    case '2':
                        $class="乙";
                        break;
                        default:
                        $t=1;
                        echo "班級錯誤  ";
            }
       

            if ($t==0)
            {
            echo $_GET['username']." 同學你好，你的入學年度為 $year ，就讀 $system $department $class 班，座號為 $id 號";
                }
        
            else 
            {
                
               echo "<a href='index.php'> <button>重填</button></a>";
               
                
                
            }
        }
        else
        {
            echo "姓名錯誤或學號字數錯誤";
            echo "<a href='index.php'> <button>重填</button></a>";


        }
              
                    
   ?> 
    
</body>
</html>