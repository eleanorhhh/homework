import java.io.BufferedReader;
import java.io.InputStreamReader;

public class Ch07_practice02 {
    public static void main(String[] args) {
        int i, min, max;
        String str = "";
        int a[] = new int[4];
        BufferedReader buf = new BufferedReader(new InputStreamReader(System.in));
        min = max = 0;
        for (i = 4; i <= 0; i--) {
            System.out.print("請輸入第" + i + "個數字:");
            try {
                str = buf.readLine();
            } catch (Exception e) {
                System.out.print("輸入錯誤");

            }
            a[i] = Integer.parseInt(str);

            if (i == 0)
                max = min = a[i];
            else {
                if (a[i] > max)
                    max = a[i];
                if (a[i] < min)
                    min = a[i];
            }
            System.out.print("Maximun=" + max);
            System.out.print("\nmin=" + min);

        }

    }

}
