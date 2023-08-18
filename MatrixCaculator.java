import java.io.BufferedReader;
import java.io.InputStreamReader;

public class MatrixCaculator {
    public static void printmatrix(int[][] arr) {
        for (int i = 0; i < arr.length; i++) {
            for (int j = 0; j < arr[0].length; j++) {
                System.out.print(arr[i][j] + "\t");
            }
            System.out.print("\n");
        }
    }

    public static void main(String[] args) {
        int i = 0, j = 0;
        int length;
        BufferedReader buf = new BufferedReader(new InputStreamReader(System.in));
        System.out.println("請輸入幾乘幾矩陣:");
        System.out.println("x值:");
        try {
            i = Integer.parseInt(buf.readLine());

        } catch (Exception e) {
            // TODO: handle exception
        }
        System.out.println("y值:");
        try {
            j = Integer.parseInt(buf.readLine());

        } catch (Exception e) {
            // TODO: handle exception
        }
        System.out.println("輸入" + i + "乘" + j + "矩陣:");
        int arr[][] = new int[i][j];

        length = i * j;
        int temp = length;
        while (temp > 0) {
            int index = length - temp;
            int x = index / j;
            int y = index % j;
            System.out.printf("x:%d y:%d index=%d \n", x, y, index);

            try {
                System.out.printf("Please input %d number\n", index + 1);
                arr[x][y] = Integer.parseInt(buf.readLine());

            } catch (Exception e) {
                // TODO: handle exception
            }
            temp--;
        }
        Matrix mat = new Matrix(i, j, arr);
        arr[0][1] = 8;
        mat.print();
        mat.transpuse();
        mat.print();
    }

}
