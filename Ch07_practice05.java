public class Ch07_practice05 {
    public static void main(String[] args) {
        int i ,j ,sum=0;
        
        int sale[][]={{32,35,26,30},{34,30,33,31}};
        for(i=0;i< sale.length;i++){
            System.out.println("業務員"+(i+1)+"的業務分別為");
            for(j=0;j<sale[i].length;j++){
                System.out.println(sale[i][j]+"");
                sum+=sale[i][j];


            }

        }
        System.out.println("總銷量"+sum+"部車");

    }


    }