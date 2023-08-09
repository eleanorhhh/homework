import java.io.BufferedReader;
import java.io.InputStreamReader;

public class Ch04_switch {
    public static void main(String[] args) {
        double w, h=0;
        int age=0;
        char sex='M';
        BufferedReader buf = new BufferedReader(new InputStreamReader(System.in));

        System.out.println("請問您的性別為何(M/F):");
        try {
            sex = buf.readLine().charAt(0);
            System.out.println("請問您的年齡為何?:");
            age = Integer.parseInt(buf.readLine());
            System.out.println("請問您的身高為何?:");
            h = Integer.parseInt(buf.readLine());
        } catch (Exception e) {
            System.out.println("IO錯誤");
        }
        switch (sex) {

            case 'M':
                if (age > 55) {
                    w = 62 + (h - 164) * 0.6;

                } else if (age > 34) {
                    w = 62 + (h - 167) * 0.6;
                } else
                    w = 62 + (h - 170) * 0.6;
                System.out.println("您的理想體重為" + w + "公斤");
                break;

            case 'F':
                if (age > 55)
                    w = 52 + (h - 152) * 0.5;
                else if (age > 35)
                    w = 52 + (h - 156) * 0.5;
                else
                    w = 52 + (h - 158) * 0.5;
                System.out.println("您的理想體重為" + w + "公斤");
                break;

            default:
                System.out.println("資料輸入錯誤");
                break;
        }
    }

}
