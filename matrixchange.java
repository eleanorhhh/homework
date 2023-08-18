import java.io.BufferedReader;
import java.io.InputStreamReader;

public class matrixchange {
    
        public static void printmatrix(int[][] arr) {
            for (int i = 0; i < arr.length; i++) {
                for (int j = 0; j < arr[0].length; j++) {
                    System.out.print(arr[i][j] + "\t");
                }
                System.out.print("\n");
            }
        }

    public static void main(String[] arge) {
        int [][] arr= new int[3][3];


        BufferedReader buf = new BufferedReader(new InputStreamReader(System.in));
        System.out.println("請輸入3*3矩陣的值:");
        int temp=9;
        int length=temp;
        while(temp>9){
            int index=length-temp;
            int x=index/3;
            int y=index%3;
            try {
                System.out.printf("Please input %d number\n", index + 1);
                arr[x][y] = Integer.parseInt(buf.readLine());

            } catch (Exception e) {
                // TODO: handle exception
            }
            temp--;

        }
        printmatrix(arr);
      

    }

}

