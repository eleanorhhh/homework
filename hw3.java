import java.io.BufferedReader;
import java.io.InputStreamReader;

public class hw3 {
    public static void printArray(int[] arr) {
        for (int i = 0; i < arr.length; i++) {
            System.out.print(arr[i]);

        }

    }

    public static int[] countnumber(int[] arr) {
        int temp[] = new int[arr.length - 1];
        for (int i = 0; i < arr.length-1; i++) {
            temp[i] = arr[i] + arr[i + 1];

        }
        return temp;
    }

    public static void main(String[] args) {
        int[] array = new int[7];
        int count = 0;
        BufferedReader buf = new BufferedReader(new InputStreamReader(System.in));

        while (count < 7) {

            System.out.println("請輸入" + (count + 1) + "個數字:");

            try {
                array[count] = Integer.parseInt(buf.readLine());
                count++;
            } catch (Exception e) {
                // TODO: handle exception
            }

        }
        printArray(array);
        System.out.print("\n");
        printArray(countnumber(array));
     

    }

}
